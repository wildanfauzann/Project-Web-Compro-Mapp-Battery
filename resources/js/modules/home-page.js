export function initHomePage() {
	const heroSection = document.getElementById('beranda');
	if (!heroSection) {
		return;
	}

	const heroScrollCopy = heroSection.querySelector('.hero-scroll-copy');
	const heroEmbeddedSection = document.querySelector('.hero-embedded-section');
	const heroEmbeddedVideo = document.querySelector('[data-hero-embedded-video]');
	const heroVideoExpandButton = document.querySelector('[data-hero-video-expand]');
	const heroVideoModal = document.getElementById('hero-video-modal');
	const heroVideoModalPlayer = document.getElementById('hero-video-modal-player');
	const heroVideoModalClose = document.getElementById('hero-video-modal-close');
	const heroStage = heroSection.querySelector('.hero-stage');
	let revealHeroEmbeddedOnInteraction = false;
	const compactViewportQuery = window.matchMedia('(max-width: 768px)');
	const nonDesktopViewportQuery = window.matchMedia('(max-width: 1024px)');

	const playHeroEmbeddedVideo = () => {
		if (!heroEmbeddedVideo) {
			return;
		}

		heroEmbeddedVideo.play().catch(() => {});
	};

	const pauseHeroEmbeddedVideo = () => {
		if (!heroEmbeddedVideo) {
			return;
		}

		heroEmbeddedVideo.pause();
	};

	const openHeroVideoModal = () => {
		if (!heroVideoModal || !heroVideoModalPlayer || !heroEmbeddedVideo) {
			return;
		}

		heroVideoModal.classList.remove('hidden');
		heroVideoModal.classList.add('flex');
		heroVideoModalPlayer.currentTime = heroEmbeddedVideo.currentTime || 0;
		heroVideoModalPlayer.play().catch(() => {});
	};

	const closeHeroVideoModal = () => {
		if (!heroVideoModal || !heroVideoModalPlayer) {
			return;
		}

		heroVideoModalPlayer.pause();
		heroVideoModal.classList.add('hidden');
		heroVideoModal.classList.remove('flex');
	};

	const activateHeroEmbeddedReveal = () => {
		if (revealHeroEmbeddedOnInteraction) {
			return;
		}

		revealHeroEmbeddedOnInteraction = true;
		heroStage?.classList.add('hero-activated');
		playHeroEmbeddedVideo();
		updateHeroScrollLift();
		window.removeEventListener('click', activateHeroEmbeddedReveal);
		window.removeEventListener('touchstart', activateHeroEmbeddedReveal);
		window.removeEventListener('keydown', activateHeroEmbeddedReveal);
	};

	const updateHeroScrollLift = () => {
		if (!heroSection || !heroScrollCopy) {
			return;
		}

		const isCompactViewport = compactViewportQuery.matches;
		const isNonDesktopViewport = nonDesktopViewportQuery.matches;

		if (isNonDesktopViewport) {
			revealHeroEmbeddedOnInteraction = true;
			heroStage?.classList.add('hero-activated');
		}

		const heroTop = heroSection.offsetTop;
		const liftRange = Math.max(window.innerHeight * (isCompactViewport ? 0.48 : 0.65), 1);
		const progress = Math.min(Math.max((window.scrollY - heroTop) / liftRange, 0), 1);

		if (!isNonDesktopViewport && !revealHeroEmbeddedOnInteraction && window.scrollY > (isCompactViewport ? 24 : 4)) {
			activateHeroEmbeddedReveal();
		}

		const baseActivatedLift = revealHeroEmbeddedOnInteraction ? (isCompactViewport ? 8 : 18) : 0;
		const maxLift = isCompactViewport ? 20 : 44;
		heroScrollCopy.style.transform = `translateY(${-1 * (baseActivatedLift + (maxLift * progress))}px)`;

		if (heroEmbeddedSection) {
			const revealThreshold = 0.05;
			const isRevealed = isNonDesktopViewport || revealHeroEmbeddedOnInteraction || progress >= revealThreshold;
			heroEmbeddedSection.classList.toggle('is-revealed', isRevealed);
			if (isRevealed) {
				playHeroEmbeddedVideo();
			} else {
				pauseHeroEmbeddedVideo();
			}
		}
	};

	const articleSlides = Array.from(document.querySelectorAll('.home-article-slide'));
	const articleDots = Array.from(document.querySelectorAll('.home-article-dot'));
	let articleSlideIndex = 0;

	const renderArticleSlide = () => {
		articleSlides.forEach((slide, index) => {
			slide.classList.toggle('is-active', index === articleSlideIndex);
		});

		articleDots.forEach((dot, index) => {
			dot.classList.toggle('is-active', index === articleSlideIndex);
		});
	};

	if (articleSlides.length > 0) {
		renderArticleSlide();

		if (articleSlides.length > 1) {
			setInterval(() => {
				articleSlideIndex = (articleSlideIndex + 1) % articleSlides.length;
				renderArticleSlide();
			}, 3500);
		}
	}

	const logoLoops = Array.from(document.querySelectorAll('[data-logo-loop]'));
	logoLoops.forEach((loop) => {
		const track = loop.querySelector('[data-logo-loop-track]');
		if (!track) {
			return;
		}

		const baseItems = Array.from(track.children);
		if (baseItems.length === 0) {
			return;
		}

		const direction = loop.dataset.direction === 'right' ? 'reverse' : 'normal';
		const speed = Math.max(Number.parseFloat(loop.dataset.speed || '96'), 24);
		const hoverSpeed = Number.parseFloat(loop.dataset.hoverSpeed || '0');

		const clonesFragment = document.createDocumentFragment();
		baseItems.forEach((item) => {
			const clone = item.cloneNode(true);
			clone.setAttribute('aria-hidden', 'true');
			clonesFragment.appendChild(clone);
		});
		track.appendChild(clonesFragment);

		const updateLoopMetrics = () => {
			const scrollDistance = track.scrollWidth / 2;
			const duration = Math.max(scrollDistance / speed, 12);

			track.style.setProperty('--logo-loop-distance', `${scrollDistance}px`);
			track.style.setProperty('--logo-loop-duration', `${duration}s`);
			track.style.setProperty('--logo-loop-direction', direction);
		};

		updateLoopMetrics();
		window.addEventListener('resize', updateLoopMetrics);

		if (hoverSpeed === 0) {
			loop.addEventListener('mouseenter', () => loop.classList.add('is-paused'));
			loop.addEventListener('mouseleave', () => loop.classList.remove('is-paused'));
		}
	});

	if (heroVideoExpandButton) {
		heroVideoExpandButton.addEventListener('click', (event) => {
			event.preventDefault();
			openHeroVideoModal();
		});
	}

	if (heroVideoModal) {
		heroVideoModal.addEventListener('click', (event) => {
			if (event.target === heroVideoModal) {
				closeHeroVideoModal();
			}
		});
	}

	if (heroVideoModalClose) {
		heroVideoModalClose.addEventListener('click', closeHeroVideoModal);
	}

	const contactWidget = document.querySelector('[data-contact-widget]');
	const contactToggle = contactWidget?.querySelector('[data-contact-toggle]');
	const contactPanel = contactWidget?.querySelector('[data-contact-panel]');
	const contactClose = contactWidget?.querySelector('[data-contact-close]');

	const isContactPanelOpen = () => Boolean(contactPanel && !contactPanel.classList.contains('hidden'));

	const openContactPanel = () => {
		if (!contactWidget || !contactPanel || !contactToggle) {
			return;
		}

		contactPanel.classList.remove('hidden');
		requestAnimationFrame(() => {
			contactPanel.classList.add('is-open');
		});
		contactPanel.setAttribute('aria-hidden', 'false');
		contactToggle.setAttribute('aria-expanded', 'true');
		contactWidget.classList.add('is-open');
	};

	const closeContactPanel = () => {
		if (!contactWidget || !contactPanel || !contactToggle) {
			return;
		}

		contactPanel.classList.remove('is-open');
		contactPanel.setAttribute('aria-hidden', 'true');
		contactToggle.setAttribute('aria-expanded', 'false');
		contactWidget.classList.remove('is-open');

		window.setTimeout(() => {
			if (!contactPanel.classList.contains('is-open')) {
				contactPanel.classList.add('hidden');
			}
		}, 180);
	};

	if (contactToggle && contactPanel) {
		contactToggle.addEventListener('click', (event) => {
			event.preventDefault();

			if (isContactPanelOpen()) {
				closeContactPanel();
				return;
			}

			openContactPanel();
		});

		contactClose?.addEventListener('click', (event) => {
			event.preventDefault();
			closeContactPanel();
		});

		document.addEventListener('click', (event) => {
			if (!contactWidget.contains(event.target)) {
				closeContactPanel();
			}
		});
	}

	document.addEventListener('keydown', (event) => {
		if (event.key === 'Escape' && heroVideoModal && !heroVideoModal.classList.contains('hidden')) {
			closeHeroVideoModal();
		}

		if (event.key === 'Escape' && isContactPanelOpen()) {
			closeContactPanel();
		}
	});

	updateHeroScrollLift();
	window.addEventListener('scroll', updateHeroScrollLift, { passive: true });
	window.addEventListener('click', activateHeroEmbeddedReveal, { passive: true });
	window.addEventListener('touchstart', activateHeroEmbeddedReveal, { passive: true });
	window.addEventListener('keydown', activateHeroEmbeddedReveal, { passive: true });

	const faqTriggers = document.querySelectorAll('.faq-trigger');
	faqTriggers.forEach((trigger) => {
		trigger.addEventListener('click', () => {
			const item = trigger.closest('.faq-item');
			const content = item?.querySelector('.faq-content');
			const icon = item?.querySelector('.faq-icon');

			if (!item || !content || !icon) {
				return;
			}

			const isHidden = content.classList.contains('hidden');

			document.querySelectorAll('.faq-item').forEach((faqItem) => {
				faqItem.querySelector('.faq-content')?.classList.add('hidden');
				faqItem.querySelector('.faq-icon')?.classList.remove('rotate-180');
			});

			if (isHidden) {
				content.classList.remove('hidden');
				icon.classList.add('rotate-180');
			}
		});
	});
}
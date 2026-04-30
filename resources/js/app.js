import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
	const applyHeroViewportHeight = () => {
		const root = document.documentElement;
		const navbar = document.querySelector('nav.sticky.top-0');

		if (!root) {
			return;
		}

		if (!navbar) {
			root.style.setProperty('--navbar-height', '0px');
			return;
		}

		root.style.setProperty('--navbar-height', `${navbar.offsetHeight}px`);
	};

	applyHeroViewportHeight();
	window.addEventListener('resize', applyHeroViewportHeight);

	const currentPath = window.location.pathname.replace(/\/+$/, '') || '/';
	const isAboutPage = currentPath === '/tentang';
	if (isAboutPage) {
		const searchParams = new URLSearchParams(window.location.search);
		const hashTarget = window.location.hash ? window.location.hash.slice(1) : '';
		const hasDeepLinkTarget = Boolean(hashTarget) || Boolean(searchParams.get('office'));

		if ('scrollRestoration' in window.history) {
			window.history.scrollRestoration = 'manual';
		}

		if (!hasDeepLinkTarget) {
			window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
			requestAnimationFrame(() => {
				window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
			});
		}

		window.addEventListener('pageshow', () => {
			if (!hasDeepLinkTarget) {
				window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
			}
		});

		if (hasDeepLinkTarget) {
			requestAnimationFrame(() => {
				const targetId = !hashTarget || hashTarget === 'about-office-map' ? 'kantor-kami' : hashTarget;
				const target = document.getElementById(targetId);
				if (!target) {
					return;
				}

				const navbarHeight = navbar?.offsetHeight || 0;
				const sectionTop = target.getBoundingClientRect().top + window.scrollY;
				window.scrollTo({
					top: Math.max(sectionTop - navbarHeight - 12, 0),
					behavior: 'smooth',
				});
			});
		}
	}

	// Dealer Dropdown Toggle
	const dealerToggle = document.getElementById('dealer-toggle');
	const dealerContainer = document.getElementById('dealer-dropdown-container');
	
	if (dealerToggle && dealerContainer) {
		dealerToggle.addEventListener('click', (e) => {
			e.stopPropagation();
			dealerContainer.classList.toggle('open');
			// Close language dropdown if open
			document.getElementById('language-dropdown-container')?.classList.remove('open');
		});
	}

	// Language Dropdown Toggle
	const languageDropdownToggle = document.getElementById('language-dropdown-toggle');
	const languageContainer = document.getElementById('language-dropdown-container');
	
	if (languageDropdownToggle && languageContainer) {
		const languageLabel = document.getElementById('language-label');

		languageDropdownToggle.addEventListener('click', (e) => {
			e.stopPropagation();
			languageContainer.classList.toggle('open');
			// Close dealer dropdown if open
			document.getElementById('dealer-dropdown-container')?.classList.remove('open');
		});

		// Language selection
		const languageButtons = languageContainer.querySelectorAll('[data-lang]');
		languageButtons.forEach(button => {
			button.addEventListener('click', () => {
				const lang = button.dataset.lang;
				if (languageLabel) {
					languageLabel.textContent = lang === 'id' ? 'Bahasa' : 'Language';
				}
				languageContainer.classList.remove('open');
			});
		});
	}

	// Close dropdowns when clicking outside
	document.addEventListener('click', () => {
		dealerContainer?.classList.remove('open');
		languageContainer?.classList.remove('open');
	});

	const navbarMenu = document.getElementById('navbar-menu');
	const navLinks = Array.from(navbarMenu?.querySelectorAll('.navbar-link') || []);
	const navbarIndicator = navbarMenu?.querySelector('.navbar-indicator');
	const navbarElement = document.querySelector('.dynamic-navbar');
	const mobileNavToggle = document.getElementById('mobile-nav-toggle');
	const mobileNavBackdrop = document.getElementById('mobile-nav-backdrop');
	const mobileNavMediaQuery = window.matchMedia('(max-width: 767px)');
	const defaultNavGradient = 'linear-gradient(180deg, #ffffff 0%, #ffffff 100%)';
	const defaultNavGlow = 'rgba(148, 163, 184, 0.16)';
	const scrolledNavGradient = 'linear-gradient(132deg, rgba(8, 28, 76, 0.92) 0%, rgba(22, 70, 156, 0.8) 58%, rgba(53, 138, 255, 0.62) 100%)';
	const scrolledNavGlow = 'rgba(45, 124, 248, 0.34)';
	const sections = navLinks
		.map((link) => link.dataset.section ? document.getElementById(link.dataset.section) : null)
		.filter((section) => section);
	const animatedSections = Array.from(document.querySelectorAll('section.scroll-fade-section'));

	const isNavbarScrolled = () => window.scrollY > 16;

	const updateNavbarScrollState = () => {
		if (!navbarElement) {
			return;
		}

		navbarElement.classList.toggle('is-scrolled', isNavbarScrolled());
	};

	const updateNavbarGradient = (section) => {
		if (!navbarElement) {
			return;
		}

		if (!isNavbarScrolled()) {
			navbarElement.style.setProperty('--nav-gradient', defaultNavGradient);
			navbarElement.style.setProperty('--nav-glow', defaultNavGlow);
			return;
		}

		navbarElement.style.setProperty('--nav-gradient', scrolledNavGradient);
		navbarElement.style.setProperty('--nav-glow', scrolledNavGlow);
	};

	const closeMobileNav = () => {
		navbarElement?.classList.remove('mobile-nav-open');
		document.body.classList.remove('mobile-nav-lock');
		mobileNavToggle?.setAttribute('aria-expanded', 'false');
	};

	const openMobileNav = () => {
		navbarElement?.classList.add('mobile-nav-open');
		mobileNavToggle?.setAttribute('aria-expanded', 'true');
	};

	const getCurrentSection = () => {
		const marker = window.scrollY + window.innerHeight * 0.4;
		let activeSection = animatedSections[0];

		animatedSections.forEach((section) => {
			if (section.offsetTop <= marker) {
				activeSection = section;
			}
		});

		return activeSection;
	};

	const updateActiveNavbar = () => {
		updateNavbarScrollState();

		const marker = window.scrollY + 160;
		let activeLink = navLinks[0];

		sections.forEach((section, idx) => {
			if (section.offsetTop <= marker) {
				activeLink = navLinks[idx];
			}
		});

		navLinks.forEach((link) => {
			link.closest('li')?.querySelector('.navbar-indicator')?.removeAttribute('data-active');
		});

		if (activeLink) {
			activeLink.closest('li')?.querySelector('.navbar-indicator')?.setAttribute('data-active', 'true');
		}

		const currentSection = getCurrentSection();
		updateNavbarGradient(currentSection);
	};

	navLinks.forEach((link) => {
		link.addEventListener('click', (e) => {
			const href = link.getAttribute('href');

			if (!href) {
				return;
			}

			// Only prevent default for hash links (section navigation)
			if (href.startsWith('#') || href.includes('/#')) {
				e.preventDefault();
				if (mobileNavMediaQuery.matches) {
					closeMobileNav();
				}
				const sectionId = href.includes('/#') ? href.split('/#')[1] : href.substring(1);
				const section = document.getElementById(sectionId);
				if (section) {
					window.scrollTo({
						top: section.offsetTop - 80,
						behavior: 'smooth',
					});
				}
				return;
			}

			if (mobileNavMediaQuery.matches) {
				// Keep native anchor navigation for route links and just close drawer.
				closeMobileNav();
			}
		});
	});

	navbarMenu?.addEventListener('click', (event) => {
		const targetLink = event.target instanceof Element ? event.target.closest('a.navbar-link') : null;
		if (!targetLink || !mobileNavMediaQuery.matches) {
			return;
		}

		const href = targetLink.getAttribute('href');
		if (!href) {
			return;
		}

		if (href.startsWith('#') || href.includes('/#')) {
			event.preventDefault();
			closeMobileNav();
			const sectionId = href.includes('/#') ? href.split('/#')[1] : href.substring(1);
			const section = document.getElementById(sectionId);
			if (section) {
				window.scrollTo({
					top: section.offsetTop - 80,
					behavior: 'smooth',
				});
			}
			return;
		}

		event.preventDefault();
		closeMobileNav();
		window.location.assign(href);
	});

	if (mobileNavToggle) {
		mobileNavToggle.addEventListener('click', (event) => {
			event.preventDefault();
			event.stopPropagation();

			if (navbarElement?.classList.contains('mobile-nav-open')) {
				closeMobileNav();
				return;
			}

			openMobileNav();
		});

		mobileNavToggle.addEventListener('touchend', (event) => {
			event.preventDefault();
			event.stopPropagation();

			if (navbarElement?.classList.contains('mobile-nav-open')) {
				closeMobileNav();
				return;
			}

			openMobileNav();
		}, { passive: false });
	}

	mobileNavBackdrop?.addEventListener('click', closeMobileNav);

	window.addEventListener('resize', () => {
		if (!mobileNavMediaQuery.matches) {
			closeMobileNav();
		}
	});

	// Always start with mobile nav closed to avoid stale class state after HMR/refresh.
	closeMobileNav();

	if (navLinks.length > 0 && sections.length > 0) {
		updateActiveNavbar();
		window.addEventListener('scroll', updateActiveNavbar, { passive: true });
	} else {
		updateNavbarScrollState();
		updateNavbarGradient(null);
		window.addEventListener('scroll', () => {
			updateNavbarScrollState();
			updateNavbarGradient(null);
		}, { passive: true });
	}

	if (animatedSections.length > 0) {
		animatedSections.forEach((section) => {
			const contentChildren = section.querySelectorAll('.scroll-fade-content > *');
			contentChildren.forEach((child, index) => {
				child.style.setProperty('--stagger-index', `${index}`);
			});
		});

		const sectionEnterThreshold = 0.22;
		const sectionExitThreshold = 0.08;

		const sectionObserver = new IntersectionObserver(
			(entries) => {
				entries.forEach((entry) => {
					const isCurrentlyInView = entry.target.classList.contains('in-view');

					if (!isCurrentlyInView && entry.intersectionRatio >= sectionEnterThreshold) {
						entry.target.classList.add('in-view');
					} else if (isCurrentlyInView && entry.intersectionRatio <= sectionExitThreshold) {
						entry.target.classList.remove('in-view');
					}
				});
			},
			{ threshold: [0, 0.06, 0.08, 0.14, 0.22, 0.34, 0.5, 0.7] }
		);

		animatedSections.forEach((section) => sectionObserver.observe(section));

		const firstSection = getCurrentSection();
		updateNavbarScrollState();
		updateNavbarGradient(firstSection);
	}

	const heroSection = document.getElementById('beranda');
	const heroScrollCopy = heroSection?.querySelector('.hero-scroll-copy');
	const heroEmbeddedSection = document.querySelector('.hero-embedded-section');
	const heroEmbeddedVideo = document.querySelector('[data-hero-embedded-video]');
	const heroVideoExpandButton = document.querySelector('[data-hero-video-expand]');
	const heroVideoModal = document.getElementById('hero-video-modal');
	const heroVideoModalPlayer = document.getElementById('hero-video-modal-player');
	const heroVideoModalClose = document.getElementById('hero-video-modal-close');
	const heroStage = heroSection?.querySelector('.hero-stage');
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

		// Duplicate once so the marquee can loop seamlessly.
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
		if (event.key === 'Escape' && navbarElement?.classList.contains('mobile-nav-open')) {
			closeMobileNav();
		}

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

	// About Page Slider Setup
	const aboutSliderText = document.getElementById('about-slide-text');
	const aboutSliderImage = document.getElementById('about-slide-image');
	const aboutPrevButton = document.getElementById('about-slide-prev');
	const aboutNextButton = document.getElementById('about-slide-next');
	const aboutHeroCarousel = document.getElementById('about-hero-carousel');
	const aboutMobileMediaQuery = window.matchMedia('(max-width: 767px)');
	const aboutInitialScrollY = window.scrollY;
	const aboutRevealScrollDelta = 14;

	const aboutSlides = [
		{
			text: 'PT. Multidaya Anugrah Perkasa berfokus menghadirkan solusi produk dan layanan industri yang andal untuk menjaga operasional tetap stabil.',
			imageUrl: '/images/hero/hero2.png',
		},
		{
			text: 'Dengan dukungan tim berpengalaman, kami memberikan pendampingan teknis dan layanan yang responsif sesuai kebutuhan lapangan.',
			imageUrl: '/images/layanan/layanan1.png',
		},
		{
			text: 'Komitmen kami adalah menjaga kualitas, transparansi, dan kesinambungan layanan agar menjadi mitra jangka panjang yang dapat dipercaya.',
			imageUrl: '/images/artikel/artikel2.png',
		},
	];

	let aboutSlideIndex = 0;
	let aboutSliderTimer = null;
	let isAboutCarouselRevealed = !aboutHeroCarousel;

	const renderAboutSlide = () => {
		if (!aboutSliderText || !aboutSliderImage) {
			return;
		}

		const slide = aboutSlides[aboutSlideIndex];
		aboutSliderText.textContent = slide.text;
		aboutSliderImage.style.backgroundImage = `url('${slide.imageUrl}')`;
	};

	const revealAboutCarousel = () => {
		if (!aboutHeroCarousel || isAboutCarouselRevealed) {
			return;
		}

		isAboutCarouselRevealed = true;
		aboutHeroCarousel.classList.add('is-revealed');
		window.removeEventListener('click', revealAboutCarousel);
		window.removeEventListener('touchstart', revealAboutCarousel);
		window.removeEventListener('keydown', revealAboutCarousel);
		window.removeEventListener('scroll', maybeRevealAboutCarouselOnScroll);
	};

	const maybeRevealAboutCarouselOnScroll = () => {
		if (Math.abs(window.scrollY - aboutInitialScrollY) > aboutRevealScrollDelta) {
			revealAboutCarousel();
		}
	};

	const startAboutSliderAuto = () => {
		if (aboutSliderTimer || aboutSlides.length < 2) {
			return;
		}

		aboutSliderTimer = setInterval(() => {
			aboutSlideIndex = (aboutSlideIndex + 1) % aboutSlides.length;
			renderAboutSlide();
		}, 4200);
	};

	const restartAboutSliderAuto = () => {
		if (aboutSliderTimer) {
			clearInterval(aboutSliderTimer);
			aboutSliderTimer = null;
		}

		startAboutSliderAuto();
	};

	const setupAboutSlider = () => {
		if (aboutPrevButton && aboutNextButton && aboutSliderText && aboutSliderImage) {
			const handlePrev = () => {
				revealAboutCarousel();
				aboutSlideIndex = (aboutSlideIndex - 1 + aboutSlides.length) % aboutSlides.length;
				renderAboutSlide();
				restartAboutSliderAuto();
			};

			const handleNext = () => {
				revealAboutCarousel();
				aboutSlideIndex = (aboutSlideIndex + 1) % aboutSlides.length;
				renderAboutSlide();
				restartAboutSliderAuto();
			};

			aboutPrevButton.addEventListener('click', handlePrev);
			aboutNextButton.addEventListener('click', handleNext);

			// Mobile navigation buttons
			const aboutPrevMobile = document.getElementById('about-slide-prev-mobile');
			const aboutNextMobile = document.getElementById('about-slide-next-mobile');
			if (aboutPrevMobile) aboutPrevMobile.addEventListener('click', handlePrev);
			if (aboutNextMobile) aboutNextMobile.addEventListener('click', handleNext);

			renderAboutSlide();
			startAboutSliderAuto();

			if (aboutHeroCarousel) {
				if (aboutMobileMediaQuery.matches) {
					revealAboutCarousel();
				}

				window.addEventListener('click', revealAboutCarousel, { passive: true });
				window.addEventListener('touchstart', revealAboutCarousel, { passive: true });
				window.addEventListener('keydown', revealAboutCarousel);
				window.addEventListener('scroll', maybeRevealAboutCarouselOnScroll, { passive: true });
			}
		}
	};

	setupAboutSlider();

	// Navbar hover preview carousel for all menu items
	const navbarPreviewArea = document.getElementById('navbar-preview-area');
	const navbarPreviewPanel = document.getElementById('navbar-preview-panel');
	const navbarPreviewTextNodes = [
		document.getElementById('navbar-preview-text-1'),
		document.getElementById('navbar-preview-text-2'),
		document.getElementById('navbar-preview-text-3'),
	];
	const navbarPreviewImageNodes = [
		document.getElementById('navbar-preview-image-1'),
		document.getElementById('navbar-preview-image-2'),
		document.getElementById('navbar-preview-image-3'),
	];
	const navbarPreviewPrev = document.getElementById('navbar-preview-prev');
	const navbarPreviewNext = document.getElementById('navbar-preview-next');
	const previewNavItems = Array.from(document.querySelectorAll('#navbar-menu .navbar-item[data-preview-key]'));

	const navbarPreviewSlides = {
		beranda: [
			{ text: 'Selamat datang di PT. Multidaya Anugrah Perkasa. Kami menghadirkan solusi terbaik untuk kebutuhan bisnis Anda.', imageUrl: '/images/hero/hero1.png' },
			{ text: 'Didukung tim profesional dan layanan cepat, kami siap menjadi partner yang bisa diandalkan setiap saat.', imageUrl: '/images/hero/hero2.png' },
			{ text: 'Fokus kami adalah kualitas, konsistensi, dan kepuasan pelanggan dalam setiap proses layanan.', imageUrl: '/images/hero/hero3.png' },
			{ text: 'Kami mengutamakan ketepatan waktu pengiriman serta dukungan yang responsif untuk semua kebutuhan klien.', imageUrl: '/images/testimoni/mahle.png' },
			{ text: 'Kolaborasi jangka panjang menjadi fondasi kami untuk menciptakan pertumbuhan bisnis yang berkelanjutan.', imageUrl: '/images/testimoni/sukanda.png' },
		],
		tentang: [
			{ text: 'Mengenal lebih dekat perjalanan perusahaan kami dalam menghadirkan nilai untuk pelanggan.', imageUrl: '/images/hero/hero2.png' },
			{ text: 'Kami tumbuh dengan komitmen integritas, inovasi, dan kolaborasi jangka panjang bersama mitra.', imageUrl: '/images/layanan/layanan1.png' },
			{ text: 'Setiap langkah pengembangan kami berfokus pada layanan yang relevan dengan kebutuhan industri.', imageUrl: '/images/product/battery1.png' },
			{ text: 'Didukung sumber daya manusia berpengalaman, kami memastikan kualitas layanan selalu terjaga.', imageUrl: '/images/product/charger1.png' },
			{ text: 'Budaya kerja adaptif membuat kami siap menjawab tantangan bisnis dari waktu ke waktu.', imageUrl: '/images/product/accesoris.png' },
		],
		produk: [
			{ text: 'Battery, charger, dan accessories dirancang untuk mendukung kebutuhan forklift industri secara optimal.', imageUrl: '/images/product/tractionhawcker.png' },
			{ text: 'Teknologi terbaru dan dukungan teknis responsif untuk membantu operasional bisnis berjalan optimal.', imageUrl: '/images/product/tractionmicrotex.png' },
			{ text: 'Pilihan produk yang lengkap dan fleksibel untuk menyesuaikan kebutuhan proyek Anda.', imageUrl: '/images/product/semitrac.png' },
			{ text: 'Material unggulan dipilih untuk menghasilkan performa terbaik dan usia pakai yang lebih panjang.', imageUrl: '/images/product/chargerhigh.png' },
			{ text: 'Setiap varian produk tersedia dengan dokumentasi teknis agar mudah diintegrasikan di lapangan.', imageUrl: '/images/product/connector.png' },
		],
		layanan: [
			{ text: 'Layanan konsultasi, implementasi, dan purna jual yang dirancang untuk mendukung performa bisnis.', imageUrl: '/images/layanan/layanan1.png' },
			{ text: 'Tim kami siap membantu mulai dari perencanaan hingga pemeliharaan dengan pendekatan profesional.', imageUrl: '/images/product/watertank.png' },
			{ text: 'Layanan yang cepat, tepat, dan terukur agar kebutuhan operasional Anda tetap terjaga.', imageUrl: '/images/product/chargerlow.png' },
			{ text: 'Penjadwalan layanan yang fleksibel memastikan proses bisnis Anda tetap berjalan tanpa hambatan.', imageUrl: '/images/testimoni/kiatananda.png' },
			{ text: 'Monitoring berkala kami lakukan untuk menjaga kualitas hasil dan efisiensi operasional.', imageUrl: '/images/testimoni/wings.png' },
		],
		unduhan: [
			{ text: 'Unduh katalog, brosur, dan informasi produk terbaru untuk membantu pengambilan keputusan Anda.', imageUrl: '/images/hero/hero1.png' },
			{ text: 'Dapatkan dokumen teknis dan materi pendukung yang lengkap dalam satu tempat.', imageUrl: '/images/hero/hero2.png' },
			{ text: 'Akses cepat berbagai file penting perusahaan untuk kebutuhan presentasi dan operasional.', imageUrl: '/images/hero/hero3.png' },
			{ text: 'Semua materi disusun ringkas agar mudah dipahami tim internal maupun kebutuhan klien Anda.', imageUrl: '/images/product/Plug.png' },
			{ text: 'Update berkala pada dokumen membuat informasi yang Anda unduh selalu relevan dan terbaru.', imageUrl: '/images/product/battery1.png' },
		],
	};

	const visiblePreviewCards = 3;
	let activePreviewKey = null;
	let activePreviewIndex = 0;
	let navbarPreviewTimer = null;

	const stopNavbarPreviewAutoSlide = () => {
		if (navbarPreviewTimer) {
			clearInterval(navbarPreviewTimer);
			navbarPreviewTimer = null;
		}
	};

	const renderNavbarPreview = () => {
		if (!activePreviewKey) {
			return;
		}

		const slides = navbarPreviewSlides[activePreviewKey] || [];
		if (slides.length === 0 || navbarPreviewTextNodes.some((node) => !node) || navbarPreviewImageNodes.some((node) => !node)) {
			return;
		}

		for (let i = 0; i < visiblePreviewCards; i += 1) {
			const slide = slides[(activePreviewIndex + i) % slides.length];
			navbarPreviewTextNodes[i].textContent = slide.text;
			navbarPreviewImageNodes[i].src = slide.imageUrl;
		}
	};

	const startNavbarPreviewAutoSlide = () => {
		stopNavbarPreviewAutoSlide();
		if (!activePreviewKey) {
			return;
		}

		navbarPreviewTimer = setInterval(() => {
			const slides = navbarPreviewSlides[activePreviewKey] || [];
			if (slides.length < 2) {
				return;
			}
			activePreviewIndex = (activePreviewIndex + 1) % slides.length;
			renderNavbarPreview();
		}, 3200);
	};

	const showNavbarPreview = (key) => {
		if (!navbarPreviewPanel || !navbarPreviewSlides[key]) {
			return;
		}

		if (key !== activePreviewKey) {
			activePreviewKey = key;
			activePreviewIndex = 0;
		}

		navbarPreviewPanel.classList.add('open');
		navbarPreviewPanel.setAttribute('aria-hidden', 'false');
		renderNavbarPreview();
		startNavbarPreviewAutoSlide();
	};

	const hideNavbarPreview = () => {
		if (!navbarPreviewPanel) {
			return;
		}
		stopNavbarPreviewAutoSlide();
		navbarPreviewPanel.classList.remove('open');
		navbarPreviewPanel.setAttribute('aria-hidden', 'true');
		activePreviewKey = null;
		activePreviewIndex = 0;
	};

	if (navbarPreviewArea && navbarPreviewPanel && navbarPreviewTextNodes.every(Boolean) && navbarPreviewImageNodes.every(Boolean)) {
		previewNavItems.forEach((item) => {
			const previewKey = item.dataset.previewKey;
			if (!previewKey) {
				return;
			}

			item.addEventListener('mouseenter', () => showNavbarPreview(previewKey));
			item.addEventListener('focusin', () => showNavbarPreview(previewKey));
		});

		navbarPreviewArea.addEventListener('mouseleave', () => {
			hideNavbarPreview();
		});

		navbarPreviewArea.addEventListener('focusout', (event) => {
			if (event.relatedTarget && navbarPreviewArea.contains(event.relatedTarget)) {
				return;
			}
			hideNavbarPreview();
		});

		if (navbarPreviewPrev && navbarPreviewNext) {
			navbarPreviewPrev.addEventListener('click', (event) => {
				event.preventDefault();
				if (!activePreviewKey) {
					return;
				}
				const slides = navbarPreviewSlides[activePreviewKey] || [];
				activePreviewIndex = (activePreviewIndex - 1 + slides.length) % slides.length;
				renderNavbarPreview();
				startNavbarPreviewAutoSlide();
			});

			navbarPreviewNext.addEventListener('click', (event) => {
				event.preventDefault();
				if (!activePreviewKey) {
					return;
				}
				const slides = navbarPreviewSlides[activePreviewKey] || [];
				activePreviewIndex = (activePreviewIndex + 1) % slides.length;
				renderNavbarPreview();
				startNavbarPreviewAutoSlide();
			});
		}
	}

	const revealItems = document.querySelectorAll('.reveal-on-scroll');
	if (revealItems.length > 0) {
		const revealObserver = new IntersectionObserver(
			(entries, observer) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						entry.target.classList.add('in-view');
						observer.unobserve(entry.target);
					}
				});
			},
			{ threshold: 0.12 }
		);

		revealItems.forEach((item) => revealObserver.observe(item));
	}
});

export function initAboutPage() {
	if (window.location.pathname.replace(/\/+$/, '') !== '/tentang') {
		return;
	}

	const navbar = document.querySelector('nav.sticky.top-0');
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
}
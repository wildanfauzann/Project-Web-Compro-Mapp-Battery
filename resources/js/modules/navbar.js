export function initNavbarInteractions() {
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

	const dealerToggle = document.getElementById('dealer-toggle');
	const dealerContainer = document.getElementById('dealer-dropdown-container');
	if (dealerToggle && dealerContainer) {
		dealerToggle.addEventListener('click', (event) => {
			event.stopPropagation();
			dealerContainer.classList.toggle('open');
			document.getElementById('language-dropdown-container')?.classList.remove('open');
		});
	}

	const languageDropdownToggle = document.getElementById('language-dropdown-toggle');
	const languageContainer = document.getElementById('language-dropdown-container');
	if (languageDropdownToggle && languageContainer) {
		const languageLabel = document.getElementById('language-label');

		languageDropdownToggle.addEventListener('click', (event) => {
			event.stopPropagation();
			languageContainer.classList.toggle('open');
			document.getElementById('dealer-dropdown-container')?.classList.remove('open');
		});

		const languageButtons = languageContainer.querySelectorAll('[data-lang]');
		languageButtons.forEach((button) => {
			button.addEventListener('click', () => {
				const lang = button.dataset.lang;
				if (languageLabel) {
					languageLabel.textContent = lang === 'id' ? 'Bahasa' : 'Language';
				}
				languageContainer.classList.remove('open');
			});
		});
	}

	document.addEventListener('click', () => {
		dealerContainer?.classList.remove('open');
		languageContainer?.classList.remove('open');
	});

	const navbarMenu = document.getElementById('navbar-menu');
	const navLinks = Array.from(navbarMenu?.querySelectorAll('.navbar-link') || []);
	const navbarElement = document.querySelector('.dynamic-navbar');
	const mobileNavToggle = document.getElementById('mobile-nav-toggle');
	const mobileNavBackdrop = document.getElementById('mobile-nav-backdrop');
	const mobileNavMediaQuery = window.matchMedia('(max-width: 767px)');
	const defaultNavGradient = 'linear-gradient(180deg, #ffffff 0%, #ffffff 100%)';
	const defaultNavGlow = 'rgba(148, 163, 184, 0.16)';
	const scrolledNavGradient = 'linear-gradient(132deg, rgba(8, 28, 76, 0.92) 0%, rgba(22, 70, 156, 0.8) 58%, rgba(53, 138, 255, 0.62) 100%)';
	const scrolledNavGlow = 'rgba(45, 124, 248, 0.34)';
	const sections = navLinks
		.map((link) => (link.dataset.section ? document.getElementById(link.dataset.section) : null))
		.filter((section) => section);
	const animatedSections = Array.from(document.querySelectorAll('section.scroll-fade-section'));

	const isNavbarScrolled = () => window.scrollY > 16;

	const updateNavbarScrollState = () => {
		if (!navbarElement) {
			return;
		}

		navbarElement.classList.toggle('is-scrolled', isNavbarScrolled());
	};

	const updateNavbarGradient = () => {
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

		sections.forEach((section, index) => {
			if (section.offsetTop <= marker) {
				activeLink = navLinks[index];
			}
		});

		navLinks.forEach((link) => {
			link.closest('li')?.querySelector('.navbar-indicator')?.removeAttribute('data-active');
		});

		if (activeLink) {
			activeLink.closest('li')?.querySelector('.navbar-indicator')?.setAttribute('data-active', 'true');
		}

		updateNavbarGradient(getCurrentSection());
	};

	navLinks.forEach((link) => {
		link.addEventListener('click', (event) => {
			const href = link.getAttribute('href');

			if (!href) {
				return;
			}

			if (href.startsWith('#') || href.includes('/#')) {
				event.preventDefault();
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

	closeMobileNav();

	if (navLinks.length > 0 && sections.length > 0) {
		updateActiveNavbar();
		window.addEventListener('scroll', updateActiveNavbar, { passive: true });
	} else {
		updateNavbarScrollState();
		updateNavbarGradient();
		window.addEventListener('scroll', () => {
			updateNavbarScrollState();
			updateNavbarGradient();
		}, { passive: true });
	}

	if (animatedSections.length > 0) {
		animatedSections.forEach((section) => {
			const contentChildren = section.querySelectorAll('.scroll-fade-content > *');
			contentChildren.forEach((child, index) => {
				child.style.setProperty('--stagger-index', `${index}`);
			});
		});

		const sectionObserver = new IntersectionObserver(
			(entries) => {
				entries.forEach((entry) => {
					const isCurrentlyInView = entry.target.classList.contains('in-view');

					if (!isCurrentlyInView && entry.intersectionRatio >= 0.22) {
						entry.target.classList.add('in-view');
					} else if (isCurrentlyInView && entry.intersectionRatio <= 0.08) {
						entry.target.classList.remove('in-view');
					}
				});
			},
			{ threshold: [0, 0.06, 0.08, 0.14, 0.22, 0.34, 0.5, 0.7] }
		);

		animatedSections.forEach((section) => sectionObserver.observe(section));
		updateNavbarScrollState();
		updateNavbarGradient();
	}

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
			{ text: 'Kami tumbuh dengan komitmen integritas, inovasi, dan kolaborasi jangka panjang bersama mitra.', imageUrl: '/images/hero/AfterSalesHero.jpg' },
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
			{ text: 'Layanan konsultasi, implementasi, dan purna jual yang dirancang untuk mendukung performa bisnis.', imageUrl: '/images/hero/AfterSalesHero.jpg' },
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

		for (let index = 0; index < visiblePreviewCards; index += 1) {
			const slide = slides[(activePreviewIndex + index) % slides.length];
			navbarPreviewTextNodes[index].textContent = slide.text;
			navbarPreviewImageNodes[index].src = slide.imageUrl;
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
}
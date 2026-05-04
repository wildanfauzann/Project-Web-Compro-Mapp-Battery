export function initProductDetailPage() {
	const productColumn = document.getElementById('detail-product-column');
	const recommendationsHome = document.getElementById('detail-recommendations-home');
	const recommendationsSlot = document.getElementById('detail-recommendations-slot');
	const mainImage = document.getElementById('detail-main-image');
	const prevButton = document.getElementById('detail-prev');
	const nextButton = document.getElementById('detail-next');
	const thumbs = Array.from(document.querySelectorAll('.detail-thumb'));

	if (!mainImage || thumbs.length === 0) {
		return;
	}

	const gallery = thumbs.map((thumb) => thumb.dataset.image).filter(Boolean);
	let currentIndex = 0;

	const renderImage = () => {
		mainImage.src = gallery[currentIndex];
		thumbs.forEach((thumb, index) => {
			thumb.classList.toggle('border-[#de2d2d]', index === currentIndex);
			thumb.classList.toggle('border-[#d8dde8]', index !== currentIndex);
		});
	};

	prevButton?.addEventListener('click', () => {
		currentIndex = (currentIndex - 1 + gallery.length) % gallery.length;
		renderImage();
	});

	nextButton?.addEventListener('click', () => {
		currentIndex = (currentIndex + 1) % gallery.length;
		renderImage();
	});

	thumbs.forEach((thumb, index) => {
		thumb.addEventListener('click', () => {
			currentIndex = index;
			renderImage();
		});
	});

	const toggleDescription = document.getElementById('toggle-description');
	const fullDescriptionSection = document.getElementById('full-description-section');
	const fullDescriptionTitle = document.getElementById('full-description-title');
	const hideDescription = document.getElementById('hide-description');

	const getNavbarOffset = () => {
		const raw = getComputedStyle(document.documentElement).getPropertyValue('--navbar-height').trim();
		const parsed = Number.parseFloat(raw);
		return Number.isFinite(parsed) ? parsed : 0;
	};

	const scrollToDescriptionTop = () => {
		const anchor = fullDescriptionTitle ?? fullDescriptionSection;
		if (!anchor) {
			return;
		}

		const top = anchor.getBoundingClientRect().top + window.scrollY - getNavbarOffset() - 10;
		window.scrollTo({ top, behavior: 'smooth' });
	};

	const moveRecommendationsToSlot = () => {
		if (recommendationsHome && recommendationsSlot && recommendationsHome.parentElement !== recommendationsSlot) {
			recommendationsSlot.replaceChildren(recommendationsHome);
		}
	};

	const moveRecommendationsHome = () => {
		if (recommendationsHome && productColumn && recommendationsHome.parentElement !== productColumn) {
			productColumn.appendChild(recommendationsHome);
		}
	};

	toggleDescription?.addEventListener('click', () => {
		if (!fullDescriptionSection) {
			return;
		}

		const wasHidden = fullDescriptionSection.classList.contains('hidden');
		fullDescriptionSection.classList.remove('hidden');

		if (wasHidden) {
			fullDescriptionSection.animate(
				[
					{ opacity: 0, transform: 'translateY(12px)' },
					{ opacity: 1, transform: 'translateY(0)' },
				],
				{
					duration: 360,
					easing: 'cubic-bezier(0.22, 1, 0.36, 1)',
				}
			);
		}

		moveRecommendationsToSlot();
		scrollToDescriptionTop();
	});

	hideDescription?.addEventListener('click', () => {
		if (!fullDescriptionSection) {
			return;
		}

		const closeAnimation = fullDescriptionSection.animate(
			[
				{ opacity: 1, transform: 'translateY(0)', clipPath: 'inset(0 0 0 0)' },
				{ opacity: 0, transform: 'translateY(-12px)', clipPath: 'inset(0 0 100% 0)' },
			],
			{
				duration: 340,
				easing: 'cubic-bezier(0.4, 0, 0.2, 1)',
				fill: 'forwards',
			}
		);

		closeAnimation.onfinish = () => {
			moveRecommendationsHome();
			fullDescriptionSection.classList.add('hidden');
			fullDescriptionSection.style.opacity = '';
			fullDescriptionSection.style.transform = '';
			fullDescriptionSection.style.clipPath = '';
			toggleDescription?.scrollIntoView({ behavior: 'smooth', block: 'center' });
		};
	});

	moveRecommendationsHome();
	renderImage();
}
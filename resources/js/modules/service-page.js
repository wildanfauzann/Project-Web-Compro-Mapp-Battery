export function initServicePage() {
	const serviceDetailImage = document.getElementById('service-detail-image');
	const serviceDetailPrev = document.getElementById('service-detail-prev');
	const serviceDetailNext = document.getElementById('service-detail-next');

	if (!serviceDetailImage) {
		return;
	}

	const serviceDetailSlides = [
		{ imageClass: 'bg-white' },
		{ imageClass: 'bg-slate-100' },
		{ imageClass: 'bg-slate-200' },
	];

	let serviceDetailIndex = 0;

	const renderServiceDetailSlide = () => {
		const slide = serviceDetailSlides[serviceDetailIndex];
		serviceDetailImage.classList.remove('bg-white', 'bg-slate-100', 'bg-slate-200');
		serviceDetailImage.classList.add(slide.imageClass);
	};

	if (serviceDetailPrev && serviceDetailNext) {
		serviceDetailPrev.addEventListener('click', () => {
			serviceDetailIndex = (serviceDetailIndex - 1 + serviceDetailSlides.length) % serviceDetailSlides.length;
			renderServiceDetailSlide();
		});

		serviceDetailNext.addEventListener('click', () => {
			serviceDetailIndex = (serviceDetailIndex + 1) % serviceDetailSlides.length;
			renderServiceDetailSlide();
		});

		renderServiceDetailSlide();
	}
}
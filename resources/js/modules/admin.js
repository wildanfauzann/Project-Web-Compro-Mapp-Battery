export function initAdminInteractions() {
	const sidebar = document.getElementById('admin-sidebar');
	const sidebarBackdrop = document.getElementById('admin-sidebar-backdrop');
	const sidebarToggle = document.getElementById('admin-sidebar-toggle');

	const openSidebar = () => {
		sidebar?.classList.add('is-open');
		sidebarBackdrop?.classList.remove('hidden');
		requestAnimationFrame(() => sidebarBackdrop?.classList.add('is-visible'));
		document.body.classList.add('admin-sidebar-lock');
	};

	const closeSidebar = () => {
		sidebar?.classList.remove('is-open');
		sidebarBackdrop?.classList.remove('is-visible');
		window.setTimeout(() => sidebarBackdrop?.classList.add('hidden'), 220);
		document.body.classList.remove('admin-sidebar-lock');
	};

	sidebarToggle?.addEventListener('click', () => {
		if (sidebar?.classList.contains('is-open')) {
			closeSidebar();
			return;
		}

		openSidebar();
	});

	sidebarBackdrop?.addEventListener('click', closeSidebar);

	window.addEventListener('resize', () => {
		if (window.innerWidth >= 1024) {
			closeSidebar();
		}
	});

	const revealElements = Array.from(document.querySelectorAll('[data-reveal]'));
	if (revealElements.length > 0 && 'IntersectionObserver' in window) {
		const observer = new IntersectionObserver((entries) => {
			entries.forEach((entry) => {
				if (!entry.isIntersecting) {
					return;
				}

				entry.target.classList.add('is-visible');
				observer.unobserve(entry.target);
			});
		}, { threshold: 0.12 });

		revealElements.forEach((element) => observer.observe(element));
	} else {
		revealElements.forEach((element) => element.classList.add('is-visible'));
	}

	const toastElements = Array.from(document.querySelectorAll('[data-admin-toast]'));
	toastElements.forEach((toast) => {
		requestAnimationFrame(() => toast.classList.add('is-visible'));

		const closeToast = () => {
			toast.classList.remove('is-visible');
			window.setTimeout(() => toast.remove(), 220);
		};

		toast.querySelectorAll('[data-toast-close]').forEach((button) => {
			button.addEventListener('click', closeToast);
		});

		window.setTimeout(closeToast, 5000);
	});

	const deleteModal = document.getElementById('admin-delete-modal');
	const deleteForm = document.getElementById('admin-delete-form');
	const deleteName = document.getElementById('admin-delete-name');
	const deleteCancel = document.getElementById('admin-delete-cancel');

	const closeDeleteModal = () => {
		if (!deleteModal) {
			return;
		}

		deleteModal.classList.remove('is-open');
		window.setTimeout(() => deleteModal.classList.add('hidden'), 180);
	};

	document.querySelectorAll('[data-delete-trigger]').forEach((button) => {
		button.addEventListener('click', () => {
			const actionUrl = button.getAttribute('data-delete-url');
			const itemName = button.getAttribute('data-delete-name') || 'data ini';

			if (!deleteModal || !deleteForm) {
				return;
			}

			deleteModal.classList.remove('hidden');
			requestAnimationFrame(() => deleteModal.classList.add('is-open'));

			deleteForm.setAttribute('action', actionUrl || '#');
			if (deleteName) {
				deleteName.textContent = itemName;
			}
		});
	});

	deleteCancel?.addEventListener('click', closeDeleteModal);
	deleteModal?.addEventListener('click', (event) => {
		if (event.target === deleteModal) {
			closeDeleteModal();
		}
	});

	const imageInput = document.querySelector('[data-product-image-input]');
	const imageGrid = document.querySelector('[data-product-image-preview-grid]');
	const currentPreview = document.querySelector('[data-product-current-image]');
	const selectedPreview = document.querySelector('[data-product-selected-image]');
	const selectedPlaceholder = document.querySelector('[data-product-selected-placeholder]');

	const setSelectedPreview = (source) => {
		if (!selectedPreview || !selectedPlaceholder) {
			return;
		}

		selectedPreview.src = source;
		selectedPreview.classList.remove('hidden');
		selectedPlaceholder.classList.add('hidden');
	};

	if (imageInput instanceof HTMLInputElement && imageGrid) {
		imageInput.addEventListener('change', () => {
			const file = imageInput.files?.[0];

			if (!file) {
				if (selectedPreview && selectedPlaceholder) {
					selectedPreview.classList.add('hidden');
					selectedPlaceholder.classList.remove('hidden');
				}
				return;
			}

			const reader = new FileReader();
			reader.onload = () => {
				if (typeof reader.result === 'string') {
					setSelectedPreview(reader.result);
				}
			};
			reader.readAsDataURL(file);
		});

		if (currentPreview && currentPreview instanceof HTMLImageElement && currentPreview.dataset.previewSrc) {
			currentPreview.src = currentPreview.dataset.previewSrc;
		}
 	}

	if (currentPreview instanceof HTMLImageElement && currentPreview.dataset.previewSrc) {
		currentPreview.classList.remove('hidden');
	}

	window.addEventListener('keydown', (event) => {
		if (event.key === 'Escape') {
			closeSidebar();
			closeDeleteModal();
		}
	});
}
export function initProductPage() {
	const filterButtons = document.querySelectorAll('.category-filter-btn');
	const productCards = document.querySelectorAll('.product-card');
	const selectedCategoryTitle = document.getElementById('selected-category-title');
	const visibleProductCount = document.getElementById('visible-product-count');

	if (filterButtons.length === 0 || productCards.length === 0 || !selectedCategoryTitle || !visibleProductCount) {
		return;
	}

	function updateActiveButton(activeButton) {
		filterButtons.forEach((button) => {
			button.classList.remove('bg-[#10215a]', 'text-white', 'border-[#bcc8de]');
			button.classList.add('bg-white', 'text-[#23385e]', 'border-[#d8dde8]');
		});

		activeButton.classList.remove('bg-white', 'text-[#23385e]', 'border-[#d8dde8]');
		activeButton.classList.add('bg-[#10215a]', 'text-white', 'border-[#bcc8de]');
	}

	function applyCategoryFilter(categoryValue, categoryLabel) {
		let totalVisible = 0;

		productCards.forEach((card) => {
			const cardCategory = card.getAttribute('data-category');
			const shouldShow = categoryValue === 'all' || cardCategory === categoryValue;

			card.style.display = shouldShow ? '' : 'none';
			if (shouldShow) totalVisible += 1;
		});

		const titleLabel = categoryValue === 'all' ? 'Semua Produk Forklift' : categoryLabel;
		selectedCategoryTitle.textContent = 'Kategori: ' + titleLabel;
		visibleProductCount.textContent = String(totalVisible);
	}

	productCards.forEach((card) => {
		card.addEventListener('click', function (event) {
			if (event.target.closest('a, button')) {
				return;
			}

			const detailUrl = card.getAttribute('data-detail-url');
			if (detailUrl) {
				window.location.href = detailUrl;
			}
		});

		card.addEventListener('keydown', function (event) {
			if (event.key !== 'Enter' && event.key !== ' ') {
				return;
			}

			event.preventDefault();
			const detailUrl = card.getAttribute('data-detail-url');
			if (detailUrl) {
				window.location.href = detailUrl;
			}
		});
	});

	filterButtons.forEach((button) => {
		button.addEventListener('click', function () {
			const categoryValue = button.getAttribute('data-category');
			const categoryLabel = button.textContent.trim();

			updateActiveButton(button);
			applyCategoryFilter(categoryValue, categoryLabel);
		});
	});

	const params = new URLSearchParams(window.location.search);
	const requestedCategory = (params.get('category') || '').toLowerCase();
	const categoryAliasMap = {
		accessories: ['accessories', 'accesories'],
		accesories: ['accessories', 'accesories'],
	};

	const candidateCategories = categoryAliasMap[requestedCategory] || [requestedCategory];
	const matchedButton = Array.from(filterButtons).find((button) => candidateCategories.includes(button.getAttribute('data-category')));

	if (matchedButton) {
		matchedButton.click();
	}
}
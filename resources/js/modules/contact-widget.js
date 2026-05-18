export function initContactWidget() {
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
		if (event.key === 'Escape' && isContactPanelOpen()) {
			closeContactPanel();
		}
	});
}

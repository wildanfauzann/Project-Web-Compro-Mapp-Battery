import './bootstrap';

import { initNavbarInteractions } from './modules/navbar';
import { initAdminInteractions } from './modules/admin';
import { initHomePage } from './modules/home-page';
import { initAboutPage } from './modules/about-page';
import { initProductPage } from './modules/product-page';
import { initProductDetailPage } from './modules/product-detail-page';
import { initServicePage } from './modules/service-page';
import { initContactWidget } from './modules/contact-widget';

document.addEventListener('DOMContentLoaded', () => {
	initNavbarInteractions();
	initAdminInteractions();
	initHomePage();
	initAboutPage();
	initProductPage();
	initProductDetailPage();
	initServicePage();
	initContactWidget();
});

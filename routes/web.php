<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Dashboard
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate'])->name('login')->middleware('guest');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');

Route::view('/dashboard-analytics', 'menu.dashboards.dashboard-analytics');
Route::view('/dashboard-crm', 'menu.dashboards.dashboard-crm');
Route::view('/dashboard-ecommerce', 'menu.dashboards.dashboard-ecommerce')->middleware('auth');
Route::view('/dashboard-crypto', 'menu.dashboards.dashboard-crypto');
Route::view('/dashboard-job', 'menu.dashboards.dashboard-job');
Route::view('/dashboard-nft', 'menu.dashboards.dashboard-nft');
Route::view('/dashboard-projects', 'menu.dashboards.dashboard-projects');

// Apps
Route::view('/apps-calendar', 'menu.apps.apps-calendar');
Route::view('/apps-chat', 'menu.apps.apps-chat');
Route::view('/apps-mailbox', 'menu.apps.apps-mailbox');
Route::view('/apps-email-basic', 'menu.apps.apps-email-basic');

Route::view('/apps-email-ecommerce', 'menu.apps.apps-email-ecommerce');
Route::view('/apps-ecommerce-products', 'menu.apps.apps-ecommerce-products');
Route::view('/apps-ecommerce-product-details', 'menu.apps.apps-ecommerce-product-details');
Route::view('/apps-ecommerce-add-product', 'menu.apps.apps-ecommerce-add-product');
Route::view('/apps-ecommerce-orders', 'menu.apps.apps-ecommerce-orders');
Route::view('/apps-ecommerce-order-details', 'menu.apps.apps-ecommerce-order-details');
Route::view('/apps-ecommerce-customers', 'menu.apps.apps-ecommerce-customers');
Route::view('/apps-ecommerce-cart', 'menu.apps.apps-ecommerce-cart');
Route::view('/apps-ecommerce-checkout', 'menu.apps.apps-ecommerce-checkout');
Route::view('/apps-ecommerce-sellers', 'menu.apps.apps-ecommerce-sellers');
Route::view('/apps-ecommerce-seller-details', 'menu.apps.apps-ecommerce-seller-details');

Route::view('/apps-projects-list', 'menu.apps.apps-projects-list');
Route::view('/apps-projects-overview', 'menu.apps.apps-projects-overview');
Route::view('/apps-projects-create', 'menu.apps.apps-projects-create');

Route::view('/apps-tasks-kanban', 'menu.apps.apps-tasks-kanban');
Route::view('/apps-tasks-list-view', 'menu.apps.apps-tasks-list-view');
Route::view('/apps-tasks-details', 'menu.apps.apps-tasks-details');

Route::view('/apps-crm-contacts', 'menu.apps.apps-crm-contacts');
Route::view('/apps-crm-companies', 'menu.apps.apps-crm-companies');
Route::view('/apps-crm-deals', 'menu.apps.apps-crm-deals');
Route::view('/apps-crm-leads', 'menu.apps.apps-crm-leads');

Route::view('/apps-crypto-transactions', 'menu.apps.apps-crypto-transactions');
Route::view('/apps-crypto-buy-sell', 'menu.apps.apps-crypto-buy-sell');
Route::view('/apps-crypto-orders', 'menu.apps.apps-crypto-orders');
Route::view('/apps-crypto-wallet', 'menu.apps.apps-crypto-wallet');
Route::view('/apps-crypto-ico', 'menu.apps.apps-crypto-ico');
Route::view('/apps-crypto-kyc', 'menu.apps.apps-crypto-kyc');
Route::view('/apps-invoices-list', 'menu.apps.apps-invoices-list');

Route::view('/apps-invoices-details', 'menu.apps.apps-invoices-details');
Route::view('/apps-invoices-create', 'menu.apps.apps-invoices-create');

Route::view('/apps-tickets-list', 'menu.apps.apps-tickets-list');
Route::view('/apps-tickets-details', 'menu.apps.apps-tickets-details');

Route::view('/apps-nft-marketplace', 'menu.apps.apps-nft-marketplace');
Route::view('/apps-nft-explore', 'menu.apps.apps-nft-explore');
Route::view('/apps-nft-auction', 'menu.apps.apps-nft-auction');
Route::view('/apps-nft-item-details', 'menu.apps.apps-nft-item-details');
Route::view('/apps-nft-collections', 'menu.apps.apps-nft-collections');
Route::view('/apps-nft-creators', 'menu.apps.apps-nft-creators');
Route::view('/apps-nft-ranking', 'menu.apps.apps-nft-ranking');
Route::view('/apps-nft-wallet', 'menu.apps.apps-nft-wallet');
Route::view('/apps-nft-create', 'menu.apps.apps-nft-create');

Route::view('/apps-file-manager', 'menu.apps.apps-file-manager');
Route::view('/apps-todo', 'menu.apps.apps-todo');

Route::view('/apps-job-statistics', 'menu.apps.apps-job-statistics');
Route::view('/apps-job-lists', 'menu.apps.apps-job-lists');
Route::view('/apps-job-grid-lists', 'menu.apps.apps-job-grid-lists');
Route::view('/apps-job-details', 'menu.apps.apps-job-details');
Route::view('/apps-job-candidate-lists', 'menu.apps.apps-job-candidate-lists');
Route::view('/apps-job-candidate-grid', 'menu.apps.apps-job-candidate-grid');
Route::view('/apps-job-application', 'menu.apps.apps-job-application');
Route::view('/apps-job-new', 'menu.apps.apps-job-new');
Route::view('/apps-job-companies-lists', 'menu.apps.apps-job-companies-lists');
Route::view('/apps-job-categories', 'menu.apps.apps-job-categories');

Route::view('/apps-api-key', 'menu.apps.apps-api-key');

// Pages

Route::view('/auth-signin-basic', 'pages.auth.auth-signin-basic');
Route::view('/auth-signin-cover', 'pages.auth.auth-signin-cover');
Route::view('/auth-signup-basic', 'pages.auth.auth-signup-basic');
Route::view('/auth-signup-cover', 'pages.auth.auth-signup-cover');
Route::view('/auth-pass-reset-basic', 'pages.auth.auth-pass-reset-basic');
Route::view('/auth-pass-reset-cover', 'pages.auth.auth-pass-reset-cover');
Route::view('/auth-pass-change-basic', 'pages.auth.auth-pass-change-basic');
Route::view('/auth-pass-change-cover', 'pages.auth.auth-pass-change-cover');
Route::view('/auth-lockscreen-basic', 'pages.auth.auth-lockscreen-basic');
Route::view('/auth-lockscreen-cover', 'pages.auth.auth-lockscreen-cover');
Route::view('/auth-logout-basic', 'pages.auth.auth-logout-basic');
Route::view('/auth-logout-cover', 'pages.auth.auth-logout-cover');
Route::view('/auth-success-msg-basic', 'pages.auth.auth-success-msg-basic');
Route::view('/auth-success-msg-cover', 'pages.auth.auth-success-msg-cover');
Route::view('/auth-twostep-basic', 'pages.auth.auth-twostep-basic');
Route::view('/auth-twostep-cover', 'pages.auth.auth-twostep-cover');
Route::view('/auth-404-basic', 'pages.auth.auth-404-basic');
Route::view('/auth-404-cover', 'pages.auth.auth-404-cover');
Route::view('/auth-404-alt', 'pages.auth.auth-404-alt');
Route::view('/auth-500', 'pages.auth.auth-500');
Route::view('/auth-offline', 'pages.auth.auth-offline');

Route::view('/pages-starter', 'pages.pages.pages-starter');
Route::view('/pages-profile', 'pages.pages.pages-profile');
Route::view('/pages-profile-settings', 'pages.pages.pages-profile-settings');
Route::view('/pages-team', 'pages.pages.pages-team');
Route::view('/pages-timeline', 'pages.pages.pages-timeline');
Route::view('/pages-faqs', 'pages.pages.pages-faqs');
Route::view('/pages-pricing', 'pages.pages.pages-pricing');
Route::view('/pages-gallery', 'pages.pages.pages-gallery');
Route::view('/pages-maintenance', 'pages.pages.pages-maintenance');
Route::view('/pages-coming-soon', 'pages.pages.pages-coming-soon');
Route::view('/pages-sitemap', 'pages.pages.pages-sitemap');
Route::view('/pages-search-results', 'pages.pages.pages-search-results');
Route::view('/pages-privacy-policy', 'pages.pages.pages-privacy-policy');
Route::view('/pages-term-conditions', 'pages.pages.pages-term-conditions');

Route::view('/landing', 'pages.landing.landing');
Route::view('/nft-landing', 'pages.landing.nft-landing');
Route::view('/job-landing', 'pages.landing.job-landing');

// components
Route::view('/ui-alerts', 'components.base_ui.ui-alerts');
Route::view('/ui-badges', 'components.base_ui.ui-badges');
Route::view('/ui-buttons', 'components.base_ui.ui-buttons');
Route::view('/ui-colors', 'components.base_ui.ui-colors');
Route::view('/ui-cards', 'components.base_ui.ui-cards');
Route::view('/ui-carousel', 'components.base_ui.ui-carousel');
Route::view('/ui-dropdowns', 'components.base_ui.ui-dropdowns');
Route::view('/ui-grid', 'components.base_ui.ui-grid');
Route::view('/ui-images', 'components.base_ui.ui-images');
Route::view('/ui-tabs', 'components.base_ui.ui-tabs');
Route::view('/ui-accordions', 'components.base_ui.ui-accordions');
Route::view('/ui-modals', 'components.base_ui.ui-modals');
Route::view('/ui-offcanvas', 'components.base_ui.ui-offcanvas');
Route::view('/ui-placeholders', 'components.base_ui.ui-placeholders');
Route::view('/ui-progress', 'components.base_ui.ui-progress');
Route::view('/ui-notifications', 'components.base_ui.ui-notifications');
Route::view('/ui-media', 'components.base_ui.ui-media');
Route::view('/ui-embed-video', 'components.base_ui.ui-embed-video');
Route::view('/ui-typography', 'components.base_ui.ui-typography');
Route::view('/ui-lists', 'components.base_ui.ui-lists');
Route::view('/ui-links', 'components.base_ui.ui-links');
Route::view('/ui-general', 'components.base_ui.ui-general');
Route::view('/ui-ribbons', 'components.base_ui.ui-ribbons');
Route::view('/ui-utilities', 'components.base_ui.ui-utilities');

Route::view('/advance-ui-sweetalerts', 'components.advance_ui.advance-ui-sweetalerts');
Route::view('/advance-ui-nestable', 'components.advance_ui.advance-ui-nestable');
Route::view('/advance-ui-scrollbar', 'components.advance_ui.advance-ui-scrollbar');
Route::view('/advance-ui-animation', 'components.advance_ui.advance-ui-animation');
Route::view('/advance-ui-tour', 'components.advance_ui.advance-ui-tour');
Route::view('/advance-ui-swiper', 'components.advance_ui.advance-ui-swiper');
Route::view('/advance-ui-ratings', 'components.advance_ui.advance-ui-ratings');
Route::view('/advance-ui-highlight', 'components.advance_ui.advance-ui-highlight');
Route::view('/advance-ui-scrollspy', 'components.advance_ui.advance-ui-scrollspy');

Route::view('/widgets', 'components.widgets');

Route::view('/forms-elements', 'components.forms.forms-elements');
Route::view('/forms-select', 'components.forms.forms-select');
Route::view('/forms-checkboxs-radios', 'components.forms.forms-checkboxs-radios');
Route::view('/forms-pickers', 'components.forms.forms-pickers');
Route::view('/forms-masks', 'components.forms.forms-masks');
Route::view('/forms-advanced', 'components.forms.forms-advanced');
Route::view('/forms-range-sliders', 'components.forms.forms-range-sliders');
Route::view('/forms-validation', 'components.forms.forms-validation');
Route::view('/forms-wizard', 'components.forms.forms-wizard');
Route::view('/forms-editors', 'components.forms.forms-editors');
Route::view('/forms-file-uploads', 'components.forms.forms-file-uploads');
Route::view('/forms-layouts', 'components.forms.forms-layouts');
Route::view('/forms-select2', 'components.forms.forms-select2');

Route::view('/tables-basic', 'components.tables.tables-basic');
Route::view('/tables-gridjs', 'components.tables.tables-gridjs');
Route::view('/tables-listjs', 'components.tables.tables-listjs');
Route::view('/tables-datatables', 'components.tables.tables-datatables');

Route::view('/charts-apex-line', 'components.charts.charts-apex-line');
Route::view('/charts-apex-area', 'components.charts.charts-apex-area');
Route::view('/charts-apex-column', 'components.charts.charts-apex-column');
Route::view('/charts-apex-bar', 'components.charts.charts-apex-bar');
Route::view('/charts-apex-mixed', 'components.charts.charts-apex-mixed');
Route::view('/charts-apex-timeline', 'components.charts.charts-apex-timeline');
Route::view('/charts-apex-range-area', 'components.charts.charts-apex-range-area');
Route::view('/charts-apex-funnel', 'components.charts.charts-apex-funnel');
Route::view('/charts-apex-candlestick', 'components.charts.charts-apex-candlestick');
Route::view('/charts-apex-boxplot', 'components.charts.charts-apex-boxplot');
Route::view('/charts-apex-bubble', 'components.charts.charts-apex-bubble');
Route::view('/charts-apex-scatter', 'components.charts.charts-apex-scatter');
Route::view('/charts-apex-heatmap', 'components.charts.charts-apex-heatmap');
Route::view('/charts-apex-treemap', 'components.charts.charts-apex-treemap');
Route::view('/charts-apex-pie', 'components.charts.charts-apex-pie');
Route::view('/charts-apex-radialbar', 'components.charts.charts-apex-radialbar');
Route::view('/charts-apex-radar', 'components.charts.charts-apex-radar');
Route::view('/charts-apex-polar', 'components.charts.charts-apex-polar');
Route::view('/charts-chartjs', 'components.charts.charts-chartjs');
Route::view('/charts-echarts', 'components.charts.charts-echarts');

Route::view('/icons-remix', 'components.icons.icons-remix');
Route::view('/icons-boxicons', 'components.icons.icons-boxicons');
Route::view('/icons-materialdesign', 'components.icons.icons-materialdesign');
Route::view('/icons-lineawesome', 'components.icons.icons-lineawesome');
Route::view('/icons-feather', 'components.icons.icons-feather');
Route::view('/icons-crypto', 'components.icons.icons-crypto');

Route::view('/maps-google', 'components.maps.maps-google');
Route::view('/maps-vector', 'components.maps.maps-vector');
Route::view('/maps-leaflet', 'components.maps.maps-leaflet');

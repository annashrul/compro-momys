<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    // Dashboard
    public function dashboard_1()
    {

        $page_title = 'Dashboard Light';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;

        return view('bakery.dashboard.index', compact('page_title', 'page_description', 'action'));
    }

    // Dashboard 2
    public function dashboard_2()
    {

        $page_title = 'Dashboard 2';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.dashboard.index_2', compact('page_title', 'page_description', 'action'));
    }

    // coin_details
    public function coin_details()
    {


        $page_title = 'Coin Details';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.dashboard.coin_details', compact('page_title', 'page_description', 'action'));
    }

    // portofolio
    public function portofolio()
    {

        $page_title = 'Portofolio';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.dashboard.portofolio', compact('page_title', 'page_description', 'action'));
    }

    // market_capital
    public function market_capital()
    {

        $page_title = 'Market Capital';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.dashboard.market_capital', compact('page_title', 'page_description', 'action'));
    }

    // tranasactions
    public function tranasactions()
    {

        $page_title = 'Tranasactions';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.dashboard.tranasactions', compact('page_title', 'page_description', 'action'));
    }

    // my_wallets
    public function my_wallets()
    {

        $page_title = 'My Wallets';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.dashboard.my_wallets', [
            'title' => 'Role User',
            'role' => User::all(),
            'users' => User::all()
        ]);
    }

    // profile
    public function app_profile()
    {

        $page_title = 'Profile';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.app.profile', compact('page_title', 'page_description', 'action'));
    }

    // Post Details
    public function post_details()
    {

        $page_title = 'Post Details';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.app.post_details', compact('page_title', 'page_description', 'action'));
    }

    // Chat
    public function page_chat()
    {

        $page_title = 'Chat';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.message.chat', compact('page_title', 'page_description', 'action'));
    }

    // project_list
    public function project_list()
    {

        $page_title = 'Project List';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.project.project_list', compact('page_title', 'page_description', 'action'));
    }


    // Project Card
    public function project_card()
    {

        $page_title = 'Project Card';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.project.project_card', compact('page_title', 'page_description', 'action'));
    }

    // contact List
    public function contact_list()
    {

        $page_title = 'Contact List';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.contact.contact_list', compact('page_title', 'page_description', 'action'));
    }

    // contact card
    public function contact_card()
    {

        $page_title = 'Contact Card';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.contact.contact_card', compact('page_title', 'page_description', 'action'));
    }

    // Email Compose
    public function email_compose()
    {
        $page_title = 'Compose';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.message.compose', compact('page_title', 'page_description', 'action'));
    }

    // Email Inbox
    public function email_inbox()
    {
        $page_title = 'Inbox';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.message.inbox', compact('page_title', 'page_description', 'action'));
    }

    // Email Read
    public function email_read()
    {
        $page_title = 'Read';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.message.read', compact('page_title', 'page_description', 'action'));
    }

    // Calender
    public function app_calender()
    {
        $page_title = 'Calender';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.app.calender', compact('page_title', 'page_description', 'action'));
    }

    // Ecommerce Checkout
    public function ecom_checkout()
    {
        $page_title = 'Checkout';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ecommerce.checkout', compact('page_title', 'page_description', 'action'));
    }

    // Ecommerce Customers
    public function ecom_customers()
    {
        $page_title = 'Ecom Customers';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ecommerce.customers', compact('page_title', 'page_description', 'action'));
    }

    // Ecommerce Invoice
    public function ecom_invoice()
    {
        $page_title = 'Invoice';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ecommerce.invoice', compact('page_title', 'page_description', 'action'));
    }

    // Ecommerce Product Detail
    public function ecom_product_detail()
    {
        $page_title = 'Product Detail';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ecommerce.product_detail', compact('page_title', 'page_description', 'action'));
    }

    // Ecommerce Product Grid
    public function ecom_product_grid()
    {
        $page_title = 'Product Grid';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ecommerce.product_grid', compact('page_title', 'page_description', 'action'));
    }

    // Ecommerce Product List
    public function ecom_product_list()
    {
        $page_title = 'Product List';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ecommerce.product_list', compact('page_title', 'page_description', 'action'));
    }

    // Ecommerce Product Order
    public function ecom_product_order()
    {
        $page_title = 'Product Order';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ecommerce.product_order', compact('page_title', 'page_description', 'action'));
    }

    // Chart Chartist
    public function chart_chartist()
    {
        $page_title = 'Chart Chartist';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.chart.chartist', compact('page_title', 'page_description', 'action'));
    }

    // Chart Chartjs
    public function chart_chartjs()
    {
        $page_title = 'Chart Chartjs';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        return view('bakery.chart.chartjs', compact('page_title', 'page_description', 'action'));
    }

    // Chart Flot
    public function chart_flot()
    {
        $page_title = 'Chart Flot';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        return view('bakery.chart.flot', compact('page_title', 'page_description', 'action'));
    }

    // Chart Morris
    public function chart_morris()
    {
        $page_title = 'Chart Morris';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        return view('bakery.chart.morris', compact('page_title', 'page_description', 'action'));
    }

    // Chart Peity
    public function chart_peity()
    {
        $page_title = 'Chart Peity';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        return view('bakery.chart.peity', compact('page_title', 'page_description', 'action'));
    }

    // Chart Sparkline
    public function chart_sparkline()
    {
        $page_title = 'Chart Sparkline';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;
        return view('bakery.chart.sparkline', compact('page_title', 'page_description', 'action'));
    }

    // Ui Accordion
    public function ui_accordion()
    {
        $page_title = 'Accordion';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.accordion', compact('page_title', 'page_description', 'action'));
    }

    // Ui Alert
    public function ui_alert()
    {
        $page_title = 'Alert';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.alert', compact('page_title', 'page_description', 'action'));
    }

    // Ui Badge
    public function ui_badge()
    {
        $page_title = 'Badge';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.badge', compact('page_title', 'page_description', 'action'));
    }

    // Ui Button
    public function ui_button()
    {
        $page_title = 'Button';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.button', compact('page_title', 'page_description', 'action'));
    }

    // Ui Button Group
    public function ui_button_group()
    {
        $page_title = 'Button Group';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.button_group', compact('page_title', 'page_description', 'action'));
    }

    // Ui Card
    public function ui_card()
    {
        $page_title = 'Card';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.card', compact('page_title', 'page_description', 'action'));
    }

    // Ui Carousel
    public function ui_carousel()
    {
        $page_title = 'Carousel';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.carousel', compact('page_title', 'page_description', 'action'));
    }

    // Ui Dropdown
    public function ui_dropdown()
    {
        $page_title = 'Dropdown';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.dropdown', compact('page_title', 'page_description', 'action'));
    }

    // Ui Grid
    public function ui_grid()
    {
        $page_title = 'Grid';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.grid', compact('page_title', 'page_description', 'action'));
    }

    // Ui List Group
    public function ui_list_group()
    {
        $page_title = 'List Group';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.list_group', compact('page_title', 'page_description', 'action'));
    }

    // Ui Media Object
    public function ui_media_object()
    {
        $page_title = 'Media Object';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.media_object', compact('page_title', 'page_description', 'action'));
    }

    // Ui Modal
    public function ui_modal()
    {
        $page_title = 'Modal';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.modal', compact('page_title', 'page_description', 'action'));
    }

    // Ui Pagination
    public function ui_pagination()
    {
        $page_title = 'Pagination';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.pagination', compact('page_title', 'page_description', 'action'));
    }

    // Ui Popover
    public function ui_popover()
    {
        $page_title = 'Popover';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.popover', compact('page_title', 'page_description', 'action'));
    }

    // Ui Progressbar
    public function ui_progressbar()
    {
        $page_title = 'Progressbar';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.progressbar', compact('page_title', 'page_description', 'action'));
    }

    // Ui Tab
    public function ui_tab()
    {
        $page_title = 'Tab';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.tab', compact('page_title', 'page_description', 'action'));
    }


    // Ui Typography
    public function ui_typography()
    {
        $page_title = 'Typography';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.ui.typography', compact('page_title', 'page_description', 'action'));
    }

    // UC Nestable.
    public function uc_nestable()
    {
        $page_title = 'Nestable';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.uc.nestable', compact('page_title', 'page_description', 'action'));
    }
    // UC Lightgallery.
    public function uc_lightgallery()
    {
        $page_title = 'Lightgallery';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.uc.lightgallery', compact('page_title', 'page_description', 'action'));
    }

    // UC NoUi Slider
    public function uc_noui_slider()
    {
        $page_title = 'Noui Slider';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.uc.noui_slider', compact('page_title', 'page_description', 'action'));
    }

    // UC Select2
    public function uc_select2()
    {
        $page_title = 'Select2';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.uc.select2', compact('page_title', 'page_description', 'action'));
    }

    // UC Sweetalert
    public function uc_sweetalert()
    {
        $page_title = 'Sweetalert';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.uc.sweetalert', compact('page_title', 'page_description', 'action'));
    }

    // UC Toastr
    public function uc_toastr()
    {
        $page_title = 'Toastr';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.uc.toastr', compact('page_title', 'page_description', 'action'));
    }

    // Map Jqvmap
    public function map_jqvmap()
    {
        $page_title = 'Map Jqvmap';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.map.jqvmap', compact('page_title', 'page_description', 'action'));
    }

    // Widget Basic
    public function widget_basic()
    {
        $page_title = 'Widget';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.widget.widget_basic', compact('page_title', 'page_description', 'action'));
    }

    // Form Editor Summernote
    public function form_editor_summernote()
    {
        $page_title = 'Summernote Editor';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.form.editor_summernote', compact('page_title', 'page_description', 'action'));
    }

    // Form Element
    public function form_element()
    {
        $page_title = 'Form Element';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.form.element', compact('page_title', 'page_description', 'action'));
    }

    // Form Pickers
    public function form_pickers()
    {
        $page_title = 'Form Pickers';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.form.pickers', compact('page_title', 'page_description', 'action'));
    }

    // Form Validation Jquery
    public function form_validation_jquery()
    {
        $page_title = 'Form Validation';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.form.validation_jquery', compact('page_title', 'page_description', 'action'));
    }

    // Form Wizard
    public function form_wizard()
    {
        $page_title = 'Form Wizard';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.form.wizard', compact('page_title', 'page_description', 'action'));
    }

    // Table Bootstrap Basic
    public function table_bootstrap_basic()
    {
        $page_title = 'Table Basic';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.table.bootstrap_basic', compact('page_title', 'page_description', 'action'));
    }

    // Table Datatable Basic
    public function table_datatable_basic()
    {
        $page_title = 'Table Datatable';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.table.datatable_basic', compact('page_title', 'page_description', 'action'));
    }

    // Page Error 400
    public function page_error_400()
    {
        $page_title = 'Page Error 400';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.page.error_400', compact('page_title', 'page_description', 'action'));
    }

    // Page Error 403
    public function page_error_403()
    {
        $page_title = 'Page Error 403';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.page.error_403', compact('page_title', 'page_description', 'action'));
    }

    // Page Error 404
    public function page_error_404()
    {
        $page_title = 'Page Error 404';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.page.error_404', compact('page_title', 'page_description', 'action'));
    }

    // Page Error 500
    public function page_error_500()
    {
        $page_title = 'Page Error 500';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.page.error_500', compact('page_title', 'page_description', 'action'));
    }

    // Page Error 503
    public function page_error_503()
    {
        $page_title = 'Page Error 503';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.page.error_503', compact('page_title', 'page_description', 'action'));
    }

    // Page Forgot Password
    public function page_forgot_password()
    {
        $page_title = 'Page Forgot Password';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.page.forgot_password', compact('page_title', 'page_description', 'action'));
    }
}

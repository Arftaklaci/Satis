<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['p/(:any)'] = 'Home/page/$1';
$route['panel'] = 'Panel/index';
$route['my-accounts'] = 'Panel/my_accounts';
$route['support'] = 'Panel/support_tickets';
$route['support/(:num)'] = 'Panel/support_ticket/$1';
$route['add-balance'] = 'Panel/add_balance';
$route['profile'] = 'Panel/profile';
$route['admin'] = 'Admin/index';
$route['admin/categories'] = 'Admin/categories';
$route['admin/categories/add'] = 'Admin/add_category';
$route['admin/categories/(:num)'] = 'Admin/edit_category/$1';
$route['admin/accounts'] = 'Admin/accounts';
$route['admin/accounts/add'] = 'Admin/add_account';
$route['admin/accounts/(:num)'] = 'Admin/edit_account/$1';
$route['admin/payments'] = 'Admin/payments';
$route['admin/users'] = 'Admin/users';
$route['admin/users/(:num)'] = 'Admin/edit_user/$1';
$route['admin/tickets'] = 'Admin/tickets';
$route['admin/tickets/(:num)'] = 'Admin/ticket/$1';
$route['admin/pages'] = 'Admin/pages';
$route['admin/pages/add'] = 'Admin/add_page';
$route['admin/pages/(:num)'] = 'Admin/edit_page/$1';
$route['admin/banks'] = 'Admin/banks';
$route['admin/banks/add'] = 'Admin/add_bank';
$route['admin/banks/(:num)'] = 'Admin/edit_bank/$1';
$route['admin/settings'] = 'Admin/settings';
$route['logout'] = 'Panel/logout';
$route['login']['get'] = 'Auth/login';
$route['login']['post'] = 'Auth/login_post';
$route['register']['get'] = 'Auth/register';
$route['register']['post'] = 'Auth/register_post';
$route['reset-password']['get'] = 'Auth/reset_password';
$route['reset-password']['post'] = 'Auth/reset_password_post';
$route['reset-password/(:any)']['get'] = 'Auth/reset_password/$1';
$route['reset-password/(:any)']['post'] = 'Auth/reset_password_post/$1';
$route['buy-account']['post'] = 'PanelAjax/buy_account';
$route['bulk-download']['post'] = 'PanelAjax/bulk_download';
$route['buy-bulk/price']['post'] = 'PanelAjax/bulk_buy_price';
$route['buy-bulk']['post'] = 'PanelAjax/bulk_buy';
$route['new-ticket']['post'] = 'PanelAjax/create_ticket';
$route['ticket-reply/(:num)']['post'] = 'PanelAjax/ticket_reply/$1';
$route['payment-bank']['post'] = 'PanelAjax/payment_notification';
$route['profile-update']['post'] = 'PanelAjax/profile_update';
$route['payment-card']['post'] = 'Payment/card';
$route['payment-card/callback'] = 'Payment/card_callback';
$route['admin/approve-payment']['post'] = 'AdminAjax/approve_payment';
$route['admin/reject-payment']['post'] = 'AdminAjax/reject_payment';
$route['admin/add-category']['post'] = 'AdminAjax/add_category';
$route['admin/edit-category']['post'] = 'AdminAjax/edit_category';
$route['admin/delete-category']['post'] = 'AdminAjax/delete_category';
$route['admin/add-account']['post'] = 'AdminAjax/add_account';
$route['admin/add-accounts']['post'] = 'AdminAjax/add_accounts';
$route['admin/edit-account']['post'] = 'AdminAjax/edit_account';
$route['admin/delete-account']['post'] = 'AdminAjax/delete_account';
$route['admin/edit-user']['post'] = 'AdminAjax/edit_user';
$route['admin/delete-user']['post'] = 'AdminAjax/delete_user';
$route['admin/ticket-reply/(:num)']['post'] = 'AdminAjax/ticket_reply/$1';
$route['admin/ticket-status']['post'] = 'AdminAjax/ticket_status';
$route['admin/add-page']['post'] = 'AdminAjax/add_page';
$route['admin/edit-page']['post'] = 'AdminAjax/edit_page';
$route['admin/delete-page']['post'] = 'AdminAjax/delete_page';
$route['admin/add-bank']['post'] = 'AdminAjax/add_bank';
$route['admin/edit-bank']['post'] = 'AdminAjax/edit_bank';
$route['admin/delete-bank']['post'] = 'AdminAjax/delete_bank';
$route['admin/update-settings']['post'] = 'AdminAjax/update_settings';

$route['(:any)-(:num)'] = 'Home/category/$2';

$route['sitemap.xml'] = 'Home/sitemap';

$route['404_override'] = 'Home/page_not_found';
$route['translate_uri_dashes'] = FALSE;

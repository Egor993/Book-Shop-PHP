<?php
return array(
	
	'admin/orders/view/([0-9]+)' => 'adminOrder/view/$1',
	'admin/orders' => 'adminOrder/index',
	
    'admin/products/create' => 'adminProduct/create',
    'admin/products/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/products' => 'adminProduct/index',

	'admin/add' => 'admin/add',
	'admin' => 'admin/index',

    // 'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    // 'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    // 
	'product/([0-9]+)' => 'product/view/$1',

	// 'filter\?genre\=([^\s]+)' => 'site/index',



	'page-([0-9]+)/filter\?([^\s]+)' => 'site/index/$1/$2',

	'page-([0-9]+)\?search\=([^\s]+)/page-([0-9]+)' => 'site/index/$1/$2/$3',
	'page-([0-9]+)\?search\=([^\s]+)' => 'site/index/$1/$2',

	'page-([0-9]+)' => 'site/index/$1',

	'register' => 'user/register',
	'login' => 'user/login',

	'profile/edit' => 'profile/edit',
	'profile' => 'profile/index',

	'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
	'cart/delete/([0-9]+)' => 'cart/delete/$1',
	'cart/clear' => 'cart/clear',
	'cart' => 'cart/index',

	'payment' => 'cart/payment',

	'exit' => 'user/exit', 
	'' => 'site/index', 

	


	);
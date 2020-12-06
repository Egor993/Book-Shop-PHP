<?php
return array(
	'admin/add' => 'admin/add',
	'admin' => 'admin/index',
	'product/([0-9]+)' => 'product/view/$1',
	'page-([0-9]+)' => 'site/index/$1',
	'register' => 'user/register',
	'login' => 'user/login',
	'profile/edit' => 'profile/edit',
	'profile' => 'profile/index',
	// 'cart/add/([0-9]+)' => 'cart/add/$1',
	'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
	'cart/delete/([0-9]+)' => 'cart/delete/$1',
	'cart/clear' => 'cart/clear',
	'payment' => 'cart/payment',
	'cart' => 'cart/index',
	'exit' => 'user/exit',
	
	// 'product' => 'site/index', 
	'' => 'site/index', 

	


	);
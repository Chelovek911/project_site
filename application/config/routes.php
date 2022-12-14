<?php

return [
	// MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'main/index/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'about' => [
		'controller' => 'main',
		'action' => 'about',
	],
	'manufacturing' => [
		'controller' => 'main',
		'action' => 'manufacturing',
	],
	'contacts' => [
		'controller' => 'main',
		'action' => 'contacts',
	],
	'dealers' => [
		'controller' => 'main',
		'action' => 'dealers',
	],
	'partners' => [
		'controller' => 'main',
		'action' => 'partners',
	],
	'polosk_dealers' => [
		'controller' => 'main',
		'action' => 'polosk_dealers',
	],
	'poloskun' => [
		'controller' => 'main',
		'action' => 'poloskun',
	],
	'post/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'post',
	],

	// AdminController
	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'admin/add' => [
		'controller' => 'admin',
		'action' => 'add',
	],
	'admin/edit/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'edit',
	],
	'admin/delete/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'delete',
	],
	'admin/posts/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
	'admin/posts' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
];

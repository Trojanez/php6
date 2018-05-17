<?php 

	return array(
		'user/register' => 'user/register', //actionRegister in UserController
		'user/authorisation' => 'user/authorisation', //actionAuthorisation in UserController
		'category-alcohol/([a-z]+)/([0-9]+)' => 'product/$1/$2', //action$1 in CategoryController
		'category-alcohol/([a-z]+)/page-([0-9]+)' => 'product/category/$1/$2', // actionCategory in ProductController
		'category-alcohol/([a-z]+)' => 'product/category/$1', // actionCategory in ProductController
		'category-alcohol' => 'category/index', //actionIndex in CategoryController
		'^$' => 'main/index', // actionIndex in MainController
	);

	
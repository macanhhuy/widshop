<?php
	Router::connect('/', array('plugin' => 'WidShop', 'controller' => 'pages', 'action' => 'product'));
	Router::connect('/pages/*', array('plugin' => 'WidShop', 'controller' => 'pages', 'action' => 'display'));
	Router::connect('/pages/work', array('plugin' => 'WidShop', 'controller' => 'pages', 'action' => 'work'));
	Router::connect('/offer/:slug', array('plugin' => 'WidShop', 'controller' => 'offers', 'action' => 'view'), array('pass' => array('slug')));
	Router::connect('/service/:slug', array('plugin' => 'WidShop', 'controller' => 'services', 'action' => 'view'), array('pass' => array('slug')));
	Router::connect('/product/*', array('plugin' => 'WidShop', 'controller' => 'pages', 'action' => 'product'));
	Router::connect('/admin/categories', array('admin' => true, 'plugin' => 'WidShop', 'controller' => 'categories', 'action' => 'index'));
	Router::connect('/admin/categories/addCategory', array('admin' => true,'plugin' => 'WidShop', 'controller' => 'categories', 'action' => 'addCategory'));
	Router::connect('/admin/categories/delete/*', array('admin' => true, 'plugin' => 'WidShop', 'controller' => 'categories', 'action' => 'delete'));
	Router::connect('/admin/categories/editCategory/*', array('admin' => true, 'plugin' => 'WidShop', 'controller' => 'categories', 'action' => 'editCategory'));
	Router::connect('/admin/services', array('admin' => true, 'plugin' => 'WidShop', 'controller' => 'services', 'action' => 'index'));
	Router::connect('/admin/services/manageService/*', array('admin' => true, 'plugin' => 'WidShop', 'controller' => 'services', 'action' => 'manageService'));
	Router::connect('/admin/services/delete/*', array('admin' => true, 'plugin' => 'WidShop', 'controller' => 'services', 'action' => 'delete'));
	Router::connect('/services/getCalculatedPrice/*', array('plugin' => 'WidShop', 'controller' => 'services', 'action' => 'getCalculatedPrice'));
	Router::connect('/admin/offers', array('admin' => true, 'plugin' => 'WidShop', 'controller' => 'offers', 'action' => 'index'));
	Router::connect('/admin/offers/manageOffer/*', array('admin' => true, 'plugin' => 'WidShop', 'controller' => 'offers', 'action' => 'manageOffer'));
	Router::connect('/admin/offers/edit/*', array('admin' => true, 'plugin' => 'WidShop', 'controller' => 'offers', 'action' => 'edit'));
	Router::connect('/admin/offers/delete/*', array('admin' => true, 'plugin' => 'WidShop', 'controller' => 'offers', 'action' => 'delete'));
	Router::connect('/admin/currencies', array('admin' => true, 'plugin' => 'WidShop', 'controller' => 'currencies', 'action' => 'index'));
	Router::connect('/admin/feeds_generator', array('admin' => true, 'plugin' => 'WidShop', 'controller' => 'feeds_generator', 'action' => 'index'));
	Router::connect('/orders/confirm/*', array('plugin' => 'WidShop', 'controller' => 'orders', 'action' => 'confirm'));
	Router::connect('/back_orders/list.html', array('plugin' => 'WidShop', 'controller' => 'back_orders', 'action' => 'index'));
	Router::connect('/back_orders/:slug', array('plugin' => 'WidShop', 'controller' => 'back_orders', 'action' => 'backOrderView'), array('pass' => array('slug')));

	Router::connect('/orders/order_success/*', array('plugin' => 'WidShop', 'controller' => 'orders', 'action' => 'order_success'));

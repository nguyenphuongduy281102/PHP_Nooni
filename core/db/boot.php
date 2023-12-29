<?php
session_start();

define('BASE_URL', 'http://localhost/Nooni-web');

require_once 'auth.php';
require_once 'db_product.php';
require_once 'db_category.php';
require_once 'db_order.php';
require_once 'db_order_detail.php';
require_once 'db_users.php';
require_once 'functions.php';
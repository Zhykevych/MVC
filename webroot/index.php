<?php
/**
 * Created by PhpStorm.
 * User: Exon
 * Date: 27.02.2016
 * Time: 15:35
 */
// TODO: comments
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEWS_PATH', ROOT.DS.'views');

require_once(ROOT.DS.'lib'.DS.'init.php');

session_start();

App::run($_SERVER['REQUEST_URI']);

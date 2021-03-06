<?php

/**
 * Index
 *
 * @author  Maxence CAUDERLIER
 * @link    https://github.com/ZestCMS/ZestCMS
 * @license http://opensource.org/licenses/MIT The MIT License
 */
/*
 * Zest directory
 */
define('CORE_PATH', 'zest' . DIRECTORY_SEPARATOR);

/**
 * Public directory
 * All content will be accessible by direct access
 * Best is to put only it in the www directory
 */
define('CONTENT_PATH', 'public' . DIRECTORY_SEPARATOR);

/**
 * Themes directory
 */
define('THEMES_PATH', CONTENT_PATH . 'themes' . DIRECTORY_SEPARATOR);


/* ------------------------------------
 *
 * Do not modify under this
 *
 * ---------------------------------- */

define('DS', DIRECTORY_SEPARATOR);

/**
 * Langs directory
 */
define('LANGS_PATH', CORE_PATH . 'langs' . DS);

/**
 * Content directory
 */
define('CORE_CONTENT_PATH', CORE_PATH . 'content' . DS);

/**
 * Articles directory
 */
define('ARTICLES_PATH', CORE_CONTENT_PATH . 'articles' . DS);

/**
 * Plugins directory
 */
define('PLUGINS_PATH', CORE_PATH . 'plugins' . DS);

require CORE_PATH . 'zest' . DS . 'core' . DS . 'Autoloader.php';

$zest = Zest\Core\Zest::getInstance();

$zest->run();

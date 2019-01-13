<?php 
/**
 * Session_setup.php
 * 
 * Header file session setup
 *   for https://www.skeptycal.com 
 *
 * Setup session and authentication
 *
 * PHP version 7
 *
 * LICENSE: MIT
 *
 * @category  Creative_Portfolio
 * @package   Session_Setup.php
 * @author    Michael Treanor  <skeptycal@gmail.com>
 * @copyright 2018 © Michael Treanor
 * @license   MIT <https://opensource.org/licenses/MIT>
 * @version   GIT: 2.20.1
 * @link      https://www.skeptycal.com/index.php
 * PHP 7.3.0 (cli) (built: Dec  7 2018 11:00:11)
 *
 * @tags
 * @phpcs:disable Generid.Files.LineLength.LineLimit = "120"
 */

// strict typing on ...
declare(strict_types=1);

// ### starting a session
session_start();

// Creating a session
//  # Use of session_register() is deprecated
//  # Use of $_SESSION is preferred

$_SESSION['user_info'] = [
    'user_id' => 1,
    'first_name' => 'me', 
    'last_name' => 'too', 
    'status' => 'active'
];

// Use <unset> to remove a value from session
// unset($_SESSION['user_info']['first_name']);

// Use session_destroy(); to destroy complete session 
// session_destroy();

?>
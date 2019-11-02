<?php
/**
 * Header_Bp.php
 *
 * Header file
 *   for https://www.skeptycal.com (hand coded basic site)
 *
 * This page is intended to have some interesting and intriguing
 * effects to capture the attention of the viewer. In addition,
 * this page has controls in various cryptic formats to other
 * pages and social media sites.
 *
 * PHP version 7
 *
 * LICENSE: MIT
 *
 * @category  Creative_Portfolio
 * @package   Portfolio
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

// ########################################################
require_once 'session_setup.php';
require_once 'http_header_css.php';
require_once 'http_header_seo.php';

/*
Title Tag Template:
==================

Optimal length for the title tag:
Google typically shows 55-64 characters (keep it under 60).
           #########1#########2#########3#########4#########5####|####6###|
                                        Aim for this length  ➜   |    |
 $title = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"
 $title = "";
*/

if ($title = "") {
    $title = "Michael Treanor - Creative Developer";
}

// Output title to html
echo "<title>$title</title>";
echo "</head>"
?>

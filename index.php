<?php 
/**
 * File index.php - landing page for portfolio site 
 *
 * This page is intended to have some interesting and intriguing
 * effect to capture the attention of the viewer. In addition,
 * this page has controls in various cryptic formats to other
 * pages and social media sites.
 *
 * PHP version 7
 *
 * LICENSE: MIT
 *
 * @category   Creative_Portfolio
 * @package    Index
 * @author     Michael Treanor  <skeptycal@gmail.com>
 * @copyright  1997-2005 The PHP Group
 * @license    MIT <https://opensource.org/licenses/MIT>
 * @version    GIT: 1.0.1
 * @link       http://www.skeptycal.com/index.php
 */

 /**
  * Grab requests as needed ...
  */
use Zend\Http\Request;
?>

<!DOCTYPE html>

<html lang="en-US">

<head>
    <?php /**
           * Standard Header
           *
           * @category  Html_Metadata
           * @package   Ad-Hoc
           * @author    Michael Treanor  <skeptycal@gmail.com>
           * @copyright 2019 Michael Treanor
           * @license   MIT <https://opensource.org/licenses/MIT>
           * @version   GIT: 1.0.1
           * @link      <http://www.skeptycal.com/index.php>
           * @PHP       version 7.1
           */
        require_once '/src/head_bp.php' 
    ?>
    <title>Michael Treanor</title>
    <style type="text/css">
        .LI-profile-badge {
            border-radius: 25%;
            position: absolute;
            left: 3%;
            bottom: 3%;
        }
    </style>
</head>

<body>
    <script type="text/javascript" src="/js/jquery-3-2-1.min.js"></script>
    <script type="text/javascript" src="/js/index.js"></script>
    <section class="galaxy-wrapper">
        <canvas id="galaxy" width="100%" height="100%"></canvas>
        <section class="main">
            <br /><br /><br />
            <h1>Michael Treanor</h1>
            <h2>skeptic | educator | maker | parent |
                curious | creative | introvert</h2>
            <br>
            <h2>Development Environment</h2>
        </section>
        <div class="LI-profile-badge" data-version="v1" data-size="medium" data-locale="en_US" data-type="vertical"
            data-theme="dark" data-vanity="skeptycal">
            <a class="LI-simple-link" href='https://www.linkedin.com/in/skeptycal?trk=profile-badge'>
                Michael Treanor
            </a>
        </div>
        <?php require_once '/src/footer_social.php' ?>
    </section>
</body>

</html>
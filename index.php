<?php 
/**
 * File index.php - 
 * 
 * Landing page for portfolio site 
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
 * @category  Creative_Portfolio
 * @package   Index
 * @author    Michael Treanor  <skeptycal@gmail.com>
 * @copyright 2018 © Michael Treanor
 * @license   MIT <https://opensource.org/licenses/MIT>
 * @version   GIT: 1.1.0
 * @link      http://www.skeptycal.com/index.php
 */

 // Grab requests as needed ... 
 // use Zend\Http\Request;
?>

<!DOCTYPE html>

<html lang="en-US">

<head>
    <?php 
        // Add standard header
        require_once 'src/head_bp.php' 
    ?>
    <title>Michael Treanor</title>
    
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
        
        <?php
            require_once 'src/linkedin_badge.php';
            require_once 'src/footer_social.php';
        ?>
    </section>
</body>

</html>
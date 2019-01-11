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
 * @package   Header_Bp.php
 * @author    Michael Treanor  <skeptycal@gmail.com>
 * @copyright 2018 © Michael Treanor
 * @license   MIT <https://opensource.org/licenses/MIT>
 * @version   GIT: 1.1.0
 * @link      http://www.skeptycal.com/index.php
 * PHP 7.3.0 (cli) (built: Dec  7 2018 11:00:11)
 *
 * @tags
 * @phpcs:disable Generid.Files.LineLength.LineLimit = "120"
 */

// starting a session
session_start();

// Creating a session
// Use of session_register() is deprecated
// session_register("username");
// Use of $_SESSION is preferred

$_SESSION['user_info'] = [
    'user_id' => 1,
    'first_name' => 'me', 
    'last_name' => 'too', 
    'status' => 'active'
];


// <unset> to remove a value from session

// unset($_SESSION['user_info']['first_name']);

// destroying complete session

// session_destroy();

?>

<!DOCTYPE html>

<html lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name=”viewport” content=”width=device-width, initial-scale=1″ />

    <link rel=”canonical” href=”https://www.example.com” />
    <base href="http://www.skeptycal.com/" target="_self" />
    <meta name="description" content="Michael Treanor is a creative software developer focused on data science, python, php, and scripting." />


    <meta property="og:title" content="Michael Treanor" />
    <meta name="og:description" property="og:description" content="Michael Treanor is a creative software developer working in Texas." />
    <meta property="og:url" content="http://www.skeptycal.com" />
    <meta property="og:image:secure_url" content="https://en.gravatar.com/userimage/20578593/68f0ec70ffec7aba965e4da3d1ac272e.png" />
    <meta property="og:image:alt" content="Profile Picture for Michael Treanor" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@skeptycal" />
    <meta name="twitter:title" content="Michael Treanor" />
    <meta name="twitter:description" content="Michael Treanor is a creative software developer focused on data science, python, php, and scripting." />


    <meta name="p:domain_verify" content="7477b2a3c6b14b5096c72826c74650fd" />
    <meta name="p:domain_verify" content="3e117c74ae0a44e0c334ccc9dfa25b65" />
    <!-- fetch likely portfolio pages -->
    <link rel="dns-prefetch" href="/">

    <link async defer rel="stylesheet prefetch" href="https://cdn.jsdelivr.net/gh/tonsky/FiraCode@1.206/distr/fira_code.css">
    <link async defer rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Muli:200,900">

<?php
    // normalize replaced with https://github.com/sindresorhus/modern-normalize
    // "All credit should go to normalize.css. I just removed some cruft and added some improvements. If you have questions about the source, check out the original source <https://github.com/necolas/normalize.css/blame/master/normalize.css> and this <https://github.com/necolas/normalize.css#extended-details-and-known-issues> for details."
    //<link async defer rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />
?>

    <link async defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/0.5.0/modern-normalize.css" />

    <link rel="stylesheet" href="/css/index.css" />
    <script async defer type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" />
    </script>
    <script async defer type="text/javascript" src="/js/jquery-3-2-1.min.js"></script>

<?php    
//     current image:
//     https://www.nasa.gov/sites/default/files/images/672309main_M107_full.jpg 
//     Courtesy of NASA.
    
//     secondary image: An infrared image showing fledgling stars located in 
//     the Orion Nebula. Created: 29 February 2012. 
//     <a href="https://www.nasa.gov/multimedia/imagegallery/image_feature_2195.html">
//     Image credit: NASA</a>
                
//     Icons and other resources by Rawpixel.com and Ydlabs, among others. 
//     <a href="https://www.freepik.com/free-photos-vectors/background">Freepik.com</a>

//     Artistic site design inspiration by 
//     <a href="https://github.com/saracope">Sara Cope</a>.
?>

    <!-- Hotjar Tracking Code for www.skeptycal.com -->
    <script async defer>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1139467,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <!-- Hotjar Tracking Code for www.skeptycal.com -->

<?php 

// title tag section
// Optimal length for the title tag: 
// Google typically shows 55-64 characters (keep it under 60). 

if ($title = "") {
    $title = "Michael Treanor is a creative software developer focused on data science, python, php, and scripting.";
}

// Output title in html code
echo "<title>$title</title>";
echo "</head>";
?>
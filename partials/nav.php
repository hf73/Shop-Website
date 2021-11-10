<?php
//Note: this is to resolve cookie issues with port numbers
$domain = $_SERVER["HTTP_HOST"];
if (strpos($domain, ":")) {
    $domain = explode(":", $domain)[0];
}
session_set_cookie_params([
    "lifetime" => 60 * 60,
    "path" => "/Project",
    //"domain" => $_SERVER["HTTP_HOST"] || "localhost",
    "domain" => $domain,
    "secure" => true,
    "httponly" => true,
    "samesite" => "lax"
]);
session_start();
require_once(__DIR__ . "/../lib/functions.php");

?>
<nav>
    <ul>
        <?php if (is_logged_in()) : ?>
            <li><a href="home.php">Home</a></li>
        <?php endif; ?>
        <?php if (!is_logged_in()) : ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        <?php endif; ?>
        <?php if (is_logged_in()) : ?>
            <li><a href="logout.php">Logout</a></li>
        <?php endif; ?>
    </ul>
</nav>

<style>
        nav ul{     /* background color */
            background-color: black;
            padding: 0;
            margin: 0;
        }
        nav ul li{  /* list horizontal + remove bullet*/
            display: inline-block;
            list-style: none;
        }
        nav li a{  /* background  */
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav li a:hover{   /* change color on hover*/
            color: blue;
        }

        ul li{     /* change bullet to checks */
            list-style: '✓';
        }

        h1{
            text-transform: capitalize;
            
        }

        a{
            text-transform: capitalize; 
        }
        /* TODO: make edits here */
    </style>
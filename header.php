<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- BootStrap Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#282828" />
    <link rel="icon" href="favicon.png">
    <title>Gyan Ganga</title>
    <!-- Fonts Start-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <!--Fonts End-->

<!--    Style Sheet Section-->
<?php include_once "modules/style_loader.php"; ?>
<!--    Style Sheet Section End-->

    <!--Script For Smooth Scroll-->
    <script>
        function scroll_to(elementn) {
            $('html, body').animate({
                scrollTop: $(elementn).offset().top
            }, 1000);
        }
    </script>
    <!--Script For Smooth Scroll End-->

</head>
<div class="load"><div class="load-image animated tada infinite"></div></div>
<!--Navbar Placement Start-->
<?php include "modules/nav_bar.php"; ?>
<!--Navbar Placement End-->
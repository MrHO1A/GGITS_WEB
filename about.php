<?php include "header.php"; ?>


<!--    Particle Js-->
<script>
    particlesJS.load('particles-js','json_cfg/particlesjs-config.json',function () {
        console.log("Started");
    });
</script>
<!--    Particle Js End-->

<?php include "preloader.php"; ?>
</head>

<div class="load"><div class="load-image animated tada infinite"></div></div>
<!--Navbar Placement Start-->
<?php include "nav_bar.php"; ?>
<!--Navbar Placement End-->

<!--Content Section-->
<?php
$url = __DIR__."/modules/json_data/about_us_data.json";
$content = file_get_contents($url);
$content = json_decode($content,true)["data"];
foreach ($content as $data){
    if($data["title"]=="vision" or $data["title"] == "mission"){
        ?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3"><?php echo $data[] ?></h1>
                <p class="lead">Jumbo helper text</p>
                <hr class="my-2">
                <p>More info</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                </p>
            </div>
        </div>
        <?php
    }
}
?>

<!--Content Section End-->



<?php include "footer.php"; ?>
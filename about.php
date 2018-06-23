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
    switch ($data['title']) {
        case "Vision":
        ?>
            <div class="jumbotron jumbotron-fluid border border-light rounded" id="vision">
                <div class="container">
                    <h1 class="display-3"><?=$data['title']?></h1>
                    <p class="lead"><?=$data['vision']['heading']?></p>
                    <hr class="my-2">
                    <p class="lead">
                        <ul>
                        <?php
                        foreach($data['vision']['points'] as $p) {
                            echo "<li>".$p."</li>";
                        }
                        ?>
                        </ul>
                    </p>
                </div>
            </div>
        <?php
            break;
        case "Mission":
            ?>
            <div class="jumbotron jumbotron-fluid border border-light rounded" id="mission">
                <div class="container">
                    <h1 class="display-3"><?=$data['title']?></h1>
                    <p class="lead"><?=$data['mission']['heading']?></p>
                    <hr class="my-2">
                    <p class="lead">
                    <ul>
                        <?php
                        foreach($data['mission']['points'] as $p) {
                            echo "<li>".$p."</li>";
                        }
                        ?>
                    </ul>
                    </p>
                </div>
            </div>
        <?php
            break;
        case "Quality Policy":
            ?>
            <div class="jumbotron jumbotron-fluid border border-light rounded" id="quality">
                <div class="container">
                    <h1 class="display-3"><?=$data['title']?></h1>
                    <p class="lead"><?=$data['quality_policy']['heading']?></p>
                    <hr class="my-2">
                    <p class="lead">
                        <?=$data['quality_policy']['content']?>
                    </p>
                    <hr class="my-2">
                    <p class="lead">
                        <?=$data['quality_policy']['moto']?>
                    </p>
                </div>
            </div>
        <?php
            break;
        case "PEO":
            ?>
            <div class="jumbotron jumbotron-fluid border border-light rounded" id="peo">
                <div class="container">
                    <h1 class="display-3"><?=$data['title']?></h1>
                    <hr class="my-2">
                    <p class="lead">
                    <ul>
                        <?php
                        foreach($data['peo']['data'] as $p) {
                            echo "<li>".$p."</li>";
                        }
                        ?>
                    </ul>
                    </p>
                </div>
            </div>
        <?php
            break;
    }
}
?>

<!--Content Section End-->



<?php include "footer.php"; ?>
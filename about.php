<?php include_once "header.php"; ?>
            <!--Content Section-->
            <?php
$url = __DIR__."/modules/json_data/about_us_data.json";
$content = file_get_contents($url);
$content = json_decode($content,true)["data"];
foreach ($content as $data){
    switch ($data['title']) {
        case "Vision":
        ?>
                <div class="jumbotron jumbotron-fluid border border-light rounded sand-bg" id="vision">
                    <div class="container">
                        <h1 class="display-3 text-maroon text-center"><?=$data['title']?></h1>
                        <p class="lead">
                            <?=$data['vision']['heading']?>
                        </p>
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
                    <div class="jumbotron jumbotron-fluid border border-light rounded sand-bg" id="mission">
                        <div class="container">
                            <h1 class="display-3 text-maroon text-center"><?=$data['title']?></h1>
                            <p class="lead">
                                <?=$data['mission']['heading']?>
                            </p>
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
        case "Management Board":
            ?>
                        <div class="jumbotron jumbotron-fluid border border-light rounded sand-bg" id="management">
                            <div class="container">
                                <h1 class="display-4 text-maroon text-center"><?=$data['title']?></h1>
                                <hr class="my-2">
                                <div class="container-fluid">
                                    <p class="text-center"><img src="<?= $data['src'] ?>" alt="Management Board" class="img-fluid"></p>
                                </div>
                            </div>
                        </div>
                        <?php
            break;
        case "Quality Policy":
            ?>
                            <div class="jumbotron jumbotron-fluid border border-light rounded sand-bg" id="quality">
                                <div class="container">
                                    <h1 class="display-3 text-maroon text-center"><?=$data['title']?></h1>
                                    <p class="lead">
                                        <?=$data['quality_policy']['heading']?>
                                    </p>
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
                                <div class="jumbotron jumbotron-fluid border border-light rounded sand-bg" id="peo">
                                    <div class="container">
                                        <h1 class="display-3 text-maroon text-center"><?=$data['title']?></h1>
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
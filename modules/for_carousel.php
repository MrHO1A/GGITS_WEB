<?php
//Import CFG
include_once "server_cfg.php";

$url = __DIR__."/json_data/carousel.json";
$json = json_decode(file_get_contents($url),true)["car_data"];

//Server url
$s_url = server_addr."/image/carousel/";

//Getting Total Number Of Elements
$total_elem = sizeof($json);
?>
<div id="main-car" class="carousel slideInDown" data-ride="carousel" style="margin-bottom: 19px;">
    <ol class="carousel-indicators">
        <?php for($i=0;$i<$total_elem;$i++){
            //Php Code To Make Carousel Indecators
            if($i==0){
                ?><li data-target="#main-car" data-slide-to="0" class="active"></li><?php
            }
            else{
                ?>
                <li data-target="#main-car" data-slide-to="<?php echo $i; ?>"></li>
                <?php
            }
        } ?>
    </ol>
    <div class="carousel-inner" role="listbox" >
        <?php
        //For Adding Carousel Images
        for($i=0;$i<$total_elem;$i++){
            $image = $s_url.$json[$i]["image"];
            if($i==0){

                ?>
                <div class="carousel-item active">
                    <img src="<?php echo $image; ?>" class="d-block w-100 img-fluid" alt="First slide">
                    <div class="carousel-caption">
                        <h3><?php echo $json[$i]["title"];?></h3>

                    </div>
                </div>
        <?php

            }
            else{
                ?>
                <div class="carousel-item">
                    <img src="<?php echo $image; ?>" class="d-block w-100" alt="First slide">
                    <div class="carousel-caption">
                        <h3><?php echo $json[$i]["title"];?></h3>

                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
    <a class="carousel-control-prev" href="#main-car" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#main-car" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
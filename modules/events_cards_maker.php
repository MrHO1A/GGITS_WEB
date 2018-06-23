<?php
$url = __DIR__."/json_data/events.json";
$json = json_decode(file_get_contents($url),true);

//Some Base URLs
$image_url = server_addr."/image/events/";
//End
$json = $json["events_data"];
foreach ($json as $item) {

    ?>
    <div class="col-md-5 d-flex align-items-stretch">
        <div class="card mar-bottom">
            <img class="card-img-top" src="<?php echo $image_url . $item["ev_image"]; ?>" alt="Card image">
            <div class="card-body" style="overflow: auto">
                <!--Date Container-->
                <span class="badge badge-dark"><?php echo $item["ev_date"]; ?></span>
                <!--Date Container End-->
                <a><h4 class="card-title text-meg"><?php echo $item['ev_name']; ?></h4></a>
                <p class="card-text" style="max-height: 70px; overflow: hidden">
                    <?php
                    $text = $item["ev_data"];
                    echo trim(substr($text,0,120))   ."...";

//                    $text = explode(" ",$text);
//                    for($i = 0;$i<18;$i++){
//                        echo $text[$i]. " ";
//                    }
//                    echo " ..."
                    ?>
                </p>
                <!--Time-->
                <p class="text-dark time-card"><?php echo $item['ev_time']; ?></p>
                <!--Time End-->
            </div>

        </div>
    </div>

    <?php } ?>

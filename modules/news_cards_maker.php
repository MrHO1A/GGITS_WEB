<?php
include_once "xml_to_array.php";
$xml_url = "http://ggits.net/wp-rss2.php";
$contents = file_get_contents($xml_url);

$contents = xmlstr_to_array($contents)["channel"]["item"];
//Max Post Count
$init = 0;
$max = 3;
//
foreach ($contents as $item){
if($init<$max) {
    ?>

    <div class="col-md-4 d-flex align-items-stretch">
        <div class="card mar-bottom">
            <div class="card-body">
                <h4 class="card-title"><?php echo $item["title"]; ?></h4>
                <p class="card-text"><?php
                    echo substr($item["description"], 0, 90) . "...";
                    ?></p>
                <a href="<?php echo $item["link"]; ?>" target="_blank" class="btn maroon">View News</a>
            </div>
        </div>
    </div>
    <?php
$init++;
}
}
?>

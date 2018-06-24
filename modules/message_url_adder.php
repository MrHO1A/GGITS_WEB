<?php
//This Script Adds Contents To DropDown
include_once "server_cfg.php";
$url = __DIR__."/json_data/message_data.json";
$data = json_decode(file_get_contents($url),true);
foreach ($data as $item){
    ?>
    <a href="<?php echo server_addr."message/".$item["link"]; ?>" class="dropdown-item"><?php echo $item["name"]; ?></a>
<?php
}
?>


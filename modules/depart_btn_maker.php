<?php
$url = __DIR__."/json_data/department_data.json";
$data = json_decode(file_get_contents($url),true)["dept_data"];
foreach ($data as $item){
    ?>
    <div class="col-md mar-bottom">
    <a href="<?php echo $item["dept-link"]; ?>" style="text-decoration: none"><button class="maroon_btn btn btn-block" role="button"><?php echo $item["dept_name"]; ?></button></a>
    </div>
    <?php
}
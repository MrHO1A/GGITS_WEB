<?php include "header.php"; ?>

<!--Logical Code-->
<?php
//Getting Json Data
$url = __DIR__."/modules/json_data/message_data.json";
$contents =  json_decode(file_get_contents($url),true);

//Content Setter
$name = $_GET["name"];
try{
    $data = $contents[$name];
    $name = $data["name"];
    $des = $data["position"];
    $cont = $data["data"];
}
catch (Exception $e){
    header("location:index.php");
}


?>
<!--Logical Code End-->
    <!--Content Section-->
    <div class="jumbotron jumbotron-fluid sand-bg">
        <div class="container">
            <h1 class="display-3 text-center">Message</h1>
            <hr class="my-2 mar-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <!--Image Container-->
                    </div>
                    <div class="col-md-6">
                        <p style="font-size: 20px"><?php echo $cont; ?></p>
                        <p class="text-right f-24 mar-remove"><b><?php echo $name; ?></b></p>
                        <p class="text-right">(<?php echo $des; ?>)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Content Section End-->

<?php include "footer.php"; ?>
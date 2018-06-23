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

<!--Full Width Header Start-->
<div class="jumbotron jumbotron-fluid paral wide">
    <div id="particles-js"></div>
    <div class="container vertical-center" >
        <p class="text-center"><img src="image/logo.png"
                                    class="img-fluid"
                                    alt="LOGO" width="150" height="150"></p>
        <h1 class="display-4 text-center animated fadeInDown maroon" style="padding-right: 10px;padding-left: 10px;padding-bottom: 10px;" >Gyan Ganga Institute of Technology and Science</h1>
    </div>
    <div class="icon-to-bottom">
        <p class="text-center"><a href="#" role="button" class="btn btn-lg maroon" onclick="scroll_to('#content')">Explore <i class="fa fa-arrow-down" aria-hidden="true"></i></a></p>
    </div>
</div>
<!--Full Width Header End-->

<!--Content Section Start-->
<div class="jumbotron sand-bg" id="content">
        <h1 class="text-center display-4">Gyan Ganga Today</h1>
        <p class="lead text-center">
            The Latest News From Gyan Ganga
        </p>
        <hr class="my-4" />

        <!--    Carousel Container Start-->
        <?php include_once "modules/for_carousel.php"; ?>
        <!--    Carousel Container End-->


<h1 class="text-center">Latest News</h1>
<hr class="my-0 mar-bottom"/>
        <!--News Card Container Start-->
        <div class="container mar-bottom">
            <div class="row justify-content-center">
                <?php include_once "modules/news_cards_maker.php"; ?>
            </div>
        </div>
        <!--News Card Container End-->
        <p class="text-center mar-remove"><button type="button" class="btn btn-lg maroon mar-bottom border-r-remove" style="padding-left: 60px;padding-right: 60px;">View More News!
            </button></p>
</div>



<!--Content Section End-->

<!--Events Section Start-->
<div class="container-fluid" style="background-color: #2f2424">
    <h1 class="text-center display-4 text-white">Gyan Ganga Events</h1>
    <p class="lead text-white text-center">
        What's happening in campus
    </p>
    <hr class="my-2 border-white mar-bottom" />
    <div class="container">
        <div class="row justify-content-center">
            <?php include_once "modules/events_cards_maker.php"; ?>
        </div>
    </div>
    <p class="text-center mar-remove"><button type="button" class="btn btn-lg maroon mar-bottom border-r-remove" style="padding-left: 60px;padding-right: 60px;">View More Events!
        </button></p>
</div>

<!--Acadmic Section-->
<div class="jumbotron jumbotron-fluid" style="background-color: #f9f6ef;">
    <div class="container">
        <h1 class="display-4 text-center">Academics</h1>
        <p class="lead text-center">Preparing students to make meaningful contributions to society as engaged citizens and leaders in a complex world</p>
        <hr class="my-2">
        <div class="row">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card card-spl-margin">
                    <div class="card-body">
                        <h1 class="card-title text-center card-icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></h1>
                        <h6 class="card-subtitle mb-2 text-center title">Undergraduate Education</h6>
                        <hr class="my-4" />
                        <p class="card-text">Rich learning experiences that provide a broad liberal arts foundation and deep subject-area expertise</p>
                        <a href="#" class="links-for-sections">Undergraduate Education</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card card-spl-margin">
                    <div class="card-body">
                        <h1 class="card-title text-center card-icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></h1>
                        <h6 class="card-subtitle mb-2 text-center title">Graduate Education</h6>
                        <hr class="my-4" />
                        <p class="card-text">Unsurpassed opportunities to participate in the advancement of entire fields of knowledge</p>
                        <a href="#" class="links-for-sections">Graduate Education</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card card-spl-margin">
                    <div class="card-body">
                        <h1 class="card-title text-center card-icon"><i class="fa fa-user" aria-hidden="true"></i></h1>
                        <h6 class="card-subtitle mb-2 text-center title">OUR MOUs</h6>
                        <hr class="my-4" />
                        <p class="card-text">Continuing adult education, executive and professional programs, and programs for K-12 students</p>
                        <a href="#" class="links-for-sections">Show MOUs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3 class="display-4 text-center">Seven Branches To Pursue Your Passion</h3>
    <div class="container">
        <div class="row">
            <?php include_once "modules/depart_btn_maker.php"; ?>
        </div>
    </div>
</div>
<!--Acadmics Section End-->

<?php include "footer.php"; ?>

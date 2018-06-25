<?php include_once "server_cfg.php"; ?>
<script type="text/javascript" src="<?php echo server_addr; ?>js/jquery-3.3.1.min.js"></script>
<script src="<?php echo server_addr; ?>js/jquery-ui.min.js" defer="defer"></script>
<script src="<?php echo server_addr; ?>js/fontawesome-all.min.js" defer="defer"></script>
<script type="text/javascript" src="<?php echo server_addr; ?>js/bootstrap.bundle.min.js" defer="defer"></script>
<script src="<?php echo server_addr; ?>js/ekko-lightbox.js" defer="defer"></script>
<script src="<?php echo server_addr; ?>js/particles.js" defer="defer"></script>
<!--preloader Script-->
<script>
    $(window).on("load",function () {
        $('.load').fadeOut('slow');
    });
</script>
<!--Preloader Script End-->
<!--    Particle Js-->
<script>
    particlesJS.load('particles-js','json_cfg/particlesjs-config.json',function () {
        console.log("Started");
    });
</script>
<!--    Particle Js End-->



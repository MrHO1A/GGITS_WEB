<script>
    $(window).on("load",function () {
        $('.load').fadeOut('slow');
    });
</script>
<style>
    .load{
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9998;
        background: white;
        opacity: .9;
    }
    .load-image{
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url("image/logo.png") 50% 50% no-repeat;
    }
</style>
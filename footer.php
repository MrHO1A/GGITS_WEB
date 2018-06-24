<!--Footer Start-->
<footer class="footer">
    <div class="container">
        <span class="text-muted">Gyan Ganga Institute of Technology and Science &copy;2018</span>
    </div>
</footer>
<!--Footer End-->

<!--Scripts-->
<?php include_once "modules/script_loader.php";
//php to load javascripts external
?>
<!--Scripts End-->
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            leftArrow: '<span style="color: #b1040e">&#10094;</span>',
            rightArrow: '<span style="color: #b1040e">&#10095;</span>'
        });
    });
</script>
</body>
</html>

<!-- FOOTER -->
<div class="container footerHoutlyn" style="margin-top: 90px">
    <div class="col">
      <center><a href="www.houtlyn.com.br"><img src="<?php bloginfo('template_url'); ?>/images/houtlynLogoBranca.png" alt=""></a></center>
      <p class="copyFooter"> <?php echo date('Y') ?> - <a href="#SITE_URL_PHP"> www.site.com.br </a> </p>
    </div>
  </div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/popper.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/ie10-viewport-bug-workaround.js"></script>

<script type="text/javascript">
  $(window).on('load', function () {
  $("#coverScreen").hide();
  });
  $("#ucNoteGrid_grdViewNotes_ctl01_btnPrint").click(function () {
  $("#coverScreen").show();
  });
</script>

</head>
</html>

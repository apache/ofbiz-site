<?php 
/*
 * arguments:
 */
?>
<script type="text/javascript" src="<?= $base_url ?>js/plugins/respond/respond.min.js"></script>
<script type="text/javascript" src="<?= $base_url ?>js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="<?= $base_url ?>js/jquery-migrate-1.0.0.min.js"></script>
<script type="text/javascript" src="<?= $base_url ?>js/plugins/jquery-browser-plugin/jquery.browser.min.js"></script>
<!-- third party plugins  -->
<script type="text/javascript" src="<?= $base_url ?>bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="<?= $base_url ?>bootstrap/js/bootstrap-carousel.js"></script>
<script type="text/javascript" src="<?= $base_url ?>js/plugins/easing/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?= $base_url ?>js/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?= $base_url ?>js/plugins/hoverdir/jquery.hoverdir.js"></script>
<!-- jQuery KenBurn Slider  -->
<script type="text/javascript" src="<?= $base_url ?>js/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?= $base_url ?>js/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Custom  -->
<script type="text/javascript" src="<?= $base_url ?>js/custom.js"></script>
<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before
"trackPageView" */
  /* We explicitly disable cookie tracking to avoid privacy issues */
  _paq.push(['disableCookies']);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://analytics.apache.org/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '21']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->

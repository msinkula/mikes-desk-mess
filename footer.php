<?php get_sidebar('sidebar'); ?>

</div>
<!-- END MIDDLE -->

<!-- BEGIN FOOTER -->
<div id="footer">
	<p>&copy; 1970 - <?php echo date("Y"); ?> <a href="http://www.mikesinkula.com">Mike Sinkula</a>. All rights reserved. <span class="alignright"><?php wp_register('','...'); ?>&nbsp;&nbsp;&nbsp;<?php wp_loginout(); ?>...</span></p>
</div>
<!-- BEGIN FOOTER -->

<!-- BEGIN ANALYTICS -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-3981006-3");
pageTracker._trackPageview();
} catch(err) {}</script>
<!-- END ANALYTICS -->

<!--[if lt IE 9]>
<script language="JavaScript" type="text/javascript">
alert("It appears that you are using an outdated version of Internet Explorer that does not support HTML5 or CSS3.")
</script><![endif]-->

<!-- BEGIN WP FOOTER -->
<?php wp_footer(); ?>
<!-- END WP FOOTER -->

</body>
</html>
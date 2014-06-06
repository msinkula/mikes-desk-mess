<!-- Begin Sidebar -->
<div id="sidebar">
    <div id="sea-men">
    	<a href="http://twitter.com/mikesinkula" title="Mike Sinkula's Twitter Feed" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/img-twitter.png" alt="Mike Sinkula's Twitter Feed" /></a>
        <a href="http://www.facebook.com/msinkula?ref=profile"  title="Mike Sinkula's FaceBook Page" target="_blank"><img title="Mike Sinkula's FaceBook Page" src="<?php bloginfo('template_directory'); ?>/images/img-facebook.png" alt="Mike Sinkula's FaceBook Page"  /></a>
        <a href="http://www.linkedin.com/ppl/webprofile?action=vmi&amp;id=5408871&amp;pvs=pp&amp;authToken=C0zy&amp;authType=name&amp;trk=ppro_viewmore&amp;lnk=vw_pprofile" title="Mike Sinkula's LinkedIn Profile" target="_blank"><img title="Mike Sinkula's LinkedIn Profile" src="<?php bloginfo('template_directory'); ?>/images/img-linkedin.png" alt="Mike Sinkula's LinkedIn Profile"  /></a>
        <a href="http://www.youtube.com/user/mikesinkula/videos" title="Mike Sinkula's YouTube Channel" target="_blank"><img title="Mike Sinkula's YouTube Channel" src="<?php bloginfo('template_directory'); ?>/images/img-youtube.png" alt="Mike Sinkula's YouTube Channel"  /></a>
        <a href="http://www.flickr.com/photos/51088942@N05/" title="Mike Sinkula's Flickr Photo Stream" target="_blank"><img title="Mike Sinkula's Flickr Photo Stream" src="<?php bloginfo('template_directory'); ?>/images/img-flickr.png" alt="Mike Sinkula's Flickr Photo Stream"  /></a>
        </div>
    
    <!-- Begin Dynamic Sidebar -->
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar') ) : else : ?>					
    <?php endif; ?>
    <!-- End Dynamic Sidebar -->
    
</div>
<!-- End Sidebar -->
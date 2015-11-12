<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php get_my_title_tag(); ?></title>

<!-- START META -->
<meta name="description" content="<?php get_my_meta_description(); ?>" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<!-- END META --> 

<!-- Begin Open Graph Meta for Facebook -->
<meta property="og:title" content="<?php the_title(); ?>"/>
<meta property="og:description" content="<?php echo get_my_meta_description(); ?>" />
<meta property="og:url" content="<?php the_permalink(); ?>"/>
<?php $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'thumbnail'); ?>
<?php if ($fb_image) : ?>
<meta property="og:image" content="<?php echo $fb_image[0]; ?>" />
<?php endif; ?>
<meta property="og:type" content="<?php if (is_single() || is_page()) { echo "article"; } else { echo "website";} ?>"
/>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
<!-- End Open Graph Meta for Facebook -->


<!-- BEGIN MY LINKS -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/ico-poop.png" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" media="all" />
<!-- END MY LINKS -->

<!-- BEGIN MY SCRIPTS -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
<!-- BEGIN MY SCRIPTS -->

<!-- Begin Flex Slider -->
<script type="text/javascript">
    
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
		slideshow: false,
		smoothHeight: true,
      });
    });
	
</script>
<!-- End Flex Slider -->

<!-- BEGIN WP HEAD -->
<?php wp_head(); ?>
<!-- END WP HEAD -->

</head>

<body <?php body_class(); ?>>

<!-- BEGIN HEADER -->
<div id="header">

	<!-- BEGIN LOGO -->
    <div id="logo">
    <a href="http://www.mikesinkula.com" title="Mike Sinkula's Home Page"><img src="<?php bloginfo('template_directory'); ?>/images/img-logo.png" alt="MikeSinkula.com" longdesc="http://www.mikesinkula.com" /></a>    
    </div>
	<!-- END LOGO -->
	
    <!-- BEGIN TCHOTCHKES -->
    <div id="tchotchkes">
    <a href="http://www.masters.mikesinkula.com/" target="_blank" title="Link to Mike's Masters Blog"><img id="tchotchkes-masters" src="<?php bloginfo('template_directory'); ?>/images/img-tchotchkes-masters.png" alt="Mike's Masters Blog" /></a>
    
    <a href="http://www.premiumdw.com/" target="_blank" title="Link to Mike's Business Website"><img id="tchotchkes-business" src="<?php bloginfo('template_directory'); ?>/images/img-tchotchkes-business.png" alt="Mike's Business Website" /></a>
    <a href="http://www.sccc.premiumdw.com/" target="_blank" title="Link to Mike's Student Website"><img id="tchotchkes-school" src="<?php bloginfo('template_directory'); ?>/images/img-tchotchkes-students.png" alt="Mike's Student Website" /></a>
  </div>
  <!-- END TCHOTCHKES -->
    
</div>
<!-- END HEADER -->

<!-- BEGIN PRINT HEADER -->
<div id="print-header">
    <h1>MikeSinkula.com</h1>
</div>
<!-- END PRINT HEADER -->

<!-- BEGIN MENU -->
<div id="menu">
	<nav class="main">
    <ul id="menu-items">
    <li class="<?php if ( is_home() || is_single() || is_archive()) { print 'current_page_item'; } ?>"><a href="<?php echo get_option('home'); ?>" title="Mike Sinkula's Blog">Blog</a></li>
    <?php wp_list_pages('post_title&depth=1&title_li='); ?>
    </ul>
    </nav>
</div>
<!-- END MENU --> 

<!-- BEGIN TOPPER -->
<div id="topper"><img src="<?php bloginfo('template_directory'); ?>/images/bg-topper.png" /></div>
<!-- END TOPPER -->

<!-- BEGIN MIDDLE -->
<div id="middle">
<nav class="select">
<?php 

	$pageslabel = array('show_option_none' => 'Pages:'); 
	
	wp_dropdown_pages( $pageslabel); // creates the dropdown list of pages in WordPress with a label of 'Pages:'

?>

<script type="text/javascript">
    
    var pageDropdown = document.getElementById("page_id");
    
    function onPageChange() { // creates the link to the page's id
    
        if ( pageDropdown.options[pageDropdown.selectedIndex].value > 0 ) {
            
            location.href = "<?php echo get_option('home'); ?>/?page_id="+pageDropdown.options[pageDropdown.selectedIndex].value;
            
        }
        
    }
    
    pageDropdown.onchange = onPageChange;
    
</script>
 
</nav>
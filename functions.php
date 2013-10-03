<?php

if ( function_exists('register_sidebar') )
	register_sidebars(array(
	'name' => 'sidebar',
	'description' => 'Widgets in this area will be shown in the side bar.',
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
	));
	
	register_sidebar(array(
	'name' => 'menubar',
	'description' => 'Widgets in this area will be shown in the menu bar.',
	'before_widget' => '<div class="menu-widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="menu-widget-head">',
	'after_title' => '</h2>'
	));
	
function show_avatar($comment, $size) {				
	 $email=strtolower(trim($comment->comment_author_email));
	 $rating = "G"; // [G | PG | R | X]
	 
	if (function_exists('get_avatar')) {
      echo get_avatar($email, $size);
   	} 
   	else {
      
      $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=
         " . md5($emaill) . "&size=" . $size."&rating=".$rating;
      echo "<img src='$grav_url'/>";
   	}		
}
	
function new_excerpt_more($more) {
       global $post;
	return '<a href="'. get_permalink($post->ID) . '">Read the Rest...</a>';
}

function add_poop() {
	return '<p>Poop.</p>';
}

if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 130, 130, true ); // default Post Thumbnail dimensions (cropped)
	}
	
function add_flexslider() { // display attachment images as a flexslider gallery
	
	$attachments = get_children(array('post_parent' => get_the_ID(), 'order' => 'ASC',/*'orderby' => 'menu_order',*/ 'post_type' => 'attachment', 'post_mime_type' => 'image','caption' => $attachment->post_excerpt, ));
	
	if ($attachments) { // see if there are images attached to posting ?>
        
    <!-- Begin Slider --> 
    <div class="flexslider">
    <ul class="slides">
    
    <?php // create the list items for images with captions
    
    foreach ( $attachments as $attachment_id => $attachment ) { 
    
        echo '<li>';
        echo wp_get_attachment_image($attachment_id, 'large');
        echo '<p>';
        echo get_post_field('post_excerpt', $attachment->ID);
        echo '</p>';
        echo '</li>';
        
    } ?>
    
    </ul>
    </div>
    <!-- End Slider -->
        
	<?php } // end see if images
	
} // end add flexslider
	
	
?>


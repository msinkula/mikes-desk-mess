<?php
/*  
Theme Name: Mike's Desk Mess
Description: This is a theme your mom and her sister would love.
Version: 69
Author: Premium Design Works
Author URI: http://www.premiumdw.com/
*/

// Link to admin styles
add_editor_style( 'admin.css' );

// Register Sidebars
if ( function_exists('register_sidebar') )
	register_sidebars(array(
	'name' => 'sidebar',
	'description' => 'Widgets in this area will be shown in the side bar.',
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
	));
	
// Enable Featured Image
add_theme_support( 'post-thumbnails' ); 

// Show Gravitars	
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

// My First Function!
function add_poop() {
	return '<p>Poop.</p>';
}

// Get My Flexslider
function add_flexslider() { 
	
	$attachments = get_children(array('post_parent' => get_the_ID(), 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image','caption' => $attachment->post_excerpt, ));
	
	if ($attachments) { // see if there are images attached to posting
        
		echo '<div class="flexslider">';
		echo '<ul class="slides">';
    
		foreach ( $attachments as $attachment_id => $attachment ) { // create the list items for images with captions
		
			echo '<li>';
			echo wp_get_attachment_image($attachment_id, 'large');
			echo '<p>';
			echo get_post_field('post_excerpt', $attachment->ID);
			echo '</p>';
			echo '</li>';
			
		}
    
		echo '</ul>';
		echo '</div>';
        
	} // end see if images
	
} 
//

// Get My Title Tag
function get_my_title_tag() {
	
	if ( is_home() || is_archive() || is_front_page()) { 
	
		bloginfo('description'); // retrieve the site tagline
	
	} 
	
	elseif ( is_single() || is_page()) { 
	
		the_title(); // retrieve the page or posting title
	
		if ( is_page() && $post->post_parent ) { 
	
			echo ' | '; // separator with spaces
			echo get_the_title($post->post_parent);  // retrieve the parent page title
		
		} 
	
	} 

echo ' | '; // separator with spaces
bloginfo('name'); // retrieve the site name
	
}
//
	
?>


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
	
	

?>


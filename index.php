<?php get_header(); ?>

<!-- Begin Content -->
<div id="content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<article id="post-box-<?php the_ID(); ?>" class="post-box">
    <h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
    <p class="postdata">Posted on <?php the_time('M j, Y') ?> in <?php the_category(', ') ?></p>
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php if (has_post_thumbnail()) { echo get_the_post_thumbnail($post->ID, 'thumbnail'); } ?></a>
    <?php the_excerpt(); ?>
    <p class="full-story"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Full Story &raquo;</a></p>
    </article>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_pagenavi(); ?>
</div>
<!-- End Content -->

<?php get_footer();?>
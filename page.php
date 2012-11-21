<?php get_header(); ?>

<!-- BEGIN CONTENT -->
<div id="content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <article class="page" id="page-<?php the_ID(); ?>">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    </article>
<?php endwhile; ?>
<?php endif; ?>
</div>
<!-- BEGIN CONTENT -->

<?php get_footer();?>
<?php 
/**
 * Template Name: Guia toronto 
 */

get_header(); ?>

<?php while( have_posts() ) : the_post()?>

<?php if (has_post_thumbnail()) { ?>
<div class="destacada">
    <?php the_post_thumbnail('destacada'); ?>
    <h2><?php the_title(); ?></h2>
</div>
<?php } else { ?>
    <h2 class="noimagen"><?php the_title();?></h2>

<?php }?>

<div id="primary" class="primary">


    <?php $args = array(
        'cat' => array(3,1),
        'post_per_pade' => 6,
        'orderby' => 'date',
        'order' => 'DESC',
    ); ?>
    
    <?php $guiaToronto = new WP_Query($args) ?>
    <?php while($guiaToronto->have_posts() ): $guiaToronto->the_post();?>

    <pre>
        <?php var_dump($guiaToronto); ?>
    </pre>
    <?php endwhile; wp_reset_postdata(); ?>
</div>

<?php endwhile;?>

<?php get_sidebar();?>

<?php get_footer();?>
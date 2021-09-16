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

    <div class="post-guia">
        <div class="imagen">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('guia-toronto'); ?>
            </a>
        </div>
        <div class="categoria">
            <?php the_category(); ?>
        </div>
        <div class="contenido">
            <h3> <?php the_title(); ?> </h3>
            <?php the_excerpt(); ?>
        </div>
        <div class="info-post">
            <p class="autor">Por: <?php the_author(); ?></p>
            <p class="fecha"> <?php the_date(); ?></p>
        </div>
    </div>

    <?php endwhile; wp_reset_postdata(); ?>
</div>

<?php endwhile;?>

<?php get_sidebar();?>

<?php get_footer();?>
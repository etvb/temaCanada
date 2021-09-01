<?php
    get_header();
    echo "desde PAGE.php";
?>

<?php while( have_posts() ) : the_post()?>
<br>
    <?php
    the_title();

    the_content();
    ?>
<?php endwhile;?>

<?php get_footer();?>
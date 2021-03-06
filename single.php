<?php get_header(); 

if( have_posts() ):
    while( have_posts()):
        the_post();
?>
<div class="hero-unit">
    <h1><?php the_title(); ?></h1>
    <p><?php the_excerpt(); ?></p>
</div>
<div class="informacoes-post">
    Publicado em <?php the_time('d'); ?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?> | 
    Categorias <?php the_category(' &bull; '); ?> | 
    Por <?php //echo get_the_author(); ?>
</div>
<hr />
<?php the_content(); ?>
<?php comments_template('', TRUE); ?>
<?php 
    endwhile;
endif;
?>
<hr />
<?php get_footer(); ?>
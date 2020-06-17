<?php get_header(); ?>

<div class="section-title" href="#"> 
    <h1><?php echo the_title(); ?></h1>
</div>

<?php
if(have_posts()) {
    while(have_posts()){

        the_post(); ?>
        <div class="single-card">

        <div class="row">
            <div class="single-column">
                <?php the_post_thumbnail();?>
            </div>
            
            <div class="single-column stretch">
                <?php the_excerpt(); ?>
            </div>
        </div>

        <div class="spacing"></div>

        <div class="row">
            <div class="stretch2">
                <?php the_content(); ?>
            </div>
        </div>
        </div>

        <div class="spacing"></div>    
        <?php
    }
}
?>

<?php get_footer(); ?>

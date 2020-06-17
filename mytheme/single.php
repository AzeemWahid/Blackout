<?php get_header(); ?>

<div class="section-title"> 
    <h1><?php echo the_title(); ?></h1>
</div>


<?php
if(have_posts()) {
    while(have_posts()){

        the_post();
        ?>
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

            <div class="spacing"></div>
            
            <div class="row">
                <div class="section-title"> <h2> See More Images </h2> </div>
                        <!-- Slideshow container -->
        <div class="single-slideshow">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <img src="<?php the_field('post_image_1'); ?>" style="width:90%" height="400px">
</div>

<div class="mySlides fade">
  <img src="<?php the_field('post_image_2'); ?>" style="width:90%" height="400px">
</div>

<div class="mySlides fade">
  <img src="<?php the_field('post_image_3'); ?>" style="width:90%" height="400px">
</div>

<!-- Next and previous buttons -->
<a class="sprev" onclick="plusSlides(-1)">&#10094;</a>
<a class="snext" onclick="plusSlides(1)">&#10095;</a>
        </div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
            </div>
            <div class="spacing"></div>
        </div>
        
        <?php
    }
}
?>

<div class="spacing">
</div>

<?php get_footer(); ?>

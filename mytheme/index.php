<?php get_header(); ?>
    
        <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <img src="<?php echo get_theme_file_uri('/images/s1.png'); ?>" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="<?php echo get_theme_file_uri('/images/s2.png'); ?>" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="<?php echo get_theme_file_uri('/images/s3.png'); ?>" style="width:100%">
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>

    <main> 
        <a class="section-title" href="<?php echo get_post_type_archive_link('series'); ?>"> 
            <h1>Browse By Battery Series</h1>
        </a>

        <div class="product-section-wrapper">
            
            <?php
                $series = new WP_Query(array(
                'posts_per_page'=>-1,
                'post_type'=>'series'
                ));
                while($series->have_posts()){
                    $series->the_post();
            ?>

            <section>
                <div class="product-item">
                    <div class="product-image">
                        <a href="#"><img src="<?php the_post_thumbnail(); ?>"> </a>
                    </div>

                    <div class="product-description">
                        <a href="#"><?php the_title(); ?></a>
                        <p> <?php the_excerpt(); ?> </p>
                    </div>

                    <div class="read-more">
                        <a href="<?php the_permalink(); ?>"> 
                        <button class="read-more-btn"> Read More... </button> </a>
                    </div>
                </div>
            </section>
            <?php
            }
            ?>
        </div>


        <div class="product-section-wrapper">

        <section>
            <div class="product-item">
                <div class="product-image">
                    <a href="#"><img src="images/logo.jpg" style="max-width:100%"></a>
                </div>

                <div class="product-description">
                    <a href="#">Product Title</a>
                    <p> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                        Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                        Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                        Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum
                    </p>
                </div>

                <div class="read-more">
                    <a href="#"> <button class="read-more-btn"> Read More... </button> </a>
                </div>
            </div>
        </section>

    </div>


    <a class="section-title" href="<?php echo get_post_type_archive_link('series'); ?>"> 
            <h1>Latest Released Products</h1>
        </a>

        <div class="product-section-wrapper">
            
            <?php
                $products = new WP_Query(array(
                'posts_per_page'=> 3,
                'post_type'=>'products'
                ));
                while($products ->have_posts()){
                    $products ->the_post();
            ?>

            <section>
                <div class="product-item">
                    <div class="product-image">
                        <a href="#"><img src="<?php the_post_thumbnail(); ?>"> </a>
                    </div>

                    <div class="product-description">
                        <a href="#"><?php the_title(); ?></a>
                        <p> <?php the_excerpt(); ?> </p>
                    </div>

                    <div class="read-more">
                        <a href="<?php the_permalink(); ?>"> 
                        <button class="read-more-btn"> Read More... </button> </a>
                    </div>
                </div>
            </section>
            <?php
            }
            ?>
        </div>


    <a class="section-title" href="#"> <h1>Browse News</h1></a>



    <div class="product-section-wrapper">
            
            <?php
                $news = new WP_Query(array(
                'posts_per_page'=>-3,
                'post_type'=>'news'
                ));
                while($news->have_posts()){
                    $news->the_post();
            ?>

            <section>
                <div class="product-item">
                    <div class="product-image">
                        <a href="#"><img src="<?php the_post_thumbnail(); ?>"> </a>
                    </div>

                    <div class="product-description">
                        <a href="#"><?php the_title(); ?></a>
                        <p> <?php the_excerpt(); ?> </p>
                    </div>

                    <div class="read-more">
                        <a href="<?php the_permalink(); ?>"> 
                        <button class="read-more-btn"> Read More... </button> </a>
                    </div>
                </div>
            </section>
            <?php
            }
            ?>
        </div>

    </main>


<?php get_footer(); ?>

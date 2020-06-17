<?php get_header(); ?>

<div class="section-title" href="#"> 
    <h1> All News </h1>
</div>

<div class="product-section-wrapper">
<?php
    $news = new WP_Query(array(
        'posts_per_page'=>-1,
        'post_type'=>'news'
    ));
    while($news->have_posts()){
        $news->the_post();
        ?>
        <section>
            <div class="product-item">
                <div class="product-image">
                    <a href="#"><img src="<?php the_post_thumbnail(); ?>"></a>
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

<?php get_footer(); ?>

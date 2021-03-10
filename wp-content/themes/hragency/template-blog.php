<?php
/**
 * Template name: blogPage
 */
get_header();
?>



<?php
$params = array(
    'posts_per_page' => 1000000 // этот параметр не обязателен, так как get_posts() по умолчанию и так выводит 5 постов
);

$posts = get_posts($params);



foreach( $posts as $post ){
    setup_postdata($post);
    ?>

    <div class="col-sm-10 offset-sm-2">
        <div class="news_item">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-4 col-sm-12">
                    <img src="<?php if (get_the_post_thumbnail_url(get_the_ID(), 'full')) {
                        echo get_the_post_thumbnail_url(get_the_ID(), 'full');
                    } else {
                        echo get_template_directory_uri() . "/src/images/default.png";
                    } ?>" alt="">
                </div>
                <div class="col-xl-8 col-lg-7 col-md-8 col-sm-12">
                    <h4 class="news_item-title"><?php the_title(); ?></h4>
                    <h5 class="news_item-date"><?php echo get_the_date('d/m/Y')?></h5>
                    <p class="news_item-text"><?php echo get_the_content();?></p>
                </div>
            </div>
        </div>
    </div>

    <?php
}

//wp_reset_postdata(); // сброс
?>
    <div class="text-center"><a href="/">Назад</a></div>

<?php
get_footer();

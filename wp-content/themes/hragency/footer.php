<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hragency
 */
global $redux_demo;
?>

<!--footer START-->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-logo-div col-12 col-sm-12">
                <div class="row">
                    <div class="col-7 col-sm-9">
                        <img class="footer_left-logo" src="<?php echo $redux_demo['footer-logo']['url']; ?>" alt="">
                    </div>
                    <div class="col-5 col-sm-3 text-right">
                        <a href="<?php echo $redux_demo['twlink']; ?>"><img src="<?php echo get_template_directory_uri()?> /src/images/footertg.svg" alt=""></a>
                        <a href="<?php echo $redux_demo['instlink']; ?>"><img src="<?php echo get_template_directory_uri()?> /src/images/footerinst.svg" alt=""></a>
                        <a href="<?php echo $redux_demo['vklink']; ?>"><img src="<?php echo get_template_directory_uri()?> /src/images/footervk.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-5 col-md-5 col-lg-6 footer_left">
                <p class="footer_left-tel"><?php echo $redux_demo['number-tel']; ?></p>
                <p class="footer_left-adress"><?php echo $redux_demo['adress']; ?></p>
                <p class="footer_left-mail"><?php echo $redux_demo['email']; ?></p>
                <p class="footer_left-graphic-bydn"><?php echo $redux_demo['rabbudn']; ?></p>
                <p class="footer_left-graphic-vich"><?php echo $redux_demo['rabvich']; ?></p>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-4 footer_center">
                <ul class="footer_center-items">
                    <li class="footer_center-item footer_center-item-bold">Услуги</li>
                    <li class="footer_center-item">Поиск и подбор персонала</li>
                    <li class="footer_center-item">Кадровый консалтинг</li>
                    <li class="footer_center-item">HR-аутсорсинг</li>
                    <li class="footer_center-item">HR-брендинг</li>
                </ul>
            </div>
            <div class="col-6 col-sm-3 col-md-3 col-lg-2 text-right footer_right">
                <ul class="footer_right-list">
                    <li class="footer_right-item">Инфо-центр</li>
                    <li class="footer_right-item">Вакансии</li>
                    <li class="footer_right-item">Контакты</li>
                    <li class="footer_right-item">О компании</li>
                </ul>
            </div>

            <div class="col-sm-12 footer_line"></div>
            <div class="col-sm-6 d-none d-xl-block"><p class="footer_bot-text"><?php echo $redux_demo['slogan']; ?></p></div>
            <div class="col-sm-6 d-none d-xl-block">
                <ul class="footer_bot-list">
                    <li class="footer_bot-item"><a href="#"><?php echo $redux_demo['foooterbtn1']; ?></a></li>
                    <li class="footer_bot-item"><a href="#"><?php echo $redux_demo['foooterbtn2']; ?></a></li>
                    <li class="footer_bot-item"><a href="#"><?php echo $redux_demo['foooterbtn3']; ?></a></li>
                </ul>
            </div>
            <div class="col-sm-12 d-none d-xl-block"><p class="footer_end-text text-center"><?php echo $redux_demo['copyright']; ?></p></div>

            <div class="col-sm-8 d-none d-lg-block d-xl-none"><p class="footer_bot-text"><?php echo $redux_demo['slogan']; ?></p></div>
            <div class="col-sm-4 d-none d-lg-block d-xl-none"><p class="footer_end-text text-center"><?php echo $redux_demo['copyright']; ?></p></div>
            <div class="col-sm-8 d-none d-lg-block d-xl-none">
                <ul class="footer_bot-list">
                    <li class="footer_bot-item"><a href="#"><?php echo $redux_demo['foooterbtn1']; ?></a></li>
                    <li class="footer_bot-item"><a href="#"><?php echo $redux_demo['foooterbtn2']; ?></a></li>
                    <li class="footer_bot-item"><a href="#"><?php echo $redux_demo['foooterbtn3']; ?></a></li>
                </ul>
            </div>

            <div class="col-7 col-sm-7 col-md-12 d-block d-lg-none text-md-center">
                <ul class="footer_bot-list">
                    <li class="footer_bot-item"><a href="#"><?php echo $redux_demo['foooterbtn1']; ?></a></li>
                    <li class="footer_bot-item"><a href="#"><?php echo $redux_demo['foooterbtn2']; ?></a></li>
                    <li class="footer_bot-item"><a href="#"><?php echo $redux_demo['foooterbtn3']; ?></a></li>
                </ul>
            </div>
            <div class="col-7 col-sm-7 col-md-12 d-block d-lg-none text-md-center"><p class="footer_bot-text"><?php echo $redux_demo['slogan']; ?></b></p></div>
            <div class="col-7 col-sm-7 col-md-12 d-block d-lg-none text-md-center"><p
                        class="footer_end-text text-md-center">
                    <?php echo $redux_demo['copyright']; ?>
                </p>
            </div>
        </div>
    </div>
</footer>

<!--footer END-->

<!--modalКонсультация START-->

<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title"
             aria-describedby="modal-1-content">
            <div role="document">

                <main class="modal__content" id="modal-1-content">
                    <?php echo do_shortcode('[contact-form-7 id="54" title="Контактная форма 1"]')?>
                </main>
            </div>
        </div>
    </div>
</div>

<!--modalКонсультация END-->

<!--modalPeople START-->

<div class="modal micromodal-slide" id="modal-3" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title"
             aria-describedby="modal-1-content">
            <div role="document">
                <main class="modal__content" id="modal-3-content">
                    <div class="row people_modal-item">
                        <div class="col-12 col-sm-12 col-md-4">
                            <img class="modal_people-img" src="<?php echo get_template_directory_uri()?> /src/images/person1.png" alt="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                            <h4 class="slider_title">Виктор Анищенко</h4>
                            <h5 class="slider_sub-title">Руководитель компании</h5>
                            <p class="slider_text">Является руководителем компании уже 3 года. С момента назначения его
                                на
                                руководительскую должность, рост компании и ее прибыль заметно увеличились. </p>
                        </div>
                    </div>
                    <div class="row people_modal-item">
                        <div class="col-12 col-sm-12 col-md-4">
                            <img class="modal_people-img" src="<?php echo get_template_directory_uri()?> /src/images/person2.png" alt="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                            <h4 class="slider_title">Валентина Олегова</h4>
                            <h5 class="slider_sub-title">HR-специалист</h5>
                            <p class="slider_text">Ведущий специалист нашей компании по рекрутингу. В сфере уже около 10
                                лет. Точно знает, как найти в вашу компанию достойного сотрудника.</p>
                        </div>
                    </div>
                    <div class="row people_modal-item">
                        <div class="col-12 col-sm-12 col-md-4">
                            <img class="modal_people-img" src="<?php echo get_template_directory_uri()?> /src/images/person3.png" alt="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                            <h4 class="slider_title">Игорь Бойко</h4>
                            <h5 class="slider_sub-title">Менеджер</h5>
                            <p class="slider_text">Специалист, занимающийся всеми организационными моментами в нашей
                                компании. От него зависит слаженность всех процессов, и он отлично справляется со своей
                                задачей!</p>
                        </div>
                    </div>
                    <div class="row people_modal-item">
                        <div class="col-12 col-sm-12 col-md-4">
                            <img class="modal_people-img" src="<?php echo get_template_directory_uri()?> /src/images/person4.png" alt="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                            <h4 class="slider_title">Ангелина Стародубцева</h4>
                            <h5 class="slider_sub-title">HR-специалист</h5>
                            <p class="slider_text">Относительно молодой, но очень амбициозный специалист. За год своей
                                работы в нашем агентстве она успела помочь уже 20ти компаниям обзавестись желанными
                                кадрами. </p>
                        </div>
                    </div>
                    <div class="row people_modal-item">
                        <div class="col-12 col-sm-12 col-md-4">
                            <img class="modal_people-img" src="<?php echo get_template_directory_uri()?> /src/images/person5.png" alt="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                            <h4 class="slider_title">Виктор Иванов</h4>
                            <h5 class="slider_sub-title">Маркетолог</h5>
                            <p class="slider_text">В профессии уже 7 лет. Отлично знает устройство рынка, умеет работать
                                в
                                разных отраслевых областях, так как уже изучил нюансы очень многих из них.</p>
                        </div>
                    </div>
                    <div class="row people_modal-item">
                        <div class="col-12 col-sm-12 col-md-4">
                            <img class="modal_people-img" src="<?php echo get_template_directory_uri()?> /src/images/person6.png" alt="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                            <h4 class="slider_title">Евгений Березов</h4>
                            <h5 class="slider_sub-title">HR-специалист</h5>
                            <p class="slider_text">Образование психолога помогает Евгению отлично разбираться в людях,
                                компаниях и их потребностях. Благодаря этому он подберет для вашей компании именно того
                                специалиста, который вам необходим.</p>
                        </div>
                    </div>
                    <div class="row people_modal-item">
                        <div class="col-12 col-sm-12 col-md-4">
                            <img class="modal_people-img" src="<?php echo get_template_directory_uri()?> /src/images/person7.png" alt="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                            <h4 class="slider_title">Федор Султанов</h4>
                            <h5 class="slider_sub-title">HR-специалист</h5>
                            <p class="slider_text">Профессионал с большим опытом. Отлично разбирается в своей отрасли.
                                Подберет в вашу компанию именного того специалиста, о котором вы давно мечтали. </p>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

<!--modalPeople END-->

<!--modalFeedback END-->

<div class="modal micromodal-slide" id="modal-2" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title"
             aria-describedby="modal-1-content">
            <div role="document">

                <main class="modal__content" id="modal-2-content">
                    <?php

                    // задаем нужные нам критерии выборки данных из БД
                    $args = array(
                        'post_type' => 'posts',
                        'post_per_page' => 4
                    );

                    $posts = new WP_Query($args);
                    if ($posts->have_posts()) {

                        while ($posts->have_posts()) {
                            $posts->the_post();

                            $textContent = get_the_content();
                            $substrText = substr($textContent, 0, 500);

                            ?>
                            <hr>
                                <div class="row p-10">
                                    <div class="col-sm-12 col-md-4 col-lg-5 photo_feedback photo_feedbackpad">
                                        <img src="<?php if(get_the_post_thumbnail_url(get_the_ID(), 'full'))
                                        {
                                            echo get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        } else {
                                            echo get_template_directory_uri() ."/src/images/default1.png";
                                        } ?>"
                                             alt="">
                                    </div>
                                    <div class="col-sm-12 col-md-8 col-lg-7">
                                        <h4 class="feedback_title"><?php the_title(); ?></h4>
                                        <p class="feedback_sub-title"><?php echo get_post_meta(get_the_ID(), 'work', true) ?></p>
                                        <p class="feedback_text"><?php echo $substrText ?></p>
                                        <p class="feedback_text feedback_text-all d-none"><?php echo $textContent; ?></p>
                                        <a class="feedback_link">Читать полностью</a>
                                    </div>
                                </div>

                        <?php }
                        wp_reset_postdata();
                    } else {
                        echo 'Нет отзывов';
                    }
                    ?>
                </main>
            </div>
        </div>
    </div>
</div>


<!--modalFeedback END-->


<!--    Подключаем micromodal-->
<script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
<!--swiperslider-->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<?php wp_footer(); ?>

</body>
</html>

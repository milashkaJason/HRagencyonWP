<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hragency
 */
global $redux_demo;
get_header();
?>

    <!--hero START-->

    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 d-none d-md-block">
                    <h1 class="hero_title">Кадровое агентство</h1>
                    <p class="hero_sub-title">Наше профессиональное агентство кадров полного цикла предоставит комплекс
                        услуг по подбору и управлению кадрами, включая HR-брендинг, консалтинг и другие смежные
                        услуги.</p>
                    <button data-micromodal-trigger="modal-1" class="buttDark hero_btn">консультация</button>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="swiper-container hero_swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide hero_swiper-slide"><img
                                        src="<?php echo get_template_directory_uri() ?> /src/images/heroSliderImg1.png"
                                        alt=""></div>
                            <div class="swiper-slide hero_swiper-slide"><img
                                        src="<?php echo get_template_directory_uri() ?> /src/images/heroSliderImg2.png"
                                        alt=""></div>
                            <div class="swiper-slide hero_swiper-slide"><img
                                        src="<?php echo get_template_directory_uri() ?> /src/images/heroSliderImg3.png"
                                        alt=""></div>
                        </div>
                    </div>
                    <div class="slider-btn-left d-none d-lg-block"><span></span></div>
                    <div class="slider-btn-right d-none d-lg-block"><span></span></div>
                </div>
                <div class="col-sm-12 d-block d-md-none">
                    <h1 class="hero_title">Кадровое агентство</h1>
                    <p class="hero_sub-title">Наше профессиональное агентство кадров полного цикла предоставит комплекс
                        услуг по подбору и управлению кадрами, включая HR-брендинг, консалтинг и другие смежные
                        услуги.</p>
                    <button data-micromodal-trigger="modal-1" class="buttDark hero_btn">консультация</button>
                </div>
            </div>
        </div>
    </div>

    <!--hero END-->

    <!--About START-->

    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title about_title">О нашем агентстве</h2>
                </div>
                <div class="col-sm-12 col-md-5 offset-md-1">
                    <p class="about_description">Успех любого дела определяется <b>креативностью</b>, профессионализмом,
                        мотивированностью тех, кто над ним работает. Это одинаково применимо к творческим коллективам,
                        персоналу коммерческой фирмы, членам некоммерческих групп и инициатив. Любую компанию создают
                        люди,
                        поэтому грамотная кадровая политика в существенной степени определяет итоговую результативность
                        бизнес-проекта.</p>
                </div>
                <div class="col-sm-12 col-md-5 offset-md-1">
                    <p class="about_description">В нашей команде только опытные эксперты, реализовавшие немало
                        разноплановых проектов в HR-рекрутинге. Хотите получить профессиональные ка дровые услуги быстро
                        и
                        по разумной цене? Тогда заполняйте специальную форму на нашем сайте, и мы свяжемся с Вами в
                        удобное
                        время. Наши сотрудники подготовят для Вашей компании
                        <b>выгодный и продуманный пакет кадровых услуг</b>, реализация которых в разы повысит
                        результативность бизнеса.</p>
                </div>
            </div>
        </div>
    </div>

    <!--About END-->

    <!--service START-->

    <div id="services" class="service">
        <div class="full-container">
            <div class="row m-0">
                <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                    <div class="service_block service_block__black">
                        <h2 class="text-white title service_title service_title1">Наши услуги</h2>
                        <p class="text-white service_text">Наше кадровое агентство — компания полного цикла. Мы
                            предоставляем
                            заказчикам все виды услуг HR, среди которых:</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                    <div class="service_block service_block__white">
                        <h2 class="title service_title">Подбор персонала</h2>
                        <p class="service_text">Наша рекрутинговая компания подбирает для заказчиков кадры необходимого
                            уровня компетенции и подготовки, от специалистов до топ-руководителей. Также мы готовы
                            сформировать для Вас команду профессионалов «под ключ», применив прогрессивные европейские
                            подходы к рекрутингу. Успешно подбираем сотрудников для организаций произвольных размеров,
                            независимо от отрасли.</p>
                        <a href="#hereme" class="service_btn">Связаться <span></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                    <div class="service_block service_block__orange">
                        <h2 class="text-white title service_title">HR-брендинг</h2>
                        <p class="text-white service_text">Формирование с нуля бренда работодателя на рынке труда. Это
                            мощный
                            инструмент привлечения высококлассных сотрудников, построения устойчивой кадровой структуры,
                            повышения лояльность коллектива по отношению к работодателю.</p>
                        <a href="#hereme" class="service_btn__white service_btn">Связаться <span
                                    class="service_arrow__white"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                    <div class="service_block service_block__light-orange">
                        <h2 class="text-white title service_title">HR-консалтинг</h2>
                        <p class="text-white service_text">Оптимизация алгоритмов работы с кадрами ощутимо увеличивает
                            эффективность
                            работы организации, снижает управленческие расходы. Профессиональный кадровый аудит выявляет
                            и
                            устраняет «слабые места» в кадровой политике. Мы всегда готовы помочь клиентам повысить
                            уровень
                            кадровой работы, разработать необходимые регламенты и внутренние стандарты.</p>
                        <a href="#hereme" class="service_btn__white service_btn">Связаться <span
                                    class="service_arrow__white"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                    <div class="service_block service_block__pink">
                        <h2 class="title service_title">Кадровый аутсорсинг</h2>
                        <p class="service_text">Никто не справится с ведением кадровой работы лучше, чем
                            профессиональная
                            HR-компания. Передайте нам функции штатного кадрового отдела и экономьте временные,
                            финансовые и
                            трудовые ресурсы на самостоятельную организацию и ведение учета персонала, трудовых книжек,
                            другой кадровой документации.</p>
                        <a href="#hereme" class="service_btn">Связаться <span></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                    <div class="service_block service_block__transparent">
                        <img class="services500" src="<?php echo get_template_directory_uri() ?> /src/images/500.svg"
                             alt="">
                        <h2 class="title service_title"></h2>
                        <p class="service_text">Работа с кадрами — это наша профессия, важность которой сложно
                            переоценить.
                            Мы индивидуально подходим к потребностям каждого заказчика, подбираем набор нужных
                            инструментов
                            и рекомендаций по выработке стратегии и тактики работы с кадрами. Наши клиенты уже успели
                            оценить результативность такого подхода, последуйте их примеру.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--service END-->

    <!--rules START-->

    <div class="rules">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-3">
                    <h2 class="title rules_title">Принципы работы</h2>
                    <p class="rules_text">Залогом успеха нашего HR-агентства на рынке кадровых услуг стало следование
                        двум
                        основополагающим принципам:</p>
                    <button data-micromodal-trigger="modal-1" class="buttOrange rules_btn">консультация</button>
                </div>
                <div class="col-md-6 col-lg-4 offset-lg-1 rules_item">
                    <div class="row ">
                        <div class="rules_ellipse col-3 col-sm-3">
                            <img src="<?php echo get_template_directory_uri() ?> /src/images/ruelsVennDiagram.svg"
                                 alt="">
                        </div>
                        <div class="col-9 col-sm-9">
                            <h3 class="rules_second-title">Комплексные решения</h3>
                        </div>
                    </div>
                    <p class="rules_second-text">Мы специализируемся на разработке комплексных механизмов работы с
                        кадрами и
                        их внедрении в действующий бизнес заказчиков для его устойчивого развития и роста. Мы уверены и
                        не
                        раз убеждались на практике, что только комплексный пересмотр и оптимизация кадровой работы на
                        всех
                        уровнях организации способны дать стойкий эффект в виде построения стойкой кадровой структуры,
                        снижения текучести кадров, повышения лояльности сотрудников.</p>
                    <a data-micromodal-trigger="modal-31" class="rules_link">Узнать больше<span></span></a>
                    <div class="modal micromodal-slide" id="modal-31" aria-hidden="true">
                        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                            <div class="modal__container" role="dialog" aria-modal="true"
                                 aria-labelledby="modal-1-title"
                                 aria-describedby="modal-1-content">
                                <div role="document">

                                    <main class="modal__content" id="modal-31-content">
                                        <p>Мы специализируемся на разработке комплексных механизмов работы с кадрами и
                                            их
                                            внедрении в действующий бизнес заказчиков для его устойчивого развития и
                                            роста.
                                            Мы уверены и не раз убеждались на практике, что только комплексный пересмотр
                                            и
                                            оптимизация кадровой работы на всех уровнях организации способны дать
                                            стойкий
                                            эффект в виде построения стойкой кадровой структуры, снижения текучести
                                            кадров,
                                            повышения лояльности сотрудников.
                                        </p>
                                    </main>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 offset-lg-0 offset-md-5 rules_item">
                    <div class="row ">
                        <div class="rules_ellipse col-3 col-sm-3">
                            <img src="<?php echo get_template_directory_uri() ?> /src/images/rulesArrow.svg" alt="">
                        </div>
                        <div class="col-9 col-sm-9">
                            <h3 class="rules_second-title">Подбор эффективных кадров за счет продуманной стратегии.</h3>
                        </div>
                    </div>
                    <p class="rules_second-text">Мы отдаем приоритет проработке максимально выгодного подхода к
                        использованию потенциала сотрудников фирмы-заказчика. Поэтому делаем ставку на подбор
                        эффективных
                        работников, которые разделяют ценности компании.</p>
                    <a data-micromodal-trigger="modal-32" class="rules_link">Узнать больше<span></span></a>
                    <div class="modal micromodal-slide" id="modal-32" aria-hidden="true">
                        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                            <div class="modal__container" role="dialog" aria-modal="true"
                                 aria-labelledby="modal-1-title"
                                 aria-describedby="modal-1-content">
                                <div role="document">

                                    <main class="modal__content" id="modal-32-content">
                                        <p>
                                            Мы отдаем приоритет проработке максимально выгодного подхода к использованию
                                            потенциала сотрудников фирмы-заказчика. Поэтому делаем ставку на подбор
                                            эффективных работников, которые разделяют ценности компании.
                                        </p>
                                    </main>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--rules END-->

    <!--rules START-->

    <div class="prices background-light-text">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title prices_title">Стоимость зависит от</h2>
                </div>
                <div class="col-sm-11 col-md-5 offset-sm-1">
                    <p class="prices_text">Наше кадровое агентство определяет стоимость услуг индивидуально для каждого
                        проекта. Конечная цена зависит от нескольких обстоятельств:</p>
                </div>
                <div class="col-sm-11 col-sm-5 offset-sm-1">
                    <p class="prices_text">Чтобы получить бесплатный расчет стоимость или консультацию наших
                        специалистов по
                        поводу интересующих кадровых услуг, отправьте свою заявку через форму обратной связи на сайте
                        или
                        позвоните по указанному там же телефону. Мы максимально быстро сориентируем Вас по расценкам и
                        срокам оказания необходимых услуг.</p>
                </div>
            </div>
            <div class="services_end-block">
                <div class="row">
                    <div class="col-md-6 col-lg-3 services_end-block-item">
                        <div class="background-white height">
                            <img src="<?php echo get_template_directory_uri() ?> /src/images/servicesImg1.svg" alt="">
                            <p class="services_end-block-text">Набора необходимых заказчику HR-услуг;</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 services_end-block-item ">
                        <div class="background-white height">
                            <img src="<?php echo get_template_directory_uri() ?> /src/images/servicesImg2.svg" alt="">
                            <p class="services_end-block-text">Сроков исполнения;</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 services_end-block-item ">
                        <div class="background-white height">
                            <img src="<?php echo get_template_directory_uri() ?> /src/images/servicesImg3.svg" alt="">
                            <p class="services_end-block-text">Численности штата компании;</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 services_end-block-item ">
                        <div class="background-white height">
                            <img src="<?php echo get_template_directory_uri() ?> /src/images/servicesImg4.svg" alt="">
                            <p class="services_end-block-text">Отраслевых особенностей фирмы.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--rules END-->

    <!--hereme START-->

    <div id="hereme" class="hereme">
        <div class="container background-padding_hereme background-light-text">
            <div class="row m-0">
                <div class="col-6 offset-2 offset-sm-0 col-sm-12 offset-md-1 col-md-3">
                    <h2 class="title hereme_title">Свяжитесь с нами</h2>
                    <p class="hereme_text ">Отправьте нам свою заявку, и мы свяжемся с вами.</p>
                </div>
                <div class="col-12 col-sm-12 offset-md-1 col-md-7 text-center text-sm-left">
                    <?php echo do_shortcode('[contact-form-7 id="56" title="форма в блоке hereme"]') ?>
                    <!--                    <input class="hereme_input" placeholder="Имя *" type="text"><br>-->
                    <!--                    <input class="hereme_input" placeholder="E-mail *" type="text"><br>-->
                    <!--                    <input class="hereme_input" placeholder="Телефон *" type="text"><br>-->
                    <!--                    <input class="hereme_input" placeholder="Сообщение" type="text"><br>-->
                    <!--                    <input name="galochka" id="checkbox-id1" class="modal_checkbox" placeholder="" type="checkbox">-->
                    <!--                    <label for="checkbox-id1"></label>-->
                    <!--                    <span class="modal_checkbox-text">Я согласен на обработку данных *</span>-->
                    <!--                    <button class="buttDark hereme_btn">отправить</button>-->
                </div>
            </div>
        </div>
    </div>

    <!--hereme END-->

    <!--vacancy START-->

    <div id="vacancy" class="vacancy">
        <div class="container">
            <div class="vacancy_background d-none d-md-block">Вакансии</div>
            <div class="row">
                <div class="col-12 d-block d-sm-none text-center"><h2 class="title vacancy_title">Вакансии</h2></div>
                <div class="vacancy_tabs-body1 d-block d-sm-none">
                    <div class="swiper-container swiper-wrapper-border scroll">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <button data-filter="top" class="vacancy_tabs-item top">TOP вакансии</button>
                            </div>
                            <div class="swiper-slide">
                                <button data-filter="hr" class="vacancy_tabs-item hr">HR</button>
                            </div>
                            <div class="swiper-slide">
                                <p class="podcat vacancy_tabs-item it">IT</p>
                            </div>
                            <div class="swiper-slide">
                                <button data-filter="finance" class="vacancy_tabs-item finance">Finance</button>
                            </div>
                            <div class="swiper-slide">
                                <button data-filter="seo" class="vacancy_tabs-item seo">SEO</button>
                            </div>
                            <div class="swiper-slide">
                                <button data-filter="finance" class="vacancy_tabs-item finance">Finance</button>
                            </div>
                            <div class="swiper-slide">
                                <button data-filter="seo" class="vacancy_tabs-item seo">SEO</button>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <!--                <div class="swiper-pagination"></div>-->
                    </div>
                    <div class="swiper-container swiper-wrapper-border scroll2">
                        <div class="swiper-wrapper ">
                            <div class="swiper-slide">
                                <button data-filter="jsdev"
                                        class="vacancy_tabs-item hideSubtitle vacancy_tabs-item-sub">JS-developer
                                </button>
                            </div>
                            <div class="swiper-slide">
                                <button data-filter="webdis"
                                        class="vacancy_tabs-item hideSubtitle vacancy_tabs-item-sub">
                                    Web-designer
                                </button>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <!--                <div class="swiper-pagination"></div>-->
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="vacancy_item box-filter hideOpasity webdis">
                        <h3 class="vacancy_item-title">Middle Web-designer</h3>
                        <h5 class="vacancy_item-sub-title">ООО “БПМ-Клауд” </h5>
                        <p class="vacancy_item-text">В нашу компанию требуется опытный веб-дизайнер. Опыт работы от 3
                            лет.
                            Необходимые навыки перечислены в развернутой вакансии...</p>
                    </div>
                    <div class="vacancy_item box-filter hideOpasity webdis">
                        <h3 class="vacancy_item-title">Middle Web-designer</h3>
                        <h5 class="vacancy_item-sub-title">ООО “БПМ-Клауд” </h5>
                        <p class="vacancy_item-text">В нашу компанию требуется опытный веб-дизайнер. Опыт работы от 3
                            лет.
                            Необходимые навыки перечислены в развернутой вакансии...</p>
                    </div>
                    <div class="vacancy_item box-filter hideOpasity it">
                        <h3 class="vacancy_item-title">Middle Web-designer</h3>
                        <h5 class="vacancy_item-sub-title">ООО “БПМ-Клауд” </h5>
                        <p class="vacancy_item-text">В нашу компанию требуется опытный веб-дизайнер. Опыт работы от 3
                            лет.
                            Необходимые навыки перечислены в развернутой вакансии...</p>
                    </div>
                    <div class="vacancy_item box-filter top">
                        <h3 class="vacancy_item-title">Senior Web-designer</h3>
                        <h5 class="vacancy_item-sub-title">ООО “БПМ-Клауд” </h5>
                        <p class="vacancy_item-text">В нашу компанию требуется опытный веб-дизайнер. Опыт работы от 3
                            лет.
                            Необходимые навыки перечислены в развернутой вакансии...</p>
                    </div>
                    <div class="vacancy_item box-filter hideOpasity hr">
                        <h3 class="vacancy_item-title">Middle hr</h3>
                        <h5 class="vacancy_item-sub-title">ООО “БПМ-Клауд” </h5>
                        <p class="vacancy_item-text">В нашу компанию требуется опытный веб-дизайнер. Опыт работы от 3
                            лет.
                            Необходимые навыки перечислены в развернутой вакансии...</p>
                    </div>
                    <div class="vacancy_item box-filter hideOpasity finance">
                        <h3 class="vacancy_item-title">Middle finance</h3>
                        <h5 class="vacancy_item-sub-title">ООО “БПМ-Клауд” </h5>
                        <p class="vacancy_item-text">В нашу компанию требуется опытный веб-дизайнер. Опыт работы от 3
                            лет.
                            Необходимые навыки перечислены в развернутой вакансии...</p>
                    </div>
                    <div class="vacancy_item box-filter hideOpasity jsdev">
                        <h3 class="vacancy_item-title">Middle jsdev</h3>
                        <h5 class="vacancy_item-sub-title">ООО “БПМ-Клауд” </h5>
                        <p class="vacancy_item-text">В нашу компанию требуется опытный веб-дизайнер. Опыт работы от 3
                            лет.
                            Необходимые навыки перечислены в развернутой вакансии...</p>
                    </div>
                    <button data-micromodal-trigger="modal-1" class="buttDark vacancy_btn ">консультация</button>
                </div>
                <div class="offset-sm-1 col-sm-5  d-none d-sm-block">
                    <div class="vacancy_tabs">
                        <div class="vacancy_tabs-title">Категории</div>
                        <hr class="vacancy_line">
                        <div class="vacancy_tabs-body">
                            <button data-filter="top" class="vacancy_tabs-item top">TOP вакансии</button>
                            <button data-filter="hr" class="vacancy_tabs-item hr">HR</button>
                            <p class="podcat vacancy_tabs-item it">IT</p>
                            <button data-filter="jsdev" class="vacancy_tabs-item hideSubtitle vacancy_tabs-item-sub">
                                JS-developer
                            </button>
                            <button data-filter="webdis" class="vacancy_tabs-item hideSubtitle vacancy_tabs-item-sub">
                                Web-designer
                            </button>
                            <button data-filter="finance" class="vacancy_tabs-item finance">Finance</button>
                            <button data-filter="seo" class="vacancy_tabs-item seo">SEO</button>
                            <button data-filter="finance" class="vacancy_tabs-item finance">Finance</button>
                            <button data-filter="seo" class="vacancy_tabs-item seo">SEO</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--vacancy END-->

    <!--result START-->

    <div class="result">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <h2 class="result_title title">Гарантируем результат</h2>
                    <p class="result_text">Нас выбирают, потому что мы гарантируем необходимый результат за счет:</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 result_item-block">
                    <div class="row">
                        <div class="result_item-ico col-sm-2 col-md-3 col-lg-3 col-3">
                            <img src="<?php echo get_template_directory_uri() ?> /src/images/resultimg1.svg" alt="">
                        </div>
                        <div class="col-sm-10 col-9 col-md-9 col-lg-9">
                            <h4 class="result_item-title">Огромная база</h4>
                            <p class="result_item-text">Многотысячной базе кандидатов как внутри страны, так и за
                                рубежом,
                                включая
                                резюме, которых нет в открытых интернет-источниках.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 result_item-block">
                    <div class="row">
                        <div class="result_item-ico col-sm-2 col-md-3 col-lg-3 col-3">
                            <img src="<?php echo get_template_directory_uri() ?> /src/images/resultimg2.svg" alt="">
                        </div>
                        <div class="col-sm-10 col-9 col-md-9 col-lg-9">
                            <h4 class="result_item-title">Успешность</h4>
                            <p class="result_item-text">Тысячи успешно закрытых вакансий для компаний из самых
                                разнообразных
                                отраслей.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 result_item-block">
                    <div class="row">
                        <div class="result_item-ico col-sm-2 col-md-3 col-lg-3 col-3">
                            <img src="<?php echo get_template_directory_uri() ?> /src/images/resultimg3.svg" alt="">
                        </div>
                        <div class="col-sm-10 col-9 col-md-9 col-lg-9">
                            <h4 class="result_item-title">Оперативность</h4>
                            <p class="result_item-text">Оперативные сроки подбора сотрудников.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 result_item-block">
                    <div class="row">
                        <div class="result_item-ico col-sm-2 col-md-3 col-lg-3 col-3">
                            <img src="<?php echo get_template_directory_uri() ?> /src/images/resultimg4.svg" alt="">
                        </div>
                        <div class="col-sm-10 col-9 col-md-9 col-lg-9">
                            <h4 class="result_item-title">Надежность</h4>
                            <p class="result_item-text">Более 90% подобранных кандидатов работают в штате
                                компаний-заказчиков до сих
                                пор.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 result_item-block">
                    <div class="row">
                        <div class="result_item-ico col-sm-2 col-md-3 col-lg-3 col-3">
                            <img src="<?php echo get_template_directory_uri() ?> /src/images/resultimg5.svg" alt="">
                        </div>
                        <div class="col-sm-10 col-9 col-md-9 col-lg-9">
                            <h4 class="result_item-title">Известность</h4>
                            <p class="result_item-text">Большинство клиентов обратились к нам по рекомендациям.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--result END-->

    <!--steps START-->

    <div class="steps">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-8 offset-1 offset-sm-0">
                    <h2 class="steps_title title">Этапы сотрудничества</h2>
                </div>
                <div class="col-sm-12 steps_line">
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 steps_item col-4">
                    <span></span>
                    <p class="steps_step">Отправка обращения</p>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 steps_item col-4">
                    <span></span>
                    <p class="steps_step">Встреча в офисе</p>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 steps_item col-4">
                    <span></span>
                    <p class="steps_step">Составление портрета</p>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 steps_item col-4">
                    <span></span>
                    <p class="steps_step">Поиск и анализ</p>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 steps_item col-4">
                    <span></span>
                    <p class="steps_step">Собеседование и выбор</p>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 steps_item col-4">
                    <span></span>
                    <p class="steps_step">Найм кандидата</p>
                </div>
                <div class="col-md-3 d-block d-lg-none">
                </div>
                <div class="col-md-3 d-block d-lg-none">
                </div>
                <div class="col-8 offset-2 offset-sm-0 col-sm-12 col-md-3">
                    <div class="steps_ind">
                        <span>01</span>
                        <p class="steps_ind-text">Вы присылаете нам свое обращение через сайт или звоните по
                            телефону.</p>
                    </div>
                </div>
                <div class="col-8 offset-2 offset-sm-0 col-sm-12 col-md-3 offset-md-1">
                    <div class="steps_ind">
                        <span>02</span>
                        <p class="steps_ind-text">Мы встречаемся в нашем офисе и проводим подробную консультацию.</p>
                    </div>
                </div>
                <div class="col-8 offset-2 offset-sm-0 col-sm-12 col-md-3 offset-md-1">
                    <div class="steps_ind">
                        <span>03</span>
                        <p class="steps_ind-text">Составляем портрет идеального соискателя, наши рекрутеры начинают
                            работу.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--steps END-->

    <!--advantages START-->

    <div id="advantages" class="advantages">
        <div class="full-container">
            <div class="row m-0">
                <div class="col-sm-12 col-md-5 offset-md-1 p-0">
                    <h2 class="advantages_title title col-8 offset-1">Преимущества агентства</h2>
                    <p class="advantages_text col-8 offset-1">Наше кадровое агентство предоставляет следующие важные
                        преимущества своим
                        клиентам:</p>
                    <ul>
                        <li class="advantages_items">
                            <h4 class="advantages_item-title">Экономия</h4>
                            <p class="advantages_item-text">Заказчику нет нужды платить за доступ к закрытым базам
                                резюме,
                                за публикацию вакансий</p>
                        </li>
                        <li class="advantages_items">
                            <h4 class="advantages_item-title">Выбор среди лучших</h4>
                            <p class="advantages_item-text">Наши сотрудники в процессе поиска сразу отсекают
                                неподходящих
                                претендентов, остается сделать выбор среди наилучших.</p>
                        </li>
                        <li class="advantages_items">
                            <h4 class="advantages_item-title">Никакого риска</h4>
                            <p class="advantages_item-text">Клиент платит только если подобранный нами кандидат успешно
                                прошел испытательный срок и остался работать на постоянной основе.</p>
                        </li>
                        <li class="advantages_items">
                            <h4 class="advantages_item-title">Сотрудничество с профессионалами</h4>
                            <p class="advantages_item-text">Над поиском персонала для Вашей компании будут работать
                                профессиональный рекрутер, закрепленный за Вашим проектом.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6 offset-md-0  d-none d-sm-block">
                    <!-- Slider main container -->
                    <div class="swiper-container advantages_swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide advantages_slide-img"><img
                                        src="<?php echo get_template_directory_uri() ?> /src/images/slideradvantages.png"
                                        alt="">
                            </div>
                            <div class="swiper-slide advantages_slide-img"><img
                                        src="<?php echo get_template_directory_uri() ?> /src/images/slideradvantages.png"
                                        alt="">
                            </div>
                            <div class="swiper-slide advantages_slide-img"><img
                                        src="<?php echo get_template_directory_uri() ?> /src/images/slideradvantages.png"
                                        alt="">
                            </div>

                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="slider-btn-left1 d-none d-lg-block"><span></span></div>
                        <div class="slider-btn-right1 d-none d-lg-block"><span></span></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--advantages END-->

    <!--faq START-->

    <div class="faq">
        <div class="container">
            <div class="faq_background d-none d-md-block">Частые вопросы</div>
            <div class="row">
                <div class="col-12 d-block d-sm-none text-center"><h2 class="title faq_title">Частые вопросы</h2></div>

                <div data-micromodal-trigger="modal-21"
                     class=" faq_item col-xl-3 col-lg-6 col-md-5 col-10 offset-1 offset-md-1 offset-lg-0 faq_box">
                    <img src="<?php echo get_template_directory_uri() ?> /src/images/faq1.svg" alt="">
                    <p class="faq_text">Как подобрать подходящую вакансию? Как подобрать подходящую вакансию?</p>
                </div>
                <div class="modal micromodal-slide" id="modal-21" aria-hidden="true">
                    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title"
                             aria-describedby="modal-1-content">
                            <div role="document">

                                <main class="modal__content" id="modal-21-content">
                                    <div class=" faq_itemNone col-xl-12 col-lg-12 col-md-12 col-12 faq_box">
                                        <div class="row">
                                            <div class="col-sm-6"><img
                                                        src="<?php echo get_template_directory_uri() ?> /src/images/faq1.svg"
                                                        alt="">
                                                <p class="faq_text">Как подобрать подходящую вакансию? Как подобрать
                                                    подходящую вакансию?</p></div>
                                            <div class="col-sm-6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Netus tincidunt non
                                                    tempus tempor. Laoreet nulla nibh in et. Lorem habitasse felis
                                                    turpis proin
                                                    eget aliquam bibendum.
                                                    Leo ipsum laoreet ipsum sagittis, semper. </p></div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>


                <div data-micromodal-trigger="modal-22"
                     class=" faq_item col-xl-3 col-lg-6 col-md-5 col-10 offset-1 offset-md-1 offset-lg-0 faq_box">
                    <img src="<?php echo get_template_directory_uri() ?> /src/images/faq2.svg" alt="">
                    <p class="faq_text">Как подобрать подходящую вакансию? Как подобрать подходящую вакансию?</p>
                </div>

                <div class="modal micromodal-slide" id="modal-22" aria-hidden="true">
                    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title"
                             aria-describedby="modal-1-content">
                            <div role="document">

                                <main class="modal__content" id="modal-22-content">
                                    <div class=" faq_itemNone col-xl-12 col-lg-12 col-md-12 col-12 faq_box">
                                        <div class="row">
                                            <div class="col-sm-6"><img
                                                        src="<?php echo get_template_directory_uri() ?> /src/images/faq2.svg"
                                                        alt="">
                                                <p class="faq_text">Как подобрать подходящую вакансию? Как подобрать
                                                    подходящую вакансию?</p></div>
                                            <div class="col-sm-6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Netus tincidunt non
                                                    tempus tempor. Laoreet nulla nibh in et. Lorem habitasse felis
                                                    turpis proin
                                                    eget aliquam bibendum.
                                                    Leo ipsum laoreet ipsum sagittis, semper. </p></div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-micromodal-trigger="modal-23"
                     class=" faq_item col-xl-3 col-lg-6 col-md-5 col-10 offset-1 offset-md-1 offset-lg-0 faq_box">
                    <img src="<?php echo get_template_directory_uri() ?> /src/images/faq3.svg" alt="">
                    <p class="faq_text">Как подобрать подходящую вакансию? Как подобрать подходящую вакансию?</p>
                </div>

                <div class="modal micromodal-slide" id="modal-23" aria-hidden="true">
                    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title"
                             aria-describedby="modal-1-content">
                            <div role="document">

                                <main class="modal__content" id="modal-23-content">
                                    <div class=" faq_itemNone col-xl-12 col-lg-12 col-md-12 col-12 faq_box">
                                        <div class="row">
                                            <div class="col-sm-6"><img
                                                        src="<?php echo get_template_directory_uri() ?> /src/images/faq3.svg"
                                                        alt="">
                                                <p class="faq_text">Как подобрать подходящую вакансию? Как подобрать
                                                    подходящую вакансию?</p></div>
                                            <div class="col-sm-6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Netus tincidunt non
                                                    tempus tempor. Laoreet nulla nibh in et. Lorem habitasse felis
                                                    turpis proin
                                                    eget aliquam bibendum.
                                                    Leo ipsum laoreet ipsum sagittis, semper. </p></div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-micromodal-trigger="modal-24"
                     class=" faq_item col-xl-3 col-lg-6 col-md-5 col-10 offset-1 offset-md-1 offset-lg-0 faq_box">
                    <img src="<?php echo get_template_directory_uri() ?> /src/images/faq4.svg" alt="">
                    <p class="faq_text">Как подобрать подходящую вакансию? Как подобрать подходящую вакансию?</p>
                </div>

                <div class="modal micromodal-slide" id="modal-24" aria-hidden="true">
                    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title"
                             aria-describedby="modal-1-content">
                            <div role="document">

                                <main class="modal__content" id="modal-24-content">
                                    <div class=" faq_itemNone col-xl-12 col-lg-12 col-md-12 col-12 faq_box">
                                        <div class="row">
                                            <div class="col-sm-6"><img
                                                        src="<?php echo get_template_directory_uri() ?> /src/images/faq4.svg"
                                                        alt="">
                                                <p class="faq_text">Как подобрать подходящую вакансию? Как подобрать
                                                    подходящую вакансию?</p></div>
                                            <div class="col-sm-6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Netus tincidunt non
                                                    tempus tempor. Laoreet nulla nibh in et. Lorem habitasse felis
                                                    turpis proin
                                                    eget aliquam bibendum.
                                                    Leo ipsum laoreet ipsum sagittis, semper. </p></div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-micromodal-trigger="modal-25"
                     class=" faq_item col-xl-3 col-lg-6 col-md-5 col-10 offset-1 offset-md-1 offset-lg-0 faq_box">
                    <img src="<?php echo get_template_directory_uri() ?> /src/images/faq5.svg" alt="">
                    <p class="faq_text">Как подобрать подходящую вакансию? Как подобрать подходящую вакансию?</p>
                </div>

                <div class="modal micromodal-slide" id="modal-25" aria-hidden="true">
                    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title"
                             aria-describedby="modal-1-content">
                            <div role="document">

                                <main class="modal__content" id="modal-25-content">
                                    <div class=" faq_itemNone col-xl-12 col-lg-12 col-md-12 col-12 faq_box">
                                        <div class="row">
                                            <div class="col-sm-6"><img
                                                        src="<?php echo get_template_directory_uri() ?> /src/images/faq5.svg"
                                                        alt="">
                                                <p class="faq_text">Как подобрать подходящую вакансию? Как подобрать
                                                    подходящую вакансию?</p></div>
                                            <div class="col-sm-6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Netus tincidunt non
                                                    tempus tempor. Laoreet nulla nibh in et. Lorem habitasse felis
                                                    turpis proin
                                                    eget aliquam bibendum.
                                                    Leo ipsum laoreet ipsum sagittis, semper. </p></div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-micromodal-trigger="modal-26"
                     class=" faq_item col-xl-3 col-lg-6 col-md-5 col-10 offset-1 offset-md-1 offset-lg-0 faq_box">
                    <img src="<?php echo get_template_directory_uri() ?> /src/images/faq6.svg" alt="">
                    <p class="faq_text">Как подобрать подходящую вакансию? Как подобрать подходящую вакансию?</p>
                </div>

                <div class="modal micromodal-slide" id="modal-26" aria-hidden="true">
                    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title"
                             aria-describedby="modal-1-content">
                            <div role="document">

                                <main class="modal__content" id="modal-26-content">
                                    <div class=" faq_itemNone col-xl-12 col-lg-12 col-md-12 col-12 faq_box">
                                        <div class="row">
                                            <div class="col-sm-6"><img
                                                        src="<?php echo get_template_directory_uri() ?> /src/images/faq6.svg"
                                                        alt="">
                                                <p class="faq_text">Как подобрать подходящую вакансию? Как подобрать
                                                    подходящую вакансию?</p></div>
                                            <div class="col-sm-6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Netus tincidunt non
                                                    tempus tempor. Laoreet nulla nibh in et. Lorem habitasse felis
                                                    turpis proin
                                                    eget aliquam bibendum.
                                                    Leo ipsum laoreet ipsum sagittis, semper. </p></div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-micromodal-trigger="modal-27"
                     class=" faq_item col-xl-3 col-lg-6 col-md-5 col-10 offset-1 offset-md-1 offset-lg-0 faq_box">
                    <img src="<?php echo get_template_directory_uri() ?> /src/images/faq7.svg" alt="">
                    <p class="faq_text">Как подобрать подходящую вакансию? Как подобрать подходящую вакансию?</p>
                </div>

                <div class="modal micromodal-slide" id="modal-27" aria-hidden="true">
                    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title"
                             aria-describedby="modal-1-content">
                            <div role="document">

                                <main class="modal__content" id="modal-27-content">
                                    <div class=" faq_itemNone col-xl-12 col-lg-12 col-md-12 col-12 faq_box">
                                        <div class="row">
                                            <div class="col-sm-6"><img
                                                        src="<?php echo get_template_directory_uri() ?> /src/images/faq7.svg"
                                                        alt="">
                                                <p class="faq_text">Как подобрать подходящую вакансию? Как подобрать
                                                    подходящую вакансию?</p></div>
                                            <div class="col-sm-6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Netus tincidunt non
                                                    tempus tempor. Laoreet nulla nibh in et. Lorem habitasse felis
                                                    turpis proin
                                                    eget aliquam bibendum.
                                                    Leo ipsum laoreet ipsum sagittis, semper. </p></div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-micromodal-trigger="modal-28"
                     class=" faq_item col-xl-3 col-lg-6 col-md-5 col-10 offset-1 offset-md-1 offset-lg-0 faq_box">
                    <img src="<?php echo get_template_directory_uri() ?> /src/images/faq8.svg" alt="">
                    <p class="faq_text">Как подобрать подходящую вакансию? Как подобрать подходящую вакансию?</p>
                </div>

                <div class="modal micromodal-slide" id="modal-28" aria-hidden="true">
                    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title"
                             aria-describedby="modal-1-content">
                            <div role="document">

                                <main class="modal__content" id="modal-28-content">
                                    <div class=" faq_itemNone col-xl-12 col-lg-12 col-md-12 col-12 faq_box">
                                        <div class="row">
                                            <div class="col-sm-6"><img
                                                        src="<?php echo get_template_directory_uri() ?> /src/images/faq8.svg"
                                                        alt="">
                                                <p class="faq_text">Как подобрать подходящую вакансию? Как подобрать
                                                    подходящую вакансию?</p></div>
                                            <div class="col-sm-6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Netus tincidunt non
                                                    tempus tempor. Laoreet nulla nibh in et. Lorem habitasse felis
                                                    turpis proin
                                                    eget aliquam bibendum.
                                                    Leo ipsum laoreet ipsum sagittis, semper. </p></div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--faq END-->

    <!--test START-->

    <div class="test">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-8 ">
                    <h2 class="title test_title">Тестирование кандидатов</h2>
                    <p class="test_text">В ходе поиска персонала мы тестируем соискателей с помощью популярных
                        тестов:</p>
                </div>
                <div class="col-sm-12 col-md-6 test_item">
                    <div class="row">
                        <div class="col-sm-2 col-2"><img
                                    src="<?php echo get_template_directory_uri() ?> /src/images/test1.svg" alt=""></div>
                        <div class="col-sm-10 col-10">
                            <h4 class="test_item-title">“Резалт”</h4>
                            <p class="test_item-text">Универсальная проверка на продуктивность и результативность
                                соискателя, тест состоит из 20 вопросов, на которые нужно ответить за 20 минут;</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 test_item">
                    <div class="row">
                        <div class="col-sm-2 col-2"><img
                                    src="<?php echo get_template_directory_uri() ?> /src/images/test1.svg" alt=""></div>
                        <div class="col-sm-10 col-10">
                            <h4 class="test_item-title">“Сэйлс”</h4>
                            <p class="test_item-text">Cпециальное тестирование подбора эффективных для менеджеров по
                                продажам на 25 минут из 120 вопросов;</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 test_item">
                    <div class="row">
                        <div class="col-sm-2 col-2"><img
                                    src="<?php echo get_template_directory_uri() ?> /src/images/test1.svg" alt=""></div>
                        <div class="col-sm-10 col-10">
                            <h4 class="test_item-title">“Тулс”</h4>
                            <p class="test_item-text">Тест позволяет оценить личностные качества претендента, включает
                                200
                                вопросов, на которые дается 35 минут;</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 test_item">
                    <div class="row">
                        <div class="col-sm-2 col-2"><img
                                    src="<?php echo get_template_directory_uri() ?> /src/images/test4.svg" alt=""></div>
                        <div class="col-sm-10 col-10">
                            <h4 class="test_item-title">“Регард”</h4>
                            <p class="test_item-text">Тест из 88 вопросов, позволяющий измерить вовлеченность
                                действующих
                                сотрудников по 12 параметрам, рассчитан на 20 минут.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 test_item">
                    <div class="row">
                        <div class="col-sm-2 col-2"><img
                                    src="<?php echo get_template_directory_uri() ?> /src/images/testRomb.svg" alt="">
                        </div>
                        <div class="col-sm-10 col-10">
                            <p class="test_item-text">Дополнительное преимущество: мы тестируем кандидата на наличие
                                нужных
                                навыков в те моменты, когда он не ждет проверки и ведет себя именно так, как привык
                                делать
                                это каждый день.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 test_item">
                    <div class="row">
                        <div class="col-sm-2 col-2"><img
                                    src="<?php echo get_template_directory_uri() ?> /src/images/testRomb.svg" alt="">
                        </div>
                        <div class="col-sm-10 col-10">
                            <p class="test_item-text">Сотрудничество с нашим агентством кадров позволит Вам выстроить
                                эффективную кадровую политику, найти необходимых специалистов, которые помогут Вашему
                                бизнесу развиваться и достигать новых высот.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--test END-->

    <!--people START-->

    <div class="people">
        <div class="container">
            <div class="people_background d-none d-md-block">Команда</div>
            <div class="row">
                <div class="col-12 d-block d-sm-none text-center"><h2 class="title people_title">Наша команда</h2></div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide people_swiper-slide"
                             style="background-image:url(<?php echo get_template_directory_uri() . '/src/images/person1.png' ?>)"></div>
                        <div class="swiper-slide people_swiper-slide"
                             style="background-image:url(<?php echo get_template_directory_uri() . '/src/images/person2.png' ?> )"></div>
                        <div class="swiper-slide people_swiper-slide"
                             style="background-image:url(<?php echo get_template_directory_uri() . '/src/images/person3.png' ?> )"></div>
                        <div class="swiper-slide people_swiper-slide"
                             style="background-image:url(<?php echo get_template_directory_uri() . '/src/images/person4.png' ?> )"></div>
                        <div class="swiper-slide people_swiper-slide"
                             style="background-image:url(<?php echo get_template_directory_uri() . '/src/images/person5.png' ?> )"></div>
                        <div class="swiper-slide people_swiper-slide"
                             style="background-image:url(<?php echo get_template_directory_uri() . '/src/images/person6.png' ?> )"></div>
                        <div class="swiper-slide people_swiper-slide"
                             style="background-image:url(<?php echo get_template_directory_uri() . '/src/images/person7.png' ?> )"></div>
                    </div>
                </div>
                <div class="col-sm-12 d-flex justify-content-between p-0">
                    <div class="people_slider-prev d-none d-lg-block"><span></span></div>
                    <div class="people_slider-next d-none d-lg-block"><span></span></div>
                </div>
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slider_item-slide-thumb">
                                <h4 class="slider_title">Виктор Анищенко</h4>
                                <h5 class="slider_sub-title">Руководитель компании</h5>
                                <p class="slider_text">Является руководителем компании уже 3 года. С момента назначения
                                    его
                                    на
                                    руководительскую должность, рост компании и ее прибыль заметно увеличились. </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider_item-slide-thumb">
                                <h4 class="slider_title">Валентина Олегова</h4>
                                <h5 class="slider_sub-title">HR-специалист</h5>
                                <p class="slider_text">Ведущий специалист нашей компании по рекрутингу. В сфере уже
                                    около 10
                                    лет. Точно знает, как найти в вашу компанию достойного сотрудника.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider_item-slide-thumb">
                                <h4 class="slider_title">Игорь Бойко</h4>
                                <h5 class="slider_sub-title">Менеджер</h5>
                                <p class="slider_text">Специалист, занимающийся всеми организационными моментами в нашей
                                    компании. От него зависит слаженность всех процессов, и он отлично справляется со
                                    своей
                                    задачей!</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider_item-slide-thumb">
                                <h4 class="slider_title">Ангелина Стародубцева</h4>
                                <h5 class="slider_sub-title">HR-специалист</h5>
                                <p class="slider_text">Относительно молодой, но очень амбициозный специалист. За год
                                    своей
                                    работы в нашем агентстве она успела помочь уже 20ти компаниям обзавестись желанными
                                    кадрами. </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider_item-slide-thumb">
                                <h4 class="slider_title">Виктор Иванов</h4>
                                <h5 class="slider_sub-title">Маркетолог</h5>
                                <p class="slider_text">В профессии уже 7 лет. Отлично знает устройство рынка, умеет
                                    работать
                                    в
                                    разных отраслевых областях, так как уже изучил нюансы очень многих из них.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider_item-slide-thumb">
                                <h4 class="slider_title">Евгений Березов</h4>
                                <h5 class="slider_sub-title">HR-специалист</h5>
                                <p class="slider_text">Образование психолога помогает Евгению отлично разбираться в
                                    людях,
                                    компаниях и их потребностях. Благодаря этому он подберет для вашей компании именно
                                    того
                                    специалиста, который вам необходим.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider_item-slide-thumb">
                                <h4 class="slider_title">Федор Султанов</h4>
                                <h5 class="slider_sub-title">HR-специалист</h5>
                                <p class="slider_text">Профессионал с большим опытом. Отлично разбирается в своей
                                    отрасли.
                                    Подберет в вашу компанию именного того специалиста, о котором вы давно мечтали. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 text-right">
                    <button data-micromodal-trigger="modal-3" class="buttDark people_btn d-none d-sm-block">вся команда
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--people END-->

    <!--news START-->

    <div class="news">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title news_title">Новости и статьи</h2>
                </div>
                <?php
                $params = array(
                    'posts_per_page' => 3 // этот параметр не обязателен, так как get_posts() по умолчанию и так выводит 5 постов
                );

                $posts = get_posts($params);


                foreach ($posts as $post) {
                    setup_postdata($post);
                    ?>
                    <?php
                    $textContent = get_the_content();
                    $substrText = mb_substr($textContent, 0, 242);
                    $textExcerpt = get_the_excerpt();

                    if (strlen($textExcerpt) >= 70) {
                        $text = $substrText;
                    } else {
                        $text = $textExcerpt;
                    }
                    ?>
                    <div class="col-lg-6 col-md-12col-sm-12">
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
                                    <h5 class="news_item-date"><?php echo get_the_date('d/m/Y') ?></h5>
                                    <p class="news_item-text"><?php echo $text ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

                <div class="col-8 offset-2 offset-sm-0 col-lg-4 col-md-12 offset-lg-2 col-sm-12">
                    <div class="news_learn-more text-center">
                        <h4 class="news_learn-more-title text-center">Хотите больше интересных статей? </h4>
                        <button class="buttOrange news_learn-more-btn"><a href="http://hragencywp/blog/">ПОСМОТРЕТЬ
                                БЛОГ</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--news END-->

    <!--feedback START-->

    <div class="feedback">
        <div class="container">
            <div class="row">
                <div class="col-12 d-block d-sm-none "><h2 class="title feedback_titleOne">Отзывы</h2></div>
                <div class=" col-md-12 col-lg-10 offset-lg-1">
                    <div class="swiper-container feedback_swiper-container">
                        <div class="swiper-wrapper">
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
                                    <div class="swiper-slide widthslide">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-4 col-lg-5 photo_feedback">
                                                <img src="<?php if (get_the_post_thumbnail_url(get_the_ID(), 'full')) {
                                                    echo get_the_post_thumbnail_url(get_the_ID(), 'full');
                                                } else {
                                                    echo get_template_directory_uri() . "/src/images/default1.png";
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
                                    </div>

                                <?php }
                                wp_reset_postdata();
                            } else {
                                echo 'Нет отзывов';
                            }
                            ?>

                        </div>
                        <div class="col-sm-12 d-flex justify-content-between p-0">
                            <div class="feedback_slider-prev d-none d-lg-block"><span></span></div>
                            <div class="feedback_slider-next d-none d-lg-block"><span></span></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center text-sm-right">

                        <button data-micromodal-trigger="modal-2" class="buttDark feedback_btn">ЕЩЕ ОТЗЫВЫ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--feedback END-->

    <!--form START-->

    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-sm-12"><h2 class="form_title title">Свяжитесь с нами</h2></div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-6 row form_item col-sm-6 col-6 col-md-12">
                            <div class="col-2 col-sm-2 d-none d-md-block"><img
                                        src="<?php echo get_template_directory_uri() ?> /src/images/form1.svg" alt="">
                            </div>
                            <div class="col-10 col-sm-10">
                                <h5 class="form_item-title">E-mail</h5>
                                <p class="form_item-text"><?php echo $redux_demo['email']; ?></p>
                            </div>
                        </div>
                        <div class="col-6 row form_item col-sm-6 col-6 col-md-12">
                            <div class="col-sm-2 d-none d-md-block"><img
                                        src="<?php echo get_template_directory_uri() ?> /src/images/form2.svg" alt="">
                            </div>
                            <div class="col-sm-10">
                                <h5 class="form_item-title">Телефон</h5>
                                <p class="form_item-text"><?php echo $redux_demo['number-tel']; ?></p>
                            </div>
                        </div>
                        <div class="col-6 row form_item col-sm-6 col-6 col-md-12">
                            <div class="col-sm-2 d-none d-md-block"><img
                                        src="<?php echo get_template_directory_uri() ?> /src/images/form3.svg" alt="">
                            </div>
                            <div class="col-sm-10">
                                <h5 class="form_item-title">Время работы: </h5>
                                <p class="form_item-text"><?php echo $redux_demo['rabbudn']; ?></p>
                                <p class="form_item-text"><?php echo $redux_demo['rabvich']; ?></p>
                            </div>
                        </div>
                        <div class="col-6 row form_item col-sm-6 col-6 col-md-12">
                            <div class="col-sm-2 d-none d-md-block"><img
                                        src="<?php echo get_template_directory_uri() ?> /src/images/form4.svg" alt="">
                            </div>
                            <div class="col-sm-10">
                                <h5 class="form_item-title">Адрес</h5>
                                <p class="form_item-text"><?php echo $redux_demo['adress']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 p-0 col-11 offset-sm-0 offset-1">
                    <div class="form_forms">
                        <?php echo do_shortcode('[contact-form-7 id="57" title="форма в блоке свяжитсь с нами"]') ?>
                        <!--                    <input class="form_forms-input" placeholder="Имя *" type="text"><br>-->
                        <!--                    <input class="form_forms-input" placeholder="E-mail *" type="text"><br>-->
                        <!--                    <input class="form_forms-input" placeholder="Телефон *" type="text"><br>-->
                        <!--                    <input class="form_forms-input" placeholder="Сообщение" type="text"><br>-->
                        <!--                    <input name="galochka" id="checkbox-id12" class="modal_checkbox" placeholder="" type="checkbox">-->
                        <!--                    <label for="checkbox-id12"></label>-->
                        <!--                    <span class="modal_checkbox-text">Я согласен на обработку данных *</span>-->
                        <!--                    <button class="buttDark form_forms-btn">отправить</button>-->
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--form END-->

<?php
get_footer();

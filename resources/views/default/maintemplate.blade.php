<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>

    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script src="http://www.corp.loc/js/java-griobanij-skript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js"></script>
</head>
<body>
<h2 class="semantics_info">Сайт компании занимающейся созданием сайтов в Харькове</h2>
<header>
    <h2 class="semantics_info">Верхняя часть сайта Гуд web студии</h2>
    <div class="contenttline">
        <div id="headerupline">
            <div class="contentt">


                <div id="headerrline_tel">
                    <div class="phonenaverhu">
                        <p><a href="tel:+380952045758">+38(095) 204-57-58</a></p>
                    </div>
                    <div class="phonenaverhu2">
                        <p>mail@razrabotka-saitov.com</p>
                    </div>
                </div>


                <div class="headerrline_icon">

                    <a href="viber://add?number=380952045758" target="_blank"
                       title="Задай вопрос в о создании сайтов через viber">
                        <div class="sprite headerrline_sontsiconki_viber"></div>
                    </a>
                    <a href="https://telegram.me/kra_sof" target="_blank"
                       title="Задай вопрос о создании сайтов через чат в telegram">
                        <div class="sprite headerrline_sontsiconki_telegram"></div>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=380952045758" target="_blank"
                       title="Задай вопрос о создании сайтов через whatsapp">
                        <div class="sprite headerrline_sontsiconki_wats"></div>
                    </a>
                    <a href="https://www.facebook.com/01webseo" target="_blank"
                       title="Задай вопрос о создании сайтов через massanger">
                        <div class="sprite headerrline_sontsiconki_facebook"></div>
                    </a>
                    <a href="skype:tonnikrava?chat" target="_blank" title="Нажмите и откроется чат в скайпе">
                        <div class="sprite headerrline_sontsiconki_scype"></div>
                    </a>
                    <a href="https://www.instagram.com/kra_sof/" target="_blank"
                       title="Задай вопрос о создании сайтов через instagram">
                        <div class="sprite headerrline_sontsiconki_instagram"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="videohead">
            <video muted autoplay loop>
                <source src="video/header-fon-1600-99.webm" type="video/webm">
                <source src="video/header-fon-1600-99.mp4" type="video/mp4">
            </video>
            <div class="head">
                <div class="contentt">
                    <div class="sprite headerrlogo">

                    </div>
                </div>
            </div>
        </div>

        @section('navbar')




            <div class="side-menu-wrapper"></div>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    {{menu('Main_menu')}}

                </div>
            </nav>


    @show
</header>
<main>
    <article>
        <h2 class="semantics_info">Основной контент на сайте</h2>

        @section('header')

        @show

        @yield('content')

    </article>
</main>
@section('footer')
    <footer>
        <h2 class="semantics_info">Футер сайта</h2>
        <div class="contenttline" style="background: linear-gradient(to right, #132129, #48394e);">
            <div class="footerflexline">
                <div class="footerflexlinebox"></div>
                <div class="footerflexlinebox"></div>
                <div class="footerflexlinebox"></div>
                <div class="footerflexlinebox"></div>
                <div class="footerflexlinebox"></div>
                <div class="footerflexlinebox"></div>
            </div>
            <div class="contentt">
                <div class="footermenu">

                    {{menu('Main_menu')}}

                </div>
                <div class="footersotsseti">
                    <div class="footericonki">
                        <a href="viber://add?number=380952045758" target="_blank"
                           title="Задай вопрос в о создании сайтов через viber">
                            <div class="sprite headerrline_sontsiconki_viber"></div>
                        </a>
                        <a href="https://telegram.me/kra_sof" target="_blank"
                           title="Задай вопрос о создании сайтов через чат в telegram">
                            <div class="sprite headerrline_sontsiconki_telegram"></div>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=380952045758" target="_blank"
                           title="Задай вопрос о создании сайтов через whatsapp">
                            <div class="sprite headerrline_sontsiconki_wats"></div>
                        </a>
                        <a href="https://www.facebook.com/01webseo" target="_blank"
                           title="Задай вопрос о создании сайтов через massanger">
                            <div class="sprite headerrline_sontsiconki_facebook"></div>
                        </a>
                        <a href="skype:tonnikrava?chat" target="_blank" title="Нажмите и откроется чат в скайпе">
                            <div class="sprite headerrline_sontsiconki_scype"></div>
                        </a>
                        <a href="https://www.instagram.com/kra_sof/" target="_blank"
                           title="Задай вопрос о создании сайтов через instagram">
                            <div class="sprite headerrline_sontsiconki_instagram"></div>
                        </a>
                    </div>
                    <div id="footerconttel">
                        <ul itemscope itemtype="http://schema.org/LocalBusiness">
                            <li itemprop="telephone">
                                <div class="sprite mtcc"></div>
                                +38 (095) 204-57-58
                            </li>
                            <li itemprop="telephone">
                                <div class="sprite lifee"></div>
                                +38 (093) 574-45-25
                            </li>
                            <li>
                                <div class="sprite scypee"></div>
                                tonnikrava
                            </li>
                            <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><li><div
                                            class="sprite adress"></div><span
                                            itemprop="addressCountry">Украина</span>,<span itemprop="addressLocality">Харьков</span></li>
                            <li itemprop="streetAddress">
                                <div class="sprite adress"></div>Полтавский шлях 31</li>
                            </span>
                            <li>
                                <div class="sprite adress"></div>
                                Пн - Сб 9.00 - 17.00
                            </li>
                            <li itemprop="email">
                                <div class="sprite maill"></div>
                                mail@razrabotka-saitov.com
                            </li>
                            <li itemprop="url">www.razrabotka-saitov.com</li>
                            <li style="font-size:0.80em;color:#a5a5a5!important;"><span
                                        itemprop="name">Гуд web студия</span><span itemprop="aggregateRating" itemscope
                                                                                   itemtype="http://schema.org/AggregateRating"><span
                                            itemprop="worstRating">0</span><span itemprop="bestRating">5</span><span
                                            itemprop="ratingValue">4.7</span><span
                                            itemprop="ratingCount">43</span> </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sprite scroller"></div>
    </footer>
@show
{{--<link rel="stylesheet" type="text/css" href="http://www.corp.loc/css/style.css">--}}
<link rel="stylesheet" type="text/css" href="http://www.corp.loc/css/style2.css">
<script src="http://www.corp.loc/js/java-griobanij-skript.js"></script>
<script>
    $(function () {
        $("#accordion").accordion({heightStyle: "content"})
    });

    $(function () {
        $('.lazyy').lazy({effect: "fadeIn", effectTime: 1000, threshold: 0})
    });

    $(function () {
        $('.lazyyy').lazy({delay: 10000});
    });

    $(window).resize(function () {
        if (document.documentElement.clientWidth > 950) {
            $(function () {
                $('.lazy').lazy({delay: 4000});
            });
        }
    });

    if (document.documentElement.clientWidth > 970) {
        $(function () {
            $('.lazy').lazy({delay: 4000});
        });

        $(function () {
            var $elements = $('.animateBlock.notAnimated');
            var $window = $(window);
            $window.on('scroll', function (e) {
                $elements.each(function (i, elem) {
                    if ($(this).hasClass('animated'))
                        return;
                    animateMe($(this))
                })
            })
        });

        function animateMe(elem) {
            var winTop = $(window).scrollTop();
            var winBottom = winTop + $(window).height();
            var elemTop = $(elem).offset().top;
            var elemBottom = elemTop + $(elem).height();
            if ((elemBottom <= winBottom) && (elemTop >= winTop)) {
                $(elem).removeClass('notAnimated').addClass('animated')
            }
        }
    }

</script>


</body>
</html>


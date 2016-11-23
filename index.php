
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <title>WoodyRoom</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,500,300,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <a href="#land_5"><span class="logo">Woody Room</span></a>
                <div  class="collapse navbar-collapse landingMenu" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#land_1" class="fa fa-cubes">Woody Room</a></li>
                        <li><a href="#land_2" class="fa fa-star">Услуги</a></li>
                        <li><a href="#land_3" class="fa fa-laptop">Наши работы</a></li>
                        <li><a href="#land_4" class="fa fa-users">О нас</a></li>
                        <li><a href="#" class="fa fa-envelope" data-toggle="modal" data-target=".bd-example-modal-sm" >Связь</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://vk.com/club107740414" class="fa fa-vk" target="_blank">Наша группа</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!-- photo header WoodyRoom -->
        <!-- style file: section_photo_header.css  -->
        <section id="land_5" class="section_photo_header" name="our_works">
            <div class="fotorama wow fadeIn"
                data-width="100%"
                data-height="600"
                data-fit="cover"
                data-loop="true"
                data-transition="dissolve"
                data-autoplay="true"
                data-stopautoplayontouch="false"
                data-autoplay="8000"
                data-arrows="false"
                data-wow-delay="0.6s">
              <div class="photo_block1">
                 <div class="row">
                    <h1>Заголовок на первом слайде</h1>
                    <div class="col-md-offset-2 col-md-4 col-sm-offset-2 col-sm-4 text--gray">
                        <p>WoodyRoom - это семейная мануфактура, здесь мы создаем удивительные предметы интерьера, мебель и декор пространств для игр и радости ваших детей! Сейчас мы делаем для вас деревянные полки-домики, полки-буквы, стеллажи, столики, ширмы, вешалки, коляски и кроватки для кукол, ящики для книг и многое другое - для самых необычных и ярких детских комнат! Все используемые нами материалы - дерево, краски, масла, лаки - натуральны, безопасны и проверены на наших детях.</p>
                    </div>
                    <div class="col-md-4 col-sm-4 black-bg wow lightSpeedIn" data-wow-duration="0.3s" data-wow-delay="1s">
                        <p>WoodyRoom - это семейная мануфактура, здесь мы создаем удивительные предметы интерьера, мебель и декор пространств для игр и радости ваших детей! Сейчас мы делаем для вас деревянные полки-домики, полки-буквы, стеллажи, столики, ширмы, вешалки, коляски и кроватки для кукол, ящики для книг и многое другое - для самых необычных и ярких детских комнат! Все используемые нами материалы - дерево, краски, масла, лаки - натуральны, безопасны и проверены на наших детях.</p>
                    </div>
                </div>
              </div>
              <img src="images/OurWorks/1.jpg">
              <img src="images/OurWorks/3.jpg">
              <img src="images/OurWorks/4.jpg">
              <img src="images/OurWorks/5.jpg">
              <img src="images/OurWorks/6.jpg">
              <img src="images/OurWorks/7.jpg">
            </div>
        </section>
        <!-- /photo header WoodyRoom -->
    
        <!-- section_one -->
        <!-- style file: css/section_one.css -->
        <section id="land_1" name="WoodyRoom">
            <div class="row section_one">
                <h1>Woody Room</h1>
                <div class="col-md-offset-2 col-md-4 col-sm-offset-2 col-sm-4">
                    <p class="text_header--slide_left wow bounceInLeft" data-wow-delay="0.2s">Здесь</p><br>
                    <p class="text_header--slide_left wow bounceInLeft" data-wow-delay="0.4s">творится</p><br>
                    <p class="text_header--slide_left wow bounceInLeft" data-wow-delay="0.6s">волшебство</p>
                </div>
                <div class="col-md-4 col-sm-4 black-bg font_size-18px wow bounceInDown"  data-wow-duration="1s" data-wow-delay="0.4s">
                    <p>WoodyRoom - это семейная мануфактура, здесь мы создаем удивительные предметы интерьера, мебель и декор пространств для игр и радости ваших детей!</p>
                </div>
            </div>
        </section>
        <!-- end section_one -->

        <!-- Small modal -->
        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></a>
                    <form id="write_us" action="" method="POST">
                        <div><input name="name" type="text" placeholder="Ваше имя..."></div>
                        <div><input name="email" type="text" placeholder="Ваш email..."></div>
                        <div><textarea name="message" id="" cols="30" rows="10"></textarea></div>
                        <div class="form_submit"><input type="submit" value="Отправить" class="btn_submit"></div>
                    </form>
                </div>
            </div>
        </div>

        <!-- section_service -->
        <section id="land_2" name="service">
            <div class="row section_service">
                <h1>Услуги</h1>
                <div class="col-md-offset-2 col-md-4 col-sm-offset-2 col-sm-4 black-bg font_size-18px wow fadeIn" data-wow-delay="0.4s">
                    <p>Сейчас мы делаем для вас деревянные полки-домики, полки-буквы, стеллажи, столики, ширмы, вешалки, коляски и кроватки для кукол, ящики для книг и многое другое - для самых необычных и ярких детских комнат! Все используемые нами материалы - дерево, краски, масла, лаки - натуральны, безопасны и проверены на наших детях.</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <p class="text_header--slide_left wow fadeIn" data-wow-delay="0.2s">Здесь</p><br>
                    <p class="text_header--slide_left wow fadeIn" data-wow-delay="0.4s">творится</p><br>
                    <p class="text_header--slide_left wow fadeIn" data-wow-delay="0.6s">волшебство</p>
                </div>
            </div>
        </section>
        <!-- end section_service -->
        
        <!-- section photo -->
        <!-- style file: css/section_photo.css -->
        <section id="land_3" class="section_photo" name="our_works">
            <div class="row">
                <h1>Наши работы</h1>
            </div>
            <div class="fotorama  wow fadeIn"
                data-width="100%"
                data-height="460"
                data-loop="true"
                ata-fit="cover"
                data-nav="thumbs"
                data-keyboard="true"
                data-wow-delay="0.6s">
              <img src="images/OurWorks/1.jpg">
              <img src="images/OurWorks/2.jpg">
              <img src="images/OurWorks/3.jpg">
              <img src="images/OurWorks/4.jpg">
              <img src="images/OurWorks/5.jpg">
              <img src="images/OurWorks/6.jpg">
              <img src="images/OurWorks/7.jpg">
            </div>
        </section>
        <!-- end section photo -->

        <!-- section_three -->
        <!-- style file: css/section_three.css -->
        <section id="land_4" name="services">
            <div class="row section_three">
                <h1>О нас</h1>
                <div class="col-md-offset-2 col-md-4 col-sm-offset-2 col-sm-4 text--gray">
                    <p>WoodyRoom - это семейная мануфактура, здесь мы создаем удивительные предметы интерьера, мебель и декор пространств для игр и радости ваших детей! Сейчас мы делаем для вас деревянные полки-домики, полки-буквы, стеллажи, столики, ширмы, вешалки, коляски и кроватки для кукол, ящики для книг и многое другое - для самых необычных и ярких детских комнат! Все используемые нами материалы - дерево, краски, масла, лаки - натуральны, безопасны и проверены на наших детях.</p>
                </div>
                <div class="col-md-4 col-sm-4 black-bg wow bounceInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                    <p>WoodyRoom - это семейная мануфактура, здесь мы создаем удивительные предметы интерьера, мебель и декор пространств для игр и радости ваших детей! Сейчас мы делаем для вас деревянные полки-домики, полки-буквы, стеллажи, столики, ширмы, вешалки, коляски и кроватки для кукол, ящики для книг и многое другое - для самых необычных и ярких детских комнат! Все используемые нами материалы - дерево, краски, масла, лаки - натуральны, безопасны и проверены на наших детях.</p>
                </div>
            </div>
        </section>
        <!-- end section_three -->
        
        <!-- footer -->

        <!-- end footer -->
        
        
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div><!-- /#preloader -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/templatemo_script.js"></script>
        <script src="js/fotorama.js"></script>
        <!-- <script src="/js/jquery-1.9.0.min.js"></script> -->
        <script src="js/jquery.liLanding.js"></script>
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();

            $(window).load(function(){
                $('.landingMenu').liLanding();

                $(".nav a").on("click", function(){
                    $(".nav").find(".active").removeClass("active");
                    $(this).parent().addClass("active");
                });

            })
        </script>

    </body> 
</html>
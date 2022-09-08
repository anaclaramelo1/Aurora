<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Feedback</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index2.html" class="logo"> <!--<img src="img/Logo.png" style= "margin-top: -15px; height: 30px; width: 30px; height: 65px; width: 150px;"> -->
                      Toca da Alegria
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="instituição.html" > Instituição </a></li>
                          <li class=""><a href="estrutura.html"> Nossa Estrutura </a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)"> Ensino </a>
                              <ul class="sub-menu">
                                  <li><a href="proposta.html">Proposta Pedagógica</a></li>
                                  <li><a href="bercario.html">Berçario</a></li>
                                  <li><a href="jardim.html">Jardim</a></li>
                                  <li><a href="mini-maternal">Mini-Maternal</a></li>
                                  <li><a href="maternal.html">Maternal</a></li>
                                  <li><a href="pre.html">Pré</a></li>
                              </ul>
                          </li>
                          <li class=""><a href="feedback.php">Contatos</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Feedback</h2>
        </div>
      </div>
    </div>
  </section>

 
        <?php
          $conexao_bd = new mysqli ("localhost", "isana", "anaeisadora123", "toca");


        ?>
    </div>


         <section class="contact-us" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 align-self-center">
                         <div class="row">
                            <div class="col-lg-12">
                                 <form id="contact" action="trpost.php" method="POST">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2> Deixe seu Comentário <h2>
                                        </div>
                                            <div class="col-lg-4">
                                              <fieldset>
                                             <input name="nome" type="text" id="name" placeholder="SEU NOME...*" required="">
                                              </fieldset>
                                            </div>
                                            <div class="col-lg-4">
                                              <fieldset>
                                                 <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="SEU EMAIL..." required="">
                                              </fieldset>
                                            </div>
                                            <div class="col-lg-4">
                                              <fieldset>
                                              <input name="assunto" type="text" id="subject" placeholder="ASSUNTO...*" required="">
                                              </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                              <fieldset>
                                              <textarea name="feedback" type="text" class="form-control" id="message" placeholder="SUA MENSAGEM..." required=""></textarea>
                                              </fieldset>
                                            </div>
                                        <div class="col-lg-12">
                                             <fieldset>
                                                 <button type="submit" id="form-submit" class="button">Enviar comentário</button>
                                              </fieldset>
                                        </div>
                                         </div>
                                 </form>
                              </div>
                          </div>
                     </div>
                 </div>
            </div>
        

          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 AURORA ACCESS, Todos os direitos reservados. 
    </div>
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>


  </body>
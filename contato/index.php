<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../_css/style.css">
    <link rel="stylesheet" href="../_css/contato.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC|Roboto+Mono" rel="stylesheet">
    <script src="../_js/jquery.js"></script>
    <script src="../_js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="../_js/script.js"></script>
    <title>Contato | Elisê Móveis</title>
</head>
<body>
   <div id="preloader">
        <img src="../_img/logo-elise.png" alt="">
        <div id="loader"></div>
    </div>
    <div class="icon mobile">
        <div class="hamburguer"></div>
    </div>
    <nav class="nav-mobile">
       <ul class="sections">
           <li><a href="../index.html">Home</a></li>
           <li><a href="../a-elise/index.html">A Elisê</a></li>
           <li class="mobile-catalogo"><a href="#">Produtos &#9662;</a>
               <ul class="produtos">
                           <li><a href="../cadeiras/index.html">Cadeiras</a></li>
                           <li><a href="../poltronas/index.html">Poltronas</a></li>
                           <li><a href="../banquetas/index.html">Banquetas/Bancos</a></li>
                           <li><a href="../mesas/index.html">Mesas</a></li>
                           <li><a href="../buffet/index.html">Buffet</a></li>
                           <li><a href="../mesaapoio/index.html">Mesas de Apoio/Centro</a></li>
               </ul>
           </li>
           <li><a href="../representantes/index.html">Representantes</a></li>
           <li><a href="index.php">Contato</a></li>
       </ul>
    </nav>
    <header class="fix-header">
        <div class="container">
           <div class="branding">
               <img src="../_img/logo-elise.png" alt="">
           </div>
           <nav class="nav-desktop">
               <ul>
                   <li><a href="../index.html">Home</a></li>
                   <li><a href="../a-elise/index.html">A Elisê</a></li>
                   <li class="desksubmenu-catalogo"><a href="#">Produtos &#9662;</a>
                       <ul class="catalogo">
                           <li><a href="../cadeiras/index.html">Cadeiras</a></li>
                           <li><a href="../poltronas/index.html">Poltronas</a></li>
                           <li><a href="../banquetas/index.html">Banquetas/Bancos</a></li>
                           <li><a href="../mesas/index.html">Mesas</a></li>
                           <li><a href="../buffet/index.html">Buffet</a></li>
                           <li><a href="../mesaapoio/index.html">Mesas de Apoio/Centro</a></li>
                       </ul>
                   </li>
                   <li><a href="../representantes/index.html">Representantes</a></li>
                   <li><a href="index.php">Contato</a></li>
               </ul>
           </nav>
           <div class="divisor">
              <div class="map">
                  <a href="../index.html"><h6>Home</h6></a>
                  <h6>> Contato</h6>
              </div>
               <div class="social come-in">
                    <ul>
                        <li><a target="_blank" href="http://www.facebook.com/MoveisElise"><img src="../_img/facebook.png" alt="Facebook"></a></li>
                    </ul>
                </div>
           </div>
        </div>
    </header>
    <div class="container">
       <div class="contact-info">
            <div class="contact">
                <p>Av. 15 de Novembro, 3901 - Nova Petrópolis / RS</p>
                <p>CEP: 95150-000</p>
                <p>(54) 3298.2220</p>
                <a href="mailto:comercial@elise.com.br"><p>comercial@elise.com.br</p></a>
            </div>
        </div>
        <section class="contactForm">
               <?php if(isset($_GET['msg']) && $_GET['msg'] === "enviado"): ?>
                      <div class="block">
                           <h3>Mensagem enviada.<br> Retornaremos o mais breve possível!</h3>
                           <a href="../index.html"><button id="retornar" class="rooBtn" type="button">Retornar à página inicial</button></a>
                       </div>
                <?php else: ?>
                <form action="enviar.php" method="post">
                    <input id="name" name="name" type="text" placeholder="Nome completo" required>
                    <input id="telefone" name="telefone" type="text" placeholder="Telefone" required>
                    <input id="email" name="email" type="text" placeholder="E-mail" required>
                    <input id="subject" name="subject" type="text" placeholder="Assunto" required>
                    <input id="cidade" name="cidade" type="text" placeholder="Cidade" required>
                    <input id="estado" name="estado" type="text" placeholder="Estado" required>
                    <input id="cep" name="cep" type="text" placeholder="CEP" required>
                    <select name="cliente" id="cliente" required>
                            <option value="select"><p>Eu sou:</p></option>
                            <option value="Representante"><p>Representante</p></option>
                            <option value="Cliente Final"><p>Cliente Final</p></option>
                    </select>
                    <textarea name="message" id="message" type="text" placeholder="Deixe aqui sua mensagem"></textarea>
                    <input class="send" id="submit" type="submit" value="Enviar">
                </form>
                <?php endif; ?>
            </section>
        <footer>
            <div class="container">
                <div class="social">
                    <ul>
                        <li><a target="_blank" href=""><img src="../_img/facebook.png" alt="Facebook"></a></li>
                    </ul>
                </div>
                <div class="footer-wrapper">
                    <div class="lojas">
                        <a href=""><p>Av. 15 de Novembro, 3901 - Nova Petrópolis / RS</p></a>
                        <a href=""><p>CEP: 95150-000</p></a>
                        <a href=""><p>(54) 3298.2220</p></a>
                        <a href="mailto:comercial@elise.com.br"><p>comercial@elise.com.br</p></a>
                    </div>
                </div>
                <p>&copy; Elisê Móveis 2018 | Todos os direitos reservados.<p>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="../_js/script.js"></script>
    <script type="text/javascript">
        loading();
        animeScroll();
    </script>
</body>
</html>
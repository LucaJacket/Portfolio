<?php
session_start();
require_once 'db_setup.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Luca Giacchetta: Web Developer/Web Designer</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
  </head>
  <body>
    <!-- Navbar -->
    <div class="nav container-full">
      <!-- Make it have padding on large screens -->
      <div class="content container-l flex jc-e ai-c">
        <a class="none-block-l" href="#">Home</a>
        <a class="none-block-l" href="#chisono">Chi sono</a>
        <a class="none-block-l" href="#servizi">Servizi</a>
        <a class="none-block-l" href="#caratteristiche">Caratteristiche</a>
        <a class="none-block-l" href="#contatti">Contatti</a>
        <!-- Hamburger menu -->
        <div id="menu" class="menu flex-l jc-sb fdir-c" onclick="menu()">
          <span id="fl"></span>
          <span id="sl"></span>
          <span id="tl"></span>
        </div>
      </div>
    </div>
    <div class="side container-full" onclick="menu()">
      <div id="sidelinks" class="links flex fdir-c">
        <a href="#">Home</a>
        <a href="#chisono">Chi sono</a>
        <a href="#servizi">Servizi</a>
        <a href="#caratteristiche">Caratteristiche</a>
        <a href="#contatti">Contatti</a>
        <!-- <a id="test" href="#"></a> -->
      </div>
      <div id="sideback" class="back"></div>
    </div>
    <!-- Web Container -->
    <div class="page container-full">
      <!-- Back image with color filter -->
      <div class="back"></div>
      <img class="backimg" src="img/back.jpg">
      <!-- Make it have padding on large screens -->
      <div class="content container-l">
        <!-- Primary Content -->
        <div class="header container-full flex jc-c ai-c fdir-c">
          <h1>Luca Giacchetta</h1>
          <h3>Web Developer & Web Designer</h3>
          <a href="#chisono">Altre Informazioni</a>
        </div>
        <!-- Who -->
        <div id="chisono" class="who">
          <div class="flex jc-c">
            <h3>Chi sono?</h3>
          </div>
          <div class="content flex fdir-c">
            <div class="element left">
              <p>Sono un giovane <span>web designer</span> e <span>web developer</span>, con <span>2 anni di esperienza</span> nel settore web.</p>
            </div>
            <div class="element right">
              <p>Attualmente vivo a <span>Bari</span> e ci&ograve che mi contraddistingue &eacute una <span>grande passione</span> per la programmazione e il design.</p>
            </div>
            <div class="element left">
              <p>Conosco approfonditamente i linguaggi per lo sviluppo <span>full-stack</span>, per la gestione di <span>server</span> e <span>database</span>.</p>
            </div>
            <div class="element right">
              <p>Il mio obiettivo &eacute elaborare un design <span>accattivante</span> e con un <span>alto tasso di conversione</span>, studiando la soluzione più congeniale ai bisogni di ogni cliente.</p>
            </div>
          </div>
        </div>
        <!-- Services -->
        <div id="servizi" class="services">
          <div class="flex jc-c">
            <h3>Di cosa mi occupo?</h3>
          </div>
          <div class="grid flex fwrap-w">
            <div class="wrapper">
              <div class="card">
                <div class="top">
                  <img class="icon" src="img/ux.png">
                  <h4>Front End Development</h4>
                </div>
                <div class="desc">
                  <p>Vorresti avere un sito web bello, personalizzato e al passo con i tempi?</p>
                  <br>
                  <p>Seguendo i migliori trend del momento, consiglio e progetto il layout del sito web, offrendo la soluzione pi&ugrave congeniale e conveniente.</p>
                </div>
              </div>
            </div>
            <div class="wrapper">
              <div class="card">
                <div class="top">
                  <img class="icon" src="img/code.png">
                  <h4>Back End Development</h4>
                </div>
                <div class="desc">
                  <p>Il tuo sito web richiede tante funzionalit&agrave?</p>
                  <br>
                  <p>I miei progetti si distinguono per semplicit&agrave, sicurezza e soprattutto efficienza, con linguaggi di programmazione solidi e un codice pulito.</p>
                </div>
              </div>
            </div>
            <div class="wrapper">
              <div class="card">
                <div class="top">
                  <img class="icon" src="img/brush.png">
                  <h4>Web Design</h4>
                </div>
                <div class="desc">
                  <p>Vuoi che il tuo sito web si distingua dalla massa?</p>
                  <br>
                  <p>Offro le migliori soluzioni di web designing, perch&eacute un sito web, prima di essere funzionale, dovrebbe essere sempre bello da vedere.</p>
                </div>
              </div>
            </div>
            <div class="wrapper">
              <div class="card">
                <div class="top">
                  <img class="icon" src="img/database.png">
                  <h4>Database Setup</h4>
                </div>
                <div class="desc">
                  <p>Il tuo sito web deve immagazzinare molte informazioni, come utenti, password e email?</p>
                  <br>
                  <p>Configurare un database pu&ograve essere complesso e macchinoso, ma non sar&agrave mai pi&ugrave un tuo problema. Offro setup rapidi e soprattutto sicuri, per evitare che i dati sensibili possano essere violati.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Features -->
        <div id="caratteristiche" class="features">
          <div class="flex jc-c">
            <h3>Perch&eacute scegliere me?</h3>
          </div>
          <div class="grid flex fwrap-w">
            <div class="wrapper">
              <div class="card">
                <div class="flex jc-c">
                  <div class="icon">
                    <img src="img/clean.png">
                  </div>
                </div>
                <div class="desc">
                  <p class="title">Chiarezza</p>
                  <br>
                  <p>Il codice sorgente dei miei progetti &eacute pulito e sempre disponibile.</p>
                </div>
              </div>
            </div>
            <div class="wrapper">
              <div class="card">
                <div class="flex jc-c">
                  <div class="icon">
                    <img src="img/fast.png">
                  </div>
                </div>
                <div class="desc">
                  <p class="title">Rapidit&agrave</p>
                  <br>
                  <p>L'efficienza &eacute la chiave del successo: consegne celeri e sempre entro le scadenze.</p>
                </div>
              </div>
            </div>
            <div class="wrapper flex fdir-c">
              <div class="flex jc-c">
                <div class="icon">
                  <img src="img/gear.png">
                </div>
              </div>
              <div class="desc">
                <p class="title">Flessibilit&agrave</p>
                <br>
                <p>Offro siti web completi, con ogni genere di funzione e device-responsive.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Contacts -->
        <div id="contatti" class="contacts">
          <div class="flex jc-c">
            <h3>Come puoi contattarmi?</h3>
          </div>
          <div class="grid flex fwrap-w">
            <div class="wrapper">
              <div class="card">
                <div class="flex jc-c">
                  <div class="icon">
                    <a href="mailto:luca.giacchetta.01@gmail.com"><img src="img/email.png"></a>
                  </div>
                </div>
                <div class="desc">
                  <p>Scrivimi una mail</p>
                </div>
              </div>
            </div>
            <div class="wrapper">
              <div class="card">
                <div class="flex jc-c">
                  <div class="icon">
                    <a href="tel:+393270412200"><img src="img/phone.png"></a>
                  </div>
                </div>
                <div class="desc">
                  <p>Chiamami</p>
                </div>
              </div>
            </div>
            <div class="social">
              <div class="flex fwrap-w">
                <!-- <a href="#"><img src="img/facebook.png"></a> -->
                <a href="https://t.me/LucaJacket"><img src="img/telegram.png"></a>
                <a href="https://github.com/LucaJacket"><img src="img/github.png"></a>
                <a href="https://www.instagram.com/luca.giacchetta/"><img src="img/instagram.png"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <div class="footer">
        <div class="content container-l">
          <h3>Scrivimi pi&ugrave tardi...</h3>
          <div class="msg none jc-c" onclick="this.style.display = 'none';">
            <p>Mail inviata con successo.</p>
          </div>
          <p>Lascia qui la tua mail se vuoi essere ricontattato.</p>
          <form class="emailform flex fdir-c" action="store_message.php" method="post">
            <input type="text" name="name" placeholder="Il tuo nome" required>
            <input type="email" name="email" placeholder="La tua mail" required>
            <input type="tel" name="tel" placeholder="Il tuo numero (opzionale)">
            <div class="flex jc-c">
              <input type="submit" value="Invia">
            </div>
          </form>
          <p>Sito completamente creato da zero con:<br>
            HTML, Sass, CSS, JavaScript, PHP e SQL.<br><br>
            Copyright &copy <?php echo date('Y'); ?></p>
        </div>
      </div>
    </div>
    <!-- Hamburger Menu JavaScript -->
    <script src="js/menu.js"></script>
  </body>
</html>

<?php
if (isset($_SESSION["stored"])) {
  echo "<script> document.getElementsByClassName('msg')[0].style.display = 'flex'; </script>";
  unset($_SESSION["stored"]);
}
?>

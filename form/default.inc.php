<style type="text/css">

/*===================================


  Universal Styling


*=====================================*/
*{
  margin: 0;
  padding: 0;
  border: 0;
}

article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
    display:block;
}



header{
background-image: url("Img/BG.png");
border-bottom: 3px solid #AC67AA;
box-shadow: 0px 0px 11px 3px #7a5da7;
width: 100%;
}


.desktop-menu{
  display: none;
}
.Lesson2{
  display: none;
}


h1, h2, h3, h4, h5, h6{
  font-family: chaloops, sans-serif;
  font-weight: 700;
  font-style: normal;
  color: #393b3f
}

ul li a{
  font-family: chaloops, sans-serif;
  font-weight: 700;
  font-style: normal;
  color: #393b3f
}

p,
figcaption,
.list{
  font-family: chaloops, sans-serif;
  font-weight: 400;
  font-style: normal;
  color: #393b3f
}

/*
Chaloops Bold

font-family: chaloops, sans-serif;

font-weight: 700;

font-style: normal;
 */

 /* Chaloops Regular

font-family: chaloops, sans-serif;

font-weight: 400;

font-style: normal; */



/* Futura PT Light

font-family: futura-pt, sans-serif;

font-weight: 300;

font-style: normal; */

/* **************************************HAMBURGER MENU STYLES**ß****************************************** */
.hamburger{
  background:none;
  position:absolute;
  top:0;
  right:0;
  line-height:16px;
  padding:7px 15px 0 15px;
  color:#E56132;
  border:0;
  font-size:3em;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}
.cross{
  background:none;
  position:absolute;
  top:0px;
  right:0;
  padding:7px 15px 0px 15px;
  color:#5CBE80;
  border:0;
  font-size:3em;
  line-height:39px;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}

.menu{
  z-index:1000000;
  font-size:0.8em;
  width:100%;
  background:#AC67AA;
  position:absolute;
  text-align:center;
  font-size:12px;
    }


.menu ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
  list-style-image: none;
 }


.menu li {
  display: block;
  padding:15px 0 15px 0;
  border-bottom:#dddddd 1px solid;
}


.menu li:hover{
  display: block;
  background:#A7DEF1;
   padding:15px 0 15px 0;
  border-bottom:#dddddd 1px solid;
}
.menu ul li a {
  text-decoration:none;
  margin: 0px;
  color:#E56132;
  text-decoration: none;
  /* font-family: ; */
  margin: 0 1.5%;
  font-size: .9375em;
}


.menu ul li a:hover {
   color: #5CBE80;
   text-decoration:none;
 }

.menu a{
  text-decoration:none;
  color:#393b3F;;}

.menu a:hover{
  text-decoration:none;
  color:#D3D9DD;}
/* **************************************HAMBURGER MENU STYLES******************************************** */


/* **************************************Desktop MENU STYLES******************************************** */
.desktop-menu {
  width:45%;
  max-width: 500px;
  margin-left: 10%;
}

.desktop-menu ul {
     list-style-type: none;
     display: inline-flex;
     width: 100%;
     align-content: space-around;
  }

  .desktop-menu ul li {
    flex:auto;
    padding-top: 9%
  }

  .desktop-menu ul li a {
     color: #D74D32;
     transition: 1s;
     text-decoration: none;
     font-family: chaloops, sans-serif;
     font-weight: 700;
     font-style: normal;
     margin: 0 1.5%;
     font-size:1.5em;

  }

  .desktop-menu ul li a:hover {
    color: #7A5DA7;
    transition: .2s;
    list-style: none;
  }



  /*================= Footer=========== */
  footer{
    color:#393b3F;
    font-family: futura-pt, sans-serif;
    font-weight: 300;
    font-style: normal;
    font-size: 1em;
    width: 100%;
    display:flex;
  }

  footer{
    background-image: url("Img/Footer.png");
    width: 100%;
      background-position: 10%  44%;
  }


  .quote{
    text-align: center;
    font-family: chaloops, sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: .8em;

  }

  #FooterCenter{
    width:75%;
    align-content: center;
    margin-left: 5%;
    display: flex;
    flex-direction: column;
    align-content: space-around;
  }

   #centerleft{
    flex-grow: 2;
    text-align: center;
  }
  #centeright{
    flex-grow: 1;
    text-align: left;
  }
  .row2{

    display: flex;
    flex-direction: row;
    align-content: space-around;
  }

  #footr{
    margin-left: 6%;
  }
  #footr img{
    width: 35px
  }


/*=====================================================Home===================*/


</style>


  <head>

    <meta charset="utf-8">

    <meta name="robots" content="noindex">

    <title>Mermaids and Tadpoles</title>

    <link rel="stylesheet" href="Style.css" type="text/css" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.typekit.net/ozd4ptm.css">

    <!--Favcon-->
    <link rel="icon" type="image/png" href="Img/Tadpole.png">

  <!--[if lt IE 9]>
    <script src="js/html5shiv-printshiv.min.js"></script>
  <![endif]-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  </head>

<body>


  <header>
    <img id="HorzLogo" src="Img/LogoVert.png" alt="Horz Logo">
    <button class="hamburger">&#9776;</button>
    <button class="cross">&#735;</button>

        <!-- MOBILE MENU ********************************************************************* -->
        <nav class="menu">
          <ul>
            <li><a href="Home.html">WELCOME</a></li>
            <li><a href="About.html">WHAT WE OFFER</a></li>
            <li><a href="Contact.html">CONTACT US</a></li>
          </ul>
        </nav>

        <!-- DESKTOP MENU ********************************************************************* -->

        <nav class="desktop-menu">
          <ul>
            <li><a href="Home.html">WELCOME</a></li>
            <li><a href="About.html">WHAT WE OFFER</a></li>
            <li><a href="Contact.html">CONTACT US</a></li>
          </ul>
        </nav>
  </header>


<main >
  <div class="oops">
    <h3>oops! Something went wrong!</h3>
  </div>

  </main>


   <footer>
    <section id="FooterCenter">
      <p class="quote">"Effective instruction in a fun and safe enviorement, creating the best experience for all!"</p>


      <div class="row2">
        <section id="centerleft">
          <p>(XXX)XXX-XXXX</p>
        </section>

        <section id="centeright">
          <p>mermaid.tadpole@gmail.com</p>
        </section>
      </div>
    </section>

    <section id="footr">
      <a href="https://www.facebook.com/mermaidsntadpoles" target="_blank"><img src='Img/Fb.png' alt="Facebook" title= "Facekook"></a>
    </section>

  </footer>

  <script src="js/carousel.js" charset="utf-8"></script>

  <script src="js/hamburger.js"></script>
</body>
</html>

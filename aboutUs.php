
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Morgonrode</title>
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <link href="lightbox/css/lightbox.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans|Baumans' rel='stylesheet' type='text/css'>
        
        <script src="js/vendor/modernizr.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
        
        <!-- include extern jQuery file but fall back to local file if extern one fails to load !-->
        <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js\/vendor\/1.7.2.jquery.min.js"><\/script>')</script>
        
        <script src="lightbox/js/lightbox.js"></script>
        <script src="js/vendor/prefixfree.min.js"></script>
        <script src="js/vendor/jquery.slides.min.js"></script>
        <script src="js/script.js"></script>
        
        <!--[if lt IE 9]>
            <style>
                header
                {
                    margin: 0 auto 20px auto;
                }
                #four_columns .img-item figure span.thumb-screen
                {
                    display:none;
                }  
            </style>
        <![endif]-->
        
        
        <script>
        $(function() {
          $('#slides').slidesjs({	
            height: 235,
            navigation: false,
            pagination: false,
            effect: {
              fade: {
                speed: 400
              }
            },
            callback: {
                start: function(number)
                {			
                    $("#slider_content1,#slider_content2,#slider_content3").fadeOut(500);
                },
                complete: function(number)
                {			
                    $("#slider_content" + number).delay(500).fadeIn(1000);
                }		
            },
            play: {
                active: false,
                auto: true,
                interval: 6000,
                pauseOnHover: false,
                effect: "fade"
            }
          });
        });
        </script>
	</head>

	<body>
        <header>
            <div class="toggleMobile">
                <span class="menu1"></span>
                <span class="menu2"></span>
                <span class="menu3"></span>
            </div>
            <div id="mobileMenu">
                <ul>
                    <li><a href="index.php">Hjem</a></li>
                    <li><a href="gallery.php">Galleri</a></li>
                    <li><a href="songs.php">Sanger</a></li>
                    <li><a href="aboutUs.php">Om oss</a></li>
                    <li><a href="contact.php">Kontakt oss</a></li>
                </ul>
            </div>           
            <h1>Morgonrode</h1>
            <p>Lysar opp kvardagen</p>           
            
            <nav>
            	<h2 class="hidden">Navigation</h2>
                <ul>
                    <li><a href="index.php">Hjem</a></li>
                    <li><a href="gallery.php">Galleri</a></li>
                    <li><a href="songs.php">Sanger</a></li>
                    <li><a href="aboutUs.php" style="color:#e56038">Om oss</a></li>
                    <li><a href="contact.php">Kontakt oss</a></li>
                </ul>
            </nav>
        </header>
       
        <section id="text_columns">
        	<h2 class="hidden">tekstEksempel3</h2>
            <article class="column1">    
                <h3>Selma</h3>
                <p>Kort om meg.... en norsk variant av fiolinen. I tillegg til 4 overstrenger, har den 4–5 underliggende resonansstrenger. Disse gir den spesielle klangen i ei hardingfele. Det er også lett å kjenne igjen ei hardingfele på dekorasjonene, som tildels er stedegne. Ei hardingfele kan også kjennes igjen på stolen som er flatere enn på en vanlig fiolin. Fingerbrettet er mønstret.</p>

                    <p>Utdanning..... bevarte hardingfela, Jaastadfela, ska </p>

                    <p>Slagord.. ..... bevarte hardingfela, Jaastadfela, ska </p>
            </article>
            <section class="column2">
            	<h3 class="hidden">Selma</h3>
                <article class="row">  
                	 <figure>  
                    <a href="img/selma.jpg" rel="lightbox" title="Some title">
                        <span class="thumb-screen"></span>
                        <img src="img/selma.jpg" alt="pic: Selma " height="350" width=auto/>
                        
                    </a>
                </article> 
                
            </section>
        </section>
        

        <section id="text_columns">
            <h2 class="hidden">Helga</h2>
            <article class="column1">    
                <h3>Helga</h3>
                <p>Kort om meg.... en norsk variant av fiolinen. I tillegg til 4 overstrenger, har den 4–5 underliggende resonansstrenger. Disse gir den spesielle klangen i ei hardingfele. Det er også lett å kjenne igjen ei hardingfele på dekorasjonene, som tildels er stedegne. Ei hardingfele kan også kjennes igjen på stolen som er flatere enn på en vanlig fiolin. Fingerbrettet er mønstret.</p>

                    <p>Utdanning..... bevarte hardingfela, Jaastadfela, ska </p>

                    <p>Slagord.. ..... bevarte hardingfela, Jaastadfela, ska </p>
            </article>
            <section class="column2">
                <h3 class="hidden">Helga</h3>
                <article class="row">  
                     <figure>  
                    <a href="img/helga.jpg" rel="lightbox" title="Some title">
                        <span class="thumb-screen"></span>
                        <img src="img/helga.jpg" alt="pic: Helga " height="350" width=auto/>
                        
                    </a>
                </article> 
                
            </section>
        </section>

        <section id="text_columns">
            <h2 class="hidden">rasmus</h2>
            <article class="column1">    
                <h3>Rasmus</h3>
                <p>Kort om meg.... en norsk variant av fiolinen. I tillegg til 4 overstrenger, har den 4–5 underliggende resonansstrenger. Disse gir den spesielle klangen i ei hardingfele. Det er også lett å kjenne igjen ei hardingfele på dekorasjonene, som tildels er stedegne. Ei hardingfele kan også kjennes igjen på stolen som er flatere enn på en vanlig fiolin. Fingerbrettet er mønstret.</p>

                    <p>Utdanning..... bevarte hardingfela, Jaastadfela, ska </p>

                    <p>Slagord.. ..... bevarte hardingfela, Jaastadfela, ska </p>
            </article>
            <section class="column2">
                <h3 class="hidden">rasmus</h3>
                <article class="row">  
                     <figure>  
                    <a href="img/selma.jpg" rel="lightbox" title="Some title">
                        <span class="thumb-screen"></span>
                        <img src="img/rasmus.jpg" alt="pic: Rasmus " height="350" width=auto/>
                        
                    </a>
                </article> 
                
            </section>
        </section>



        <footer>
        	<h2 class="hidden">Footer</h2>
            <section id="copyright">
            	<h3 class="hidden">Copyright notice</h3>
                <div class="wrapper">
                    <div class="social">
       
                        <a href="javascript:void(0)"><img src="img/violin.png" alt="img" width="35"/></a>
                    </div>
                    &copy; Copyright 2016 by <a href="http://www.morgonrode.no">Morgonrode</a>. All Rights Reserved.
                </div>
            </section>
          
        </footer>
	</body>
</html>

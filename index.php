<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cie - MezzaLuna</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <style>
        .creations_med {
            padding: 4px;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

   
    
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Cie - MezzaLuna</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                      <li>
                        <a class="page-scroll" href="#about">Accueil</a>
                    </li>                  
                    
                    
                    <li>
                        <a class="page-scroll" href="#services">Créations</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#actu">Actualités</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#press">Presse</a>
                    </li>                    
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Cie - MezzaLuna</h1>
                <hr>
                <p>La Companie Theatrale</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Qui sommes nous?</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><small>cie </small>MezzaLuna</h2>
                    <hr class="light">
                    <p class="text-faded">
			Créée en 1986 par Ann de Fonvent et Michel Delamarre dans la mouvance du théâtre alternatif et de recherche, 
			la Cie Mezza Luna développe un travail basé sur la création collective. Elle propose des spectacles qui bouleversent 
			les règles traditionnelles du théâtre et les codes connus du récit. Avec allégresse, elle explore les possibilités 
			d’interactions entre les spectateurs et le spectacle, les spectateurs et les acteurs, les spectateurs et l’espace.<br/><br/>
			La Cie Mezza Luna séduit un public tenté par la dérision, l'humour, l’émotion et par l’intuition d’un « instant » 
			de théâtre, fragile, partagé, dans la joie d’un moment qu’on sait éphémère.
                        <br /><br />                    
                    </p>
                    <p class="small">
                    « Une fois disparus la Terre, les planètes, le Soleil, les étoiles, 
			mais non pas leur matière, de celle-ci se formeront des créatures nouvelles, 
			distinguées en espèces et en genres nouveaux, et des énergies éternelles de 
			la matière naîtront un nouvel ordre des choses et un monde nouveau. 
			Mais leurs formes, comme celles des mondes innombrables qui furent et de ceux, infinis, 
			qui seront, nous ne saurions seulement les concevoir. »<br/>
			<p class="font" align="right">Giacomo Leopardi   1798-1837    
                        
                    </p>
                    <a href="#" class="btn btn-default btn-xl">decouvrez!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Creations</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="Creations">
                    //debug php out <br >
<?php
$dir    = './media/portfolio/';
$files = scandir($dir);
foreach ($files as &$value) {
    
    
if (strpos($value, 'jpg') !== false) {
    $size = getimagesize($dir .$value);
    //echo "<img alt='" .$value ."' src='" .$dir .$value ."' width='" .$size[0]/10 ."' height='" .$size[1]/10 ."' class='creations_med' /> ";
}    
}
?>
</div>
            </div>
        </div>
    </section>

    <section class="actu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
        
                    <h3>Actualité</h3>
			
                        <strong>Nouveau projet:</strong>
                        
                        <h3>Chapitre 1</h3>
                        <h2><em style="font-variant: small-caps;color:rgb(185, 39, 48);">"Cruauté"</em></h2> 
                        <p>
                          La Halte - rue de la casquette 4
                        <br />4000 - Liege.
                        <br /><br />
                        <a title="Lien vers la carte" style="text-decoration: underline !important; font-size: 80%;"
                                href="https://www.google.be/maps/place/La+Halte/@50.6426972,5.5670911,17z/data=!3m1!4b1!4m2!3m1!1s0x47c0fa11caf28931:0xabc5d0f175c9b63b" 
                               target="map">Lien vers la carte</a>
                        
                        <br /><br />
                        Les 8,9,10 & 11 Juin &agrave; 20:30
                        </p>        
    </section>
                </div>
            </div>
        </div>
        
        

    
    
    
    
    <section class="no-padding" id="portfolio">

        
        
        
        <div class="container-fluid">
            <div class="row no-gutter">
            <div>
                <div id="jsontest">
                    <h1>/*tests*/</h1>
                </div>
            </div>
                       
                
                
                
            <!--   
                
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="media/---_0024.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="media/---_0012.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="media/_15_0941.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="media/_24_1021.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="media/__9_1136.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            
            -->
            </div>
        </div>
    </section>


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.collagePlus.min.js"></script>
    

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

<script>
   //.Creations
$(window).load(function () {
        $('.Creations').collagePlus();



listCreations();


function listCreations() {
  var $testContainer = $('#jsontest');
  var thumbsApi = "/photos-gallery/gallery.json";
  $.getJSON( thumbsApi, {
    format: "json"
  })
    .done(function( data ) {
    console.log('data: ',data);
        $(data).each(function(index, Element) {
                //console.log(index,Element);
                //only if it's an image
                var n = Element.name.indexOf(".jpg");
                
                if (n > -1) {
                   $('<div/>', {
                       text: 'Creation ' +Element.name,
                       id: 'thumb_' +Element.id
                   }).appendTo('#jsontest');   

                    var img = $('<img />', { 
                      src: '/photos-gallery/' +Element.name,
                      alt: Element.name,
                      width: '12%',
                      height: '12%'
                    });
                      img.width(img.clientWidth /10);
                      img.height(img.clientHeight /10);                    
    
                    console.log(img);
                    
                    img.appendTo('#thumb_' +Element.id);


            
            
            
                    //$creaimg = ('<img src="/photos-gallery/' +Element.name +'"/>');
            
                }
                /*else if (n === -1) {
                   $creatitle = ('<h3>' +Element.name +'</h3>'); 
                   $('<div/>', {
                       text: 'Creation ' +name,
                       html: $creatitle
                   }).appendTo('#jsontest');               
                }
                */
          
        });

    });    
    
}




});   
   
</script>     
    
    
</body>

</html>

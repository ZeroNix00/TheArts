<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html ng-app class="no-js"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type"
    accesskey=""content="text/html;charset=ISO-8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ArtMinded | Home</title>
        <meta name="description" content="Art app for everyone">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Droid serif -->
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400italic' rel='stylesheet' type='text/css'>
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/vendor/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/vendor/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Facebook SDK-->
          <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '688462594555702',
          xfbml      : true,
          version    : 'v2.1'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
    
    
    <nav class="navbar navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
  <a class="navbar-brand" href="#">ArtMinded <span style="font-size: 8px">v0.1 alpha</span></a>
  <ul class="nav navbar-nav navbar-left">
        <li id="menuItem" class="navbar button active"><a href="#" title="Home"><span class="glyphicon glyphicon-home" style="padding-right: 5px;"></span>Home</a></li>
        <li id="menuItem" class="navbar button disabled"><a href="#content-add" title="Dit menuitem is nog niet beschikbaar."><span class="glyphicon glyphicon-picture" style="padding-right: 5px;"></span>Inhoud toevoegen</a></li>
        <li id="menuItem" class="navbar button disabled"><a href="#about-art" title="Dit menuitem is nog niet beschikbaar."><span class="glyphicon glyphicon-info-sign" style="padding-right: 5px;"></span>Kunst begrijpen</a></li>
    </ul>
        </div>
  <div class="navbar-collapse collapse">
          <div class="nav navbar-nav navbar-right">   
              <p>Inloggen of registreren</p>
            <button class="btn btn-success" role="login"><span class="glyphicon glyphicon-lock" style="padding-right: 5px; color: #fff;"></span> Login</button>       
            <button class="btn btn-primary" role="login"><span class="glyphicon glyphicon-user" style="padding-right: 5px; color: #fff;"></span> Registreer</button>  
  </div>
        </div>
</nav>
         <div class="container">
             <div class="row">
        <div class="col-md-8">
            <div class="precontent">
          <h2>Laatst toegevoegde kunst artikelen</h2>
          <p>Het meest recente artikel werd toegevoegd op 25-09-14 om 18:35. <a href="#content-add">Voeg ook een artikel toe!</a></p>
            </div>
          <div class="content1">
              <img class="contentImage" src="src/res_1/Kunst uit de 16e eeuw/(1485 - 1540) Joos van Cleve/Adoration of the Kings (1517-1518) (110 x 71) (Dresden Gallery).jpg" alt="1" />
          <h3>Adoration of the Kings</h3>
              <span class="art-information">Joos van Cleve &#8210; <span class="content1 timespan">1517-1518</span></span>              
              <p class="description">The central panel from a triptych: the other two kings are presumed to have been on the missing shutters.
              The figures on the right in the background are likely to be part of the procession following the kings to the stable...
              </p>
              <p><a href="#content/vanCleve1">&raquo; Lees het volledige artikel</a></p>
          </div>
          
      
          </div>
        
      <!-- Recent toegevoegde uploads -->
      
        <div class="col-md-4">
          <h2>Artikel overzicht</h2>
          <p>Gebruikers voegden deze artikels toe.</p>
          <?php
        // Main class 
        class index {
            
            // Image folder
            public $imageSource;
            // Static definition of allowed filetypes
            public $allowedFormat = ["type" => 'jpg',
                'jpeg','JPEG','png','gif'];
            
            // Array to store folders.
            public $folderArray = [];
            
            // How many descriptions on the page?
            public $pageUploadDescLimit = 5;
            
            // Construct data on instantiation of this class.
            
                            // Magic method __construct
            public function __construct($src) {
                $this->imageSource = $src;
                $this->generateTemplate(); // Perform this action by default.
            }
                
              // Construct an array of images within specified folder.
            private function createFolderArray() {
                $folder = scandir($this->imageSource);
                foreach($folder as $folder_name) {
                    array_push($this->folderArray, $folder_name);
                }
            }
            
            private function generateImage() {
                
            }
            
            public function generateTemplate() {
                // Create an array of images.
                $this->createFolderArray();
                    foreach($this->folderArray as $folderName) {
                        if($folderName !="." && $folderName !="..") {
                            // When folder contains other folders
                            if($subFolders = scandir($this->imageSource."/".$folderName)) {
                        echo "<ul class=\"list-group\">";
                        echo "<li class=\"list-group-item active\">$folderName"."</li>";
                                    // Generate subfolders
                                    foreach($subFolders as $subFolder) {
                                        if($subFolder !="." && $subFolder !="..") {
                                    echo "<li class=\"list-group-item\">$subFolder</li>";
                                        
                                    }
                                }
                                echo "</ul>";
                            }
                            else {
                                echo $folderName;
                            }
                    }
                    }
            }
        }
            
            
            
            
        
        $index = new index('src/res_1');
        
        
        
        
        ?>
        </div>
        
      </div>
        
          
       
      <hr>
      <footer>
        <p>&copy; ArtMinded 2014</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>

<?PHP
ERROR_REPORTING(E_ALL);
ini_set('display_errors', false);
if(!file_exists('./inc/config.inc.php'))
{
   header('Location: index.php');
}
require('./inc/config.inc.php');
?>
<!DOCTYPE HTML>
<html lang="en" prefix="og: http://ogp.me/ns#">
   <head>
      <title><?PHP echo $serverSettings['servername']; ?></title>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, maximum-scale=1" />
      <meta name="keywords" content="wow private server, wow free server" />
      <meta name="description" content="World of Warcraft Private Server" />
      <meta property="og:title" content=<?PHP echo $serverSettings['title']; ?>/>
      <meta property="og:description" content=<?PHP echo $serverSettings['desc']; ?>/>
      <meta property="og:type" content="website" />
      <meta property="og:url" content=<?PHP echo $serverSettings['url']; ?>/>
      <meta property="og:image" content="https://i.imgur.com/inKWUnn.jpg" />
      <link rel="shortcut icon" href="./assets/images/favicon.png" />
      <link rel="alternate icon" href="favicon.ico" />
      <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png" />
      <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png" />
      <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png" />
      <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png" />
      <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png" />
      <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png" />
      <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png" />
      <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png" />
      <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png" />
      <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png" />
      <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
      <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png" />
      <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
      <link rel="manifest" href="manifest.json" />
      <meta name="msapplication-TileColor" content="#ffffff" />
      <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png" />
      <meta name="theme-color" content="#ffffff" />
      <link href="assets/css/style.css" rel="stylesheet" />
   </head>
   <body>
      <div class="wrapper">
         <header>
            <?PHP 
            require('./inc/navi.inc.php'); 
            require('./inc/header.php');
            ?>
         </header>
         <div class="seperator"></div>
         <main>
         <?PHP
            if(isset($_GET['s']) && !empty($_GET['s']))
            {
               if(file_exists("./pages/".$_GET['s'].".php")) 
               {
                  include("./pages/".$_GET['s'].".php");
               }
               else
               {
                  include("./pages/home.php");
               }
            }
            else 
            {
               include("./pages/home.php");
            }?>   
         </main>
         <footer>
            <?PHP require_once('./inc/footer.php'); ?>
         </footer>
      </div>
      <!-- EXTERNAL SCRIPTS
         ============================================= -->
      <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
      <script src="assets/js/countdown.js"></script>
      <script type="application/ld+json">
         {
         "@context": "https://schema.org/",
         "@type": "WebSite",
         "name": "ServerName - World of Warcraft Private Server",
         "url": "https://servername.com",
         "potentialAction": {
         "@type": "SearchAction",
         "target": "{search_term_string}",
         "query-input": "required name=search_term_string"
         }
         }
      </script>
   </body>
</html>
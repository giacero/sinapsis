<!DOCTYPE HTML>
<html lang = "en">
  <head>
    <meta charset="utf-8" />
    <title>Sinapsis | Cerebro Digital</title>
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Proyecto Sinapsis de Cerebro Digital" />
    <meta name="keywords" content="cerebro digital, sinapsis" />
    <meta property="og:type" content="cerebrodigital" />
    <meta property="og:title" content="Sinapsis | Cerebro Digital" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="http://cerebrodigital.org" />
    <meta property="og:site_name" content="Sinapsis | Cerebro Digital" />
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="/syn/css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/syn/css/font-awesome.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/syn/css/dat-menu.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/syn/css/main-stylesheet.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/syn/css/responsive.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Oswald:300,400,700|Source+Sans+Pro:300,400,600,700&amp;subset=latin,latin-ext" />
    <!--[if lt IE 9 ]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      /* Man content & sidebar top lne, default #256193 */
      #sidebar .panel,
      #main-box #main {
        border-top: 5px solid #256193;
      }

      /* Slider colors, default #256193 */
      a.featured-select,
      #slider-info .padding-box ul li:before,
      .home-article.right ul li a:hover {
        background-color: #256193;
      }

      /* Button color, default #256193 */
      .panel-duel-voting .panel-duel-vote a {
        background-color: #256193;
      }

      /* Menu background color, default #000 */
      #menu-bottom.blurred #menu > .blur-before:after {
        background-color: #000;
      }

      /* Top menu background, default #0D0D0D */
      #header-top {
        background: #0D0D0D;
      }

      /* Sidebar panel titles color, default #333333 */
      #sidebar .panel > h2 {
        color: #333333;
      }

      /* Main titles color, default #353535 */
      #main h2 span {
        color: #353535;
      }

      /* Selection color, default #256193 */
      ::selection {
        background: #256193;
      }

      /* Links hover color, default #256193 */
      .article-icons a:hover,
      a:hover {
        color: #256193;
      }

      /* Image hover background, default #256193 */
      .article-image-out,
      .article-image {
        background: #256193;
      }

      /* Image hover icons color, default #256193 */
      span.article-image span .fa {
        color: #256193;
      }
    </style>
  </head>
  <body class="no-slider">
  <!-- <body class="has-top-menu"> -->
    <!-- BEGIN #slider-imgs -->
    <div id="slider-imgs">
      <div class="featured-img-box">
        <div id="featured-img-1" class="featured-img"></div>
        <div id="featured-img-2" class="featured-img invisible"></div>
        <div id="featured-img-3" class="featured-img invisible"></div>
        <div id="featured-img-4" class="featured-img invisible"></div>
      </div>
    <!-- END #slider-imgs -->
    </div>

    <!-- BEGIN #top-layer -->
    <div id="top-layer">
      @include('frontend.includes.headertop')
      <section id="content">
        @include('frontend.includes.header')

        <div id="main-box" class="full-width">
          
          <div id="main">
            @yield('main')
            
          </div>
          @yield('sidebar')
          <div class="clear-float"></div>
          
        </div>
      </div>
    </div>
      
    <div class="clear-float"></div>
    @include('frontend.widgets.shoutbox')
    <div class="wrapper">
      <!-- BEGIN .footer -->
      @include('frontend.includes.footer')
    </div>
    <script type='text/javascript' src='/syn/jscript/jquery-1.11.2.min.js'></script>
    <script type='text/javascript' src='/syn/jscript/modernizr.custom.50878.js'></script>
    <script type='text/javascript' src='/syn/jscript/iscroll.js'></script>
    <script type='text/javascript' src='/syn/jscript/dat-menu.js'></script>
    <script type='text/javascript'>
      var strike_autostart = false;
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-79516550-1', 'auto');
      ga('send', 'pageview');

    </script>
    <script type='text/javascript' src='syn/jscript/theme-script.js'></script>

    @yield('bottomscripts')
  </body>
</html>
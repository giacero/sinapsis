<!DOCTYPE HTML>
<html lang = "en">
    <head>
        <meta charset="utf-8" />
        <title>Cerebro Digital | Comunidad digital - Proyecto Sinapsis</title>
        <meta content="IE=edge" http-equiv="X-UA-Compatible" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="description" content="Somos una mente colectiva de información que se propaga a favor de la educación abierta e interactiva globalmente." />
        <meta name="keywords" content="cerebro digital, proyecto sinapsis" />
        <meta property="og:type" content="community" />
        <meta property="og:title" content="Cerebro Digital | Proyecto Sinapsis" />
        <meta property="og:image" content="https://s3.amazonaws.com/cerebrodigital/blog/uploads/ogimage.jpg" />
        <meta property="og:description" content="Somos una mente colectiva de información que se propaga a favor de la educación abierta e interactiva globalmente." />
        <meta property="og:url" content="http://cerebrodigital.org" />
        <meta property="og:site_name" content="Cerebro Digital | Proyecto Sinapsis" />
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
    <!--<body class="no-slider">-->
    <body class="has-top-menu">
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
                @include('frontend.includes.header_landing')

                <div id="main-box">
                    
                    <div id="main">

                        <!-- <div class="content-padding">
                            <a href="podcasts-single.html" class="top-alert-message">
                                <span><span class="pod-live">Custom message</span>An event is happening tonight 20:00! Be Prepared!</span>
                            </a> 
                        </div> -->

                        <h2><span>Notas destacadas de la semana</span></h2>
                        <div class="content-padding">
                            <div class="home-article left">
                                <span class="article-image-out">
                                    <span class="image-comments"><span>21</span></span>
                                    <span class="article-image">
                                        <span class="nth1 strike-tooltip" title="Leer artículo">
                                            <a href="{{route('blog.view.post', $featured->first()->slug)}}"><i class="fa fa-eye"></i></a>
                                        </span>
                                        <span class="nth2 strike-tooltip" title="Save to read later">
                                            <a href="#"><i class="fa fa-plus"></i></a>
                                        </span>
                                        <a href="{{route('blog.view.post', $featured->first()->slug)}}"><img src="{{$featured->first()->featured_media}}" alt="" title="" /></a>
                                    </span>
                                </span>
                                <h3><a href="{{route('blog.view.post', $featured->first()->slug)}}">{{$featured->first()->title}}</a></h3>
                                <p>{!! substr(strip_tags($featured->first()->body), 0, 120) !!}...</p>
                                <div>
                                    <a href="post.html" class="defbutton"><i class="fa fa-reply"></i>Leer artículo completo</a>
                                </div>
                            </div>
                            <div class="home-article right">
                                <ul>
                                <?php $featured_first = 0; ?>
                                @foreach($featured as $featured_post)
                                    @if($featured_first == '0')

                                    @else
                                    <li>
                                        <a href="{{route('blog.view.post', $featured_post->slug)}}">
                                            <span class="image-comments"><span>21</span></span>
                                            <img src="{{$featured_post->featured_media}}" width="89" height="55" alt="" title="" />
                                            <strong>{{$featured_post->title}}</strong>
                                            <span class="a-txt">{!! substr(strip_tags($featured_post->body), 0, 100) !!}...</span>
                                        </a>
                                    </li>
                                    @endif

                                    <?php $featured_first++; ?>
                                @endforeach
                                </ul>

                                <div>
                                    <a href="#" class="defbutton"><i class="fa fa-reply"></i>Ver más artículos</a>
                                </div>
                                
                            </div>
                            <div class="clear-float"></div>
                        </div>

                        <h2><span>Últimos artículos Ciencia</span></h2>
                        <div class="content-padding">
                            <div class="grid-articles">

                                <!-- BEGIN .item -->
                                @foreach($latest as $latest_posts)
                                <div class="item">
                                    
                                    <span class="article-image-out">
                                        <span class="image-comments"><span>21</span></span>
                                        <span class="article-image">
                                            <span class="nth1 strike-tooltip" title="Read Article">
                                                <a href="{{route('blog.view.post', $latest_posts->slug)}}"><i class="fa fa-eye"></i></a>
                                            </span>
                                            <span class="nth2 strike-tooltip" title="Guardar para leer después">
                                                <a href="#"><i class="fa fa-plus"></i></a>
                                            </span>
                                            <a href="{{route('blog.view.post', $latest_posts->slug)}}">
                                            <p>vistas: {{$latest_posts->total_views}}</p>
                                            @if($latest_posts->type = 'image' || $latest_posts->type = 'URLimage')
                                                <img src="{{$latest_posts->featured_media}}" alt="" title="" /></a>
                                            @endif
                                            @if($latest_posts->type = 'audio')
                                                <audio src="/syn/images/photos/image-26.jpg" alt="" title="" /></a>
                                            @endif
                                            @if($latest_posts->type = 'video' )
                                                <embed src="/syn/images/photos/image-26.jpg" alt="" title="" /></a>
                                            @endif
                                        </span>
                                    </span>
                                    <h3><a href="{{route('blog.view.post', $latest_posts->slug)}}">{{$latest_posts->title}}</a></h3>
                                    <p>{!! substr(strip_tags($latest_posts->body), 0, 150) !!}</p>
                                    <div>
                                        <a href="{{route('blog.view.post', $latest_posts->slug)}}" class="defbutton"><i class="fa fa-reply"></i>Leer artículo reciente</a>
                                    </div>

                                <!-- END .item -->
                                </div>
                                @endforeach

                                

                            </div>
                        </div>
                        
                        
                        
                        
                        <!--
                        <h2><span>Upcoming Events</span></h2>
                        <div class="content-padding">
                            
                            <div class="panel-games-lobby full-page">
                                <ol>
                                    <li>
                                        <div class="lobby-block" style="background:url(images/photos/image-39.jpg) no-repeat center;">
                                            <span class="caption">Nec liber molestie mediocritatem</span>
                                            <div class="join-button">
                                                <a href="events-single.html">View event page</a>
                                            </div>
                                        </div>
                                        <div class="lobby-info">
                                            <span class="right">14.May 2013, 20:00</span>
                                            <span class="left"><b class="countdown-text" rel="1428482400">Loading..</span></b>
                                            <div class="clear-float"></div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="lobby-block" style="background:url(images/photos/image-40.jpg) no-repeat center;">
                                            <span class="caption">Ubique prodesset adversarium ad ius</span>
                                            <div class="join-button">
                                                <a href="events-single.html">View event page</a>
                                            </div>
                                        </div>
                                        <div class="lobby-info">
                                            <span class="right">20.May 2013, 20:00</span>
                                            <span class="left"><b class="countdown-text" rel="1428882400">Loading..</span></b>
                                            <div class="clear-float"></div>
                                        </div>
                                    </li>
                                </ol>
                                <div class="clear-float"></div>
                            </div>
                            <div style="margin-top:-16px;">
                                <a href="events.html" class="defbutton"><i class="fa fa-calendar"></i>View all upcoming events</a>
                            </div>
                            
                        </div>
                        -->
                        <div class="content-padding">
                            <h2><span>Últimas publicaciones Instagram</span></h2>
                            <div id="photomax" class="photomax"></div>
                        </div> 

                        <h2><span>Últimos artículos de Tecnología</span></h2>
                        <div class="content-padding">
                            <div class="home-article left">
                                <span class="article-image-out">
                                    <span class="image-comments"><span>21</span></span>
                                    <span class="article-image">
                                        <span class="nth1 strike-tooltip" title="Read Article">
                                            <a href="post.html"><i class="fa fa-eye"></i></a>
                                        </span>
                                        <span class="nth2 strike-tooltip" title="Save to read later">
                                            <a href="#"><i class="fa fa-plus"></i></a>
                                        </span>
                                        <a href="post.html"><img src="/syn/images/photos/image-9.jpg" alt="" title="" /></a>
                                    </span>
                                </span>
                                <h3><a href="post.html">Lorem ipsum dolor sit amet usu sit amet usu at quot case</a></h3>
                                <p>Eos deleniti moderatius ea. Dolorem definiebas usu cu, quot case detracto mei in. Eum tollit eripuit voluptatibus ea, hinc choro omnesque eam cu mel te timeam...</p>
                                <div>
                                    <a href="post.html" class="defbutton"><i class="fa fa-reply"></i>Read full article</a>
                                </div>
                            </div>
                            <div class="home-article right">
                                <ul>
                                    <li>
                                        <a href="post.html">
                                            <span class="image-comments"><span>21</span></span>
                                            <img src="/syn/images/photos/image-10.jpg" alt="" title="" />
                                            <strong>Lorem ipsum dolor sit amet usu at</strong>
                                            <span class="a-txt">Eos deleniti moderatius ea. Dolorem</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="post.html">
                                            <span class="image-comments inactive"><span>200</span></span>
                                            <img src="/syn/images/photos/image-11.jpg" alt="" title="" />
                                            <strong>Vitae qualisque ex pri, cu eos case tempor delenit.</strong>
                                            <span class="a-txt">Eos deleniti moderatius ea. Dolorem</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="post.html">
                                            <span class="image-comments"><span>10</span></span>
                                            <img src="/syn/images/photos/image-12.jpg" alt="" title="" />
                                            <strong>Ut qui ignota discere vivendo, cu eam causae appetere</strong>
                                            <span class="a-txt">Eos deleniti moderatius ea. Dolorem</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="post.html">
                                            <span class="image-comments"><span>9</span></span>
                                            <img src="/syn/images/photos/image-13.jpg" alt="" title="" />
                                            <strong>Alii porro vituperatoribus mea te</strong>
                                            <span class="a-txt">Eos deleniti moderatius ea. Dolorem</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="post.html">
                                            <span class="image-comments"><span>3</span></span>
                                            <img src="/syn/images/photos/image-14.jpg" alt="" title="" />
                                            <strong>Probatus inimicus eloquentiam ea vel</strong>
                                            <span class="a-txt">Eos deleniti moderatius ea. Dolorem</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="post.html">
                                            <span class="image-comments"><span>0</span></span>
                                            <img src="/syn/images/photos/image-15.jpg" alt="" title="" />
                                            <strong>Ne pri illum deterruisset lorem ornatus facilis ut mel</strong>
                                            <span class="a-txt">Eos deleniti moderatius ea. Dolorem</span>
                                        </a>
                                    </li>
                                </ul>

                                <div>
                                    <a href="#" class="defbutton"><i class="fa fa-reply"></i>View more articles</a>
                                </div>
                                
                            </div>
                            <div class="clear-float"></div>
                        </div>


                        <div class="content-padding">
                            <h2><span>Últimas publicaciones Facebook</span></h2>
                            <div id="facebook_photomax" class="photomax"></div>
                        </div> 
                        <!--
                        <h2><span>Recent Podcasts</span></h2>
                        <div class="content-padding">
                            
                            <div class="podcast-list">
                                <a href="podcasts-single.html" class="item podcast-live">
                                    <span class="podcast-li-nr">#23</span>
                                    <span class="podcast-li-title"><span class="pod-live">LIVE STREAM</span>The Great Podcast (Some stuff we talk about) / 20.May 2015<strong>Some additional description about live podcast</strong></span>
                                    <span class="podcast-li-time">00:17:32</span>
                                </a>
                                <a href="podcasts-single.html" class="item">
                                    <span class="podcast-li-nr">#22</span>
                                    <span class="podcast-li-title">The Great Podcast (Some other stuff we talk about) / 13.May 2015</span>
                                    <span class="podcast-li-time">01:30:01</span>
                                </a>
                                <a href="podcasts-single.html" class="item">
                                    <span class="podcast-li-nr">#21</span>
                                    <span class="podcast-li-title">The Great Podcast (Some stuff we don't talk about) / 6.May 2015</span>
                                    <span class="podcast-li-time">01:30:01</span>
                                </a>
                                <a href="podcasts-single.html" class="item">
                                    <span class="podcast-li-nr">#20</span>
                                    <span class="podcast-li-title">The Great Podcast (Some stuff we talk about) / 29.April 2015</span>
                                    <span class="podcast-li-time">01:30:01</span>
                                </a>
                            </div>
                            <div>
                                <center><a href="podcasts.html" class="defbutton"><i class="fa fa-microphone"></i>View more podcasts</a></center>
                            </div>
                            
                        </div>
                        -->
                        
                        
                        
                        
                        
                        
                    </div>
                    
                    <!-- BEGIN #sidebar -->
                    <div id="sidebar">
                        
                        <!-- BEGIN .panel -->
                        <br>
                        @include('frontend.widgets.social')
                        <!-- BEGIN .panel -->
                        
                        
                        <!-- <div class="panel">
                            <h2>Jaunākās Tēmas</h2>
                            <div class="top-right"><a href="forum.html">Forums</a></div>
                            <div class="panel-content no-padding">
                                
                                <div class="new-forum-line">
                                    <a href="user-single.html" class="avatar online user-tooltip">
                                        <img src="images/photos/avatar-1.jpg" class="setborder" title="" alt="" />
                                    </a>
                                    <a href="forum-single.html" class="f_content">
                                        <font class="sidebar-comments"><font>1</font></font>
                                        <strong>Mesarchum signiferumque sea eu no harum definiebas quo</strong>
                                        <span>autors <b class="user-tooltip">marcisbee</b>, 20/12/2012</span>
                                    </a>
                                </div>
                                
                                <div class="new-forum-line">
                                    <a href="user-single.html" class="avatar online user-tooltip">
                                        <img src="images/photos/avatar-2.jpg" class="setborder" title="" alt="" />
                                    </a>
                                    <a href="forum-single.html" class="f_content">
                                        <font class="sidebar-comments inactive"><font>6</font></font>
                                        <strong>Lorem ipsum dolor sit amet usu at</strong>
                                        <span>autors <b class="user-tooltip">minkka.</b>, 20/12/2012</span>
                                    </a>
                                </div>
                                
                                <div class="new-forum-line">
                                    <a href="user-single.html" class="avatar offline user-tooltip">
                                        <img src="images/photos/avatar-3.jpg" class="setborder" title="" alt="" />
                                    </a>
                                    <a href="forum-single.html" class="f_content">
                                        <font class="sidebar-comments"><font>21</font></font>
                                        <strong>Propriae senserit erroribus pro ea</strong>
                                        <span>autors <b class="user-tooltip">Daviskrex</b>, 20/12/2012</span>
                                    </a>
                                </div>
                                
                                <div class="new-forum-line">
                                    <a href="user-single.html" class="avatar online user-tooltip">
                                        <img src="images/photos/avatar-1.jpg" class="setborder" title="" alt="" />
                                    </a>
                                    <a href="forum-single.html" class="f_content">
                                        <font class="sidebar-comments inactive"><font>103</font></font>
                                        <strong>Ne vis oblique nominavi honestatis mea ex minim nemore</strong>
                                        <span>autors <b class="user-tooltip">marcisbee</b>, 20/12/2012</span>
                                    </a>
                                </div>
                                
                                <div class="new-forum-line">
                                    <a href="user-single.html" class="avatar away user-tooltip">
                                        <img src="images/photos/avatar-4.jpg" class="setborder" title="" alt="" />
                                    </a>
                                    <a href="forum-single.html" class="f_content">
                                        <font class="sidebar-comments inactive"><font>7</font></font>
                                        <strong>Cu quaeque repudiare per nisl partiendo ullamcorper per an</strong>
                                        <span>autors <b class="user-tooltip">Paakjis</b>, 20/12/2012</span>
                                    </a>
                                </div>
                                
                                <div class="new-forum-line">
                                    <a href="user-single.html" class="avatar ingame user-tooltip">
                                        <img src="images/photos/avatar-5.jpg" class="setborder" title="" alt="" />
                                    </a>
                                    <a href="forum-single.html" class="f_content">
                                        <font class="sidebar-comments inactive"><font>2</font></font>
                                        <strong>No pro blandit voluptua oportere</strong>
                                        <span>autors <b class="user-tooltip">LIONz</b>, 20/12/2012</span>
                                    </a>
                                </div>
                                
                                <div class="new-forum-line">
                                    <a href="user-single.html" class="avatar offline user-tooltip">
                                        <img src="images/photos/avatar-6.jpg" class="setborder" title="" alt="" />
                                    </a>
                                    <a href="forum-single.html" class="f_content">
                                        <font class="sidebar-comments inactive"><font>9</font></font>
                                        <strong>Tantas officiis consulatu mel ex</strong>
                                        <span>autors <b class="user-tooltip">Arr0</b>, 20/12/2012</span>
                                    </a>
                                </div>
                                
                                <div class="new-forum-line">
                                    <a href="user-single.html" class="avatar offline user-tooltip">
                                        <img src="images/photos/avatar-7.jpg" class="setborder" title="" alt="" />
                                    </a>
                                    <a href="forum-single.html" class="f_content">
                                        <font class="sidebar-comments"><font>3</font></font>
                                        <strong>Ut tota illum qui ad quo ignota commodo</strong>
                                        <span>autors <b class="user-tooltip">Svens</b>, 20/12/2012</span>
                                    </a>
                                </div>
                                
                            </div>
                        </div> -->
                        
                        <!-- <div class="panel">
                            <h2>Online (4)</h2>
                            <div class="top-right"><a href="users.html">Visi lietotāji</a></div>
                            <div class="panel-content">

                                <ul class="with-online-users">
                                    <li>
                                        <a href="user-single.html" class="avatar online user-tooltip">
                                            <img src="images/photos/avatar-1.jpg" class="setborder" title="" alt="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-single.html" class="avatar online user-tooltip">
                                            <img src="images/photos/avatar-2.jpg" class="setborder" title="" alt="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-single.html" class="avatar away user-tooltip">
                                            <img src="images/photos/avatar-4.jpg" class="setborder" title="" alt="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-single.html" class="avatar ingame user-tooltip">
                                            <img src="images/photos/avatar-5.jpg" class="setborder" title="" alt="" />
                                        </a>
                                    </li>
                                </ul>
                                <div class="clear-float"></div>
                                
                            </div>
                        </div> -->
                        
                        <!-- WIDGET MAS VISTOS -->
                        @include('frontend.widgets.most_viewed')
                        
                        <!-- WIDGET DONACIONES -->
                        
                        
                        <!-- WIDGET DUELO DE LA SEMANA -->
                        @include('frontend.widgets.weekly_duel')
                        
                        <!-- WIDGETS ULTIMAS PUBLICACIONES -->
                        @include('frontend.widgets.latest_posts')
                        
                        <!-- WIDGET CONTACTO -->
                        <div id="youtube" class="youmax"></div> 
                        
                        <!-- WIDGET NUBE DE TAGS -->
                        
                        
          
                        
                        
                    <!-- END #sidebar -->
                    </div>
                    
                    <div class="clear-float"></div>
                    
                </div>
            </section>
        <!-- END #top-layer -->
        </div>
            
        <div class="clear-float"></div>
        
        <div class="wrapper">
            @include('frontend.includes.footer')
        </div>
        <script type='text/javascript' src='/syn/jscript/jquery-1.11.2.min.js'></script>
        <script src="/feed/jquery.photomax.min.js"></script>


<!-- Include Social networks Styles -->
        <link rel="stylesheet" href="/feed/photomax_trend.min.css"/> 

        <link rel="stylesheet" href="/youvideo/css/youmax_trend.min.css"/> 

        <script type='text/javascript' src='/syn/jscript/modernizr.custom.50878.js'></script>
        <script type='text/javascript' src='/syn/jscript/iscroll.js'></script>
        <script type='text/javascript' src='/syn/jscript/dat-menu.js'></script>

        <script type='text/javascript'>
            var strike_featCount = 4;
            var strike_autostart = true;
            var strike_autoTime = 7000;
            $("#photomax").photomax({ 

              instagramAccessToken:"2253183612.0efbe26.3e7f307ef7574c50aacdfb456f157cb4", 
              facebookAccessToken:"616745428493845|cac24411f347e0c5845eaa10c56720fd", 
              googleApiKey:"AIzaSyBRoYqEpfqpjOiY7LtE0JaeNbk7ReYpO74", 
              instagram_user_photos:[ 
                { 
                  name:"Instagram CD", 
                  url:"https://instagram.com/tucerebrodigital", 
                  selected:true
                }, 
              ], 

              skin:"trend2", 
              overlayType:"stat-2", 
              thumbnailHeight:"150px",
              loadButtonSize:"small", 
              viewCountType:"comma", 
              likeCommentCountType:"comma", 
              hideHeader:true, 
              hideNavigation:true, 
              shareLink:"website", 
              maxResults:2, 
              headerTitle:"", 
              headerSubTitle:"", 
              headerImage:"", 
              headerBackgroundImage:"", 
              headerLink:"", 
              googlePlusLink:"", 
              twitterLink:"", 
              facebookLink:"", 

            });
            $("#facebook_photomax").photomax({ 

              facebookAccessToken:"616745428493845|cac24411f347e0c5845eaa10c56720fd", 

              facebook_page_photos:[ 
                { 
                  name:"Instagram CD", 
                  url:"https://facebook.com/tucerebrodigital", 
                  selected:true
                }, 
              ], 

              skin:"trend2", 
              overlayType:"stat-2", 
              thumbnailHeight:"130px",
              loadButtonSize:"small", 
              viewCountType:"comma", 
              likeCommentCountType:"comma", 
              hideHeader:true, 
              hideNavigation:true, 
              shareLink:"website", 
              maxResults:2, 
              headerTitle:"", 
              headerSubTitle:"", 
              headerImage:"", 
              headerBackgroundImage:"", 
              headerLink:"", 
              googlePlusLink:"", 
              twitterLink:"", 
              facebookLink:"", 

            });

            $("#youtube").youmax({ 

                apiKey:"AIzaSyBRoYqEpfqpjOiY7LtE0JaeNbk7ReYpO74", 
                clientId:"5916945785-qdvqrtilt2p5vh0tunh5dqoe8kbk85dq.apps.googleusercontent.com", 
                channel:"https://www.youtube.com/channel/UC0tpy9WTnTzc4H4Dti6V-1Q", 
                  youtube_channel_uploads:[ 
                    { 
                      name:"Cerebro Digital en Youtube", 
                      url:"https://www.youtube.com/channel/UC0tpy9WTnTzc4H4Dti6V-1Q", 
                      selected:true
                    }, 
                  ], 

                  autoPlayVideo:true, 
                  autoLoadComments:true, 
                  commentOrder:"relevance", 
                  widgetMode:true, 
                  viewCountType:"comma", 
                  likeCommentCountType:"comma", 
                  headerCountType:"comma", 
                  loadButtonSize:"small", 
                  hideHeader:true, 
                  maxResults:3, 

                });
        </script>
        <script type='text/javascript' src='/syn/jscript/theme-script.js'></script>

    </body>
</html>
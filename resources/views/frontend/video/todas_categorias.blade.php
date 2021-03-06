@extends('frontend.master_video')

@section('breadcrumbs')
          <div class="wrapper">
            <div class="header-breadcrumbs">
              <h2 class="right">Videos</h2>
              <ul>
                <li><a href="#home">
                  @if($active_view == "ultimos")
                    ÚLTIMOS VIDEOS
                    </a></li>
                    <li>Resultados #{{$vids->count()}} Ultimos videos agregados</li>
                  @endif
                  @if($active_view == "masVistos")
                    VIDEOS MÁS VISTOS
                    </a></li>
                    <li>Resultados #{{$vids->count()}} ordenados desde los videos más vistos</li>
                  @endif
                
              </ul>
            </div>
          </div>
@endsection



@section('main')
<section >
      @section('title')Todas las categorías de videos @endsection
      @section('description') Listado de todas los videos respaldados en esta comunidad. @endsection
      @section('keywords')videos, todos, categorias @endsection
      @section('image'){{URL::to('/syn/images/videosmeta.jpg')}}@endsection
      

        <!-- BEGIN .wrapper -->
      <section class="content">
        
        <!-- BEGIN .wrapper -->
        <div class="wrapper">
          
          <!-- BEGIN .with-sidebar-layout -->
          <div class="with-sidebar-layout left">


            <div class="content-panel">
              <div class="panel-title">
                <h2>
                  @if($active_view == "masVistos")
                    Los videos más vistos ordenados de mayor a menor
                  @endif
                  @if($active_view == "ultimos")
                    Los últimos videos agregados
                  @endif

                </h2>
                <div class="right video-set-layout">
                  <a href="#v-set-layout" rel="grid" ><i class="fa fa-th"></i></a>
                  <a href="#v-set-layout" rel="hdgrid"><i class="fa fa-th-large"></i></a>
                  <a href="#v-set-layout" rel="list" class="active"><i class="fa fa-th-list"></i></a>
                  <a href="#v-set-layout" rel="hdlist"><i class="fa fa-bars"></i></a>
                </div>
              </div>
              <div class="panel-block video-list list">
              

              @foreach($vids as $video)
                <!-- BEGIN .item -->
                <div class="item">
                  <div class="item-header">
                    <a href="{{route('video.view.one', $video->id)}}" class="img-hover-effect loadingvideo"><img src="{{$video->featured_image}}" width="200" height="150" class="aspect-px" rel="{{$video->featured_image}}" alt="{{$video->title}}" /></a>
                  </div>
                  <div class="item-content">
                    <h3><a href="{{route('video.view.one', $video->id)}}">{{$video->title}}</a></h3>
                    <span class="video-meta">
                      <a href="{{route('video.view.one', $video->id)}}"><i class="fa fa-comment"></i>{{ \App\models\VideoComment::where('video_id', '=', $video->id)->count()}}</a>
                      <a href="{{route('video.view.one', $video->id)}}"><i class="fa fa-eye"></i>{{$video->views}}</a>
                      <a href="{{route('video.view.one', $video->id)}}"><i class="fa fa-heart"></i>{{$video->likes}}</a>
                    </span>
                    <p>{!! substr(strip_tags($video->description), 0, 200) !!}...</p>
                  </div>
                <!-- END .item -->
                </div>
              @endforeach


                <div class="clear-list-button">
                  @if($vids->previousPageUrl())
                    <a href="{{$vids->previousPageUrl()}}" class="back-button">Pagina Anterior</a>
                  @endif
                  @if($vids->nextPageUrl())
                    <a href="{{$vids->nextPageUrl()}}" class="back-button">Siguiente Pagina</a>
                  @endif
                </div>

              </div>
            </div>
          <!-- END .with-sidebar-layout -->
          </div>
      
          <aside id="sidebar" class="right">

            <!-- BEGIN .widget -->
            

            <!-- BEGIN .widget -->
            <div class="widget">
              <div class="banner-widget no-border">
                <a href="#" target="_blank"><img src="images/no-banner-300x250.jpg" width="300" height="250" alt="" /></a>
                <a href="contact-us.html" class="banner-meta"><i class="fa fa-angle-double-up"></i> Contact us about advert spaces <i class="fa fa-angle-double-up"></i></a>
              </div>
            <!-- END .widget -->
            </div>

            @include('frontend.widgets.featured_videos')

            @include('frontend.widgets.popular_videos')


          <!-- END #sidebar -->
          </aside>

      </section>

@endsection  
@section('bottomscripts')
  <style>
  li.comment.fade-transition {
      padding-right: 22px;
  }

  div.comment-content.clearfix {
      margin-left: -100px;
      width: 100%;
  }
  div.comment-text {
    margin-top: -50px;
}
video.video-js.vjs-default-skin.vjs-big-play-centered {
    margin-top: -35px;
}
div.footer {
    background-color: #292929;
}

div.item-content h4 a {
    color: #ffffff;
}

div.panel-content div h4 {
    color: #ffffff;
}



  </style>
@endsection       
<?php
  $post_tags = \App\models\Post::all(['tags']);
  $video_tags = \App\models\Video::all(['tags']);
  $final = "";
  foreach($post_tags as $tag)
  {
      $final .= $tag->tags .",";
  }
  foreach($video_tags as $tag)
  {
      $final .= $tag->tags .",";
  }
  $order = explode(',', $final);
  $tags = array_count_values($order);
?>

<div class="panel">
              <h2>Tag Cloud</h2>
              <div class="panel-content">
                
                <div class="tagcloud">
                <?php $count = 0; ?>    
                  @foreach($tags as $key => $value)
                    @if($count < 15)
                      <a href="{{route('blog.view.tag', $key)}}" style="font-size:{{$value}};">{{$key}} ({{$value}})</a>
                    <?php $count++ ?>
                    @endif
                  @endforeach
                  
                </div>
                
              </div>
            <!-- END .panel -->
            </div>
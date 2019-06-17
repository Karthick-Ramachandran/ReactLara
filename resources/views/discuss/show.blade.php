@extends('layouts.app')

@section('content')
     
<div class="container" style="margin-bottom:80px;">
    <h4 class="center">{{ $post->title }}</h4> <br/>
   <center><span><b>{{ $post->user->name }}</b></span> &nbsp; <span><b>{{ $post->created_at->diffForHumans() }}</b></span> <br/>
   </center> <br/> 
            <img src="{{ asset($post->image) }}" width="100%" height="450"> <br/>


            <p align="justify"><b> {{ $post->content }}
                </b></p>


                @if($data != "Liked") 
        <a class="btn blue" href="{{ route('create.like', ['id' => $post->id]) }}"> Like&nbsp;{{ $like->count() }} </a>
@else
<a class="btn blue" href="{{ route('unlike', ['id' => $post->id]) }}"> UnLike&nbsp;{{ $like->count() }} </a>
<div class="card light-grey lighten-4" style="margin-top:30px">
        <div class="card-content">
          <span class="card-title">Leave a Comment</span>
<form method="POST" autocomplete="off" action="{{ route('comment', ['id' => $post->id]) }}">
        {{ csrf_field() }}
        <div class="input-field">
                <textarea id="content" name="content" class="materialize-textarea"></textarea>
                <label for="content">Content</label>
            
              </div>
                            <center> <input type="submit" value="Post" class="btn center"> </center>
    </form>
        </div>
        
</div>

        <div class="card purple darken-4">
                <div class="card-content white-text">
                  <span class="card-title">Comments</span>
                  @foreach ($comment as $comments)
                      
                  <img style="display:inline-block; margin-top:30px; border-radius:10%; background:white" src="{{ asset($comments->user->avatar) }}" alt="" width="60" height="40" srcset=""> &nbsp;
                  <p><b>{{ $comments->content }}</b></p> <br/> 
                  
                  @endforeach
    
                </div>
                
              </div>

</div>



@endif
    
        </div>

@endsection
   
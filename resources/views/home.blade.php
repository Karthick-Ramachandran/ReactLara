@extends('layouts.app')

@section('content')
     
<div class="container">
    <h4 class="center">Discussions</h4>
</div>
<div class="row">
    <div class="container">
      @foreach ($app as $apps)
      <div class="card">
          <div class="card-image">
            <img src="{{ asset($apps->image) }}" width="100%" height="450">
            <span class="card-title">{{ $apps->title }}</span>
          </div>
          <div class="card-content">
            <p>{{ str_limit($apps->content, 150) }} <br/>
            <span style="float:right"><a href="{{ url('/post', ['id' => $apps->id]) }}">Read More</a></span>
            </p>
         </div>
        </div> 
      @endforeach
           
      {{ $app->links() }}

    </div>
</div>
@endsection
     <script>
          
     </script>
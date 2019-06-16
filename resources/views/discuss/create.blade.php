@extends('layouts.app')

@section('content')
<div class="container">
        @if ( count( $errors ) > 0 )
        @foreach ($errors->all() as $error)
        <div class="container">
                <div class="red center white-text" style="padding:5px; margin:20px;">
                  {{ $error }}
                </div>
                </div>  
                  @endforeach
    @endif
    <div class="row">
        <div class="container" style="margin-top:100px;">
            <div class="col l12 xl12 m12 s12">
        
                              <div class="card black darken-1">
                                <div class="card-content white-text">
                                  <p class=" center card-title">Post</p>
                                  <form method="POST" autocomplete="off" action="{{ route('login') }}">
                                      {{ csrf_field() }}
                                    
                                      <div class="input-field">
                                            <input type="email" class="white-text" id="title" name="title">
                                            <label for="title">Title</label>
                                            </div>
                                            <div class="file-field input-field">
                                                    <div class="btn">
                                                      <span>File</span>
                                                      <input type="file" name="image">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                      <input class="file-path validate white-text" type="text" placeholder="Upload Image">
                                                    </div>
                                                  </div>
                                                  <div class="input-field">
                                                        <textarea id="content" class="materialize-textarea white-text"></textarea>
                                                        <label for="content">Content</label>
                                                        <p class="white-text">
                                                                <label>
                                                                  <input name="type" type="radio" value="0" checked />
                                                                  <span>React</span>
                                                                </label>
                                                              </p>
                                                              <p class="white-text">
                                                                    <label>
                                                                      <input name="type" type="radio" value="1" />
                                                                      <span>Laravel</span>
                                                                    </label>
                                                                  </p>
                                                      </div>
                                                          <center> <input type="submit" value="Post" class="btn center white black-text"> </center>
                                  </form>
                                </div>
                                
                              
                              </div>
                    
            </div>
        </div>
    </div>
@endsection

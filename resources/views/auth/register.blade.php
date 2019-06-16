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
                                  <p class=" center card-title">Register</p>
                                  <form method="POST" autocomplete="off" action="{{ route('register') }}">
                                      {{ csrf_field() }}
                                      <div class="input-field">
                                      <input type="text" class="white-text" id="name" name="name">
                                      <label for="name">Name</label>
                                      </div>
                                      <div class="input-field">
                                            <input type="email" class="white-text" id="email" name="email">
                                            <label for="email">Email</label>
                                            </div>
                                            <div class="input-field">
                                                    <input type="password" class="white-text" id="password" name="password">
                                                    <label for="password">Password</label>
                                                    </div>
                                                    <div class="input-field">
                                                            <input type="password" class="white-text" id="cpassword" name="password_confirmation">
                                                            <label for="cpassword">Confirm Password</label>
                                                            </div>
                                                          <center> <input type="submit" value="Submit" class="btn center white black-text"> </center>
                                  </form>
                                </div>
                                <p class="center white-text">Or</p>
                                <center>
                                <a href="{{ route('social.auth', ['provider' => 'google']) }}" class="center btn red darken-5"><i class="fa fa-google" aria-hidden="true"></i> Login With Google
                                </a>
                                
                                </center>
                                <div class="card-action"> <b class="white-text">
<a href="{{ url('/login') }}"> Login</a>    
                                </div>
                              </div>
                    
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<form method="POST" autocomplete="off" action="{{ route('diss') }}">
        {{ csrf_field() }}
        <div class="input-field">
        <input type="text" class="white-text" id="name" name="name">
        <label for="name">Name</label>
        </div>
                            <center> <input type="submit" value="Submit" class="btn center white black-text"> </center>
    </form>
@endsection
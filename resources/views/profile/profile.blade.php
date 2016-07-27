@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <panel class="panel panel-default">
          <div class="panel-header">
            <h3 class="panel-title">{{ Auth::user()->firstname }}'s Profile</h3>
          </div>

          <div class="panel-body">
            Here is some body.
            {{ Auth::user() }}
          </div>
        </panel>
      </div>
    </div>
  </div>

@endsection

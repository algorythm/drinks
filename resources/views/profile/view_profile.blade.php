@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <panel class="panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">{{ $username->firstname }}
            @if($username->middlename != null)
              {{ $username->middlename }}
            @endif

            {{ $username->lastname }}
          </h3>
        </div>
        <div class="panel-body">
          <p>
            <h4>{{ $username->firstname }}'s offers:</h4>
            <ul>
              
            </ul>
          </p>
        </div>
      </panel>
    </div>
  </div>
</div>

@endsection

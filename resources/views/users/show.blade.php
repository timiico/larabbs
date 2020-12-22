@extends('layouts.app')
@section('title',$user->name.'的个人页面')
@section('content')
  <div class="row">
      <div class="col-lg-3 col-md-3 hidden-xs hidden-sm user-info">
        <div class="card">

          <img class="card-img-top" src="{{$user->avatar}}"  alt="{{$user->name}}">



          <div class="card-body">
            <h6><strong>个人简介:</strong></h6>
            <p>{{$user->introduction}}</p>
            <hr>
            <h6><strong>注册于:</strong></h6>
            <p>{{$user->created_at->diffForhumans()}}</p>
          </div>

        </div>
      </div>

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <div class="card">
        <div class="card-body">
          <h3>{{$user->name}}</h3>
          <small>{{$user->email}}</small>
        </div>
      </div>

      <hr>

      <div class="card">
        <div class="card-body">
          <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active bg-transparent" href="#">Ta 的话题</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Ta 的回复</a></li>
          </ul>
          @include('users._topics', ['topics' => $user->topics()->recent()->paginate(5)])
        </div>
      </div>

    </div>

  </div>
@stop



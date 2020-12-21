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

      <div class="card mb-5">
        <div class="card-body">
          <p>暂无数据😊</p>
        </div>
      </div>

    </div>

  </div>
@stop



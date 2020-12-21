@extends('layouts.app')
@section('title',$user->name.'的个人页面')
@section('content')
  <div class="row">
      <div class="col-lg-3 col-md-3 hidden-xs hidden-sm user-info">
        <div class="card">

          <div class="card-img-top">
            <img src="/images/TrJS40Ey5k.png" width="254" alt="{{$user->name}}">
          </div>

          <div class="card-body">
            <h6><strong>个人简介:</strong></h6>
            <p>当某天到来,或许一切都会不一样,充满希望</p>
            <hr>
            <h6><strong>注册于:</strong></h6>
            <p>{{$user->created_at}}</p>
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
          <p>暂无数据😊</p>
        </div>
      </div>

    </div>

  </div>
@stop



@extends('layouts.app')
@section('title',$user->name.'的修改页面')
@section('content')
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">

        <div class="card-header">
          <i class="-grip-lines-vertical"></i>编辑资料
        </div>

        <div class="card-body">
          <form method="post" action="{{route('users.update',$user->id)}}" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <div class="form-group">
              <label for="name-filed">昵称:</label>
              <input type="text" name="name" id="name-field" value="{{old('name',$user->name)}}"  class="form-control  @error('name') is-invalid @enderror">

              @error('name')
              <span class="invalid-feedback mt-2" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror

              </div>

            <div class="form-group">
              <label for="email-filed">邮箱:</label>
              <input type="email" name="email" id="email-field" value="{{old('email',$user->email)}}" class="form-control @error('email') is-invalid @enderror">

              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
              </span>
              @enderror
            </div>


            <div class="form-group">
              <label for="name-filed">个人简介:</label>
              <textarea type="text" rows="3" name="introduction" id="introduction-field" value="{{old('introduction',$user->introduction)}}" class="form-control @error('introduction') is-invalid @enderror ">{{$user->introduction}}</textarea>

              @error('introduction')
              <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
              </span>
              @enderror
            </div>


            <div class="form-group">
              <label class="avatar-field " >个人头像</label>
                <input type="file" class="form-control-file @error('avatar') is-invalid @enderror" name="avatar" id="avatar-field">

              @if($user->avatar)
                <br>
                <img src="{{$user->avatar}}" width="200" class="thumbnail img-responsive">
              @endif

              @error('avatar')
              <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
              </span>
              @enderror

              </div>









            <button class="btn btn-primary" type="submit">更新</button>



          </form>
        </div>


      </div>


    </div>
  </div>
@stop

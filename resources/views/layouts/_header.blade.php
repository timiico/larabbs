<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Web</a>

        <button class="navbar-toggler" role="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>

            <ul class="navbar-nav navbar-right">
               @guest
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">登录</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('register')}}">注册</a></li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href=""  role="button" id="navbarDropdown"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" >
                        <img src="https://cdn.learnku.com/uploads/images/201710/30/1/TrJS40Ey5k.png" width="30" height="30" style="border-radius: 50%">
                        {{Auth::user()->name}}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user-tie mr-1"></i>
                            个人资料</a>

                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user-nurse mr-1"></i>
                            编辑资料</a>

                        <div class="dropdown-divider"></div>

                        <a href="{{route('user_addresses.index')}}" class="dropdown-item">
                            <i class="fas fa-home mr-1"></i>
                            地址列表</a>

                        <a href="http://shop.test/admin/auth/login" class="dropdown-item">
                            <i class="fas fa-home mr-1"></i>
                            管理后台</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" id="logout" href="#">
                            <form method="post" action="{{route('logout')}}">
                                {{csrf_field()}}
                                <button class="btn btn-block btn-danger">推出</button>
                            </form>
                        </a>
                    </div>
                </li>
                @endguest
            </ul>

        </div>

    </div>

</nav>

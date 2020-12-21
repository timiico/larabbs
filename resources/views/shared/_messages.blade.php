@foreach(['danger','warning','info','success'] as $msg)
    @if(session()->has($msg))
        <div class="flash-message">
            <p class="alert alert-{{$msg}}">{{$msg}}</p>
        </div>
    @endif
@endforeach


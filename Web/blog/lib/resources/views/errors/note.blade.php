@if(\Illuminate\Support\Facades\Session::has('error'))
    <p class="alert alert-danger">{{\Illuminate\Support\Facades\Session::get('error')}}</p>
@endif

@foreach($errors->all() as $error)
    <p class="alert alert-danger">{{$error}}</p>
@endforeach

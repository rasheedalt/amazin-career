@if($errors->any())
    <ul class="alert alert-danger  text-center" style="list-style: none;padding-bottom:10px;">
        @foreach($errors->all() as $error)
            <li style="color:red;">{{ $error }}</li>
        @endforeach
    </ul>

@endif
<div class="flash-message text-center" style=";">
    @foreach (['danger', 'warning', 'success', 'info', 'error'] as $msg)
        @if(\Illuminate\Support\Facades\Session::has(  $msg))
            <p class="alert alert-{{ $msg== 'error' ? 'danger' : $msg }}" style="color: {{$msg== 'danger' ? 'red' : 'green'}};">{{ \Illuminate\Support\Facades\Session::get( $msg) }} 
            <!-- <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> -->
        </p>
        @endif
    @endforeach
</div>
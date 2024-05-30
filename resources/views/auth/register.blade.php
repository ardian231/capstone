@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" id="role" name="role" required>
                <option value="umkm">UMKM</option>
                <option value="investor">Investor</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="captcha">Captcha</label>
            <div class="captcha">
                <span>{!! captcha_img() !!}</span>
                <button type="button" class="btn btn-success btn-refresh">Refresh</button>
            </div>
            <input type="text" class="form-control" id="captcha" name="captcha" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection

<script type="text/javascript">
    $('.btn-refresh').click(function(){
        $.ajax({
           type:'GET',
           url:'/captcha',
           success:function(data){
              $(".captcha span").html(data.captcha);
           }
        });
    });
</script>

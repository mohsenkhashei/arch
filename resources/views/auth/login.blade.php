@extends('layout.main')
@section('content')
<section class="hero" style="animation: fadeInAnimation ease 3s; animation-iteration-count: 1; animation-fill-mode: forwards;">
    <div class="row">
        <div class="col-md-4">
            <h1>WELCOME</h1>
            <p>Please Sign in to See The Panel</p>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-6"></div>
    </div>
</section>
<section class="content" style="animation: fadeInAnimation ease 3s; animation-iteration-count: 1; animation-fill-mode: forwards;">
    <div class="login">
        <div class="item-text">
            <h3 class="mt-3">Sign in</h3>
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="form-group row mt-4">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" required>
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="password" name="password" required>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn button mt-4"><span class="fa fa-arrow-down"></span> Submit</button>
                        <a href="{{route('register')}}" class="btn button mt-4"><span class="fa fa-sign-in"></span> Sign up</a>
                    </div>
                </div>
            </form>

        </div>

    </div>
</section>


@stop

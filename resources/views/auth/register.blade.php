@extends('layout.main')
@section('content')
<section class="hero" style="animation: fadeInAnimation ease 3s; animation-iteration-count: 1; animation-fill-mode: forwards;">
    <div class="row">
        <div class="col-md-4">
            <h1>WELCOME</h1>
            <p>Unlock Several Designs by Subscribing NOW!</p>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-6"></div>
    </div>
</section>
<section class="content" style="animation: fadeInAnimation ease 3s; animation-iteration-count: 1; animation-fill-mode: forwards;">
    <div class="register">
        <div class="item-text">
            <h3 class="mt-5">Sign up</h3>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group row mt-5">
                    <label for="name" class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="name" name="name" required>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="email" name="email" required>
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" id="password" name="password" required>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password_confirmation" class="col-sm-4 col-form-label">Confirm Password</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        @if ($errors->has('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn button mt-4"><span class="fa fa-sign-up"></span><span class="fa fa-arrow-down"></span>  Submit</button>


                    </div>
                </div>
            </form>

        </div>

    </div>
</section>


@stop

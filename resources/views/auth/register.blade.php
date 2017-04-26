@extends('layouts.app')
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<a class="btn btn-default btn-xs" style="border-radius: 0; margin-left: 15px; margin-top: 15px;" href="{{ url('/home') }}">Home</a>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-12 block">
                <div class="col-md-12 top">
<<<<<<< HEAD
                    <center> <b>@lang('register.register')</b> </center>
=======
<<<<<<< HEAD
                    <center> <b>@lang('register.register')</b> </center>
=======
                    <center> <b>Register</b> </center>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
                </div>

                <div class="col-md-12 center_text">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<<<<<<< HEAD
                            <label for="name" class="col-md-4 control-label">@lang('register.name')</label>
=======
<<<<<<< HEAD
                            <label for="name" class="col-md-4 control-label">@lang('register.name')</label>
=======
                            <label for="name" class="col-md-4 control-label">Name</label>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
<<<<<<< HEAD
                            <label for="email" class="col-md-4 control-label">@lang('register.mail')</label>
=======
<<<<<<< HEAD
                            <label for="email" class="col-md-4 control-label">@lang('register.mail')</label>
=======
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
<<<<<<< HEAD
                            <label for="password" class="col-md-4 control-label">@lang('register.pass')</label>
=======
<<<<<<< HEAD
                            <label for="password" class="col-md-4 control-label">@lang('register.pass')</label>
=======
                            <label for="password" class="col-md-4 control-label">Password</label>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
<<<<<<< HEAD
                            <label for="password-confirm" class="col-md-4 control-label">@lang('register.confirm_pass')</label>
=======
<<<<<<< HEAD
                            <label for="password-confirm" class="col-md-4 control-label">@lang('register.confirm_pass')</label>
=======
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary button_add">
<<<<<<< HEAD
                                    @lang('register.register')
=======
<<<<<<< HEAD
                                    @lang('register.register')
=======
                                    Register
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

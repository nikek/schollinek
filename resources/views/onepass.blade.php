<div class="col-xs-6 col-xs-offset-3">
  <h1></h1>
  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
    {!! csrf_field() !!}
    <input type="email" class="hidden" name="email" value="general@schollinek.se">

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}{{ $errors->has('email') ? ' has-error' : '' }}">
        <div>
            <input type="password" class="form-control" name="password" placeholder="password">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="form-group">
        <div>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-sign-in"></i>Login
            </button>
        </div>
    </div>
</form>
</div>

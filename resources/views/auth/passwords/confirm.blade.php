@extends('layouts.form')

@section('content')
<div class="container box">
  <div class="columns">
    <div class="column is-three-fifths is-offset-one-fifth box has-background-light">
      <h2 class="title is-3">{{ __('Confirm Password') }}</h2>
      <p class="subtitle is-4">{{ __('Please confirm your password before continuing.') }}</p>
      <form method="POST" action="{{ route('password.confirm') }}">
      @csrf


        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Password</label>
          </div>
          <div class="field-body">
            <div class="field">
              <p class="control is-expanded has-icons-left">
                <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <span class="icon is-small is-left">
                  <i class="fas fa-lock"></i>
                </span>
									<span><input type="checkbox" onclick="toggleVisibility()"> Show Password</span>
									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
              </p>
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Confirm Password</label>
          </div>
          <div class="field-body">
            <div class="field">
              <p class="control is-expanded has-icons-left">
                <input onkeyup="samePassword()" id="password-confirm" type="password" class="input form-control" name="password_confirmation" required autocomplete="new-password">
                <span id="validate-status"></span>
                <span class="icon is-small is-left">
                  <i class="fas fa-lock"></i>
                </span>
              </p>
            </div>
          </div>
        </div>
        
        <div class="field is-horizontal {{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
          <div class="field-label is-normal">
            <label class="label"></label>
          </div>
          <div class="field-body">
            <div class="field">
             {!! app('captcha')->display() !!}
              @if ($errors->has('g-recaptcha-response'))
                <span class="help-block text-danger">
                  <strong>Passing reCaptcha is required! Please Try Again</strong>
                </span>
              @endif
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label"></label>
          </div>
          <div class="field-body">
            <p class="control">
              <button id="submit-button" type="submit" class="button is-info">
								{{ __('Confirm Password') }}
              </button>
              <br>
							@if (Route::has('password.request'))
								<a class="btn btn-link" href="{{ route('password.request') }}">
									{{ __('Forgot Your Password?') }}
								</a>
							@endif
            </p>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection

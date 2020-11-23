@extends('layouts.form')

@section('content')
<div class="columns">
  <div class="column is-three-fifths is-offset-one-fifth box is-lavender">
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
    @endif
    <h1 class="title is-3">{{ __('Reset Password') }}</h1>
    <form method="POST" action="{{ route('password.email') }}">
      @csrf

      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">E-Mail</label>
        </div>
        <div class="field-body">
          <div class="field">
          <p class="control is-expanded has-icons-left">
              <input class="input form-control @error('email') is-invalid @enderror" onkeyup="validateMail()" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror              
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
            </p>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label"></label>
        </div>
        <div class="field-body">
          <p class="control">
            <button id="submit-button" type="submit" class="button is-royal-blue">
            {{ __('Send Password Reset Link') }}
            </button>
          </p>
        </div>
      </div>

    </form>
  </div>
</div>
@endsection

<style>
  .is-royal-blue{
    background-color: #265eaa!important;
    border-color:#265eaa!important;
    color: white!important;
  }

  .is-lavender{
    background-color: #a394de!important;
  }
</style>

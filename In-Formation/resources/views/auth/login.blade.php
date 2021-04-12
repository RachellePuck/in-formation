@extends('layouts.app')

@section('content')
<div class="grid gap-4 grid-cols-1 mx-auto">
  <div class="max-w-xl mx-auto py-12 divide-y md:max-w-4xl">
    <div class="max-w-sm">
      <form method="POST" action="{{ route('login') }}">
      @csrf
        <h1 class="p-6 mx-auto text-4xl text-center">{{ __('Login') }}</h1>
        <label for="email" class="block">
          <span class="text-gray-700">{{ __('E-Mail') }}</span>
          <input id="email" type="email" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
          
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </label>

        <label for="password" class="block">
          <span class="text-gray-700">{{ __('Password') }}</span>
          <input id="password" type="password" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </label>

        <div class="form-group row">
          <div class="col-md-6 offset-md-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

              <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
              </label>
            </div>
          </div>
        </div>

        <button type="submit" class="bg-blue-600 py-2 px-8 my-4 rounded-lg text-white flex mx-auto">
          {{ __('Login') }}
        </button>

        @if (Route::has('password.request'))
          <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
          </a>
        @endif
      </form>
    </div>
  </div>
</div>
@endsection
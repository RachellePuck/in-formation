@extends('layouts.app')

@section('content')
<div class="grid gap-4 grid-cols-1 mx-auto">
  <div class="max-w-xl mx-auto py-12 divide-y md:max-w-4xl">
    <div class="max-w-sm">      
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <h1 class="p-6 mx-auto text-4xl text-center">{{ __('Register') }}</h1>
        <label for="name" class="block">
          <span class="text-gray-700">{{ __('Name') }}</span>
          <input id="name" type="text" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
          
          @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </label>

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
          <input id="password" type="password" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </label>

        <label for="password-confirm" class="block">
          <span class="text-gray-700">{{ __('Confirm Password') }}</span>
          <input id="password-confirm" type="password" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black" name="password_confirmation" required autocomplete="new-password">
        </label>

        <button type="submit" class="bg-blue-600 py-2 px-8 my-4 rounded-lg text-white flex mx-auto">
            {{ __('Register') }}
        </button>
      </form>
    </div>
  </div>
</div>
@endsection
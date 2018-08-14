<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-teal-lightest font-sans font-normal antialiased">
    <div class="flex flex-col">
        {{--  @if(Route::has('login'))
            <div class="absolute pin-t pin-r mt-4 mr-4">
                @auth
                    <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-darker uppercase">Home</a>
                @else
                    <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-darker uppercase pr-6">Login</a>
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-darker uppercase">Register</a>
                @endauth
            </div>
        @endif  --}}

        <div class="min-h-screen flex items-center justify-center">
            <div class="flex flex-col justify-around h-full">
                <div>
                    <h1 class="text-grey-darker text-center font-thin tracking-wide text-5xl mb-6">
                        Fortnite tutors
                    </h1>

                    <div class="flex items-center px-6 md:px-0">

                    </div>

                    <div class="flex items-center px-6 md:px-0">
                      <div class="w-full max-w-md md:mx-auto">
                          <div class="rounded shadow">
                              <div class="font-medium text-lg text-teal-darker bg-teal p-3 rounded-t">
                                Get updates
                              </div>
                              <div class="bg-white p-3 rounded-b">
                                  <form class="form-horizontal" method="POST" action="{{ route('mailing-list') }}">
                                      {{ csrf_field() }}

                                      <div class="flex items-stretch mb-3">
                                          <label for="name" class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">Name</label>
                                          <div class="flex flex-col w-3/4">
                                              <input id="name" type="text" class="flex-grow h-8 px-2 border rounded {{ $errors->has('name') ? 'border-red-dark' : 'border-grey-light' }}" name="name" value="{{ old('name') }}" autofocus>
                                              {!! $errors->first('name', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                                          </div>
                                      </div>

                                      <div class="flex items-stretch mb-3">
                                          <label for="email" class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">E-Mail Address</label>
                                          <div class="flex flex-col w-3/4">
                                              <input id="email" type="email" class="flex-grow h-8 px-2 border rounded {{ $errors->has('email') ? 'border-red-dark' : 'border-grey-light' }}" name="email" value="{{ old('email') }}" required>
                                              {!! $errors->first('email', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                                          </div>
                                      </div>

                                      <div class="flex items-stretch mb-3">
                                          <label for="email" class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">Interested in</label>
                                          <div class="flex flex-col w-3/4">
                                              <div class="relative">
                                                {!! $errors->first('account_type', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                                                <select name="account_type" id="account_type" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey {{ $errors->has('account_type') ? 'border-red-dark' : 'border-grey-light' }}" required>
                                                  <option>Being a Student</option>
                                                  <option>Being a Tutor</option>
                                                  <option>Both</option>
                                                </select>
                                                <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                                                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                                </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="flex">
                                          <div class="w-3/4 ml-auto">
                                              <button type="submit" class="bg-teal hover:bg-teal-dark text-white text-sm font-semibold py-2 px-4 rounded mr-3">
                                                  Sign up
                                              </button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

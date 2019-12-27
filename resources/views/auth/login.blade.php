@extends('layouts.auth')

@section('content')
    <div class="container mx-auto">
        <div class="">
            <div class="center bg-white max-w-md w-full p-8 rounded-lg">
                <h3 class="text-center text-3xl">
                    Se connecter
                </h3>
                <div class="p-4">
                    <form action="/login" method="post">
                        @csrf
                        <div class="flex flex-col my-2">
                            <input type="text" name="email"
                                value="{{ old('email') }}"
                                placeholder="Adresse email..."
                                class="form-auth {{ $errors->first('email', 'is-error') }}">
                                {!! $errors->first('email', '<p class=" mt-1 lg:ml-3 text-red-500 font-bold text-xs lg:text-sm">:message</p>') !!}
                        </div>
                        <div class="flex flex-col my-2">
                            <input type="password" name="password"
                                    placeholder="Motde passe..."
                                class="form-auth {{ $errors->first('password', 'is-error') }}">
                            {!! $errors->first('password', '<p class=" mt-1 lg:ml-3 text-red-500 font-bold text-xs lg:text-sm">:message</p>') !!}
                        </div>
                        <div class="flex flex-col my-2">
                            <button class="outline-none py-1 px-4 w-full bg-red-600 text-white font-bold text-lg rounded-full outline-none">
                                Se connecter
                            </button>
                        </div>
                    </form>
                    @component('layouts.flash')
                    {!! session('message') !!}
               @endcomponent
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('register') }}"
                        class="text-blue-700 no-underline text-lg">
                        S'enregistrer
                    </a>

                    <a href=""
                        class="text-blue-700 no-underline text-lg">
                        Mot de passe oublié ?
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

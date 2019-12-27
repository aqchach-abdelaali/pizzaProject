@extends('layouts.auth')

@section('content')
    <div class="container mx-auto">
        <div class="">
            <div class="center bg-white max-w-md w-full p-8 rounded-lg">
                <h3 class="text-center text-3xl">
                    S'enregistrer
                </h3>

                <div class="p-4">
                    <form action="/register" method="post">
                        @csrf
                        <div class="flex flex-col my-2">
                            <input type="text" name="name"
                                value="{{ old('name') }}"
                                placeholder="Nom d'utilisteur..."
                                class="form-auth {{ $errors->first('name', 'is-error') }}">
                                {!! $errors->first('name', '<p class=" mt-1 lg:ml-3 text-red-500 font-bold text-xs lg:text-sm">:message</p>') !!}
                        </div>

                        <div class="flex flex-col my-2">
                            <input type="text" name="email"
                                value="{{ old('email') }}"
                                placeholder="Adresse email..."
                                class="form-auth {{ $errors->first('email', 'is-error') }}">
                                {!! $errors->first('email', '<p class=" mt-1 lg:ml-3 text-red-500 font-bold text-xs lg:text-sm">:message</p>') !!}
                        </div>

                        <div class="flex flex-col my-2">
                            <input type="password" name="password_confirmation"
                            placeholder="Mot de passe..."
                                class="form-auth {{ $errors->first('password', 'is-error') }}">
                            {!! $errors->first('password', '<p class=" mt-1 lg:ml-3 text-red-500 font-bold text-xs lg:text-sm">:message</p>') !!}
                        </div>

                        <div class="flex flex-col my-2">
                            <input type="password" name="password"
                            placeholder="Re: Mot de passe..."
                                class="form-auth {{ $errors->first('password', 'is-error') }}">
                            {!! $errors->first('password', '<p class=" mt-1 lg:ml-3 text-red-500 font-bold text-xs lg:text-sm">:message</p>') !!}
                        </div>

                        <div class="flex flex-col my-2">
                            <button class="outline-none py-1 px-4 w-full bg-red-600 text-white text-lg rounded-full outline-none">
                                Créer mon compte!
                            </button>
                        </div>
                    </form>
                    @component('layouts.flash')
                    {!! session('message') !!}
               @endcomponent
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('login') }}"
                        class="text-blue-700 no-underline text-lg">
                        Se connecter
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

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div style="align-items: center; text-align:center; background-color: white">
            <img style="margin: 0 auto; align-self: center; width: 6em" src="../../imagens/gota-sangue.png" alt="imagem">
            <br>
            <h3 style="text-align: center; font-weight: bold; margin-bottom: 10; align-self: center">Entrar com o e-mail
            </h3>
            <p style="text-align: center; font-size: 13; width: 80;">
                Insira seus dados para continuar</p>
        </div>
        <br>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <br>

        <div style="text-align: center">
            <x-primary-button>
                {{ __('Log in') }}
            </x-primary-button>
            <br>

            @if (Route::has('register'))
                <a style="color: black; text-decoration: underline; font-size: 14px, margin-bottom: 20px"
                    href="{{ route('register') }}">
                    {{ __('Não tem uma conta? Cadastre-se') }}
                </a>
            @endif
        </div>
    </form>
</x-guest-layout>

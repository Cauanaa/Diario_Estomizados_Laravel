<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div style="align-items: center; text-align:center; background-color: white">
            <img style="margin: 0 auto; align-self: center; width: 6em" src="../../imagens/gota-sangue.png"
                alt="imagem">
            <br>
            <h3 style="text-align: center; font-weight: bold; margin-bottom: 10; align-self: center">Crie sua conta
            </h3>
            <p style="text-align: center; font-size: 13; width: 80;">
                Insira seus dados para começar a utilizar</p>
        </div>
        <br>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('E-mail')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar senha')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div style="text-align: center">
        <br>
            <x-primary-button>
                {{ __('Criar conta') }}
            </x-primary-button>
            <br>
            <a style="color: black; text-decoration: underline; font-size: 14px, margin-bottom: 20px"
                href="{{ route('login') }}">
                {{ __('Já tem uma conta? Faça login') }}
            </a>
        </div>
    </form>
</x-guest-layout>

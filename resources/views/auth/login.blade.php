<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="bg-gray-100 flex justify-center items-center h-screen">
        {{-- Sección derecha --}}
        <div class="relative bg-blue-500 w-3/4 h-screen hidden lg:flex flex-col justify-center items-center">
            <img src="https://picsum.photos/seed/picsum/1900/850" alt="Placeholder Image" class="object-cover w-full h-full brightness-50">
            <div class="title text-white text-7xl mb-8 w-3/5 font-bold absolute top-1/3 left-1/2 transform -translate-x-1/2">
                <h1 class="mb-2">@lang('tcuida.msg_loginTitulo')</h1>
                <h1>T-Cuida<span class="text-yellow-400">+</span></h1>
            </div>
            <div class="subtitle italic text-blue-300 text-opacity-75 text-xl font-semibold w-3/5 ml-2 mb-5 absolute bottom-1/3 left-1/2 transform -translate-x-1/2">
                <h2>@lang('tcuida.msg_loginSubtitulo')</h2>
            </div>
        </div>
        {{-- Formulario login --}}
        <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
            <h1 class="text-center text-5xl text-blue-800 font-semibold mb-8">Login</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                {{-- Campo Usuario --}}
                
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" type="email" name="email" 
                        :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
                </div>
                {{-- Campo Contraseña --}}
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" type="password" name="password"
                        required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                {{-- Botón --}}
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
        
                    <x-primary-button>
                        @lang('tcuida.btn_login')
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

</x-guest-layout>

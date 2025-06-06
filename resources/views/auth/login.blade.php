<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{route('home')}}">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- حالة الجلسة -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- أخطاء التحقق -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- البريد الإلكتروني -->
            <div>
                <x-label for="email" :value="__('البريد الإلكتروني')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- كلمة المرور -->
            <div class="mt-4">
                <x-label for="password" :value="__('كلمة المرور')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- تذكرني -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('تذكرني') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('نسيت كلمة المرور؟') }}
                    </a>
                @endif --}}

                <x-button class="ml-3">
                    {{ __('تسجيل الدخول') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

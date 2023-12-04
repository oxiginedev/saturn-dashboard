<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-application-logo class="block w-auto h-10" />
        </x-slot>

        <div class="mb-8 text-center">
            <h4 class="text-sm text-secondary-700 uppercase tracking-wider">
                {{ __('Create your account') }}
            </h4>
        </div>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="country" value="{{ __('Country') }}" />
                <select id="countries"
                    class="mt-1 bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Choose a country</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
            </div>

            <div class="mt-5">
                <x-label for="business_name" value="{{ __('Business Name') }}" />
                <x-input id="business_name" class="block mt-1 w-full" type="text" name="business_name"
                    :value="old('business_name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-5">
                <x-label for="first_name" value="{{ __('First Name') }}" />
                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')"
                    required autofocus autocomplete="name" />
            </div>

            <div class="mt-5">
                <x-label for="last_name" value="{{ __('Last Name') }}" />
                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"
                    required autofocus autocomplete="name" />
            </div>

            <div class="mt-5">
                <x-label for="email" value="{{ __('Email address') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
            </div>

            <div class="mt-5">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-5">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-5">
                <x-button class="w-full justify-center">
                    {{ __('Create My Account') }}
                </x-button>
            </div>

            <div class="mt-8 text-sm text-secondary-600">
                {!! __(
                    'By clicking the "Create My Account" button, you agree to Saturn\'s :terms_of_service and :privacy_policy',
                    [
                        'terms_of_service' =>
                            '<a target="_blank" href="' .
                            route('dashboard') .
                            '" class="text-blue-600">' .
                            __('Terms of Acceptable Use') .
                            '</a>',
                        'privacy_policy' =>
                            '<a target="_blank" href="' .
                            route('dashboard') .
                            '" class="text-blue-600">' .
                            __('Privacy Policy') .
                            '</a>',
                    ],
                ) !!}
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

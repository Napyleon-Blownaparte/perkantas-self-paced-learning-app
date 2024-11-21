@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body class="h-screen bg-orange-50">

    <div class="flex md:flex-row h-full">

        <!--background png image responsive atas/bawah di layar kecil, kiri/kanan di layar besar-->
        <div class="w-full md:w-1/2 md:flex items-center justify-center bg-orange-50 h-1/2 md:h-full hidden">
            <img src="{{ asset('images/loginImage.png') }}" alt="Login Image" class="w-full h-auto object-cover">
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!--form login-->
        <form action="{{ route('login') }}" method="POST" class="w-full md:w-1/2 flex items-center justify-center bg-orange-50 h-full">
            @csrf <!-- Token CSRF untuk keamanan -->
            <div class="w-full max-w-md p-8">
                <h2 class="text-4xl font-bold text-center mb-6">Login</h2>

                <!--username-->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="block text-gray-700" />
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!--password-->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="block text-gray-700" />
                    <x-text-input id="password" type="password" name="password" required autocomplete="current-password"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!--forgot password-->
                <div class="text-left mb-4 mt-5">
                    <a href="{{ route('password.request') }}" class="text-cyan-500 hover:underline">Forgot Password</a>
                </div>

                <!--buttons-->
                <div class="flex items-center justify-between">
                    <a  href="{{ route('register') }}" class="bg-white text-cyan-500 border border-cyan-500 rounded-md px-4 py-2 hover:bg-cyan-50">Sign Up</a>
                    <button type="submit" class="bg-cyan-500 text-white rounded-md px-4 py-2 hover:bg-cyan-600">Log in</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

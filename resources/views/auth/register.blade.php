<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen bg-orange-50 flex items-center justify-center">
    <!-- Signup Form -->
    <form action="{{ route('register') }}" method="POST" class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        @csrf <!-- Token CSRF untuk keamanan -->
        <h2 class="text-2xl font-bold text-center mb-6">Sign Up</h2>

        <!-- Name Input -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input
                id="name"
                type="text"
                name="name"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md"
                value="{{ old('name') }}"
                required
                autofocus
                autocomplete="name"
            />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Input -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input
                id="email"
                type="email"
                name="email"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md"
                value="{{ old('email') }}"
                required
                autocomplete="username"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password Input -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input
                id="password"
                type="password"
                name="password"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md"
                required
                autocomplete="new-password"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password Input -->
        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md"
                required
                autocomplete="new-password"
            />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Sign Up Button -->
        <div class="flex items-center justify-center">
            <button
                type="submit"
                id="signup-btn"
                class="bg-cyan-500 text-white rounded-md px-4 py-2 hover:bg-cyan-600"
            >
                Sign Up
            </button>
        </div>
    </form>
</body>
</html>

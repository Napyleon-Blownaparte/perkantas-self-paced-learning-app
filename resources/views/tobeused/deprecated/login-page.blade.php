@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body class="h-screen bg-orange-50">
    <div class="flex flex-col md:flex-row h-full">
        
        <!--background png image resposive atas/bawah di layar kecil, kiri/kanan di layar besar-->
        <div class="w-full md:w-1/2 md:flex items-center justify-center bg-orange-50 h-1/2 md:h-full hidden md:block">
            <img src="{{ asset('images/loginImage.png') }}" alt="Login Image" class="w-full h-auto object-cover">
        </div>
        
        <!--form login-->
        <div class="w-full md:w-1/2 flex items-center justify-center bg-orange-50 h-1/2 md:h-full">
            <div class="w-full max-w-md p-8">
                <h2 class="text-4xl font-bold text-center mb-6">Login</h2>

                <!--username-->
                <x-login-input label="Username" type="username" id="username"/>

                <!--password-->
                <x-login-input label="Password" type="password" id="password"/>

                <!--forgot password-->
                <div class="text-left mb-4">
                    <a href="#" class="text-cyan-500 hover:underline">Forgot Password</a>
                </div>

                <!--buttons-->
                <div class="flex items-center justify-between">
                    <button class="bg-white text-cyan-500 border border-cyan-500 rounded-md px-4 py-2 hover:bg-cyan-50">Sign Up</button>
                    <button class="bg-cyan-500 text-white rounded-md px-4 py-2 hover:bg-cyan-600">Login</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

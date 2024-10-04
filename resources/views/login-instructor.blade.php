@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Login Page</title>
</head>
<body class="h-screen bg-orange-50">
    <div class="flex flex-col md:flex-row h-full">
        
        <!--background png image resposive atas/bawah di layar kecil, kiri/kanan di layar besar-->
        <div class="w-full md:w-1/2 md:flex items-center justify-center bg-orange-50 h-1/2 md:h-full hidden md:block">
            <img src="{{ asset('images/loginImageInstructor.png') }}" alt="Login Image" class="w-full h-auto object-cover">
        </div>
        
        <!--form login-->
        <div class="w-full md:w-1/2 flex items-center justify-center bg-orange-50 h-1/2 md:h-full">
            <div class="w-full max-w-md p-8">
                <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

                <!--username-->
                <x-login-input label="Username" type="username" id="username"/>

                <!--password-->
                <x-login-input label="Password" type="password" id="password"/>

                <!--forgot password-->
                <div class="text-left mb-4">
                    <a href="#" id="forgot-password-link" class="text-cyan-500 hover:underline">Forgot Password</a>
                </div>

                <!--buttons-->
                <div class="flex items-center justify-center">
                    <button class="bg-cyan-500 text-white rounded-md px-4 py-2 hover:bg-cyan-600">Login</button>
                </div>
            </div>
        </div>
    </div>

    <!--forgot password modal, hidden-->
    <div id="forgot-password-modal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg w-full max-w-md text-center">
            <div class="flex justify-center mb-4">
                <span class="text-6xl">⚠️</span>
            </div>
            <h2 class="text-2xl font-bold mb-2">Sorry, forgot password?</h2>
            <p class="text-gray-700 mb-6">Please contact your supervisor or admin to reset your password</p>
            <button id="confirm-button" class="bg-cyan-500 text-white px-6 py-2 rounded-md hover:bg-cyan-600">Confirm</button>
        </div>
    </div>

    <script>
        // script toggle visibility modal
        const forgotPasswordLink = document.getElementById('forgot-password-link');
        const forgotPasswordModal = document.getElementById('forgot-password-modal');
        const confirmButton = document.getElementById('confirm-button');

        // Show the modal when "Forgot Password" is clicked
        forgotPasswordLink.addEventListener('click', function(event) {
            event.preventDefault();
            forgotPasswordModal.classList.remove('hidden');
        });

        // Hide the modal when "Confirm" button is clicked
        confirmButton.addEventListener('click', function() {
            forgotPasswordModal.classList.add('hidden');
        });
    </script>
</body>
</html>

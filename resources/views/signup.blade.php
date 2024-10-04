@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
</head>
<body class="h-screen bg-orange-50 flex items-center justify-center">
    
    <!-- Signup Form Box -->
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold text-center mb-6">Sign Up</h2>

        <!-- Email Input -->
        <x-login-input label="Email" type="email" id="email"/>

        <!-- Username Input -->
        <x-login-input label="Username" type="username" id="username"/>

        <!-- Password Input -->
        <x-login-input label="Password" type="password" id="password"/>

        <!-- Confirm Password Input -->
        <x-login-input label="Confirm password" type="password" id="confirm-password"/>

        <!-- Sign Up Button -->
        <div class="flex items-center justify-center">
            <button id="signup-btn" class="bg-cyan-500 text-white rounded-md px-4 py-2 hover:bg-cyan-600">Sign Up</button>
        </div>
    </div>

    <!-- JavaScript for Validation -->
    <script>
        document.getElementById("signup-btn").addEventListener("click", function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Get form input values
            const email = document.getElementById("email").value;
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirm-password").value;

            // Check if any field is empty
            if (!email || !username || !password || !confirmPassword) {
                alert("Please input all fields.");
                return;
            }

            // Check if password and confirm password match
            if (password !== confirmPassword) {
                alert("Confirm password does not match! Please check again.");
                return;
            }

            // If all validations pass
            alert("Sign up successful!");
        });
    </script>

</body>
</html>

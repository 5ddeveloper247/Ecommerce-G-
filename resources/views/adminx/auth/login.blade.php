@extends('layouts.admin.admin_master')

@push('css')
<style>
    .error {
        color: red;
        font-size: 0.875rem;
    }
</style>
@endpush

@section('content')
<section class="login d-flex align-items-center justify-content-center">
    <div class="container d-flex align-items-center justify-content-center">
        <div class="login-content p-5 rounded-3 text-center">
            <div class="text-start">
                <h1 class="text-center">LOGIN</h1>
                <div id="credential-error" class="error text-center"></div>
                <form id="login-form">
                    <div class="mt-4">
                        <label for="email">EMAIL</label>
                        <br>
                        <input id="email" name="email" class="w-100 p-2 mt-1" type="text"
                            placeholder="enter your email">
                        <div id="email-error" class="error"></div>
                    </div>
                    <div class="mt-3">
                        <label for="password">PASSWORD</label>
                        <br>
                        <input id="password" name="password" class="w-100 p-2 mt-1" type="password"
                            placeholder="enter your password">
                        <div id="password-error" class="error"></div>
                    </div>
                    <button id="submit-button" type="button" class="py-2 px-4 mt-4 mb-3 w-100">
                        SIGN IN
                    </button>
                </form>
                <a href="{{ url('forget_password') }}">Forget Password</a>
                <br>
                <span>If you don't have an account then <a href="{{ url('signup_form') }}">SignUp</a></span>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const emailError = document.getElementById('email-error');
    const passwordError = document.getElementById('password-error');
    const submitButton = document.getElementById('submit-button');

    // Centralized validation rules
    const validateEmail = (email) => {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email) {
            return 'Email is required.';
        } else if (email.length > 50) {
            return 'Email should not exceed 50 characters.';
        } else if (!emailPattern.test(email)) {
            return 'Invalid email address.';
        }
        return '';
    };

    const validatePassword = (password) => {
        if (password.length < 8) {
            return 'Password must be at least 8 characters long.';
        } else if (password.length > 15) {
            return 'Password should not exceed 15 characters.';
        }
        return '';
    };

    const validateForm = () => {
        let isValid = true;

        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();

        const emailValidationMessage = validateEmail(email);
        const passwordValidationMessage = validatePassword(password);

        if (emailValidationMessage) {
            emailError.textContent = emailValidationMessage;
            isValid = false;
        } else {
            emailError.textContent = '';
        }

        if (passwordValidationMessage) {
            passwordError.textContent = passwordValidationMessage;
            isValid = false;
        } else {
            passwordError.textContent = '';
        }

        return isValid;
    };

    emailInput.addEventListener('input', validateForm);
    passwordInput.addEventListener('input', validateForm);

    submitButton.addEventListener('click', async () => {
        if (validateForm()) {
            const loginForm = document.getElementById('login-form');
            const uri = '{{ env('APP_URL') }}'; // Use Blade syntax for server-side variable
            var formData = new FormData(loginForm);

            try {
                const response = await axios.post(`${uri}/api/admin/login/create`, formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    }
                });

                // Handle successful response

                window.location.href = '/admin/dashboard';                // Implement further logic like redirection here
            } catch (error) {
                if (error.response && error.response.status === 422) {
                    // Handle validation errors
                    const errors = error.response.data.errors;
                    for (let field in errors) {
                        const errorElement = document.getElementById(`${field}-error`);
                        if (errorElement) {
                            errorElement.textContent = errors[field][0];
                        }
                    }
                }
                 else if(error.response && error.response.status === 401){
                    const credentialError=error.response.data.error;
                    $('#credential-error').text(credentialError)

                 }
                else {
                    // Handle other errors
                    console.error('Error submitting form:', error);
                    alert('An error occurred. Please try again.');
                }
            }
        }
    });
});

</script>
@endpush
@endsection

@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')


<section class="login d-flex align-items-center justify-content-center">
    <div class="container d-flex align-items-center justify-content-center">
        <div class="login-content p-5 rounded-3 text-center">
            <div class="text-start">
                <h2 class="text-center">
                    CREATE A NEW ACCOUNT
                </h2>
                <form id="signupForm">
                    <div class="mt-4 row g-0 gap-3">
                        <div class="col">
                            <label for="firstName">FIRST NAME</label>
                            <br>
                            <input id="firstName" name="firstName" class="w-100 px-2 py-1 mt-1" type="text"
                                placeholder="John">
                            <div class="text-danger" id="firstNameError"></div>
                        </div>
                        <div class="col">
                            <label for="lastName">LAST NAME</label>
                            <br>
                            <input id="lastName" name="lastName" class="w-100 px-2 py-1 mt-1" type="text"
                                placeholder="Doe">
                            <div class="text-danger" id="lastNameError"></div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="email">EMAIL</label>
                        <br>
                        <input id="email" name="email" class="w-100 p-2 mt-1" type="email"
                            placeholder="johndoe@gmail.com">
                        <div class="text-danger" id="emailError"></div>
                    </div>
                    <div class="mt-3">
                        <label for="password">PASSWORD</label>
                        <br>
                        <input id="password" name="password" class="w-100 p-2 mt-1" type="password"
                            placeholder="Enter your password">
                        <div class="text-danger" id="passwordError"></div>
                    </div>
                    <button id="submitBtn" type="button" class="py-2 px-4 mt-4 mb-3 w-100">
                        SUBMIT
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>

@endsection


@push('scripts')
<script>
var signupForm = document.getElementById('signupForm');
var submitBtn = document.getElementById('submitBtn');

const validationRules = {
    firstName: {
        regex: /^[A-Za-z]+$/,
        message: 'First name should only contain alphabetic characters.',
        filter: /[^A-Za-z]/g // Filter out any non-alphabetic characters
    },
    lastName: {
        regex: /^[A-Za-z]+$/,
        message: 'Last name should only contain alphabetic characters.',
        filter: /[^A-Za-z]/g // Filter out any non-alphabetic characters
    },
    email: {
        regex: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
        message: 'Please enter a valid email address.',
        filter: /[^a-zA-Z0-9@._-]/g // Allow only valid email characters
    },
    password: {
        regex: /^.{8,15}$/,
        message: 'Password must be between 8 and 15 characters long.',
        filter: /[^a-zA-Z0-9!@#$%^&*]/g // Allow alphanumeric and special characters
    },
};

const validateField = (field, value) => {
    const rule = validationRules[field];
    // console.log(`Validating ${field} with value: ${value}`); // Add this line for debugging
    if (value.trim() === '') {
        document.getElementById(`${field}Error`).innerText = `${field.charAt(0).toUpperCase() + field.slice(1)} is required.`;
        return false;
    }
    if (!rule.regex.test(value)) {
        document.getElementById(`${field}Error`).innerText = rule.message;
        return false;
    } else {
        document.getElementById(`${field}Error`).innerText = '';
        return true;
    }
};

const validateForm = () => {
    let isValid = true;
    Object.keys(validationRules).forEach(field => {
        const input = document.getElementById(field);
        if (!validateField(field, input.value)) {
            isValid = false;
        }
    });
    return isValid;
};

signupForm.addEventListener('input', (e) => {
    const field = e.target.name;
    const value = e.target.value;
    const rule = validationRules[field];

    // Filter out invalid characters
    e.target.value = value.replace(rule.filter, '');

    // Limit password length to 15 characters
    if (field === 'password' && value.length > 15) {
        e.target.value = value.slice(0, 15);
    }

    if (field === 'firstName' && value.length > 10) {
        e.target.value = value.slice(0, 10);
    }

    if (field === 'lastName' && value.length > 10) {
        e.target.value = value.slice(0, 10);
    }
    
    if (field === 'email' && value.length > 50) {
        e.target.value = value.slice(0, 50);
    }

    // Validate the field
    validateField(field, e.target.value);
});

submitBtn.addEventListener('click', async (event) => {


    // Validate form one last time before submitting
    if (!validateForm()) {
        return;
    }
    const formData = new FormData(signupForm);
    try {
        const response = await axios.post('/your-submit-endpoint', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            }
        });
        console.log('Form submitted successfully:', response.data);
        // Handle success (e.g., show a success message or redirect)
    } catch (error) {
        console.error('Error submitting form:', error);
        // Handle error (e.g., show an error message)
    }
});

</script>

@endpush

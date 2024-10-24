@extends('layouts.layout')

@section('title')
    Login
@endsection

@section('content')
    @push('style')
        <style>
            /* General Page Styles */
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background: #000000; /* Soft background color */
            }

            .card {
                max-width: 400px;
                width: 100%;
                padding: 2rem;
                background: white;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                opacity: 0;
                transform: translateY(-50px); /* Start position for animation */
                animation: slideDown 0.8s ease forwards;
            }

            /* Slide down animation */
            @keyframes slideDown {
                0% {
                    opacity: 0;
                    transform: translateY(-50px); /* Start above */
                }
                100% {
                    opacity: 1;
                    transform: translateY(0); /* End at original position */
                }
            }

            /* Input Field Styles */
            input[type="email"], input[type="password"] {
                width: 100%;
                padding: 12px;
                margin: 10px 0;
                border: 1px solid #ddd;
                border-radius: 5px;
                transition: border 0.3s ease;
            }

            input[type="email"]:focus, input[type="password"]:focus {
                border-color: #007bff;
                outline: none;
            }

            /* Submit Button Styles */
            .btn-submit {
                background-color: #007bff;
                color: white;
                border: none;
                padding: 12px;
                width: 100%;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .btn-submit:hover {
                background-color: #0056b3;
            }

            .message {
                color: red;
            }
        </style>
    @endpush

    <x-form class="card">
        <x-slot:title>
            Login
        </x-slot:title>

        <x-slot:route>
            {{ route('login.submit') }}
        </x-slot:route>

        <x-input-email>
            Email
        </x-input-email>

        <x-input-password>
            <x-slot:title>
                Password
            </x-slot:title>
            <x-slot:id>
                password
            </x-slot:id>
            <x-slot:type>
                password
            </x-slot:type>
            <x-slot:name>
                password
            </x-slot:name>
        </x-input-password>

        <x-button-submit class="btn-submit">
            Login
        </x-button-submit>
    </x-form>

    @push('scripts')
        <script>
            // No need for custom JS as the CSS animation handles the slide down effect
        </script>
    @endpush
@endsection

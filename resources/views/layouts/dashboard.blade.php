<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    @stack('style')

</head>

<body class="text-white bg-black">
    <div class="wrapper">
        <!-- Include Navbar Component -->
        <x-navbar-admin></x-navbar-admin>

        <!-- Include Sidebar Component -->
        <x-sidebar-admin></x-sidebar-admin>

        <!-- Content -->
        <div class="content content-shifted" id="content">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('#menuButton');
            const sidebar = document.querySelector('#sidebar');
            const content = document.querySelector('#content');

            // Open sidebar
            menuButton.addEventListener('click', function(event) {
                event.stopPropagation();
                // toggleSidebar(true);
                sidebar.classList.toggle('show-sidebar');
                content.classList.toggle('content-shifted');
            });


            // Prevent sidebar from closing when clicking inside it
            sidebar.addEventListener('click', function(event) {
                event.stopPropagation();
            });

            // Function to toggle sidebar
            function toggleSidebar(open) {
                if (open) {
                    sidebar.classList.add('show-sidebar');
                    content.classList.add('content-shifted');
                } else {
                    sidebar.classList.remove('show-sidebar');
                    content.classList.remove('content-shifted');
                }
            }

            // Close sidebar on outside click
            // document.addEventListener('click', function() {
            //     if (sidebar.classList.contains('show-sidebar')) {
            //         toggleSidebar(false);
            //     }
            // });

            // Adjust layout on window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    if (sidebar.classList.contains('show-sidebar')) {
                        sidebar.classList.add('show-sidebar');
                        content.classList.add('content-shifted');
                    }
                } else {
                    sidebar.classList.remove('show-sidebar');
                    content.classList.remove('content-shifted');
                }
            });

            // Initial layout setup
            if (window.innerWidth > 768) {
                toggleSidebar(true);
            }
        });
    </script>
    @stack('scripts')


</body>

</html>

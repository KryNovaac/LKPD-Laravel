<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Hamburger Menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/component/header.css') }}">
</head>
<body>
    <header>
        <nav class="navbar">
            <a class="toggler-navbar">
                <div class="hamburger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                    <h1>|||</h1>
                </div>
            </a>
            <div class="sidebar">
                <ul>
                    <li>
                        <a href="#" class="menu-item" data-dropdown="dropdown1">Crud PHP</a>
                        <ul class="dropdown" id="dropdown1">
                            <li><a href="/soal-1php">Soal-1</a></li>
                            <li><a href="/soal-2php">Soal-2</a></li>
                            <li><a href="/soal-3php">Soal-3</a></li>
                            <li><a href="/soal-9php">Soal-9</a></li>
                            <li><a href="/soal-10php">Soal-10</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-item" data-dropdown="dropdown2">CRUD JS</a>
                        <ul class="dropdown" id="dropdown2">
                            <li><a href="/soal1js">Soal-1 Js</a></li>
                            <li><a href="/soal2js">Soal-2 Js</a></li>
                            <li><a href="/soal3js">Soal-3 Js</a></li>
                            <li><a href="/soal3Ajs">Soal-3a Js</a></li>
                            <li><a href="/soal4js">Soal-4 Js</a></li>
                            <li><a href="/soal4Ajs">Soal-4a Js</a></li>
                            <li><a href="/soal5js">Soal-5 Js</a></li>
                            <li><a href="/soal6js">Soal-6 Js</a></li>
                            <li><a href="/soal6Ajs">Soal-6a Js</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="/">Home</a>
            </div>
        </nav>
    </header>
    <script>
        // Function to toggle the sidebar
        function toggleSidebar() {
            document.querySelector(".hamburger-menu").classList.toggle('open');
            document.querySelector(".sidebar").classList.toggle('open');
        }

        // Add click event to toggle sidebar
        document.querySelector(".toggler-navbar").addEventListener("click", function(event) {
            event.stopPropagation(); // Prevent click event from propagating to the document
            toggleSidebar();
        });

        // Handle clicks outside of the sidebar to close it
        document.addEventListener("click", function(event) {
            const sidebar = document.querySelector(".sidebar");
            const toggler = document.querySelector(".toggler-navbar");

            if (sidebar.classList.contains('open') && !sidebar.contains(event.target) && !toggler.contains(event.target)) {
                toggleSidebar();
            }
        });

        // Handle dropdown toggle
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function(event) {
                event.preventDefault();
                const dropdownId = this.getAttribute('data-dropdown');
                const dropdown = document.getElementById(dropdownId);

                // Toggle the clicked dropdown
                dropdown.classList.toggle('open');

                // Close other dropdowns
                document.querySelectorAll('.dropdown').forEach(d => {
                    if (d.id !== dropdownId) {
                        d.classList.remove('open');
                    }
                });
            });
        });
    </script>
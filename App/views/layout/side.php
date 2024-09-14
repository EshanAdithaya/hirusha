<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sierra Fashion</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,500;0,600;0,800;0,900;1,100;1,400;1,500;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- Icon Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <!-- Custom CSS -->
    <link href="./style.css" rel="stylesheet">
    
</head>

<body class="bg-gray-100 banner">


    <div class="flex h-screen">

        <!-- Sidebar -->
        <aside class="fixed top-0 bottom-0 flex flex-col w-64 p-6 bg-white border-r border-gray-200">
            <div class="mb-8 text-center">
                <img src="assets/image/logo.png" alt="Logo" class="h-20 mx-auto">
            </div>
            
            <nav class="flex-1 space-y-6 banner">
                <a href="#" class="flex items-center text-gray-700 hover:text-red-500">
                    <i class="mr-3 fas fa-home"></i> Dashboard
                </a>
                <a href="#" class="flex items-center text-gray-700 hover:text-red-500">
                    <i class="mr-3 fas fa-box"></i> Add Products
                </a>
                <a href="#" class="flex items-center text-gray-700 hover:text-red-500">
                    <i class="mr-3 fas fa-shopping-cart"></i>View Products
                </a>
                <a href="#" class="flex items-center text-gray-700 hover:text-red-500">
                    <i class="mr-3 fas fa-user"></i> Admin
                </a>
            </nav>
            
            <button class="flex items-center justify-center w-full px-4 py-2 mt-auto text-white bg-red-300 rounded-lg hover:bg-red-500">
                <i class="mr-2 fas fa-sign-out-alt"></i> Logout
            </button>
        </aside>

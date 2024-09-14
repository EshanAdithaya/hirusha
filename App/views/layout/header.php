<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['page_title'];?></title>

     <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!--Font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,500;0,600;0,800;0,900;1,100;1,400;1,500;1,700;1,800&display=swap"
     rel="stylesheet">

    <!--Icon link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body class="bg-white">
    
    <header class="fixed top-0 left-0 z-40 w-full bg-white shadow-sm">
        <div class="container flex items-center justify-between p-0 mx-auto ">
         
            <a href="#">
                <img src="assets/image/logo.png" alt="logo" class="w-[140px] cursor-pointer">
            </a>
            
            <nav class="relative hidden space-x-6 md:flex right-">
                <ul class="flex space-x-4">
                    <li class="inline-block px-3 list-none"><a href="home" class="px-2 underline-animation">Home</a></li>
                    <li class="inline-block px-3 list-none"><a href="#" class="px-2 underline-animation">Men</a></li>
                    <li class="inline-block px-3 list-none"><a href="#" class="px-2 underline-animation">Women</a></li>
                    <li class="inline-block px-3 list-none"><a href="#" class="px-2 underline-animation">Kids</a></li>
                    <li class="inline-block px-3 list-none"><a href="#" class="px-2 underline-animation">Accessories</a></li>
                    <li class="inline-block px-3 list-none"><a href="#" class="px-2 underline-animation">Contact US</a></li>
                    
                </ul>
            </nav>
            
            <ul class="hidden space-x-4 md:flex ">
                <li>
                    <button class="text-black hover:text-red-600">
                        <i class="fas fa-search fa-lg"></i>
                    </button>
                </li>
                <li>
                    <button class="text-black hover:text-red-600">
                        <i class="fa-regular fa-heart fa-lg"></i>
                    </button>
                </li>
                <li>
                    <div class="relative">
                        <button id="dropdown-button" class="text-black hover:text-red-600 focus:outline-none" aria-expanded="false">
                          <i class="fa-regular fa-circle-user fa-lg"></i>
                        </button>
                        <!-- Dropdown  -->
                        <div id="dropdown-menu" class="absolute right-0 hidden w-48 mt-2 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-button">
                           <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
                           <a href="login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Login</a>
                           <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                        </div>
                    </div>
                </li>
                <li>
                    <button class="text-black hover:text-red-600">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                    </button>
                </li>
            </ul>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="text-gray-700 pl- md:hidden focus:outline-none pr-9">
                <i class="fas fa-bars fa-lg"></i>
            </button>
        </div>

        <!-- Mobile Menu hidden -->
        <div id="mobile-menu" class="hidden md:hidden">
            <nav>
                <ul class="p-4 space-y-4">
                    <li><a href="#" class="block underline-animation">Home</a></li>
                    <li><a href="#" class="block underline-animation">Men</a></li>
                    <li><a href="#" class="block underline-animation">Women</a></li>
                    <li><a href="#" class="block underline-animation">Kids</a></li> 
                    <li><a href="#" class="block underline-animation">Accessories</a></li> 
                    <li><a href="#" class="block underline-animation">Contact Us</a></li> 
                </ul>
            </nav>
        </div>
    </header>

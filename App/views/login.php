
<?php $this->view("layout/header",$data);?>

    <section class="flex flex-col items-center justify-center pb-6 md:flex-row pt-28 shadow-amber-500 login-section">
        <div class="flex w-full max-w-4xl overflow-hidden bg-white rounded-lg shadow-lg">
            <!-- Left Section (Logo and Branding) - Hidden on Mobile -->
            <div class="hidden w-full md:flex md:w-1/2 bg-[#b1975b] items-center justify-center p-4 font-serif">
                <div class="bg-white rounded-md">
                    <div class="px-16 py-24 text-center">
                        <h1 class="pb-4 mb-4 text-3xl font-light text-black">SIERRA<br>FASHION</h1>
                        <p class="text-lg text-black">Clothing & Fashion Store</p>
                    </div>
                </div>
            </div>

            <!-- Right Section (Login Form) -->
            <div class="w-full p-12 bg-gray-200 md:w-1/2 banner">
                <h2 class="mb-6 font-serif text-3xl font-semibold text-center text-gray-800">LOGIN</h2>
                <?php if (isset($data['error'])): ?>
                    <div class="error-message"><?= $data['error'] ?></div>
                <?php endif; ?>
                <form action="../controllers/login.php" method="POST">
                    <div class="mb-4">
                        <input id="email" type="email" placeholder="Email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-[#b1975b] text-base font-normal">
                    </div>
                    <div class="mb-4">
                        <input id="password" type="password" placeholder="Password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-[#b1975b] text-base font-normal">
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <input id="show-password" type="checkbox" class="h-4 w-4 text-[#b1975b] focus:ring-[#b1975b] border-gray-300 rounded">
                            <label for="show-password" class="block ml-2 text-sm text-gray-800">Show Password</label>
                        </div>
                    </div>
                    <button type="submit" class="w-full py-3 font-semibold text-white bg-black rounded-lg hover:bg-gray-800">Log In</button>
                </form>
                <p class="mt-6 text-sm text-center text-gray-600">Don't have an account? <a href="signup" class="text-blue-600 hover:underline">Register here</a></p>
            </div>
        </div>
    </section>

<?php $this->view("layout/footer",$data);?>

  
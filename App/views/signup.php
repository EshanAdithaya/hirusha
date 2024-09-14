
<?php $this->view("layout/header",$data);?>

    <section class="flex flex-col items-center justify-center pb-6 md:flex-row pt-28 shadow-amber-500">
        <div class="flex w-full max-w-4xl overflow-hidden bg-white rounded-lg shadow-lg">
            <!-- Left Section (Logo and Branding) - Hidden on Mobile -->
            <div class="hidden w-full md:flex md:w-1/2 bg-[#b1975b] items-center justify-center p-4 font-serif">
                <div class="bg-white rounded-md">
                    <div class="px-16 text-center py-28">
                        <h1 class="pb-4 mb-4 font-serif text-3xl font-normal text-black">SIERRA<br>FASHION</h1>
                        <p class="font-serif text-lg text-black">Clothing & Fashion Store</p>
                    </div>
                </div>
            </div>

            <!-- Right Section (Login Form) -->
            <div class="w-full p-12 bg-gray-200 md:w-1/2 banner">
                <h2 class="mb-6 font-serif text-3xl font-semibold text-center text-gray-800">Register</h2>
                <form action="/signup/register" method="POST">
                    <div class="mb-2">
                        <input id="name" type="text" name="name" placeholder="Name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-[#b1975b] text-base font-normal" required>
                        <?php if (isset($errors['name'])): ?>
                            <span class="text-sm text-red-500"><?= $errors['name']; ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="mb-2">
                        <input id="email" type="email" name="email" placeholder="Email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-[#b1975b] text-base font-normal" required>
                        <?php if (isset($errors['email'])): ?>
                            <span class="text-sm text-red-500"><?= $errors['email']; ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="mb-2">
                        <input id="password" type="password" name="password" placeholder="Password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-[#b1975b] text-base font-normal" required>
                        <?php if (isset($errors['password'])): ?>
                            <span class="text-sm text-red-500"><?= $errors['password']; ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="mb-2">
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Re-Password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-[#b1975b] text-base font-normal" required>
                        <?php if (isset($errors['confirmPassword'])): ?>
                            <span class="text-sm text-red-500"><?= $errors['confirmPassword']; ?></span>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="w-full py-3 font-semibold text-white bg-black rounded-lg hover:bg-gray-800">Sign Up</button>
                </form>
            </div>
        </div>
    </section>

<?php $this->view("layout/footer",$data);?>

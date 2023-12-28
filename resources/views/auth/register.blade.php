

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/css/Signup.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">

<title>Yearn Art | Signup</title>
<link rel="icon" href="{{ asset('assets/image/Yearn.jpg') }}" type="image/png">

</head>
<body>
  <nav class="navbar">
    <div class="logo">
      <img src="assets/image/Yearn.jpg" alt="Logo">
      <a href="/">Yearn Art</a>
    </div>
    <div class="menu">
      <div class="menu-links">
        <a href="Products" class="Products">Products</a>
        <a href="MyOrders" class="Orders">My Orders</a>
        <a href="About" class="About">About Us</a>
        <a href="FAQ" class="FAQ">FAQ</a>
        <a href="Login" class="Login">Login</a>
        <a href="Signup" class="Signup">Signup</a>
      </div>
    </div>
    <div class="menu-btn">
      <i class="fa-solid fa-bars"></i>
    </div>
  </nav>
  <p id="Welcome">Create your Yearn Art Account.</p>
 
  <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

  


  <script>
    const menuLinks = document.querySelectorAll('.menu-link');
    
    menuLinks.forEach(link => {
      link.addEventListener('click', () => {
        menuLinks.forEach(otherLink => otherLink.classList.remove('active-link'));
        link.classList.add('active-link');
      });
    });
  </script>
</body>
</html>

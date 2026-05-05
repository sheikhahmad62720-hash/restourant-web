<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resto</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen">

<!-- Navbar -->
<nav class="bg-gray-900 text-white px-6 py-4">
  <div class="container mx-auto flex justify-between items-center">

    <!-- Logo -->
    <a href="#" class="text-2xl font-bold text-yellow-400">
      Resto
    </a>

    <!-- Desktop Menu -->
    <ul class="hidden md:flex space-x-6">
      <li><a href="/" class="hover:text-yellow-400">Home</a></li>
      <li><a href="list"class="hover:text-yellow-400">List</a></li>
      <li><a href="add" class="hover:text-yellow-400">Add</a></li>
      <li><a href="#" class="hover:text-yellow-400">Search</a></li>
    </ul>

    <!-- Buttons -->
    <div class="hidden md:flex space-x-3 items-center">

    @if(session('Signup'))

        <span class="px-4 py-2 bg-yellow-400 text-black rounded">
             Welcome {{ session('Signup') }}
        </span>

        <a href="/logout"
           class="px-4 py-2 border border-red-400 rounded hover:bg-red-400 hover:text-black">
            Logout
        </a>

    @else

        <a href="/loggedin"
           class="px-4 py-2 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black">
            LoggedIn
        </a>

        <a href="/signup"
           class="px-4 py-2 bg-yellow-400 text-black rounded hover:bg-yellow-500">
            Sign Up
        </a>

    @endif

</div>

  </div>
</nav>
<main class="flex-grow p-6">
  <h1 class="text-2xl font-bold">Edit Restaurant</h1>
</main>

 <form action="{{ route('update', $dl->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <!-- Name -->
    <div>
         <input type="hidden" name="id" value="{{ $dl->id }}" class="w-full border p-2 rounded">
      <label class="block mb-1 font-medium">Name</label>
      <input type="text" name="name" value="{{ $dl->name }}" class="w-full border p-2 rounded">
    </div>

    <!-- Email -->
    <div>
      <label class="block mb-1 font-medium">Email</label>
      <input type="email" name="email" value="{{ $dl->email }}" class="w-full border p-2 rounded">
    </div>

    <!-- Address -->
    <div>
      <label class="block mb-1 font-medium">Address</label>
      <textarea name="address" class="w-full border p-2 rounded">{{ $dl->address }}</textarea>
    </div>

    <button type="submit" class="bg-yellow-400 px-4 py-2 rounded">
      Update
    </button>
</form>

<footer class="bg-gray-900 text-gray-300 mt-auto">
  <div class="container mx-auto px-6 py-10">

    <!-- Top Section -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

      <!-- About -->
      <div>
        <h2 class="text-xl font-bold text-yellow-400 mb-4">Resto</h2>
        <p class="text-sm">
          Best restaurant website for food lovers. Fresh, fast and tasty meals.
        </p>
      </div>

      <!-- Links -->
      <div>
        <h3 class="text-lg font-semibold mb-4 text-white">Quick Links</h3>
        <ul class="space-y-2">
          <li><a href="/" class="hover:text-yellow-400">Home</a></li>
          <li><a href="list" class="hover:text-yellow-400">List</a></li>
          <li><a href="add" class="hover:text-yellow-400">Add</a></li>
          <li><a href="#" class="hover:text-yellow-400">Search</a></li>
        </ul>
      </div>

      <!-- Support -->
      <div>
        <h3 class="text-lg font-semibold mb-4 text-white">Support</h3>
        <ul class="space-y-2">
          <li><a href="#" class="hover:text-yellow-400">Help Center</a></li>
          <li><a href="#" class="hover:text-yellow-400">Privacy Policy</a></li>
          <li><a href="#" class="hover:text-yellow-400">Terms</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <h3 class="text-lg font-semibold mb-4 text-white">Contact</h3>
        <p>Email: support@resto.com</p>
        <p>Phone: +92 3316918426</p>
        <p>Location: Pakistan</p>
      </div>

    </div>

    <!-- Bottom -->
    <div class="border-t border-gray-700 mt-8 pt-6 text-center text-sm">
      <p>© 2026 Resto. All rights reserved.</p>
    </div>

  </div>
</footer>

</body>
</html>
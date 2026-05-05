<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resto</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  
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
      <li><a href="list" class="hover:text-yellow-400">List</a></li>
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

<!-- Page Content (optional space) -->
<main class="flex-grow p-6">
  <h1 class="text-2xl font-bold">List of Restaurants</h1>
</main>

<table class="w-full border border-gray-300 text-left">
    <thead class="bg-gray-900 text-white">
        <tr>
            <th class="p-3">ID</th>
            <th class="p-3">Name</th>
            <th class="p-3">Email</th>
            <th class="p-3">Address</th>
            <th class="p-3">operation</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $d)
        <tr class="border-b hover:bg-gray-100">
            <td class="p-3">{{ $d->id }}</td>
            <td class="p-3">{{ $d->name }}</td>
            <td class="p-3">{{ $d->email }}</td>
            <td class="p-3">{{ $d->address }}</td>
           <td><a href="delete/{{$d->id}}"><i class="fa-solid fa-trash"></i></a>
           <a href="edit/{{$d->id}}"><i class="fa-solid fa-edit"></i></a>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- Footer (CORRECT POSITION) -->
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
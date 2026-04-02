<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="navbar bg-info-content text-base-300 shadow-sm">
  <div class="flex-1">
    <a class="btn btn-ghost text-xl">Mysite</a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal px-1">
      <li><a class="{{ request()->is('/') ? 'active' : ''}}" href="{{ route('index') }}">All Post</a></li>
      <li><a href="{{route('create')}}">Create Post</a></li>
    </ul>
  </div>
</div>

<div class="container mt-5 mx-auto px-4">
    @yield('content')
</div>

<footer class="footer sm:footer-horizontal footer-center bg-info-content text-base-300 p-4">
  <aside>
    <p>Copyright © {new Date().getFullYear()} - All right reserved by ACME Industries Ltd</p>
  </aside>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>
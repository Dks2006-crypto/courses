<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses</title>


    {{-- Sкрипты для стилей --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

</head>
<body class= "bg-[url('unsplash.jpg')] bg-cover" x-data="{ openMenu : false }"
:class="openMenu ? 'overflow-hidden' : 'overflow-visible' ">
<style>
    [x-cloak] {
      display: none !important;
    }
  </style>
    @include('components.partials.header')
</body>
</html>

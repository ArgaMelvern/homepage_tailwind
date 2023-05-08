<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tailwind demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    {{-- <link href="{{ {{ URL::to('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ URL::asset('css/index.css') }}" rel="stylesheet" type="text/css" >
    
</head>

<body>
  <div class="mx-auto min-h-screen bg-image-main bg-center bg-cover px-28 py-5 relative">
    <nav class="flex items-center">
      <img src="{{asset('assets/images/logo.png')}}" class="w-40 cursor-pointer"> 
      <ul class="flex-1 text-center">
        <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white px-2">Home</a></li>
        <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white px-2">About</a></li>
        <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white px-2">Features</a></li>
        <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white px-2">Contact</a></li>
      </ul>
      <img src="{{asset('assets/images/cart.png')}}" class="w-8 cursor-pointer">
    </nav>

    <div class="text-white mt-48 max-w-lg">
      <h1 class="text-6xl font-semibold leading-normal">Groceries<br>delivery in <span class="font-light">15 mins</span></h1>
      <p>Grocify offer a wide range of products, including fresh products, meats, dairy, baked goods and non-perishable items.</p>

      <div class="mt-10">
        <a href="#" class="bg-yellow-300 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:border-yellow-300 hover:text-white duration-300 hover:border border border-tranparent">Order Now</a>
        <a href="#">Download Apps <span class="text-lg inline-block rotate-90">&#10148;</span></a>
      </div>

    </div>
    <img src="{{asset('assets/images/grocery-image.png')}}" class="w-full xl:w-1/2 xl:absolute bottom-0 right-20">

  </div>
</body>

</html>

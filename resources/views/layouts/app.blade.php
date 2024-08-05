<!DOCTYPE html>
<html>
    <head>
        <title>Laravel 10 Task List App</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        {{--  blade-formatter-disable --}}
        <style type="text/tailwindcss">
        .btn{
            @apply rounded-md px-2 py-1 ring-slate-700/30 ring-1 text-center shadow-sm font-medium hover:bg-slate-50 text-slate-700
        }
        .link{
            @apply font-medium text-gray-700 underline decoration-pink-500
        }
        label{
            @apply block text-slate-700 uppercase mb-2
        }
        textarea, input{
            @apply shadow-sm px-3 py-2 appearance-none border w-full leading-tight focus:outline-none
        }
        .error{
            @apply text-red-500 text-sm
        }
        </style>
        {{--  blade-formatter-enable --}}
        @yield('styles')
    </head>
  
<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class="mb-4 text-2xl">@yield('title')</h1>
    <div x-data="{flash: true}">
@if(session()->has('success'))

        
    <div x-show="flash" class="relative mb-10 rounded border border-green-400 bg-green-100 text-green-700 text-lg px-4 py-3">
        <strong class="font-bold">Success!</strong>
       <div> {{  session('success') }}</div>
       <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
          stroke-width="1.5" @click="flash = false"
          stroke="currentColor" class="h-6 w-6 cursor-pointer">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </span>
    </div>
    @endif
        @yield('content')
    </div>
</body>

</html>
@extends('layout.masterfile')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
      @theme {
        --color-clifford: #da373d;
      }
    </style>
    @section('title')
    Registration
    @endsection
</head>
<body class="min-h-screen  bg-gradient-to-br from-pink-300 via-indigo-200 to-sky-400 flex items-center justify-center p-4">
 
  @section('content')
    <div class="w-full max-w-xl bg-white/90 backdrop-blur-lg border border-blue-800 rounded-4xl shadow-2xl p-8">
      <h1 class="text-4xl font-extrabold text-slate-800 mb-2 text-center">Student Registration</h1>
      <p class="text-sm text-slate-500 mb-6 text-center">Fill out the form below to enroll.</p>

      <!-- @if($errors->any())
        <div class="mb-4 rounded-lg border border-rose-200 bg-rose-50 p-3 text-sm text-rose-700">
          <p class="font-semibold">Please fix the following errors:</p>
          <ul class="mt-2 list-disc list-inside">
            @foreach ($errors->all() as $err)
              <li>{{ $err }}</li>
            @endforeach
          </ul>
        </div>
      @endif -->

      <!-- <form method="get" action="/submitformget" class="space-y-5"> -->
      <form method="post" action="/registerpost" class="space-y-5">
       
      @csrf

        <div>
          <label for="name" class="block text-sm font-medium text-slate-700 mb-2">Name</label>
          <input id="name" name="name" type="text" required placeholder="Enter your name" class="w-full rounded-xl border border-slate-300 px-4 py-2 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition" />
          @error('name')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email</label>
          <input id="email" name="email" type="email" required placeholder="Enter your email" class="w-full rounded-xl border border-slate-300 px-4 py-2 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition" />
          @error('email')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label for="age" class="block text-sm font-medium text-slate-700 mb-2">Age</label>
            <input id="age" name="age" type="number" required placeholder="Enter your age" class="w-full rounded-xl border border-slate-300 px-4 py-2 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition" />
            @error('age')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
          </div>
          <div>
            <label for="course" class="block text-sm font-medium text-slate-700 mb-2">Course</label>
            <input id="course" name="course" type="text" required placeholder="Enter your course" class="w-full rounded-xl border border-slate-300 px-4 py-2 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition" />
            @error('course')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
          </div>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-slate-700 mb-2">Password</label>
          <input id="password" name="password" type="password" required placeholder="Enter your password" class="w-full rounded-xl border border-slate-300 px-4 py-2 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition" />
          @error('password')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
        </div>

        <button type="submit" class="w-full rounded-xl bg-indigo-600 text-white px-6 py-3 font-semibold shadow hover:bg-indigo-700 transition">Submit Registration</button>
      </form>
    </div>
    @endsection
    
</body>
</html>
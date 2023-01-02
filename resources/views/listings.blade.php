<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Jobhuntly</title>
</head>
<body>
    {{-- Navbar --}}
    <nav class="relative container mx-auto p-6">
        <div class="flex items-center justify-between">
            <div class="pt-2 flex gap-6 items-center">
                <img src="{{asset('/images/logo.png')}}" alt="">
                <div class="hidden md:flex space-x-6">
                    <a href="" class="href">Find Jobs</a>
                    <a href="" class="href">Browse Companies</a>
                </div>
            </div>
            <div class="hidden md:block space-x-6">
                <button class="text-primary">Login</button>
                <button class="bg-primary text-white px-4 py-2">Sign Up</button>
            </div>
        </div>
    </nav>
</body>
</html>
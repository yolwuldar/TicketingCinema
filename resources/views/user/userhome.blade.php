<!-- resources/views/user/userhome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home</title>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Home') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                    <h3 class="text-lg font-semibold mt-4">Daftar Film yang Sedang Tayang:</h3>
                    
                    <!-- Menampilkan daftar film -->
                    <div class="mt-4">

                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>

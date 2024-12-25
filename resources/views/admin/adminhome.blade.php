<!-- resources/views/admin/adminhome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <style></style>
</head>
<body class="antialiased">
    <!-- Gunakan komponen app-layout secara langsung -->
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Admin Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in as admin!") }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Row untuk menampilkan dua kolom: Movies dan Kursi -->
        <div class="row">
            <!-- Kolom untuk Movies -->
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Movies</h5>
                        <p class="card-text">Kelola film yang ada di bioskop.</p>
                        <a href="{{ route('admin.movies.index') }}" class="btn btn-primary">Kelola Movies</a>
                    </div>
                </div>
            </div>

            <!-- Kolom untuk Kursi -->
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kursi</h5>
                        <p class="card-text">Kelola kursi di ruangan bioskop.</p>
                        <a href="" class="btn btn-primary">Kelola Kursi</a>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home</title>
    
    <style>
        .movie-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .movie-item {
            width: 200px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .movie-poster {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px; /* Tinggi kotak poster */
            background-color: #f8f8f8; /* Latar belakang kotak */
        }
        .movie-poster img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain; /* Menjaga proporsi gambar */
        }
        .movie-info {
            padding: 10px;
        }
        .movie-title {
            font-size: 16px;
            font-weight: bold;
        }
        .movie-details {
            font-size: 14px;
            color: #555;
            margin-top: 5px;
        }
    </style>
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
                    <div class="movie-list mt-4">
                        @if(isset($movies) && !$movies->isEmpty())
                            @foreach($movies as $movie)
                                <div class="movie-item">
                                    <!-- Gambar Poster -->
                                    <div class="movie-poster">
                                        <img src="{{ asset($movie->poster) }}" alt="{{ $movie->title }} poster">
                                    </div>

                                    <!-- Detail Film -->
                                    <div class="movie-info">
                                        <h4 class="movie-title">{{ $movie->title }}</h4>
                                        <p class="movie-details">Genre: {{ $movie->genre }}</p>
                                        <p class="movie-details">Rilis: {{ $movie->release_date }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-gray-500">Tidak ada film yang tersedia saat ini.</p>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>

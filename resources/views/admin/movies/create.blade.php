<!-- resources/views/admin/movies/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Film</title>
</head>
<body class="antialiased">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Tambah Film Baru') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form action="{{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="title" class="block">Judul Film</label>
                                <input type="text" id="title" name="title" class="border w-full p-2" value="{{ old('title') }}">
                                @error('title')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="poster" class="block">Poster</label>
                                <input type="file" id="poster" name="poster" class="border w-full p-2">
                                @error('poster')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="synopsis" class="block">Sinopsis</label>
                                <textarea id="synopsis" name="synopsis" class="border w-full p-2">{{ old('synopsis') }}</textarea>
                                @error('synopsis')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="genre" class="block">Genre</label>
                                <input type="text" id="genre" name="genre" class="border w-full p-2" value="{{ old('genre') }}">
                                @error('genre')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="director" class="block">Sutradara</label>
                                <input type="text" id="director" name="director" class="border w-full p-2" value="{{ old('director') }}">
                                @error('director')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="casts" class="block">Pemeran</label>
                                <input type="text" id="casts" name="casts" class="border w-full p-2" value="{{ old('casts') }}">
                                @error('casts')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="age_rating" class="block">Rating Usia</label>
                                <input type="text" id="age_rating" name="age_rating" class="border w-full p-2" value="{{ old('age_rating') }}">
                                @error('age_rating')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="release_date" class="block">Tanggal Rilis</label>
                                <input type="date" id="release_date" name="release_date" class="border w-full p-2" value="{{ old('release_date') }}">
                                @error('release_date')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="duration" class="block">Durasi (Menit)</label>
                                <input type="number" id="duration" name="duration" class="border w-full p-2" value="{{ old('duration') }}">
                                @error('duration')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                            </div>
                            <button type="submit" class="bg-blue-500 text-white p-2">Simpan Film</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>

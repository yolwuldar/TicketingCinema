<!-- resources/views/admin/movies/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film - Admin</title>
</head>

<body class="antialiased">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Daftar Film') }}
            </h2>
        </x-slot>

        <div class="container my-4">
            <a href="{{ route('admin.movies.create') }}" class="btn btn-primary mb-3">Tambah Film</a>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Judul</th>
                            <th>Poster</th>
                            <th>Sinopsis</th>
                            <th>Genre</th>
                            <th>Sutradara</th>
                            <th>Pemeran</th>
                            <th>Rating Usia</th>
                            <th>Tanggal Rilis</th>
                            <th>Durasi (menit)</th>
                            <th>Kelola</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie)
                            <tr>
                                <td>{{ $movie->title }}</td>
                                <td>
                                    <img src="{{ asset($movie->poster) }}" alt="Poster" class="img-thumbnail" style="width: 100px; height: auto;">
                                </td>
                                <td>{{ Str::limit($movie->synopsis, 50) }}</td>
                                <td>{{ $movie->genre }}</td>
                                <td>{{ $movie->director }}</td>
                                <td>{{ $movie->casts }}</td>
                                <td>{{ $movie->age_rating }}</td>
                                <td>{{ $movie->release_date }}</td>
                                <td>{{ $movie->duration }} min</td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <a href="{{ route('admin.movies.edit', $movie) }}" class="btn btn-sm btn-warning mb-1">Edit</a>
                                        <form action="{{ route('admin.movies.destroy', $movie) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus film ini?')">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </x-app-layout>
</body>

</html>

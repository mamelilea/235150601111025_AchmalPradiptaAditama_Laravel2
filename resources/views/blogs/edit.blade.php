<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="max-w-lg mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-6">Edit Blog</h1>
        <form action="/blogs/{{ $blog->id }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
            @csrf
            @method('PUT')
            <div>
                <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ $blog->judul }}" class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div>
                <label for="isi" class="block text-sm font-medium text-gray-700">Isi</label>
                <textarea name="isi" id="isi" rows="5" class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>{{ $blog->isi }}</textarea>
            </div>
            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="mt-1 block w-full rounded">
                @if ($blog->gambar)
                <img src="{{ asset('storage/' . $blog->gambar) }}" alt="Gambar Blog" class="mt-2 w-32">
                @endif
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
            </div>
        </form>
    </div>
</body>

</html>
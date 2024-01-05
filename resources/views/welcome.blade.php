<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>


    </head>
    <body class="antialiased">
        <div class="p-12">
            <form action="{{ route('download') }}" method="POST">
                @csrf
                <button type="submit" class="border bg-blue-500 rounded-md py-2 px-3 text-white" name="button" value="1">Landscape</button>
                <button type="submit" class="border bg-blue-500 rounded-md py-2 px-3 text-white" name="button" value="2">Portrait</button>
            </form>

    </body>

</html>

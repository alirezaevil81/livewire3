<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME','Livewire3') }}</title>
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>

<h1>hi</h1>
@php
$title = 'hi';
@endphp
<livewire:post.create :title="$title"/>

@vite('resources/js/app.js')
@livewireScripts
</body>
</html>
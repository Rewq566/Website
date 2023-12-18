<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Nordicman Home</title>

    </head>
    
    <body>
         <H1> hello</h1>
            <div>
            <h1>User Profiles</h1>

                @foreach ($profiles as $profile)
                    <p>{{ $profile->name }}</p>
                    <!-- Andere velden weergeven zoals nodig -->
                @endforeach
            </div>
            <p>hello</p>
    </body>
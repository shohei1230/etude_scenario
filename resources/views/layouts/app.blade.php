<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div id="app">
            <app :errors="{{ $errors }}" :auth="{{ Auth::user() ?? '[]' }}" />
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
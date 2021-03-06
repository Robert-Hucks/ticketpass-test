<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.3.45/css/materialdesignicons.min.css">

        <script src="{{ mix('/js/app.js') }}" defer></script>

        @routes
    </head>
    <body>
        @inertia
    </body>
</html>
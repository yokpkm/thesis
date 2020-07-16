<html>

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <script>
        window.opener.postMessage({
            token: "{{ $token }}",
            expires: "{{ $expires }}"
        }, "http://8b6763b306ed.ap.ngrok.io");
        window.close();
    </script>
</head>

<body>
</body>

</html>
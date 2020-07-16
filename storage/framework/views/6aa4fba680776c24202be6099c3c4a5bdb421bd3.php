<html>

<head>
    <meta charset="utf-8">
    <title><?php echo e(config('app.name')); ?></title>
    <script>
        window.opener.postMessage({
            token: "<?php echo e($token); ?>",
            expires: "<?php echo e($expires); ?>"
        }, "http://8b6763b306ed.ap.ngrok.io");
        window.close();
    </script>
</head>

<body>
</body>

</html>
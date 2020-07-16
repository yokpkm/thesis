<html>

<head>
    <meta charset="utf-8">
    <title><?php echo e(config('app.name')); ?></title>
    <script>
        window.opener.postMessage({
            token: "<?php echo e($token); ?>",
            expires: "<?php echo e($expires); ?>"
        }, "http://localhost:8000");
        window.close();
    </script>
</head>

<body>
</body>

</html>
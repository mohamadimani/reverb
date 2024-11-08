<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .post {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .post-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .post-content {
            margin-bottom: 15px;
        }

        .like-button {
            color: #dc3545;
            cursor: pointer;
            font-size: 20px;
        }
    </style>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles
</head>

<body>

    <livewire:Post.Index />

    @livewireScripts
</body>

</html>

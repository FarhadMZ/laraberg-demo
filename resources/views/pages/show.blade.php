<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>{{ $page->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f9f9f9;
        }
        .page-content {
            max-width: 900px;
            margin: 50px auto;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }

        .page-content h1 {
            margin-bottom: 25px;
        }
    </style>
</head>
<body dir="rtl">
    <div class="page-content">
        <h1>{{ $page->title }}</h1>
        <hr>
        {!! $page->content !!}
    </div>
</body>
</html>

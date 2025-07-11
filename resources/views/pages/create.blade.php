<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>ایجاد صفحه جدید</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css') }}">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .page-form-wrapper {
            max-width: 900px;
            margin: 50px auto;
        }
    </style>
</head>
<body dir="rtl">

<div class="container page-form-wrapper">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="text-center mb-4">✍️ ایجاد برگه جدید</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('pages.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">عنوان برگه:</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">محتوای برگه:</label>
                    <textarea id="laraberg" name="content">{!! old('content', $post->content ?? '') !!}</textarea>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">💾 ذخیره</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://unpkg.com/react@17.0.2/umd/react.production.min.js"></script>
<script src="https://unpkg.com/react-dom@17.0.2/umd/react-dom.production.min.js"></script>
<script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
<script>
    window.onload = function () {
        Laraberg.init('laraberg', {
            sidebar: false,
            alignWide: true,
            supportsLayout: true,
        });
    };
</script>
</body>
</html>

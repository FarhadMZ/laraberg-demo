<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>لیست برگه‌ها</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
</head>
<body dir="rtl">
<div class="container mt-5">

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 mb-3"><h2 class="text-center">📄 لیست برگه‌ها</h2></div>
        <div  class="col-md-4 d-flex align-items-end flex-column"><a href="{{ route('pages.create') }}"  class="btn btn-primary btn-sm">ایجاد برگه جدید</a></div>
    </div>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>شناسه</th>
                <th>عنوان</th>
                <th>تاریخ ایجاد</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pages as $page)
                <tr>
                    <td>{{ $page->id }}</td>
                    <td>{{ $page->title }}</td>
                    <td>{{ $page->created_at->format('Y/m/d') }}</td>
                    <td>
                        <a href="{{ route('pages.show', $page) }}" class="btn btn-info btn-sm">👁️ مشاهده</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">هیچ برگه‌ای ثبت نشده است.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>

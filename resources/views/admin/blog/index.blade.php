@extends('layouts.admin')

@section('title', 'مدیریت مقالات')

@section('content')
<section class="section">
    <div class="container mx-auto">
        <h2 class="section-title">مدیریت مقالات</h2>
        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> افزودن مقاله جدید</a>
        @if (session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">عنوان</th>
                    <th class="px-4 py-2">دسته‌بندی</th>
                    <th class="px-4 py-2">نویسنده</th>
                    <th class="px-4 py-2">تاریخ</th>
                    <th class="px-4 py-2">عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td class="border px-4 py-2">{{ $post->title }}</td>
                        <td class="border px-4 py-2">{{ $post->category_name }}</td>
                        <td class="border px-4 py-2">{{ $post->author ?? 'بدون نویسنده' }}</td>
                        <td class="border px-4 py-2">
                            @if ($post->date)
                                {{ \Carbon\Carbon::parse($post->date)->format('Y-m-d') }}
                            @else
                                بدون تاریخ
                            @endif
                        </td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('admin.blog.show', $post->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> نمایش</a>
                            <a href="{{ route('admin.blog.edit', $post->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> ویرایش</a>
                            <form action="{{ route('admin.blog.destroy', $post->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('آیا مطمئن هستید که می‌خواهید این مقاله را حذف کنید؟')"><i class="fas fa-trash"></i> حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
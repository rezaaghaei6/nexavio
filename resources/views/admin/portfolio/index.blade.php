@extends('layouts.admin')
@section('title', 'مدیریت نمونه‌کارها')
@section('content')
<section class="section">
    <div class="container mx-auto">
        <h2 class="section-title">مدیریت نمونه‌کارها</h2>
        <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> افزودن نمونه‌کار جدید</a>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>عنوان</th>
                        <th>آیکون</th>
                        <th>توضیحات</th>
                        <th>برچسب‌ها</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($portfolios as $portfolio)
                        <tr>
                            <td>{{ $portfolio->title }}</td>
                            <td><i class="{{ $portfolio->icon }}"></i></td>
                            <td>{{ Str::limit($portfolio->description, 50) }}</td>
                            <td>
                                @foreach($portfolio->tags ?? [] as $tag)
                                    <span class="tag bg-gray-200 text-gray-800 text-sm px-2 py-1 rounded">{{ $tag }}</span>
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ route('admin.portfolio.edit', $portfolio) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> ویرایش</a>
                                <form action="{{ route('admin.portfolio.destroy', $portfolio) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('آیا مطمئن هستید؟')"><i class="fas fa-trash"></i> حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
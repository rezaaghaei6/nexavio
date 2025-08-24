@extends('layouts.admin')
@section('title', 'مدیریت خدمات')
@section('content')
<section class="section">
    <div class="container mx-auto">
        <h2 class="section-title">مدیریت خدمات</h2>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> افزودن خدمت جدید</a>
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
                    @foreach($services as $service)
                        <tr>
                            <td>{{ $service->title }}</td>
                            <td><i class="{{ $service->icon }}"></i></td>
                            <td>{{ Str::limit($service->description, 50) }}</td>
                            <td>
                                @foreach($service->tags ?? [] as $tag)
                                    <span class="tag bg-gray-200 text-gray-800 text-sm px-2 py-1 rounded">{{ $tag }}</span>
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> ویرایش</a>
                                <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display:inline;">
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
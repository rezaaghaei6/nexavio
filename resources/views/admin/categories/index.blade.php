@extends('layouts.admin')

@section('title', 'مدیریت دسته‌بندی‌ها')

@section('content')
<section class="section">
    <div class="container mx-auto">
        <h2 class="section-title">مدیریت دسته‌بندی‌ها</h2>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> افزودن دسته‌بندی جدید</a>
        @if (session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">نام دسته‌بندی</th>
                    <th class="px-4 py-2">عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td class="border px-4 py-2">{{ $category->name }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('admin.categories.show', ['category' => $category->id]) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> نمایش</a>
                            <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> ویرایش</a>
                            <form action="{{ route('admin.categories.destroy', ['category' => $category->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('آیا مطمئن هستید که می‌خواهید این دسته‌بندی را حذف کنید؟')"><i class="fas fa-trash"></i> حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
@extends('layouts.admin')
@section('title', 'مدیریت خدمات')
@section('content')
<div class="container">
    <h2>مدیریت خدمات</h2>
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">افزودن خدمت</a>
    <table>
        <thead>
            <tr>
                <th>عنوان</th>
                <th>آیکون</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->icon }}</td>
                    <td>
                        <a href="{{ route('admin.services.edit', $service) }}">ویرایش</a>
                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
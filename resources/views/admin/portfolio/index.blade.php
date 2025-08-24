@extends('layouts.admin')
@section('title', 'مدیریت نمونه‌کارها')
@section('content')
<div class="container">
    <h2>مدیریت نمونه‌کارها</h2>
    <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary">افزودن نمونه‌کار</a>
    <table>
        <thead>
            <tr>
                <th>عنوان</th>
                <th>آیکون</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($portfolios as $portfolio)
                <tr>
                    <td>{{ $portfolio->title }}</td>
                    <td>{{ $portfolio->icon }}</td>
                    <td>
                        <a href="{{ route('admin.portfolio.edit', $portfolio) }}">ویرایش</a>
                        <form action="{{ route('admin.portfolio.destroy', $portfolio) }}" method="POST" style="display:inline;">
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
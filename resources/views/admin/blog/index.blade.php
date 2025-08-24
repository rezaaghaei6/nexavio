@extends('layouts.admin')
@section('title', 'مدیریت مقالات')
@section('content')
<div class="container">
    <h2>مدیریت مقالات</h2>
    <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">افزودن مقاله</a>
    <table>
        <thead>
            <tr>
                <th>عنوان</th>
                <th>تاریخ</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->date }}</td>
                    <td>
                        <a href="{{ route('admin.blog.edit', $post) }}">ویرایش</a>
                        <form action="{{ route('admin.blog.destroy', $post) }}" method="POST" style="display:inline;">
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
@extends('layouts.admin')
@section('title', 'مدیریت کاربران ادمین')
@section('content')
<section class="section">
    <div class="container mx-auto">
        <h2 class="section-title">مدیریت کاربران ادمین</h2>
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> ایجاد کاربر جدید</a>
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
                        <th>نام</th>
                        <th>ایمیل</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> ویرایش</a>
                                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" style="display:inline;">
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
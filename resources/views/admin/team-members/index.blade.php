@extends('layouts.admin')

@section('title', 'مدیریت اعضای تیم')

@section('content')
<section class="section">
    <div class="container mx-auto">
        <h2 class="section-title">مدیریت اعضای تیم</h2>
        <a href="{{ route('admin.team-members.create') }}" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> افزودن عضو جدید</a>
        @if (session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif
        <table class="table-auto w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2">نام</th>
                    <th class="px-4 py-2">موقعیت</th>
                    <th class="px-4 py-2">تصویر</th>
                    <th class="px-4 py-2">وضعیت</th>
                    <th class="px-4 py-2">عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teamMembers as $teamMember)
                    <tr>
                        <td class="border px-4 py-2">{{ $teamMember->name }}</td>
                        <td class="border px-4 py-2">{{ $teamMember->position }}</td>
                        <td class="border px-4 py-2">
                            @if ($teamMember->image)
                                <img src="{{ $teamMember->image_url }}" alt="{{ $teamMember->name }}" class="w-16 h-16 object-cover rounded-full">
                            @else
                                <span class="text-gray-600">بدون تصویر</span>
                            @endif
                        </td>
                        <td class="border px-4 py-2">
                            <span class="{{ $teamMember->is_active ? 'text-green-600' : 'text-red-600' }}">
                                {{ $teamMember->is_active ? 'فعال' : 'غیرفعال' }}
                            </span>
                        </td>
                        <td class="border px-4 py-2 flex gap-2">
                            <a href="{{ route('admin.team-members.show', $teamMember) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> نمایش</a>
                            <a href="{{ route('admin.team-members.edit', $teamMember) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> ویرایش</a>
                            <form action="{{ route('admin.team-members.destroy', $teamMember) }}" method="POST" onsubmit="return confirm('آیا مطمئن هستید که می‌خواهید این عضو تیم را حذف کنید؟')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
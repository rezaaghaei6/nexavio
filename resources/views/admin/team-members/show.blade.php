@extends('layouts.admin')

@section('title', 'نمایش عضو تیم')

@section('content')
<section class="section">
    <div class="container mx-auto max-w-lg">
        <h2 class="section-title">جزئیات عضو تیم</h2>
        <div class="bg-white shadow-md rounded-lg p-6 space-y-4">
            <div class="flex items-center gap-4">
                <strong class="w-24">نام:</strong>
                <span>{{ $teamMember->name }}</span>
            </div>
            <div class="flex items-center gap-4">
                <strong class="w-24">موقعیت:</strong>
                <span>{{ $teamMember->position }}</span>
            </div>
            <div class="flex items-start gap-4">
                <strong class="w-24">بیوگرافی:</strong>
                <span>{{ $teamMember->bio ?? 'بدون بیوگرافی' }}</span>
            </div>
            <div class="flex items-center gap-4">
                <strong class="w-24">تصویر:</strong>
                @if ($teamMember->image)
                    <img src="{{ $teamMember->image_url }}" alt="{{ $teamMember->name }}" class="w-32 h-32 object-cover rounded-full">
                @else
                    <span class="text-gray-600">بدون تصویر</span>
                @endif
            </div>
            <div class="flex items-center gap-4">
                <strong class="w-24">وضعیت:</strong>
                <span class="{{ $teamMember->is_active ? 'text-green-600' : 'text-red-600' }}">
                    {{ $teamMember->is_active ? 'فعالتصویر' : 'غیرفعال' }}
                </span>
            </div>
            <div class="flex items-center gap-4">
                <strong class="w-24">لینکدین:</strong>
                @if ($teamMember->linkedin)
                    <a href="{{ $teamMember->linkedin }}" target="_blank" class="text-blue-600 hover:underline">{{ $teamMember->linkedin }}</a>
                @else
                    <span class="text-gray-600">بدون لینک</span>
                @endif
            </div>
            <div class="flex items-center gap-4">
                <strong class="w-24">گیتهاب:</strong>
                @if ($teamMember->github)
                    <a href="{{ $teamMember->github }}" target="_blank" class="text-blue-600 hover:underline">{{ $teamMember->github }}</a>
                @else
                    <span class="text-gray-600">بدون لینک</span>
                @endif
            </div>
            <div class="flex items-center gap-4">
                <strong class="w-24">تلگرام:</strong>
                @if ($teamMember->telegram)
                    <a href="{{ $teamMember->telegram }}" target="_blank" class="text-blue-600 hover:underline">{{ $teamMember->telegram }}</a>
                @else
                    <span class="text-gray-600">بدون لینک</span>
                @endif
            </div>
            <div class="flex items-center gap-4">
                <strong class="w-24">اینستاگرام:</strong>
                @if ($teamMember->instagram)
                    <a href="{{ $teamMember->instagram }}" target="_blank" class="text-blue-600 hover:underline">{{ $teamMember->instagram }}</a>
                @else
                    <span class="text-gray-600">بدون لینک</span>
                @endif
            </div>
            <div class="flex gap-2 mt-4">
                <a href="{{ route('admin.team-members.edit', $teamMember) }}" class="btn btn-warning"><i class="fas fa-edit"></i> ویرایش</a>
                <form action="{{ route('admin.team-members.destroy', $teamMember) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('آیا مطمئن هستید که می‌خواهید این عضو تیم را حذف کنید؟')"><i class="fas fa-trash"></i> حذف</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
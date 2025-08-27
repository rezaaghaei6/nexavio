@extends('layouts.admin')

@section('title', 'لاگ‌ها')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-2xl font-bold mb-6">لاگ‌های سایت</h1>
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">زمان</th>
                <th class="border px-4 py-2">سطح</th>
                <th class="border px-4 py-2">پیام</th>
                <th class="border px-4 py-2">کاربر</th>
                <th class="border px-4 py-2">IP</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logs as $log)
            <tr>
                <td class="border px-4 py-2">{{ $log->created_at }}</td>
                <td class="border px-4 py-2">{{ $log->level }}</td>
                <td class="border px-4 py-2">{{ $log->message }}</td>
                <td class="border px-4 py-2">{{ $log->user_id ? $log->user->name : '-' }}</td>
                <td class="border px-4 py-2">{{ $log->ip }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-6">
        {{ $logs->links() }}
    </div>
</div>
@endsection

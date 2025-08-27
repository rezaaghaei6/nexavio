@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="container mx-auto max-w-2xl">
        <h2 class="section-title text-2xl font-bold mb-6">ویرایش مقاله</h2>

        {{-- فرم ویرایش مقاله --}}
        <form action="{{ route('admin.blog.update', $post) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            {{-- عنوان --}}
            <div class="form-group">
                <label for="title" class="block mb-2 font-semibold">عنوان</label>
                <input type="text" name="title" id="title"
                       class="w-full border rounded-lg p-2"
                       required
                       value="{{ old('title', $post->title) }}">
                @error('title')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- دسته‌بندی --}}
            <div class="form-group">
                <label for="category_id" class="block mb-2 font-semibold">دسته‌بندی</label>
                <select name="category_id" id="category_id"
                        class="w-full border rounded-lg p-2">
                    <option value="">بدون دسته‌بندی</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- محتوا --}}
            <div class="form-group">
                <label for="content" class="block mb-2 font-semibold">محتوا</label>
                <textarea name="content" id="content" rows="6"
                          class="w-full border rounded-lg p-2">{{ old('content', $post->content) }}</textarea>
                @error('content')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- دکمه‌ها --}}
            <div class="flex items-center gap-4">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">
                    بروزرسانی
                </button>
                <a href="{{ route('admin.blog.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg">
                    بازگشت
                </a>
            </div>
        </form>
    </div>
</section>
@endsection

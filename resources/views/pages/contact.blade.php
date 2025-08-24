@extends('layouts.app')
@section('title', 'تماس با ما')
@section('content')
<section class="hero">
    <div class="hero-container">
        <h1 class="fade-in-up">تماس با ما</h1>
        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div>
                <label for="name">نام</label>
                <input type="text" name="name" id="name" required>
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="email">ایمیل</label>
                <input type="email" name="email" id="email" required>
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="message">پیام</label>
                <textarea name="message" id="message" required></textarea>
                @error('message') <span class="error">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-primary">ارسال</button>
        </form>
    </div>
</section>
@endsection
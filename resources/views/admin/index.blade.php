@extends('layouts.admin.index')
@section('title')
    {{ config('app.name') . ' - Admin Panel' }}
@endsection
@section('description')
    Design via tailwind css
@endsection
@section('keywords')
    Omniforce Technologies
@endsection
@section('author')
    Omniforce Technologies
@endsection
@section('content')
    {{-- Hero Section --}}
    <x-frontend.section.simple-gradiant>
        <div class="mx-auto max-w-md py-12 sm:py-40 lg:py-10">
            <form action="{{ route('admin-menu') }}" method="post"
                class="flex flex-col space-y-3 border p-5 rounded bg-slate-50 shadow-sm">
                @csrf
                <div>
                    <input type="file" name="img" id="img" class="px-4 py-2 rounded bg-slate-100 w-full">
                    @error('img')
                        <div class="px-2 py-1 text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="text" name="name" id="name" placeholder="Enter Menu Name" value="{{ old('name') }}"
                        class="px-4 py-2 rounded bg-slate-100 w-full">
                    @error('name')
                        <div class="px-2 py-1 text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <textarea name="desc" id="desc" cols="20" rows="3" placeholder="Enter menu description"
                        class="px-4 py-2 rounded bg-slate-100 w-full">{{ old('desc') }}</textarea>
                    @error('desc')
                        <div class="px-2 py-1 text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <textarea name="url" id="url" cols="20" rows="2" placeholder="Enter menu url"
                        class="px-4 py-2 rounded bg-slate-100 w-full">{{ old('url') }}</textarea>
                    @error('url')
                        <div class="px-2 py-1 text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <select name="parent" id="parent" class="px-4 py-2 rounded w-full">
                        <option value="Home">Home</option>
                    </select>
                    @error('parent')
                        <div class="px-2 py-1 text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>
                <div class="pt-5">
                    <input type="submit" value="Submit"
                        class="px-4 py-2 text-white bg-red-400 hover:bg-red-500 transition-all cursor-pointer">
                </div>
            </form>
        </div>
    </x-frontend.section.simple-gradiant>
@endsection

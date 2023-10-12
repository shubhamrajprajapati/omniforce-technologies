@extends('layouts.admin.index')
@section('title')
    {{ config('app.name') . ' - Admin Panel (Menu)' }}
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


        <div class="p-2 flex flex-col-reverse space-y-reverse space-y-10 lg:flex-row lg:space-x-5 bg-white dark:bg-gray-900 max-h-full">
            <x-tables.overflow-scrolling.index>
                <x-tables.overflow-scrolling.thead>
                    @foreach ($menus[0] as $key => $value)
                        <x-tables.overflow-scrolling.th>
                            {{ $key }}
                        </x-tables.overflow-scrolling.th>
                    @endforeach
                    <tr></tr>
                </x-tables.overflow-scrolling.thead>

                <x-tables.overflow-scrolling.tbody>
                    @foreach ($menus as $item)
                        <x-tables.overflow-scrolling.tr>
                            @foreach ($item as $value)
                                <x-tables.overflow-scrolling.td>
                                    @if ($loop->index == 6 || $loop->index == 7)
                                        {!! date('d-M-y h:m a', strtotime($value)) !!}
                                    @else
                                        {{ $value }}
                                    @endif
                                </x-tables.overflow-scrolling.td>
                            @endforeach
                        </x-tables.overflow-scrolling.tr>
                    @endforeach
                </x-tables.overflow-scrolling.tbody>
            </x-tables.overflow-scrolling.index>

            <div class="mx-auto max-w-md min-w-fit bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-sm max-h-fit">
                <form action="{{ route('admin-menu') }}" method="post"
                    class="flex flex-col space-y-3 p-5">
                    @if (session('success'))
                        <div class="px-a2 py-1 text-white bg-green-500">
                            {{ session('status') }}
                        </div>
                    @endif

                    @csrf
                    <div>
                        <input type="file" name="img" id="img" class="px-4 py-2 rounded bg-slate-100 w-full dark:bg-slate-800">
                        @error('img')
                            <div class="px-2 py-1 text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <input type="text" name="name" id="name" placeholder="Enter Menu Name"
                            value="{{ old('name') }}" class="px-4 py-2 rounded bg-slate-100 w-full dark:bg-slate-800">
                        @error('name')
                            <div class="px-2 py-1 text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <textarea name="desc" id="desc" cols="20" rows="3" placeholder="Enter menu description"
                            class="px-4 py-2 rounded bg-slate-100 w-full dark:bg-slate-800">{{ old('desc') }}</textarea>
                        @error('desc')
                            <div class="px-2 py-1 text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <textarea name="url" id="url" cols="20" rows="2" placeholder="Enter menu url"
                            class="px-4 py-2 rounded bg-slate-100 w-full dark:bg-slate-800">{{ old('url') }}</textarea>
                        @error('url')
                            <div class="px-2 py-1 text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <select name="parent" id="parent" class="px-4 py-2 rounded w-full dark:bg-slate-800">
                            <option value="">Parent</option>
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
        </div>



    </x-frontend.section.simple-gradiant>
@endsection

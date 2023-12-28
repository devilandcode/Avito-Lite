@php use Diglactic\Breadcrumbs\Breadcrumbs; @endphp
<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigation')
    </x-slot>

    <div class="">
        {{ Breadcrumbs::render()  }}
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                <div class="p-6 text-gray-900 w-full">
                    <form class="w-full text-left" action="{{ route('admin.users.update', $user) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="name">
                                    Name
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="name" type="text" name="name" value="{{ $user->name }}" placeholder="name">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                                @endif
                            </div>

                        </div>
                        <div class=" mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="email">
                                    Email
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="email" type="email" name="email" value="{{ $user->email }}" placeholder="email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class=" mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="email">
                                    Status
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select class="w-full" name="status">
                                    @foreach($statuses as $status)
                                        <option value="{{ $status }}">{{ $status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                                <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




{{--<x-app-layout>--}}
{{--    @include('admin.users._nav')--}}

{{--    <form method="POST" action="{{ route('admin.users.update', $user) }}">--}}
{{--        @csrf--}}
{{--        @method('PUT')--}}

{{--        <div class="form-group">--}}
{{--            <label for="name" class="col-form-label">Name</label>--}}
{{--            <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $user->name) }}" required>--}}
{{--            @if ($errors->has('name'))--}}
{{--                <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>--}}
{{--            @endif--}}
{{--        </div>--}}

{{--        <div class="form-group">--}}
{{--            <label for="email" class="col-form-label">E-Mail Address</label>--}}
{{--            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email', $user->email) }}" required>--}}
{{--            @if ($errors->has('email'))--}}
{{--                <span class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></span>--}}
{{--            @endif--}}
{{--        </div>--}}

{{--        <div class="form-group">--}}
{{--            <label for="role" class="col-form-label">Role</label>--}}
{{--            <select id="role" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="role">--}}
{{--                @foreach ($roles as $value => $label)--}}
{{--                    <option value="{{ $value }}"{{ $value === old('role', $user->role) ? ' selected' : '' }}>{{ $label }}</option>--}}
{{--                @endforeach;--}}
{{--            </select>--}}
{{--            @if ($errors->has('role'))--}}
{{--                <span class="invalid-feedback"><strong>{{ $errors->first('role') }}</strong></span>--}}
{{--            @endif--}}
{{--        </div>--}}

{{--        <div class="form-group">--}}
{{--            <button type="submit" class="btn btn-primary">Save</button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-app-layout>--}}

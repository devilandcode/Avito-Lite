@php use Diglactic\Breadcrumbs\Breadcrumbs; @endphp
<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigation')
    </x-slot>

    <div class="">
        {{ Breadcrumbs::render()  }}
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                <div class="p-6 text-gray-900 w-full">
                    <div class="mb-6">
                        <a class="block text-center rounded hover:bg-green-500 border-px bg-green-300 p-2 mt-6"  href="{{ route('admin.users.edit', $user) }}">Edit User</a>
                        <a class="block text-center rounded hover:bg-red-500 border-px bg-red-300 p-2 mt-6"  href="{{ route('admin.users.destroy', $user) }}">Delete User</a>
                    </div>
                    <div class="flex justify-center">
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th class="w-60 bg-gray-200">ID</th><td class="w-60 bg-gray-200">{{ $user->id }}</td>
                            </tr>
                            <tr>
                                <th class="w-60 bg-white">Name</th><td class="w-60 bg-white">{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th class="w-60 bg-gray-200">Email</th><td class="w-60 bg-gray-200">{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $user->status }}</td>
                            </tr>
                            <tr>
                                <th class="w-60 bg-gray-200">Role</th>
                                {{--            <td>--}}
                                {{--                @if ($user->isAdmin())--}}
                                {{--                    <span class="badge badge-danger">Admin</span>--}}
                                {{--                @else--}}
                                {{--                    <span class="badge badge-secondary">User</span>--}}
                                {{--                @endif--}}
                                {{--            </td>--}}
                            </tr>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

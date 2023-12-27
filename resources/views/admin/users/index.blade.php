@php use Diglactic\Breadcrumbs\Breadcrumbs; @endphp
<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigation')
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ Breadcrumbs::render('admin.users.index')  }}

                    <div class="p-6 text-gray-900">
                        <div class="">
                            @include('admin.users._nav')
                        </div>

                        <a class="block text-center rounded hover:bg-blue-500 border-px bg-blue-300 p-2 mt-6"  href="{{ route('admin.users.create') }}">Create User</a>
                        <table class="table-auto mt-6">
                            <thead>
                            <tr>
                                <th class="w-60 px-4 py-2">ID</th>
                                <th class="w-60 px-4 py-2">Name</th>
                                <th class="w-60 px-4 py-2">Email</th>
                                <th class="w-60 px-4 py-2">Status</th>
                                <th class="w-60 px-4 py-2">Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="border px-4 py-2 text-center">{{ $user->id }}</td>
                                <td class="border px-4 py-2 text-center"><a class="hover:text-rose-300" href="{{ route('admin.users.show', $user) }}">{{ $user->name }}</a></td>
                                <td class="border px-4 py-2 text-center">{{ $user->email }}</td>
                                <td class="border px-4 py-2 text-center">
                                    @if($user->isActive())
                                        <span class="border bg-green-700 p-1 rounded text-white">{{ $user->status }}</span>
                                    @endif
                                    @if($user->isWait())
                                        <span class="border bg-red-700 p-1 rounded text-white">{{ $user->status }}</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

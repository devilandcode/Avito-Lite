@php use Diglactic\Breadcrumbs\Breadcrumbs; @endphp
<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigation')
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ Breadcrumbs::render('users')  }}
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900">
                                    @include('admin.users._nav')

                                    <table class="table-auto">
                                        <thead>
                                        <tr>
                                            <th class="px-4 py-2">ID</th>
                                            <th class="px-4 py-2">Name</th>
                                            <th class="px-4 py-2">Email</th>
                                            <th class="px-4 py-2">Status</th>
                                            <th class="px-4 py-2">Role</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td class="border px-4 py-2">{{ $user->id }}</td>
                                            <td class="border px-4 py-2"><a class="hover:text-rose-300" href="{{ route('admin.users.show', $user) }}">{{ $user->name }}</a></td>
                                            <td class="border px-4 py-2">{{ $user->email }}</td>
                                            <td class="border px-4 py-2">@if ($user->isWait())
                                                    <span class="badge badge-secondary">Waiting</span>
                                                @endif
                                                @if ($user->isActive())
                                                    <span class="badge badge-primary">Active</span>
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
            </div>
        </div>
    </div>
</x-app-layout>


{{--<x-app-layout>--}}

{{--    @include('admin.users._nav')--}}

{{--    <p><a href="{{ route('admin.users.create') }}" class="btn btn-success">Add User</a></p>--}}

{{--    <div class="container mx-auto">--}}
{{--        <div class="card mb-3">--}}
{{--            <div class="text-center border ">Filter</div>--}}
{{--            <div class="card-body">--}}
{{--                <form action="?" method="GET" class="flex-auto p-6">--}}
{{--                    <div class="flex flex-row">--}}
{{--                        <div class="flex flex-col-sm-1">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="id" class="text-center block">ID</label>--}}
{{--                                <input id="id" class="form-control" name="id" value="{{ request('id') }}">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-2">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="name" class="text-center block">Name</label>--}}
{{--                                <input id="name" class="form-control" name="name" value="{{ request('name') }}">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-3">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="email" class="text-center block">Email</label>--}}
{{--                                <input id="email" class="form-control" name="email" value="{{ request('email') }}">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-2">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="status" class="text-center block">Status</label>--}}
{{--                                <select id="status" class="form-control" name="status">--}}
{{--                                    <option value=""></option>--}}
{{--                                    @foreach ($statuses as $value => $label)--}}
{{--                                        <option value="{{ $value }}"{{ $value === request('status') ? ' selected' : '' }}>{{ $label }}</option>--}}
{{--                                    @endforeach;--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-2">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="role" class="text-center block">Role</label>--}}
{{--                                <select id="role" class="form-control" name="role">--}}
{{--                                    <option value=""></option>--}}
{{--    --}}{{--                                @foreach ($roles as $value => $label)--}}
{{--    --}}{{--                                    <option value="{{ $value }}"{{ $value === request('role') ? ' selected' : '' }}>{{ $label }}</option>--}}
{{--    --}}{{--                                @endforeach;--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="flex items-end flex-col-sm-2">--}}
{{--                            <div class="form-group">--}}
{{--                                <label class="col-form-label">&nbsp;</label>--}}
{{--                                <button type="submit" class="bg-blue-400 hover:bg-blue-700 p-1 rounded">Search</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <table class="table table-bordered table-striped">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>ID</th>--}}
{{--            <th>Name</th>--}}
{{--            <th>Email</th>--}}
{{--            <th>Status</th>--}}
{{--            <th>Role</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}

{{--        @foreach ($users as $user)--}}
{{--            <tr>--}}
{{--                <td>{{ $user->id }}</td>--}}
{{--                <td><a href="{{ route('admin.users.show', $user) }}">{{ $user->name }}</a></td>--}}
{{--                <td>{{ $user->email }}</td>--}}
{{--                <td>--}}
{{--                    @if ($user->isWait())--}}
{{--                        <span class="badge badge-secondary">Waiting</span>--}}
{{--                    @endif--}}
{{--                    @if ($user->isActive())--}}
{{--                        <span class="badge badge-primary">Active</span>--}}
{{--                    @endif--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    @if ($user->isAdmin())--}}
{{--                        <span class="badge badge-danger">Admin</span>--}}
{{--                    @else--}}
{{--                        <span class="badge badge-secondary">User</span>--}}
{{--                    @endif--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}

{{--        </tbody>--}}
{{--    </table>--}}

{{--    {{ $users->links() }}--}}


{{--</x-app-layout>--}}

@extends('layouts.admin');

@section('content')

    <h1>This is index of user of admin</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
        <tbody>
            @if($users)
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><img height="50" src="{{ $user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}" alt=""></td>
                        <td><a href="{{ route('users.edit', $user->id) }}">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td>{{ $user->is_active == 1 ? 'Active' : 'No Active'}}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td>{{ $user->updated_at->diffForHumans() }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    {{--<table id="datatablehoang" class="datatable">--}}
        {{--<thead>--}}
        {{--<tr style="background-color: #990000; color: white;">--}}
            {{--<th style="text-align: center; vertical-align: middle;">Id</th>--}}
            {{--<th style="text-align: center; vertical-align: middle;">Name</th>--}}
            {{--<th style="text-align: center; vertical-align: middle;">Email</th>--}}
            {{--<th style="text-align: center; vertical-align: middle;">Created_at</th>--}}
            {{--<th style="text-align: center; vertical-align: middle;">Updated_at</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
            {{--@if($users)--}}
                {{--@foreach($users as $user)--}}

                    {{--<tr>--}}
                        {{--<th style="text-align: center; vertical-align: middle;">{{ $user->id }}</td>--}}
                        {{--<th style="text-align: center; vertical-align: middle;">{{ $user->name }}</td>--}}
                        {{--<th style="text-align: center; vertical-align: middle;">{{ $user->email }}</td>--}}
                        {{--<th style="text-align: center; vertical-align: middle;">{{ $user->created_at }}</td>--}}
                        {{--<th style="text-align: center; vertical-align: middle;">{{ $user->updated_at }}</td>--}}
                    {{--</tr>--}}

                {{--@endforeach--}}
            {{--@endif--}}
        {{--</tbody>--}}
        {{--<tfoot>--}}
        {{--<tr>--}}
            {{--<th style="text-align: center; vertical-align: middle;">Id</th>--}}
            {{--<th style="text-align: center; vertical-align: middle;">Name</th>--}}
            {{--<th style="text-align: center; vertical-align: middle;">Email</th>--}}
            {{--<th style="text-align: center; vertical-align: middle;">Created_at</th>--}}
            {{--<th style="text-align: center; vertical-align: middle;">Updated_at</th>--}}
        {{--</tr>--}}
        {{--</tfoot>--}}
    {{--</table>--}}


@endsection
{{--@section('scripts')--}}
    {{--<script type="text/javascript">--}}
        {{--$(function () {--}}
            {{--$('#datatablehoang').DataTable({--}}
                {{--select: true,--}}
{{--                responsive: true,--}}
{{--                autoWidth: false,--}}
{{--              processing: true,--}}
{{--               serverSide: true,--}}
                {{--ajax: '{{ url("/web/admin/users") }}',--}}
                {{--columns: [--}}
                    {{--{data: 'id', name: 'users.id'},--}}
                    {{--{data: 'name', name: 'users.name'},--}}
                    {{--{data: 'email', name: 'users.email'},--}}
                    {{--{data: 'created_at', name: 'users.created_at'},--}}
                    {{--{data: 'updated_at', name: 'users.updated_at'},--}}

                {{--]--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
{{--@endsection--}}
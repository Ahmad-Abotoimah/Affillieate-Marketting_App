
@extends('layouts.app')

@section('content')
    <h1 class='text-center'>Users</h1>
    <table class="table w-50 m-auto my-5">

    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">userName</th>
        <th scope="col">Email</th>
        <th scope="col">registered date</th>
        <th scope="col">Number of referred users</th>
        <th scope="col">image</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
    <tr>
        <th scope="row">{{$user->id}}</th>
        <th scope="row">{{$user->user_name}}</th>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        <td>{{count($user->referrals)}}</td>
        <td><img class="admin-image" src="{{asset('images/'.$user->user_image)}}" alt="llll"></td>
    </tr>
   @endforeach

    </tbody>

</table>
    {!! $users->appends(['sort' => 'id'])->links() !!}


{{--
   admins table
 --}}

    <h1 class='text-center my-5'>Admins</h1>
    <table class="table w-50 m-auto my-5">

        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">AdminName</th>
            <th scope="col">Email</th>
            <th scope="col">Creation date</th>
            <th scope="col">image</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($admins as $admin)
            <tr>
                <th scope="row">{{$admin->id}}</th>
                <th scope="row">{{$admin->user_name}}</th>
                <td>{{$admin->email}}</td>
                <td>{{$admin->created_at}}</td>
                <td><img src="{{$admin->user_image}}" alt="admin" class="admin-image"></td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection

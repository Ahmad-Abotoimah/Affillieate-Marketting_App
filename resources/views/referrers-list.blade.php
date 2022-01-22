{{--show referrals list--}}

@extends('layouts.app')

@section('content')

    @if(count($refferrels)>0)
        <h1 class='text-center'>Your Referrals</h1>
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

          @foreach ($refferrels as $user)
              <tr>
                 <th scope="row">{{$user->id}}</th>
                 <th scope="row">{{$user->user_name}}</th>
                 <td>{{$user->email}}</td>
                 <td>{{$user->created_at}}</td>
                 <td>{{count($user->referrals)}}</td>
                 <td><img class="admin-image" src="{{asset('images/'.$user->user_image)}}" alt="admin_image"></td>
              </tr>
          @endforeach
       </tbody>

        </table>
    @else
        <h1 class="text-center my-5" >You dont have any referrals</h1>
    @endif

@endsection

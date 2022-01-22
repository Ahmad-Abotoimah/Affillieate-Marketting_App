
@extends('layouts.app')

@section('content')
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
            {{--list shows some statistics--}}
          <h2 class="my-5 text-center">{{'Welcom ' .auth()->user()->user_name}} !</h2>

        <ul class="list-group mt-3 text-center w-50 m-auto">
            <li class="list-group-item">Username: {{ auth()->user()->user_name }}</li>
            <li class="list-group-item">Email: {{ auth()->user()->email }}</li>
            <li class="list-group-item">Referral link: {{ auth()->user()->referral_link }}</li>
            <li class="list-group-item">Referrer: {{ auth()->user()->referrer->name ?? 'Not Referrer' }}</li>
            <li class="list-group-item">You Have : {{ count(auth()->user()->referrals)  ?? '0' }} Referrals</li>
            <li class="list-group-item">Visitors count: {{(auth()->user()->views)  ?? '0'  }} Visitors</li>
            <li class="list-group-item"><a  class="btn btn-outline-secondary" href={{route('referrers')}} >Show Your statistics</a></li>
            <li class="list-group-item"><a  class="btn btn-outline-info" href={{route('referrers-list')}} >Show Your Referrers</a></li>
        </ul>
    </div>
@endsection

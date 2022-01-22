
@extends('layouts.app')

@section('content')
{{--    show the chart generated in HomeController--}}
       <div style="width:50%;" class="m-auto my-5">
           {!! $chartjs->render() !!}
       </div>
@endsection

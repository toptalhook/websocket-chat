@extends('layouts.app')

@section('content')
    <div class="container">
        <chat :user="{{auth()->user()}}"></chat>
    </div>
@endsection

@extends('layouts.app')



@section('content')
    <p>{{ auth()->user()->username }}</p>
@endsection
@extends('layout.app')
@section('title','Home')
@section('content')

@include('component.homebanner')    

@include('component.service')

@include('component.HomeCourse')
@include('component.HomeProject')
@include('component.HomeContact')
@include('component.Review')





@endsection
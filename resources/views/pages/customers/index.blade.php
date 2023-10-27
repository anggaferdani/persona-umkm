@extends('templates.pages')
@section('title', isset($title) ? $title : 'Customer')
@section('content')
@include('livewire.customers.customer')
@endsection
@extends('templates.pages')
@section('title', isset($title) ? $title : 'Customer')
@section('content')
@livewire('customers.customer')
@endsection
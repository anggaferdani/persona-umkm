@extends('templates.pages')
@section('title', isset($title) ? $title : 'Kuesioner')
@section('content')
@include('livewire.kuisioners.kuesioner')
@endsection
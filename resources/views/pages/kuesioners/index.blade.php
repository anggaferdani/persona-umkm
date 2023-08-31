@extends('templates.pages')
@section('title', isset($title) ? $title : 'Kuesioner')
@section('content')
@livewire('kuesioners.kuesioner')
@endsection
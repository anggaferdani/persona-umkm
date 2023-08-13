@extends('templates.pages')
@section('title', isset($title) ? $title : 'Project')
@section('content')
@livewire('projects.project')
@endsection
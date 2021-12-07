@extends('layouts.web')

@section('content')
<div class="text-center">
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">Blog</h1>
    <h2 class="text-xl text-gray-600">Temas de tecnologia</h2>
    <h3 class="text-lg text-gray-600">Python, PHP, JavaScript</h3>
    
</div>
<livewire:course-list>
@endsection
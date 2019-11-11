@extends('layouts.main')
@section('content')
  <h1>The students list</h1>
  <ul>
    
    @foreach ($students_list as $student)
        <li>{{$student}}</li>
    @endforeach
  </ul>
@endsection

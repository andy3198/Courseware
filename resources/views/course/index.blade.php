@extends('base')

@section('content')

<h1>
    Course
</h1>

<table class="table table-border table-striped table-sm">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Start</th>
            <th>End</th>
        </tr>
    </thead>

    <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{$course->name}}</td>
                <td>{{$course->description}}</td>
                <td>{{$course->start}}</td>
                <td>{{$course->end}}</td>
            </tr>

        @endforeach
    </tbody>
</table>

@stop
@extends('base')

@section('content')


<h1>
    Learner
</h1>

<table class="table table-border table-striped table-sm">
    <thead>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Level</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        @foreach($learners as $learn)
            <tr>
                <td>{{$learn->lname}}</td>
                <td>{{$learn->fname}}</td>
                <td>{{$learn->level}}</td>
                <td>{{$learn->status}}</td>
            </tr>

        @endforeach
    </tbody>
</table>

@stop
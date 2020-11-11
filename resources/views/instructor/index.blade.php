@extends('base')

@section('content')

    <h1>
        Instructor
    </h1>

<table class="table table-border table-striped table-sm">
    <thead>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Expertise</th>
            <th>Rating</th>
        </tr>
    </thead>

    <tbody>
        @foreach($instructors as $ins)
            <tr>
                <td>{{$ins->lname}}</td>
                <td>{{$ins->fname}}</td>
                <td>{{$ins->aoe}}</td>
                <td>{{$ins->rating}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop
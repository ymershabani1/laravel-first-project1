@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        table {
            width:100%;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
    </style>
</head>
@section('content')
<body>
<h2>Gym Members</h2>

<button type="button" onclick="window.location='{{ route("register.member") }}'">Add Member</button>
<table>
    <tr>
        <th>Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Birthdate</th>
        <th>Expire Date</th>
        <th>Actions</th>
    </tr>
    @for ($i = 0; $i < count($gmembers); $i++)
        <tr>
            <td>{{$gmembers[$i]->id}}</td>
            <td>{{$gmembers[$i]->first_name}}</td>
            <td>{{$gmembers[$i]->last_name}}</td>
            <td>{{$gmembers[$i]->email}}</td>
            <td>{{$gmembers[$i]->birthdate}}</td>
            <td>{{$gmembers[$i]->expiredate}}</td>
            <td>
                <button type="button" onclick="window.location='{{ route("delete.member",$gmembers[$i]->id) }}'">Delete</button>
                <button type="button" onclick="window.location='{{ route("editing.member",$gmembers[$i]->id) }}'">Edit</button>
            </td>
        </tr>
    @endfor
</table>
</body>
@endsection
</html>

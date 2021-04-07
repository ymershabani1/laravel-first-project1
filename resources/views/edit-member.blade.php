<html>
<head>
    <title>Edit Member</title>
</head>
<body>
<form method="POST"
      action="{{ route("edit.member",$gmember->id)}}">
    @csrf
    @method('GET')
    <label>First Name:</label><br>
    <input name="first_name" value="{{$gmember->first_name}}" type="text"><br>
    <label>Last Name:</label><br>
    <input name="last_name"value="{{$gmember->last_name}}" type="text"><br>
    <label>Birthdate:</label><br>
    <input name="birthdate" value="{{$gmember->birthdate}}" type="date"><br>
    <label>exprdate:</label><br>
    <input name="expiredate" value="{{$gmember->expiredate}}" type="date"><br>
    <input type="submit"/>
</form>
</body>
</html>

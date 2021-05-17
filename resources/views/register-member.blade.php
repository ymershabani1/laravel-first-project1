<html>
<head>
    <title>Register Member</title>
</head>

    <form method="post" action="{{route('create.new.member')}}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <label>First Name:</label><br>
        <input name="first_name" type="text"><br>
        <label>Last Name:</label><br>
        <input name="last_name" type="text"><br>
        <label>Email:</label><br>
        <input name="email" type="email"><br>
        <label>Birthdate:</label><br>
        <input name="birthdate" type="date"><br>
        <label>Expire Date:</label><br>
        <input name="expiredate" type="date"><br>
        <label>Profile Picture:</label><br>
        <input type="file" name="profile_picture" /><br><br>
        <input type="submit"/>
    </form>
    <button type="button" onclick="window.location='{{ route("show.members") }}'">Show Member</button></body>
</html>

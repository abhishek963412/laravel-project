<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>
    <h1>This is a form for students</h1>

    <form method="POST" action="{{ route('save') }}">
        @csrf

        Name: <input type="text" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit">
        <a href="{{url('/')}}"><button type="button">Go to Login Form</button></a>
        
</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/dist/js/bootstrap.bundle.min.js"></script>
    <title>Registered Employees List</title>
    <style>
        table{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: black;
            padding: 40px;
            margin-bottom: 300px;



        }
        
        </style>
</head>
<body  style="background-color: #adb5bd;">>
    <h1>check the total employee</h1>

    <table class= "table table-striped table-bordered table-hover" >
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>

        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
        </tr>

        @endforeach
    </table>
    <a href="{{url('/users')}}" class="btn btn-outline-primary"><button type="button">Go to the student databse</button></a>
    <a href="/dashboard" class="btn btn-outline-primary">🏠 Dashboard</a>
    <a href="/profile" class="btn btn-outline-primary" >👤 Edit Profile</a>
    
    <form method="POST" action="/logout" style="display: inline;">
        @csrf
        <button type="submit" style="background: none; border: none; color: #e74c3c; cursor: pointer; font-size: 16px; padding: 0;">
            🚪 Logout
        </button>
    </form>
</div>
</body>
</html>
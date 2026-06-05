<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>Student Form</title>
</head>
<div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
    <h2>Welcome back, {{ Auth::user()->name }}! 👋</h2>
    <p>You are managing the system using the email: <strong>{{ Auth::user()->email }}</strong></p>
    <small>Logged in since: {{ Auth::user()->updated_at->diffForHumans() }}</small>
</div>
<body>
 
 <h1>Users List of students</h1>


 <table class= "table table-striped table-bordered table-hover" >
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>

        <td>
            <a href="{{url('edit/'.$user->id)}}">
                <button>Edit</button>
            </a>

            <a href="/delete/{{ $user->id }}">
                <button >Delete</button>
            </a>
        </td>
    </tr>
    @endforeach
</table>

<a href="{{url('/form')}}"><button>Go to Login Form</button></a>
<a href="/edit/{{ $user->id }}">
    <button>Edit</button>
</a>
</body>
</html>
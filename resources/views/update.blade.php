<!DOCTYPE html>
<html>
<form action="/update/{{ $user->id }}" method="POST">
    @csrf

    <input type="text" name="name" value="{{ $user->name }}">
    <input type="text" name="email" value="{{ $user->email }}">

    <button type="submit">Update</button>
</form>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Update</h1>
    <form action="{{route('developers.update',$developer->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Id :</label>
        <input type="text" value="{{$developer->id}}" disabled><br>
        <label for="">Name :</label>
        <input type="text" name="name" value="{{$developer->name}}" ><br>
        <label for="">Email :</label>
        <input type="text" name="email" value="{{$developer->email}}" ><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('developers.store')}}" method="POST">
        @csrf
        <label for="">Name :</label>
        <input type="text" name="name" ><br>
        <label for="">Email :</label>
        <input type="text" name="email" ><br>
        <input type="submit" value="Create">
    </form>
</body>
</html>
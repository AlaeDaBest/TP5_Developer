<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Projects</h1>
    <form action="{{route('developers.create')}}">
        <input type="submit" value="Add">
    </form>
    <table border='1px'>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    @foreach ($developers as $developer)
        <tr>
            <td>{{$developer->name}}</td>
            <td>{{$developer->email}}</td>
            <td>
                <form action="{{route('developers.show',$developer->id)}}" method="GET">
                    <input type="submit" value="Show">
                </form>
                <form action="{{route('developers.edit',$developer->id)}}" method="GET">
                    <input type="submit" value="Edit">
                </form>
                <form action="{{route('developers.destroy',$developer->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
    @endForeach
    </table>
</body>
</html>
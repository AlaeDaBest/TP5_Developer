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
    <form action="{{route('projects.create')}}">
        <input type="submit" value="Add">
    </form>
    <table border='1px'>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    @foreach ($projects as $project)
        <tr>
            <td>{{$project->name}}</td>
            <td>{{$project->description}}</td>
            <td>{{$project->start_date}}</td>
            <td>{{$project->end_date}}</td>
            <td>{{$project->status}}</td>
            <td>
                <form action="{{route('projects.show',$project->id)}}" method="GET">
                    <input type="submit" value="Show">
                </form>
                <form action="{{route('projects.edit',$project->id)}}" method="GET">
                    <input type="submit" value="Edit">
                </form>
                <form action="{{route('projects.destroy',$project->id)}}" method="POST">
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
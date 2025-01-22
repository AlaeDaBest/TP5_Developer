<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Update Project</h1>
    <form action="{{route('projects.update',$project->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">ID :</label>
        <input name="" type="text" value="{{$project->id}}" disabled><br>
        <label for="">Name :</label>
        <input name="name" type="text" value="{{$project->name}}" ><br>
        <label for="">Description :</label>
        <textarea name="description" id="" cols="30" rows="10"> {{$project->description}}</textarea><br>
        <label for="">Start Date :</label>
        <input type="date" name="start_date" value="{{$project->start_date}}" ><br>
        <label for="">End Date :</label>
        <input type="date" name="end_date" value="{{$project->end_date}}" ><br>
        <label for="">Status :</label>
        <select value="{{$project->status}}" name="status" id="">
            <option value="Planning">Planning</option>
            <option value="Completed">Completed</option>
            <option value="In Progress">In Progress</option>
        </select><br>
        <input type="submit" value="Update" >
    </form>
</body>
</html>
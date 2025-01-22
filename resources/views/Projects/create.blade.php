<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Project</h1>
    <form action="{{route('projects.store')}}" method="POST">
        @csrf
        <label for="">Name :</label>
        <input name="name" type="text" ><br>
        <label for="">Description :</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea><br>
        <label for="">Start Date :</label>
        <input type="date" name="start_date"><br>
        <label for="">End Date :</label>
        <input type="date" name="end_date"  ><br>
        <label for="">Status :</label>
        <select name="status" id="">
            <option value="Planning">Planning</option>
            <option value="Completed">Completed</option>
            <option value="In Progress">In Progress</option>
        </select><br>
        <input type="submit" value="Create" >
    </form>
</body>
</html>
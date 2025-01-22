<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h3>{{$project->name}}</h3>
        <p>Description: {{$project->description}}</p>
        <p>Start Date:{{$project->start_date}}</p>
        <p>End Date:{{$project->end_date}}</p>
        <p>Status:{{$project->status}}</p>
    </div>
</body>
</html>
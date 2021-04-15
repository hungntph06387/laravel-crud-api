<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Detail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center;">Post Detail</h1>
    <a href="/posts" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back</a>
    <div>
        <strong>{{$post->id}}</strong>
        <strong>{{$post->slug}}</strong>
        <strong>{{$post->title}}</strong>
        <strong>{{$post->content}}</strong>
        <a href="{{$post->id}}/edit">Edit Post</a>
        <td><a style="color: red;" href="/delete/{{$post->id}}">Delete</a></td>
        
    </div>
   
</body>
</html>
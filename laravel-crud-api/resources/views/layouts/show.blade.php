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
    <div class="container">
    <h1 style="text-align: center;">Post Detail</h1>
    <a href="/posts" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back</a>
    <!-- <div>
        <strong>{{$post->id}}</strong>
        <strong>{{$post->slug}}</strong>
        <strong>{{$post->title}}</strong>
        <strong>{{$post->content}}</strong>
        <a href="{{$post->id}}/edit">Edit Post</a>
        <td><a style="color: red;" href="/delete/{{$post->id}}">Delete</a></td>
        
    </div> -->

    <table class="table table-striped">
        <thead>
           <tr>
           <th scope="col">#</th>
           <th scope="col">Slug</th>
           <th scope="col">Title</th>
           <th scope="col">Content</th>
           <th scope="col" style="color: red;">Action</th>
           </tr>
        </thead>
    </table>
    <tbody>
    <tr>
             <th scope="row">{{$post->id}}</th>
             <td><a href="post/{{$post->id}}">{{$post->slug}}</a></td>      
             <td>{{$post->title}}</td>
             <td>{{$post->content}}</td>
             <td>
                  <a href="{{$post->id}}/edit">Edit Post</a>
             <td>
                  <a style="color: red;" href="/delete/{{$post->id}}">Delete</a></td>
             </td>
    </tr>
    
    </tbody>
    </div>
   
</body>
</html>
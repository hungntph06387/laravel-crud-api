<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Post</title>
    <link rel="stylesheet" href="/resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1 style="text-align: center;">List Post</h1>
    <a href="/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">New Post</a>
    <table class="table">
        <thead>
           <tr>
           <th scope="col">#</th>
           <th scope="col">Slug</th>
           <th scope="col">Title</th>
           <th scope="col">Content</th>
           
           </tr>
        </thead>
    
    <tbody>
    @foreach($post as $post)
       <tr>
             <td scope="row">{{$post->id}}</td>
             <td><a href="post/{{$post->id}}">{{$post->slug}}</a></td>      
             <td>{{$post->title}}</td>
             <td>{{$post->content}}</td>
             
       </tr>
    @endforeach
    </tbody>
    </table>
    </div>
</body>
</html>
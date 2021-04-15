<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center;">List Post</h1>
    <a href="/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">New Post</a>
    <table class="table table-striped">
        <thead>
           <tr>
           <th scope="col">#</th>
           <th scope="col">Slug</th>
           <th scope="col">Title</th>
           <th scope="col">Content</th>
           <th scope="col">Action</th>
           </tr>
        </thead>
    </table>
    <tbody>
    @foreach($post as $post)
       <tr>
             <th scope="row">{{$post->id}}</th>
             <td><a href="post/{{$post->id}}">{{$post->slug}}</a></td>      
             <td>{{$post->title}}</td>
             <td>{{$post->content}}</td>
             
       </tr>
    @endforeach
    </tbody>
</body>
</html>
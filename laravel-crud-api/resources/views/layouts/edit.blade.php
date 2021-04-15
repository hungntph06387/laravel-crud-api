<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center;">Update Post</h1>
    <div class="container">
    <form method="post" action="/post/{{$post->id}}">
    @csrf
    @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">SLug</label>
    <input type="text" class="form-control" name="slug" placeholder="Enter Slug" value="{{$post->slug}}"> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter title" value="{{$post->title}}"> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Content</label>
    <input type="text" class="form-control" name="content" placeholder="Enter content" value="{{$post->content}}"> 
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
</body>
</html>
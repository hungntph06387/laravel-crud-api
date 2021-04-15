<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center;">Create Post</h1>
    <div class="container">
    <form method="post" action="create">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">SLug</label>
    <input type="text" class="form-control" name="slug" placeholder="Enter Slug"> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter title"> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Content</label>
    <input type="text" class="form-control" name="content" placeholder="Enter content"> 
  </div>
  
  <button type="submit" class="btn btn-primary">Save</button>
</form>
    </div>
</body>
</html>
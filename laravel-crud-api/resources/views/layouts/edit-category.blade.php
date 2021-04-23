<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center;">Update Product</h1>
    <div class="container">
    <form method="post" action="/product/{{$product->id}}">
    @csrf
    @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Slug" value="{{$product->name}}"> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" class="form-control" name="price" placeholder="Enter title" value="{{$product->price}}"> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" name="description" placeholder="Enter content" value="{{$product->description}}"> 
  </div>
    <select class="form-control" name="categories_id">
        @foreach($category as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
  
  
  <button type="submit" class="btn btn-primary">Update</button>
  <a href="/product/{{$product->id}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back</a>
</form>
    </div>
</body>
</html>
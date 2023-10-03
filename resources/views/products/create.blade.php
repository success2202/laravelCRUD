<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X=UA-compatible" content="ie=edge">
        <title>document</title>
    </head>
    <body>
        <h1>Create a Product</h1>
<form  method="post" action="{{route('product.store')}}">
  
   @csrf;
    @method('post')
    
    <div>
        <label for="name">Name</label>
    <input type="text" name="username" placeholder="Username">
    </div> <br>
    <div>
        <label for="qty">Quantity</label>
    <input type="text" name="qty" placeholder="Qty">
    </div> <br>
    <div>
        <label for="price">Price</label>
    <input type="text" name="price" placeholder="Price">
    </div> <br>
    <div>
        <label for="desc">Description</label>
    <input type="text" name="desc" placeholder="Description">
    </div> <br>
    <input type="submit" name="submit" value="save new product">

</form>



</body>

</html>
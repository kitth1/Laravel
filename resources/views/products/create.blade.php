<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>            
            @endforeach
        </ul>

        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="name" name="name" placeholder="Name" />
        </div>
        <div>
            <label>Quantity</label>
            <input type="name" name="quantity" placeholder="Quantity" />
        </div>
        <div>
            <label>Price</label>
            <input type="name" name="price" placeholder="Price" />
        </div>
        <div>
            <label>Description</label>
            <input type="name" name="description" placeholder="Description" />
        </div>
        <div>
            <input type="submit" value="Save a New Product" />
        </div>
    </form>
</body>
</html>
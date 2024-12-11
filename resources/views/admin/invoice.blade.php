<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <center>
        <h3>Customer Name: {{$data->name}}</h3>
        <h3>Customer Address: {{$data->rec_address}}</h3>
        <h3>Customer Phone: {{$data->phone}}</h3>
        <h3>Product Title: {{$data->product->title}}</h3>
        <h3>Product Price: {{$data->product->price}}</h3>
        <img height="250px" width="300px" src="/products/{{$data->product->price}}" alt="">
    </center>
</body>
</html>
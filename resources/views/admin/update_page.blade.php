<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')     
    <style type="text/css">
    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;

    }
    label
    {
        display: inline-block;
        width: 200px;
        padding: 20px;
    }

    input[type='text']
    {
        width: 300px;
        height: 60px;
    }
    textarea
    {
        width: 450px;
        height: 100px;
    }


    </style> 
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2>Update Product</h2>
            <div class="div_deg">
                <form action="{{url('edit_product',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input_deg">
                        <label>Product Title</label>
                        <input type="text" name="title" value="{{$data->title}}">
                    </div>
                    <div class="input_deg">
                        <label>Description</label>
                        <textarea name="description">{{$data->description}}</textarea>
                    </div>
                    <div class="input_deg">
                        <label>Price</label>
                        <input type="text" name="price" value="{{$data->price}}">
                    </div>
                    <div class="input_deg">
                        <label>Quantity</label>
                        <input type="number" name="quantity" value="{{$data->quantity}}">
                    </div>
                    <div class="input_deg">
                        <label>Product Category</label>
                        <select required name="category" id="">
                            <option value="{{$data->category}}">{{$data->category}}</option>
                            
                            @foreach($category as $category)
                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input_deg">
                        <label>Current Image</label>
                        <img width="150px" src="/products/{{$data->image}}">
                    </div>
                    <div>
                        <label for="">New Image</label>
                        <input type="file" name="image">
                    </div>
                    <div class="input_deg">
                        
                        <input class="btn btn-success" type="submit" value="Update Product">
                    </div>
                </form>
            </div>
          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>
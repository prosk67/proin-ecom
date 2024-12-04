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
        margin: 60px;


    }
    .table_deg
    {
        border: 2px solid green;
        width: 100%;

    }

    th
    {
        background-color: skyblue;
        color: white;
        font-size: 18px;
        font-weight: bold;
        padding: 15px;
    }

    td
    {
        border: 1px solid skyblue;
        text-align: center;
        color: white;
    }

    input[type='search']
    {
      width: 500px;
      height: 60px;
      margin-left: 50px;
    }
    </style>      
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <form action="{{url('product_search')}}" method="GET">
              <input type="search" name="search">
              <input type="submit" class="btn btn-secondary" value="Search">
            </form>
            <div class="div_deg">
                <table class="table_deg">
                    <tr>
                        <th>Product Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($product as $products )
                        
                    <tr>
                        <td>{{$products->title }}</td>
                        <td>{!!Str::limit($products->description,50)!!}</td>
                        <td>{{$products->category }}</td>
                        <td>{{$products->price }}</td>
                        <td>{{$products->quantity }}</td>
                        <td>
                            <img height="120px" width="120px" src="products/{{$products->image }}" alt="">
                        </td>
                        <td>
                          <a class="btn btn-success" href="{{url('update_product',$products->id)}}">Update</a>
                        </td>
                        <td>
                          <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_product',$products->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>

                
            </div>
            <div class="div_deg">

              {{$product->onEachSide(1)->links()}}
            </div>
          </div>
      </div>
    </div>
    @include('admin.js')

    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
  </body>
</html>
<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')   
    
    <style type="text/css">
        table
        {
            border: 2px solid black;
            text-align: center;
        }

        th
        {
            background-color: black;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }
        .table_center
        {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        td
        {
            color: white;
            padding: 10px;
            border: 1px solid black;
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <div class="table_center">

                <table>
                    <tr>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Change Status</th>
                    </tr>
                    @foreach ($data as $data )
                        
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->rec_address}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->product->title}}</td>
                        <td>{{$data->product->price}}</td>
                        <td><img width="150px" src="{{$data->product->image}}" alt=""></td>
                        
                        <td>
                            @if ($data->status == 'On The Way')
                            <span style="color:lightcoral">{{$data->status}}</span>
                            @elseif ($data->status == 'Delivered')
                            <span style="color:lightgreen">{{$data->status}}</span>
                            @else
                            <span style="color:aqua">{{$data->status}}</span>    
                            @endif
                            
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('on_the_way',$data->id)}}">On The Way</a>
                            <a class="btn btn-success" href="{{url('delivered',$data->id)}}">Delivered</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>
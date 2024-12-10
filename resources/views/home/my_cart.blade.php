<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style type="text/css">
    .div_deg
    {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 60px;
    }

    table
    {
      border: 1px solid black;
      text-align: center;
      width: 800px;
    }
    th
    {
      border: 1px solid black;
      text-align: center;
      color: white;
      font: 20px;
      font-weight: bold;
      background-color: black;
    }
    td
    {
      border: 1px solid darkgray;
    }

    .cart_value
    {
      text-align: center;
      margin-bottom: 70px;
      padding: 18px;
    }

    .order_deg
    {
      padding-right: 150px;
      margin-top: 0px;
    }
    label
    {
      display: inline-block;
      width: 150px;
    }
    .div_gap
    {
      padding: 20px;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    @include('home.header')

  </div>


  <?php $value=0; ?>

  <div class="div_deg">
    <div class="order_deg">
      <form action="{{url('confirm_order')}}" method="POST">
        @csrf
        <div class="div_gap">
          <label for="">Receiver Name</label>
          <input type="text" name="name" value="{{Auth::user()->name}}">
        </div>
        <div class="div_gap">
          <label for="">Receiver Address</label>
          <textarea name="address">{{Auth::user()->address}}</textarea>
        </div>
        <div class="div_gap">
          <label for="">Receiver Phone</label>
          <input type="text" name="phone" value="{{Auth::user()->phone}}">
        </div>
        <div class="div_gap">
          
          <input class="btn btn-primary" type="submit" value="Place Order">
        </div>
      </form>
    </div>
    
    
    
    <table>
      <tr>
        <th>Product Title</th>
        <th>Price</th>
        <th>Image</th>
        <th>Remove</th>
      </tr>
      @foreach ($cart as $cart)
      <tr>
        <td>{{$cart->product->title}}</td>
        <td>{{$cart->product->price}}</td>
        <td><img width="150px" src="/products/{{$cart->product->image}}" alt=""></td>
        <td>
          <a class="btn btn-danger" href="{{url('delete_cart',$cart->id)}}">Remove</a>
        </td>
      </tr>
      <?php $value= $value + (int)$cart->product->price; ?>
      @endforeach
    </table>
  </div>

  <div class="cart_value">
    <h3>Total price: {{$value}}BDT</h3>
  </div>


      
  @include('home.footer')

</body>

</html>
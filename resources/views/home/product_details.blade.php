<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<body>
    <div class="hero_area">
        @include('home.header')
    </div>


    <section class="shop_section layout_padding">
        <div class="container">
          <div class="heading_container heading_center">
            <h2>
              Latest Products
            </h2>
          </div>
          <div class="row">
           
              
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box">
                
                <div class="img-box">
                  <img src="/products/{{$data->image}}" alt="">
                </div>
                <div class="detail-box">
                  <h6>{{$data->title}}</h6>
                  <h6>
                    Price
                    <span>
                      {{$data->price}}
                    </span>
                  </h6>
                </div>
                
                
              </div>
          
            </div>
            
          </div>
       
       
            
          
        </div>
      </section>
    
      

  @include('home.footer')

</body>

</html>
<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<body>
  <div class="hero_area">
    @include('home.header')
    @include('home.slider')
    {{ json_encode($pathao["data"]["data"][0]["city_id"])}}
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  @include('home.product')

  @include('home.contact')
  <!-- info section -->

  @include('home.footer')

</body>

</html>
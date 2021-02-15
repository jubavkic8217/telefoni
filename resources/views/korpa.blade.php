@extends('master')

@section('title','Korpa')

<style>
    @import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
*, *:before, *:after {
  box-sizing: border-box;
}

body {
  font: 14px/22px "Lato", Arial, sans-serif;
  background: #6394F8;
}

.lighter-text {
  color: #ABB0BE;
}

.main-color-text {
  color: #6394F8;
}

nav {
  padding: 20px 0 40px 0;
  background: #F8F8F8;
  font-size: 16px;
}
nav .navbar-left {
  float: left;
}
nav .navbar-right {
  float: right;
}
nav ul li {
  display: inline;
  padding-left: 20px;
}
nav ul li a {
  color: #777777;
  text-decoration: none;
}
nav ul li a:hover {
  color: black;
}

.container {
  margin: auto;
  width: 80%;
}

.badge {
  background-color: #6394F8;
  border-radius: 10px;
  color: white;
  display: inline-block;
  font-size: 12px;
  line-height: 1;
  padding: 3px 7px;
  text-align: center;
  vertical-align: middle;
  white-space: nowrap;
}

.shopping-cart {
  margin: 20px 0;
  float: right;
  background: white;
  width: 320px;
  position: relative;
  border-radius: 3px;
  padding: 20px;
}
.shopping-cart .shopping-cart-header {
  border-bottom: 1px solid #E8E8E8;
  padding-bottom: 15px;
}
.shopping-cart .shopping-cart-header .shopping-cart-total {
  float: right;
}
.shopping-cart .shopping-cart-items {
  padding-top: 20px;
}
.shopping-cart .shopping-cart-items li {
  margin-bottom: 18px;
}
.shopping-cart .shopping-cart-items img {
  float: left;
  margin-right: 12px;
}
.shopping-cart .shopping-cart-items .item-name {
  display: block;
  padding-top: 10px;
  font-size: 16px;
}
.shopping-cart .shopping-cart-items .item-price {
  color: #6394F8;
  margin-right: 8px;
}
.shopping-cart .shopping-cart-items .item-quantity {
  color: #ABB0BE;
}

.shopping-cart:after {
  bottom: 100%;
  left: 89%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-bottom-color: white;
  border-width: 8px;
  margin-left: -8px;
}

.cart-icon {
  color: #515783;
  font-size: 24px;
  margin-right: 7px;
  float: left;
}

.button {
  background: #6394F8;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  display: block;
  border-radius: 3px;
  font-size: 16px;
  margin: 25px 0 15px 0;
}
.button:hover {
  background: #729ef9;
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>


@section('content')

    <div class="container">

      <div class="container">
        <div class="shopping-cart">
          <div class="shopping-cart-header">
            <i class="fa fa-shopping-cart cart-icon"></i>

            <div class="shopping-cart-total">
            </div>
          </div>

          <ul class="shopping-cart-items">
          @foreach($korpa as $telefon)
            <li class="clearfix" style="list-style: none;">
              <img style="height: 60px; width: 60px;" src="{{$telefon['slika']}}" alt="item1" />
              <span class="item-name">{{$telefon['model']}}</span>
              <span class="item-price">{{$telefon['cena']}} RSD</span>
            </li>
            @endforeach
          </ul>

          <form action="/kupi" method="post">
            {{ csrf_field() }}
            <input style="padding: 3px 5px; margin: 5px 0px;" type="text" name="ime" placeholder="ime">
            <input style="padding: 3px 5px; margin: 5px 0px;" type="text" name="prezime" placeholder="prezime">
            <input style="padding: 3px 5px; margin: 5px 0px;" type="text" name="adresa" placeholder="adresa">
            <input style="padding: 3px 5px; margin: 5px 0px;" type="text" name="broj_telefona" placeholder="broj_telefona">
            <button style="border: none;" type="submit" class="button">Checkout</button>
        </form>

        <button style="background: #f0ad4e; border: none;" class="button"><a style="text-decoration: none; color: white; border: none;" href="/">Continue Shopping</a></button>
        </div>
      </div>
    </div>



@endsection

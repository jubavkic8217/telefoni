@extends('master')

@section('title','Telefon')

<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto:400,500,700");
* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: "Roboto", sans-serif;
}
a {
  text-decoration: none;
}
.product-card {
  width: 380px;
  position: relative;
  box-shadow: 0 2px 7px #dfdfdf;
  margin: 50px auto;
  background: #fafafa;
}

.badge {
  position: absolute;
  left: 0;
  top: 20px;
  text-transform: uppercase;
  font-size: 13px;
  font-weight: 700;
  background: red;
  color: #fff;
  padding: 3px 10px;
}

.product-tumb {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 300px;
  padding: 50px;
  background: #f0f0f0;
}

.product-tumb img {
  max-width: 100%;
  max-height: 100%;
}

.product-details {
  padding: 30px;
}

.product-catagory {
  display: block;
  font-size: 12px;
  font-weight: 700;
  text-transform: uppercase;
  color: #ccc;
  margin-bottom: 18px;
}

.product-details h4 a {
  font-weight: 500;
  display: block;
  margin-bottom: 18px;
  text-transform: uppercase;
  color: #363636;
  text-decoration: none;
  transition: 0.3s;
}

.product-details h4 a:hover {
  color: #fbb72c;
}

.product-details p {
  font-size: 15px;
  line-height: 22px;
  margin-bottom: 18px;
  color: #999;
}

.product-bottom-details {
  overflow: hidden;
  border-top: 1px solid #eee;
  padding-top: 20px;
}

.product-bottom-details div {
  float: left;
  width: 50%;
}

.product-price {
  font-size: 18px;
  color: #fbb72c;
  font-weight: 600;
}

.product-price small {
  font-size: 80%;
  font-weight: 400;
  text-decoration: line-through;
  display: inline-block;
  margin-right: 5px;
}

.product-links {
  text-align: right;
}

.product-links a {
  display: inline-block;
  margin-left: 5px;
  color: #e1e1e1;
  transition: 0.3s;
  font-size: 17px;
}

.product-links a:hover {
  color: #fbb72c;
}

</style>

@section('content')


        <div class="product-card">

		<div class="product-tumb">
			<img src="{{$telefon->slika}}" alt="">
		</div>
		<div class="product-details">
			<span class="product-catagory">{{$telefon->memorija}}</span>
			<h4><a href="">{{$telefon->model}}</a></h4>
			<p>{{$telefon->ram}}, {{$telefon->kamera}}mPx, {{$telefon->baterija}}mAh </p>
			<div class="product-bottom-details">
				<div class="product-price">{{$telefon->cena}} RSD</div>
				<div class="product-links">
                    <form action="/dodaj" method="post">
                        {{ csrf_field() }}
                    <input style="display:none;" type="text" name="id" value="{{$telefon->id}}">
                        <button style="border: none;" type="submit"><a href=""><i style="color: orange; background: white;" class="fa fa-shopping-cart"></i></a></button>
            </form>
				</div>
			</div>
		</div>
	</div>




@endsection

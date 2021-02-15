@extends('master')

@section('title','Prodavnica telefona')

<style>
    body {
  box-sizing: border-box;
  font-family: "Open Sans", sans-serif;
  background: #f8f8f8;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
}
body * {
  box-sizing: inherit;
}

.wrapper {
  width: 40em;
  margin: 4em auto;
  background: #fff;
  padding: 4em;
  border-radius: 8px;
  border: 1px solid #f5f5f5;
}
.wrapper > :first-child {
  margin-top: 0;
}
.wrapper > :last-child {
  margin-bottom: 0;
}

.desc {
  margin: 4em auto;
  font-size: 1.2em;
}

.todo {
  background: #f9f9f9;
  padding: 1em;
  border-radius: 4px;
  color: #ccc;
  font-style: italic;
  font-weight: lighter;
  font-size: 0.9em;
}
.todo ul {
  margin: 0.4em 0;
  padding: 0 1em;
}
.todo ul li {
  list-style-position: inside;
}

h1 {
  margin: 0;
}

footer {
  margin: 4em auto;
  text-align: center;
  font-size: 0.9em;
}

a {
  text-decoration: none;
  color: #2196F3;
}
a:hover {
  text-decoration: underline;
}

.emoticon-face {
  background: #FFEB3B;
  border-radius: 100%;
  width: 1.7em;
  height: 1.7em;
  transform: rotate(90deg);
  display: inline-block;
  vertical-align: middle;
  line-height: 1;
  margin: -0.4em 0.2em 0;
  text-align: center;
  border: 1px solid #FDD835;
  padding-left: 0.1em;
  -webkit-font-smoothing: antialiased;
}
.emoticon-face--no-rotation {
  transform: rotate(0deg);
}

code {
  padding: 0.2em 0.3em;
  background: #f5f5f5;
  margin: 0 0.2em;
  border-radius: 4px;
  font-size: 0.95em;
  font-family: "Source Code Pro";
}

.tac {
  text-align: center;
}

.wrapper {
  width: 68em;
}

* {
  box-sizing: border-box;
}

body {
  color: #777;
  font-family: "Open Sans", Arial, sans-serif;
}

.product-grid {
  width: 60em;
  margin: 2rem auto;
}
.product-grid.product-grid--flexbox .product-grid__wrapper {
  display: flex;
  flex-wrap: wrap;
}
.product-grid.product-grid--flexbox .product-grid__title {
  height: auto;
}
.product-grid.product-grid--flexbox .product-grid__title:after {
  display: none;
}
.product-grid__wrapper {
  margin-left: -1rem;
  margin-right: -1rem;
}
.product-grid__product-wrapper {
  padding: 1rem;
  float: left;
  width: 33.33333%;
}
.product-grid__product {
  padding: 1rem;
  position: relative;
  cursor: pointer;
  background: #fff;
  border-radius: 4px;
}

.product-grid__img-wrapper {
  width: 100%;
  text-align: center;
  padding-top: 1rem;
  padding-bottom: 1rem;
  height: 150px;
}
.product-grid__img {
  max-width: 100%;
  height: auto;
  max-height: 100%;
}
.product-grid__title {
  margin-top: 0.875rem;
  display: block;
  font-size: 1.125em;
  color: #222;
  height: 3em;
  overflow: hidden;
  position: relative;
}
.product-grid__title:after {
  content: "";
  display: block;
  position: absolute;
  bottom: 0;
  right: 0;
  width: 2.4em;
  height: 1.5em;
  background: linear-gradient(to right, rgba(255, 255, 255, 0), white 50%);
}
.product-grid__price {
  color: #E91E63;
  font-weight: bold;
  letter-spacing: 0.4px;
}
.product-grid__extend-wrapper {
  position: relative;
}
.product-grid__extend {
  display: none;
  position: absolute;
  padding: 0 1rem 1rem 1rem;
  margin: 0.4375rem -1rem 0;
  box-shadow: 0px 0px 0px 1px #eee;
  background: #fff;
  border-radius: 0 0 4px 4px;
}
.product-grid__extend:before {
  content: "";
  height: 0.875rem;
  width: 100%;
  position: absolute;
  top: -0.4375rem;
  left: 0;
  background: #fff;
}
.product-grid__description {
  font-size: 0.875em;
  margin-top: 0.4375rem;
  margin-bottom: 0;
}
.product-grid__btn {
  display: inline-block;
  font-size: 0.875em;
  color: #777;
  background: #eee;
  padding: 0.5em 0.625em;
  margin-top: 0.875rem;
  margin-right: 0.625rem;
  cursor: pointer;
  border-radius: 4px;
}
.product-grid__btn i.fa {
  margin-right: 0.3125rem;
}
.product-grid__add-to-cart {
  color: #fff;
  background: #E91E63;
}
.product-grid__add-to-cart:hover {
  background: #ee4c83;
}
.product-grid__view {
  color: #777;
  background: #eee;
}
.product-grid__view:hover {
  background: white;
}


h1 {
  margin: 50px 0;
  font-size: 50px;
  font-weight: 100;
  text-align: center;
  font-family: "Open Sans";
}

body {
    background-color: white;
}

ul {
  width: 620px;
  margin: 0 auto;
}
ul li {
  float: left;
  list-style: none;
  margin-right: 10px;
  position: relative;
}
ul li a {
  font: 700 15px Open Sans;
  text-transform: uppercase;
  position: relative;
  color: #333333;
  text-decoration: none;
  border: 3px solid #000000;
  letter-spacing: 1px;
  padding: 10px 15px 10px 25px;
  display: block;
  width: 150px;
  z-index: 5000;
}
ul li a i {
  font-size: 12px !important;
  position: absolute;
  right: 10px;
  top: 14px;
}
ul li .drop-down {
  position: absolute;
  padding: 0;
  display: none;
  margin: 0;
  left: 0;
  z-index: 0;
}
ul li .drop-down li {
  position: relative;
  float: none;
}
ul li .drop-down li a {
  border-top: none;
  width: 150px;
}
ul li .drop-down li:nth-of-type(1) a {
  border-top: none;
}

.accent {
  top: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background: #000;
  position: absolute;
  transition: 0.3s ease;
}

.animate {
  width: 100%;
  transition: 0.3s ease;
}

li:hover {
    transform: scale(1.1);
}
</style>

@section('content')
    <h1>Prodavnica telefona</h1>


    <ul>
    @foreach($kategorije as $kategorija)
        <li><a style="text-decoration: none;" href="{{$kategorija->id}}" class="item">{{$kategorija->naziv}}</a>
          <span class="accent"></span>
        </li>
        @endforeach
      </ul>


<div class="wrapper" style="border: none;">

<div class="content" style="background: #e3e4e4;">

<div class="product-grid product-grid--flexbox">
    <div class="product-grid__wrapper">
    @foreach($kategorije as $kategorija)
    @foreach($kategorija->telefoni as $telefon)
        <div class="product-grid__product-wrapper">
            <div class="product-grid__product" style="margin-left: 20px;">
                <div class="product-grid__img-wrapper">
                    <img src="{{$telefon->slika}}" alt="Img" class="product-grid__img" />
                </div>
                <span class="product-grid__title"><a style="text-decoration: none;" href="{{$kategorija->id}}/{{$telefon->id}}">{{$telefon->model}}</a></span>
                <span class="product-grid__title">{{$telefon->memorija}}</span>
                <span class="product-grid__price">cena: {{$telefon->cena}}</span>
                <div class="product-grid__extend-wrapper">
                    <div class="product-grid__extend">
                        <span style="visibility: hidden;" class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endforeach
    </div>
</div>
</div>
</div>


@endsection

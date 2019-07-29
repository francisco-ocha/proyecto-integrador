@extends('plantilla')
  <link rel="stylesheet" href=  "{{asset('css/index.css')}}"/>
@section('principal')
  <div class="container detail">
    <div class="row justify-content-center">
        <div class="product part-three">
          <div class="card">
          <h1>Detalle del producto</h1>
          <section class="product">

            <article class="producDetail">
              <img class="carrito" src="..\img\icon\carro.png" alt="carrito">
              <img src="/storage/products/{{$product->featured_img}}" alt="">
              <h3>{{$product->name}}</h3>
              <h5>{{$product->description}}</h5>
              <h4>{{$product->price}}</h4>
              {{-- <p><a href="#">Comprar</a></p> --}}
              <form class="addcart" action="/addtocart" method="post">
                @csrf
                <div class="add">
                  <input type="number" name="quantity" value="1" placeholder="Cantidad">
                  <input type="hidden" name="id" value="{{$product->id}}">
                </div>
                <div class="submit">
                  <button type="submit">Agregar al carrito</button>

                </div>
              </form>
            </article>
          </section>
          <div class="actionButtons">
          <form class="editgift" action="/editgift/{{$product->id}}" method="get">
            @csrf
            <input type="submit" name="" value="Editar">
            </form>

              <form class="delategift" action="/deletegift/{{$product->id}}" method="get">
                <input type="submit" name="" value="Borrar Regalo">
                @csrf
            </form>
            </div>
            </div>
                </div>
              </div>
            </div>

@endsection

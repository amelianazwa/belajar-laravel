<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    {{-- navbar --}}

    
    {{-- /navbar --}}
@include('layouts.navbar')
    {{-- content --}}
    
    
    {{-- /content --}}
    <div class="section">
        <div class="container">
    {{-- row 1 --}}
    <div class="row mt-5">
    <center><h1>List  Artikel</h1></center>
    </div>
    {{-- row 2 --}}
    <div class="row mt-5">
    <div class="col-4 mt-5">
    <div class="card" style="width: 18rem;">
        <img src="https://image.goxip.com/mpOHDiLwCwU8NUVPXnmqP6HavCQ=/fit-in/500x500/filters:format(jpg):quality(80):fill(white)/https:%2F%2Fcdn-images.farfetch-contents.com%2F14%2F08%2F89%2F05%2F14088905_18503305_1000.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$merek->nama_merek}}</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi repellat cupiditate similique consequatur reiciendis expedita ut? Libero corporis autem minus odit nam dolore consectetur harum at architecto. Eaque, numquam suscipit!</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    </div>
      </div>
    </div>
    </div>
    {{-- footer --}}
    @include('layouts.footer')
{{-- /footer --}}

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
  </body>
</html>
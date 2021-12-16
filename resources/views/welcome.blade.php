<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>


<body >
    <!-- Image and text -->
<nav class="navbar navbar-dark bg-light">
    <a class="navbar-brand" href="#">
      <img src="{{asset('images/cheems.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
      LAS NENIS DE CHEMA
    </a>
  </nav>

<h1 class="mb-4 justify-content-center" style="text-align: center; color: white;">NENIS</h1>

 <div class="container w-100 justify-content-center align -items-center  mt-4" >
   <div class="row justify-content-center align-items-center content">
      

        <div class="card card-neni col-sm mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4 contPicture">
                <img src="{{asset('images/ricardo.jpg')}}" class="img-fluid picNeni rounded-end" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                 
              </div>
            </div>
          </div>
          

          


       </div>
   </div>
 </div>





    <script src="{{asset('js/consume_api.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
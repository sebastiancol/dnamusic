<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SISTEMA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!--datatables with jstable 
    <link rel="stylesheet" type="text/css" href="library/jstable.css" />
    <script src="library/jstable.min.js" type="text/javascript"></script>-->

    @vite([
        'resources/css/app.css',
        'resources/css/mystyle.css',
        'resources/js/index.js',
       ])
</head>
<body>
   
    <div class="container">

       
        @yield('task')
    
        
        
    </div>

    <div class="card-footer col-md-12">
        <p><strong>Development by Sebastian Moreno Castañeda</strong></p>
    </div>
    
</body>
</html>

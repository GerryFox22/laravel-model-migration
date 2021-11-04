<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Home</title>
</head>
<body>

    <div class="container">
    <h1 class="text-center p-5">Viaggi di Natale</h1>
        <div class="row">
            @foreach ($viaggi as $viaggio)
                <div class="col-4 pb-5">
                    <h5 class="pb-4"> {{$viaggio->titolo_viaggio}} </h5>
                    <p><span class="text-danger">Prezzo :</span> {{$viaggio->prezzo}} </p>
                    <p><span class="text-danger">Durata: </span>{{$viaggio->durata}}</p>
                    <p><span class="text-danger">Partenze: </span>{{$viaggio->data_di_partenza}}</p>
                    <p><span class="text-danger">Min Partecipanti: </span>{{$viaggio->partecipanti}}</p>
                    <p><span class="text-danger">Descrizione: </span>{{$viaggio->descrizione}}</p>
                </div>
            @endforeach
         
        </div>
    </div>
        
   
</body>
</html>
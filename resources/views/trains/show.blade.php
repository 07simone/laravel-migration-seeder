@extends('layout.home')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-6 mx-auto mt-3">
                <div class="card">
                    <img src="{{$train ->image}}" class="card-img-top" alt="..."> 
                    <div class="card-body">
                        
                        <h1>Il treno {{$train ->Azienda}} in partenza  da {{$train ->StazioneDiPartenza}} e in arrivo a {{$train ->Stazione_di_arrivo}} </h1>
                        <p>partirà alle ore {{$train ->Orario_di_partenza}} </p>
                        <p> e arriverà a destinazione alle ore: {{$train ->Orario_di_arrivo}}</p>
                        <p>Codice del treno è il seguente: {{$train ->Codice_treno}}</p>
                        <p>il numero delle carrozze è il seguente:{{$train ->Numero_Carrozze}}</p>
                    </div>
                </div>
            </div>
    </div>
    <div class="row text-center mt-3">
        <div class="col-6">
            <a href="{{route("trains.show",$train->id -1)}}">
                <button type="button" class="btn btn-success">PRECEDENTE</button>
            </a>
        
        </div>
        <div class="col-6">
            <a href="{{route("trains.show",$train->id +1)}}">
                <button type="button" class="btn btn-success">SUCCESSIVO</button>
            </a>
            
        </div>
    </div>
</div>
@endsection

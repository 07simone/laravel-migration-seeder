@extends('layout.home')

@section('content')
<div class="container">
    <div class="row">
    {{--  <div class="col-12 text-center">
            <h1>Il primo treno a partire:</h1>
        </div> --}}

        {{-- @foreach ($time as $item)
        <div class="card mb-3">
            <h1>Il primo treno in partenza oggi è il seguente: {{$item->Azienda}}, con codice treno:{{$item ->Codice_treno}}</h1>
            <p>in partenza da {{$item ->StazioneDiPartenza}}, alle ore: {{$item ->Orario_di_partenza}} </p>
            <p>diretto a :{{$item->Stazione_di_arrivo}} con destinazione prevista per le ore: {{$item ->Orario_di_arrivo}}</p>
            
        </div>
            
        @endforeach --}}
        <div class="col-12 text-center">
            <h1>I treni della giornata di oggi:</h1>
        </div>
    @foreach ($trains as $train)
        <div class="col-6 mb-5">
            <div class="card ">
                <img src="{{$train ->image}}" class="card-img-top" alt="..."> 
                <div class="card-body">
                    <h1>Il treno {{$train ->Azienda}} in partenza  da {{$train ->StazioneDiPartenza}} e in arrivo a {{$train ->Stazione_di_arrivo}} </h1>
                    <p>partirà alle ore {{$train ->Orario_di_partenza}} </p>
                    <p> e arriverà a destinazione alle ore: {{$train ->Orario_di_arrivo}}</p>
                    <p>Codice del treno è il seguente: {{$train ->Codice_treno}}</p>
                    <p>il numero delle carrozze è il seguente:{{$train ->Numero_Carrozze}}</p>
                    <a href="{{url("/$train->id")}}">
                        <button type="button" class="btn btn-success">Dettagli</button>
                    </a>
                </div>
            </div>
            
        </div>
    @endforeach
        <div class="col-12">
            {{$trains->links()}}
        </div>

</div>
</div>
    
@endsection
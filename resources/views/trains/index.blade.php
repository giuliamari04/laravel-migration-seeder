@extends('layouts.app')
@section('title','Houses')
@section('content')

<main class="container">
    <h1>Elenco treni</h1>
    <div class="row">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">nr. treno</th>
                <th scope="col">Partenza</th>
                <th scope="col">Arrivo</th>
                <th scope="col">orario di partenza</th>
                <th scope="col">orario di arrivo</th>
                <th scope="col">ritardo</th>
                <th scope="col">azienda</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train )
              <tr>
                <th scope="row">{{$train->codice}}</th>
                <td>{{$train->stazione_partenza}}</td>
                <td>{{$train->stazione_arrivo}}</td>
                <td>{{$train->orario_partenza}}</td>
                <td>{{$train->orario_arrivo}}</td>
                <td>
                    {{ $train->in_orario ? 'In Orario' : 'Ritardo' }}
                </td>

                <td>{{$train->azienda}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>


    </div>
</main>
@endsection


@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main id="home">
    <div class="container ">
    <h1 class="text-light">Elenco treni</h1>
    <div class="row">

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">nr. treno</th>
                <th scope="col">Partenza</th>
                <th scope="col">Arrivo</th>
                <th scope="col">orario di partenza</th>
                <th scope="col">orario di arrivo</th>
                <th scope="col">Stato treno</th>
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
                        @if ($train->cancellato == 1)
                            <span class="text-bg-danger p-2 ">cancellato</span>
                        @else
                            {{ $train->in_orario ? 'In Orario' : 'Ritardo' }}
                        @endif
                </td>

                <td>{{$train->azienda}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>


    </div>
</div>
</main>

@endsection

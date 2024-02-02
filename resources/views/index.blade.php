@extends('layout.app')


@section('main-content')
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            @foreach ($trains as $train)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $train->azienda }}</h5>
                            <p class="card-text">{{ $train->stazione_partenza }}</p>
                            <p class="card-text">{{ $train->stazione_arrivo }}</p>
                            <p class="card-text">{{ $train->orario_partenza }}</p>
                            <p class="card-text">{{ $train->orario_arrivo }}</p>
                            <p class="card-text">{{ $train->codice_treno }}</p>
                            <p class="card-text">{{ $train->numero_carrozze }}</p>
                            <p class="card-text">{{ $train->in_orario }}</p>
                            <p class="card-text">{{ $train->cancellato }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
  


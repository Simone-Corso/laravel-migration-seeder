@extends('layout.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->azienda }}</h5>
                            <p class="card-text">{{ $train->stazione_partenza }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
  


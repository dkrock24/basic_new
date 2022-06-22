@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> Email : {{ $contacto->email }} </h5>

                    <p class="card-text">
                        {{ $contacto->descripcion }}
                    </p>

                    <p class="text-muted mb-0">
                       
                        {{ $contacto->created_at->format('d M Y') }}
                    </p>

                    <a href="{{ route('contactos') }}">Back</a>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

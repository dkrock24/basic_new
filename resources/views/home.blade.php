@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}


                    <div class="container px-5 py-6" id="hanging-icons">
                        <h2 class="pb-2 border-bottom">Summary</h2>
                        
                        <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">
                            <div class="col d-flex align-items-start">
                                <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
                                </div>
                                <div>
                                <h2>Contact List</h2>
                                <h1> {{ $contacts }}</h1>
                                <a href="{{ route('contactos') }}" class="btn btn-primary">
                                    Detail
                                </a>
                                </div>
                            </div>
                            <div class="col d-flex align-items-start">
                                <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
                                </div>
                                <div>
                                <h2>Subscribers List</h2>
                                <h1> {{ $suscriptions }}</h1>
                                <a href="{{ route('suscripciones') }}" class="btn btn-primary">
                                    Detail
                                </a>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">
                            <div class="col d-flex align-items-start">
                                <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
                                </div>
                                <div>
                                <h2>Total in {{ date('M')}}</h2>
                                <h1> {{ $contactsTotal }}</h1>
                              
                                </div>
                            </div>
                            <div class="col d-flex align-items-start">
                                <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
                                </div>
                                <div>
                                <h2>Total in {{ date('M')}}</h2>
                                <h1> {{ $suscriptionsTotal }}</h1>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

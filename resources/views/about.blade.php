@extends('layout')

@section('title', 'About')
    
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mb-4 col-lg-6">
                <img class="img-fluid" src="/img/about.svg" alt="Quien soy">
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Quien soy</h1>
            <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Obcaecati doloremque, aliquid adipisci officiis sint nesciunt consectetur dolorem 
                qui nam magni vel dignissimos autem ipsa eius debitis ex quia reiciendis natus.
            </p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">
                Contactame
            </a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">
                Portafolio
            </a>
        </div>
        
    </div>
</div>

@endsection('content')

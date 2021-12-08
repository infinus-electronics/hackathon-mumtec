@extends('layouts.app')

@section('content')
    @include('layouts.headers.app-head')

    <div class='container-fluid'>
        <div class="row">
            <div class="col-sm-6">
                <div class = "card text-center">
                    <h3 class = "card-header">Spaced Repetition</h3>
                    <img class = "card-img-top pb-2" src="https://source.unsplash.com/sECcwm6BN8w/1920x1080" alt="Image Placeholder"> 
                    <p class="card-text">This is just a random fact.</p>
                    <a href="#" class="btn btn-primary">Go to reference</a>
                    <div class="card-footer text-muted">Last reviewed n days ago</div>
                </div>            
            </div>

            <div class="col-sm-6">
                <div class = "card text-center">
                    <h3 class = "card-header">Today's practice question</h3>
                    <img class = "card-img-top pb-2" src="https://source.unsplash.com/sECcwm6BN8w/1920x1080" alt="Image Placeholder"> 
                    <p class="card-text">This is just a random practice question.</p>
                    <a href="#" class="btn btn-primary">View answer</a>
                    <div class="card-footer text-muted">Last revised m days ago</div>
                </div>            
            </div>
        </div>
    </div>
    
@endsection


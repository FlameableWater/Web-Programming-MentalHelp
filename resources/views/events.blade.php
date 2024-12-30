<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')

        <h1 class="text-center my-5">Events</h1>

        <!-- Search Bar -->
        <form method="GET" action="{{ url('/events') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search events by title" value="{{ request()->input('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>

        <div class="row">
            @foreach ($events as $event)
                <div class="col-12 h-50 mb-4">
                    <div class="card h-100 border border-danger">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ $event['image'] }}" class="img-fluid" alt="{{ $event['title'] }}" style="width: 400px; height: 300px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $event['title'] }}</h4>
                                    <p class="card-text">{{ $event['date'] }}</p>
                                    <a href="{{ url($event['link']) }}" class="btn btn-primary">See Details</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- <div class="row">
            @foreach ($events as $event)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ $event['image'] }}" alt="{{ $event['title'] }}">
                        <div class="card-body">
                            <h4 class="card-title">{{ $event['title'] }}</h4>
                            <p class="card-text">{{ $event['date'] }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ url($event['link']) }}" class="btn btn-primary">See Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> -->

    @endsection
</body>
</html>
@extends('layouts.app')

@section('title')
Promotion List
@endsection

@section('body-title')
Promotion List 
@endsection



@section('content')
    <div class="d-flex flex-row-reverse">
        <a class="btn btn-info text-white" href="{{ route('promotions.create') }}">Create Promotion</a>
    </div>
    <br>

    <div class="row">
        @foreach ( $promotions as $promotion)
            <div class="col-xl-4 ">
                <div class="card text-center" style="width: 25rem; margin-bottom: 10px; margin-top: 10px;">
                    <img src="https://media-exp1.licdn.com/dms/image/C4D0BAQEtPcuS0jOZwg/company-logo_200_200/0/1523001943274?e=2159024400&v=beta&t=fIaMqQiFChNjs325flIBsQ0p3JNvACKoatsoQzNvlWc" class="card-img-top" alt="Ynov Picture" >
                    <div class="card-body">
                        <h5 class="card-title">{{ $promotion->name }} | {{ $promotion->speciality }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="row">
                            <div class="col-4">
                                <a href="{{ route('promotions.show', ['promotion' => $promotion]) }}" class=" btn btn-info text-white">Details</a>
                            </div>
                            <div class="col-4 ">
                                <a href="#" class="d-fle btn btn-success text-white">Edit</a>
                            </div>
                            <div class="col-4 ">
                                <a href="#" class=" btn btn-danger text-white">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection




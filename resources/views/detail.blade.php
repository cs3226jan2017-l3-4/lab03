@extends('template')
@section('title')
    Student {{ $name }}
@endsection
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12" >
                <p>This page will show the details of student with this {{ $sum }}.</p>
            </div>
        </div>
    </div>
@endsection
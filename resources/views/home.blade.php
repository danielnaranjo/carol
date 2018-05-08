@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        </div>
    </div>
    @endif
    @if (Auth::check())
    <div class="row">
        <div class="col-md-7">
            <product-list></product-list>
        </div>
        <div class="col-md-5">
            <shopping-cart></shopping-cart>
            <total-cost></total-cost>
            <peso-carga></peso-carga>
        </div>
    </div>
    @endif
</div>
@endsection

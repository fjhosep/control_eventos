@extends('layouts.app')

@section('template_title')
    {{ $inShoppingCart->name ?? 'Show In Shopping Cart' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show In Shopping Cart</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('in-shopping-carts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Product Id:</strong>
                            {{ $inShoppingCart->product_id }}
                        </div>
                        <div class="form-group">
                            <strong>Shopping Cart Id:</strong>
                            {{ $inShoppingCart->shopping_cart_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

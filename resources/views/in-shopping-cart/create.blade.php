@extends('layouts.app')

@section('template_title')
Create In Shopping Cart
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Create In Shopping Cart</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('in-shopping-cart.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('in-shopping-cart.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
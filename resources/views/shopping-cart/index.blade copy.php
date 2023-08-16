@extends('layouts.main', ['activePage' => 'shoppingcart', 'titlePage' => 'Shopping Cart'])

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <!--Enter code here -->
            <div class="container">
                <p class="h5">Shopping Cart</p>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header card-header-success">
                                    <h5 class="card-title">
                                        TOTAL:
                                    </h5>
                                </div>
                                <p class="card-text mt-3">{{ $total }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
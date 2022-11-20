@extends('layouts.client')
@section('content')
<div class="productpagebody">
    <div class="staticaddproductpage">

    </div>
    <div class="intropartproduct">

        <div class="card mb-3" style="width:100%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/assets/staticimgs/microland.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body" style="width:50%">
                        <h5 class="card-title">Product Model</h5>
                        <p>Model Number</p>
                        <p>Price</p>
                        <a href=""><p>Datasheet</p></a>
                        <p>Quantity</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="comparepricesection">
        <h2 class="">
            PRICES AND STOCK
        </h2>
        <div class="tabledistributors">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Seller</th>
                        <th>SKU</th>
                        <th>Stock</th>
                        <th>Visit site</th>
                        <th>CURRENCY</th>
                        <th>1 unit</th>
                        <th>10 units</th>
                        <th>100 units</th>
                        <th>1000 units</th>
                        <th>10000 units</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>MOUSER</td>
                        <td>LKSHDFI29</td>
                        <td>200</td>
                        <td>link</td>
                        <td>KES</td>
                        <td>2</td>
                        <td>1.8</td>
                        <td>1.5</td>
                        <td>1.3</td>  
                        <td>1.1</td>          
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
    <div class="technicalspecs">
        <h2> Technical Specification</h2>
    </div>
    <div>
        <h2>Documents</h2>
    </div>

</div>
@endsection  



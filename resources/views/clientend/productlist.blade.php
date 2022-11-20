@extends('layouts.client')
@section('content')
<div class="productlistbody">
    <div class="adsesection1">
        ADVERT1
    </div>
    <div class="resultssearchnumber">
        <h3>Results:14,000</h3>
    </div>
    <div class="filtersection">
        <ul class="filterbody">
            <li>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" style="width:150px ;" aria-expanded="false">
                    Price
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Ascending</a></li>
                    <li><a class="dropdown-item" href="#">Descending</a></li>
                </ul>
            </div>
                </li>
            <li>          
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" style="width:150px ;" aria-expanded="false">
                        Availability
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">All</a></li>
                        <li><a class="dropdown-item" href="#">In Stock</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" style="width:150px ;" aria-expanded="false">
                        Category
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Ascending</a></li>
                        <li><a class="dropdown-item" href="#">Descending</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="contentprodslist">
        <div class="tablesection  d-none d-lg-flex">
            <table class="table table-striped">
                <thead class="tableheader">
                    <tr>
                        <th >Image</th>
                        <th >Part #</th>
                        <th >Manufacturer</th>
                        <th >Description</th>
                        <th >Datasheet</th>
                        <th >Availability</th>
                        <th >Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>mdo</td>
                        <td>fourth</td>
                        <td>Otto</td>
                        <td>mdo</td>
                        <td>fourth</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>fat</td>
                        <td>fourth</td>
                        <td>Otto</td>
                        <td>mdo</td>
                        <td>fourth</td>
                    </tr>
                    <tr>
                        <td>Larry the Bird</td>
                        <td>twitter</td>
                        <td>free</td>
                        <td>fourth</td>
                        <td>Otto</td>
                        <td>mdo</td>
                        <td>fourth</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="smallprods d-block d-sm-block d-md-block d-lg-none">
            <div class="card mb-3" style="min-width: 250px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="/assets/staticimgs/microland.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p>Model Number</p>
                                <p>Price</p>
                                <a href=""><p>Datasheet</p></a>
                                <p>Quantity</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="adsection2 d-none d-lg-flex">
            advert 2
        </div>
    </div>
  
</div>

<div class="blogsection">
        <div class="container-fluid sectionareas">
            <h2 class="sectiontitle me-auto">
            TRENDING BLOGS
            </h2>
        </div>
        <div class="blogspart">
            <div class="blogs">
                <div class="card" style="width: 18rem;">
                        <img src="/assets/staticimgs/blogplaceholder.jpg" class="card-img-top" alt="blog">
                    <div class="card-body">
                        <h5 class="card-title">Blog Title</h5>
                        <a href="#" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
            <div class="blogs">
            <div class="card" style="width: 18rem;">
                    <img src="/assets/staticimgs/blogplaceholder.jpg" class="card-img-top" alt="blog">
                <div class="card-body">
                    <h5 class="card-title">Blog Title</h5>
                    <a href="#" class="btn btn-dark">Read More</a>
                </div>
            </div>
            </div>
            <div class="blogs">
            <div class="card" style="width: 18rem;">
                    <img src="/assets/staticimgs/blogplaceholder.jpg" class="card-img-top" alt="blog">
                <div class="card-body">
                    <h5 class="card-title">Blog Title</h5>
                    <a href="#" class="btn btn-dark">Read More</a>
                </div>
            </div>
            </div>

        
        </div>

    </div>

@endsection  



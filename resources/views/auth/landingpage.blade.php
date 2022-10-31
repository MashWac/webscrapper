@extends('layouts.landing')
@section('content')
<div class="mainbody">
    <div class="container-fluid landingback">
        <div class="searcharea">
            <div class="searchlandcontent"> 
                <h3 class="comptitleplacehold">Company title</h3>
                <p class="landweltext">SEARCH ELECTRONIC PARTS AND COMPARE PRICES</p>
                <div class="searchinput">
                    <form action="{{url('insert-prod')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <input type="text" class="form-control landsearchbox" placeholder="What are you looking for today?" width="30%">
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-dark">Search</button>
                            </div> 
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container-fluid sectionareas" style="margin-top:2%;">
  <h2 class="sectiontitle me-auto">
    POPULAR CATEGORIES
  </h2>
</div>
<div class="landingcategories">

  <div class="landingcategory">
    <img src="/assets/staticimgs/microland.jpg" height="150px">  
  </div>
  <div class="landingcategory">
    <img src="/assets/staticimgs/microland.jpg" height="150px">  
  </div>
  <div class="landingcategory">
    <img src="/assets/staticimgs/microland.jpg" height="150px">  
  </div>
  <div class="landingcategory">
    <img src="/assets/staticimgs/microland.jpg" height="150px">  
  </div>
  <div class="landingcategory">
    <img src="/assets/staticimgs/microland.jpg" height="150px">  
  </div>
  <div class="landingcategory">
    <img src="/assets/staticimgs/microland.jpg" height="150px">  
  </div>
  <div class="landingcategory">
    <img src="/assets/staticimgs/microland.jpg" height="150px">  
  </div>
</div>


<div class="landfeaturedprods">
  <div class="container-fluid sectionareas">
    <h2 class="sectiontitle me-auto">
      FEATURED PRODUCTS
    </h2>
  </div>
  
  <div class="landingprods">
    <div class="card prodsland" style="width: 18rem;">
      <img src="/assets/staticimgs/switch.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-dark">Go somewhere</a>
      </div>
    </div>
    <div class="card prodsland" style="width: 18rem;">
      <img src="/assets/staticimgs/switch.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-dark">Go somewhere</a>
      </div>
    </div>
    <div class="card prodsland" style="width: 18rem;">
      <img src="/assets/staticimgs/switch.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-dark">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
@endsection  



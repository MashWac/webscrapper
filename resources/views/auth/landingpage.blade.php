@extends('layouts.landing')
@section('content')
<div class="mainbody">
    <div class="container-fluid landingback">
      <div class="searcharea">
          <div class="searchlandcontent"> 
            <h3 class="comptitleplacehold">ELECTRONIC COMPONENTS CSE</h3>
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
      <div class="hellotext">
        <h4 class="texthello">Hey {{date("l")}}! What's the Latest?</h4>
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
    <img src="/assets/staticimgs/microland.jpg" height="150px" width="200px">  
    <div class="categorytransition text-center"> 
      <h4>Category Name</h4>
    </div>
  </div>
  <div class="landingcategory">
    <img src="/assets/staticimgs/microland.jpg" height="150px" width="200px">  
  </div>
  <div class="landingcategory">
    <img src="/assets/staticimgs/microland.jpg" height="150px" width="200px">  
  </div>
  <div class="landingcategory">
    <img src="/assets/staticimgs/microland.jpg" height="150px" width="200px">  
  </div>
  <div class="landingcategory">
    <img src="/assets/staticimgs/microland.jpg" height="150px" width="200px">  
  </div>
  <div class="landingcategory">
    <img src="/assets/staticimgs/microland.jpg" height="150px" width="200px">  
  </div>
  <div class="landingcategory">
    <img src="/assets/staticimgs/microland.jpg" height="150px" width="200px">  
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
<div class="aboutsection">
  <div class="aboutcse">
    <h2>About CSE</h2>
    <h4>Our ambition is to empower the electronic component industry and create a fantastic service and experience for all consumers</h4>
  </div>
  <div class="aboutinfo">
    <div class="findproducts abouttexts">
      <h3>1. Find products at the best price</h3>
      <p>At Components CSE you can find and compare the lowest prices of more than 9 million products from over 200 electronic parts distributors online & in-store. We believe that pricing, stock availability, and technical specifications should be transparent, fast to find, and easy to understand and that is why we aim to help buyers quickly identify which distributors have the most stock at the best price. We are constantly adding new products and distributor brands every day and working hard to ensure that you get the most relevant information about products, suppliers and prices.</p>
    </div>
    <div class="independent abouttexts">
      <h3>2. Independent and trustworthy</h3>
      <p>Electronics Components CSE is an independent information service offering real price comparisons. No distributor can influence any information you find on our site, regardless of whether they are Electronics Components CSE customers or not. However, when people searching for components information choose to click from our search engine to a distributor's website, we earn a small fee for sending them traffic, which helps keep our platform free for you the end user.</p>
    </div>
    <div class="freetouse abouttexts">
      <h3>3. Free to use</h3>
      <p>Our comparison search engine is smart, powerful, and also free to use. We aggregate and normalize data from a wide range of sources in the electronic component market including distributors and manufacturers. Electronics Components CSE's purpose is to help you feel safe when shopping online, giving you free access to helpful information in order to make smart purchasing decisions for your engineering projects.  Incoming data streams are processed and translated into a comprehensive view of a component's market data.</p> 
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



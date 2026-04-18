<!-- START PROPERTY -->
<section class="template_property">
    <div class="container">
        <div class="section-title text-center wow zoomIn">
            <h2>Latest listing</h2>
            <div></div>
        </div>
        <div class="row">
            @foreach($destinations as $destination)
            <div class="col-lg-4 col-sm-12 col-xs-12">
                <div class="single_property">
                    <img src="{{ asset('storage/assets/img/property/' . rand(1, 6) . '.jpg') }}" class="img-fluid" alt="" />
                    <div class="single_property_description text-center">
                        <span><i class="fa fa-object-group"></i> 900 sq ft</span>
                        <span><i class="fa fa-bed"></i> 4 Badrooms</span>
                        <span><i class="fa fa-star-o"></i> 2 Baths</span>
                    </div>
                    <div class="single_property_content">
                        <h4><a href="#">{{ $destination->name }}</a></h4>
                        <p>{{ $destination->description }} </p>


                    </div>
                    <div class="single_property_price">
                        Ticket Per PAX <span>Rp. {{ number_format($destination->ticket_price, 2) }}</span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
                <!--- END SINGLE PROPERTY -->
            </div>
            @endforeach
            <!--- END COL -->

        </div>
        <!--- END ROW -->
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END  PROPERTY -->

<!-- START PROPERTY -->
{{-- <section class="template_property section-padding">
    <div class="container">
        <div class="section-title  text-center wow zoomIn">
            <h2>Latest for Rent</h2>
            <div></div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-xs-12">
                <div class="single_property">
                    <img src="{{ asset('storage/assets/img/property/4.jpg') }}" class="img-fluid" alt="" />
<div class="single_property_description text-center">
    <span><i class="fa fa-object-group"></i> 900 sq ft</span>
    <span><i class="fa fa-bed"></i> 4 Badrooms</span>
    <span><i class="fa fa-star-o"></i> 2 Baths</span>
</div>
<div class="single_property_content">
    <h4><a href="#">Lynn Ogden Lane</a></h4>
    <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical. </p>

</div>
<div class="single_property_price">
    High Meadow Lane Mount Pleasant <span>$ 170,000</span>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
</div>
</div>
</div>
<!--- END  COL-->
<div class="col-lg-4 col-sm-12 col-xs-12">
    <div class="single_property">
        <img src="{{ asset('storage/assets/img/property/5.jpg') }}" class="img-fluid" alt="" />
        <div class="single_property_description text-center">
            <span><i class="fa fa-object-group"></i> 900 sq ft</span>
            <span><i class="fa fa-bed"></i> 4 Badrooms</span>
            <span><i class="fa fa-star-o"></i> 2 Baths</span>
        </div>
        <div class="single_property_content">
            <h4><a href="#">2045 B Street</a></h4>
            <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical. </p>

        </div>
        <div class="single_property_price">
            High Meadow Lane Mount Pleasant <span>$ 170,000</span>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
    </div>
</div>
<!--- END  COL-->
<div class="col-lg-4 col-sm-12 col-xs-12">
    <div class="single_property">
        <img src="{{ asset('storage/assets/img/property/6.jpg') }}" class="img-fluid" alt="" />
        <div class="single_property_description text-center">
            <span><i class="fa fa-object-group"></i> 900 sq ft</span>
            <span><i class="fa fa-bed"></i> 4 Badrooms</span>
            <span><i class="fa fa-star-o"></i> 2 Baths</span>
        </div>
        <div class="single_property_content">
            <h4><a href="#">White Maria Street</a></h4>
            <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical. </p>

        </div>
        <div class="single_property_price">
            High Meadow Lane Mount Pleasant <span>$ 170,000</span>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
    </div>
</div>
<!--- END  COL-->
</div>
<!--- END ROW -->
</div>
<!--- END CONTAINER -->
</section> --}}
<!-- END  PROPERTY -->

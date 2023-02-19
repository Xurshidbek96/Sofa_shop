<div class="design_section layout_padding">
    <div id="my_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="container">
                    <h1 class="design_taital">Our Work Furniture</h1>
                    <p class="design_text">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteratio</p>
                    <div class="design_section_2">
                        <div class="row">
                            @foreach ($products as $item)
                            <div class="col-md-4">
                                <div class="box_main">
                                    <p class="chair_text">{{ $item->name }}</p>
                                    <div class="image_3" href="#"><img src="/images/{{ $item->img }}"></div>
                                    <p class="chair_text">Price $ {{ $item->price }}</p>
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>



        </div>
        {{ $products->links() }}
    </div>
    <div class="container">
        <div class="read_bt"><a href="#">Read More</a></div>
    </div>
</div>

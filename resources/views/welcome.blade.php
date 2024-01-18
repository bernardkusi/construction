@extends('layout.layout')
@section('content')
    <div id="hero">
        <div class="image">
            <img src={{ asset('images/home.jpg') }} alt="homeimage">
            <div class="intro">
                <h1>Construction.</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad unde minus doloremque!</p>
                <a href="#" class="click">Hire Now</a>
            </div>

        </div>
    </div>

    <div class="page">
        <div id="about">
            <div>
                <div class="images">
                    <div class="image1">
                        <img src={{ asset('images/about1.jpg') }} alt="aboutimage">
                    </div>
                    <div class="image2">
                        <img src={{ asset('images/about2.jpg') }} alt="aboutimage">
                    </div>
                    <div class="image3">
                        <img src={{ asset('images/about3.jpg') }} alt="aboutimage">
                    </div>
                </div>
            </div>
            <div class="texts">
                <h3>About Us</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ex quod porro magnam iure expedita
                    nostrum! Eaque quis a qui porro enim repudiandae voluptatibus quisquam ullam, quidem exercitationem
                    dolorum deleniti veniam adipisci deserunt quaerat laboriosam commodi, nisi est aliquid dignissimos
                    molestiae! Quasi numquam veniam accusantium.
                </p>
                <a href={{ route('aboutpage') }} class="click">Learn More</a>
            </div>
        </div>
    </div>

    <div class="page">
        <div id="products">
            <div class="headings">
                <h4 class="heading">Our Services</h4>
                <p class="subheading">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad.
                </p>
            </div>

            <div class="productgrid">
                <div class="product">
                    <div class="details">
                        <p class="productname">Lorem, ipsum dolor.</p>
                        <p class="productdescription">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati,
                            accusamus? Optio, facilis? Tenetur, repellat.</p>
                        <a href="#" class="click">Purchase Now</a>
                    </div>
                </div>

                <div class="product">
                    <div class="details">
                        <p class="productname">Lorem, ipsum dolor.</p>
                        <p class="productdescription">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati,
                            accusamus? Optio, facilis? Tenetur, repellat.</p>
                        <a href="#" class="click">Purchase Now</a>
                    </div>
                </div>
                <div class="product">
                    <div class="details">
                        <p class="productname">Lorem, ipsum dolor.</p>
                        <p class="productdescription">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati,
                            accusamus? Optio, facilis? Tenetur, repellat.</p>
                        <a href="#" class="click">Purchase Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="page">
        <div id="gallery">
            <div class="headings">
                <h4 class="heading">Our Gallery</h4>
                <p class="subheading">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad.
                </p>
            </div>

            <div class="images">
                <div class="p1"></div>
                <div class="p2"></div>
                <div class="p3"></div>
                <div class="p4"></div>
                <div class="p5"></div>
            </div>
        </div>


    </div>
    <div class="page">
        <div id="products">
            <div class="headings">
                <h4 class="heading">Our Services</h4>
                <p class="subheading">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad.
                </p>
            </div>

            <div class="productgrid">
                <div class="product">
                    <div class="details">
                        <p class="productname">Lorem, ipsum dolor.</p>
                        <p class="productdescription">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati,
                            accusamus? Optio, facilis? Tenetur, repellat.</p>
                        <a href="#" class="click">Purchase Now</a>
                    </div>
                </div>

                <div class="product">
                    <div class="details">
                        <p class="productname">Lorem, ipsum dolor.</p>
                        <p class="productdescription">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati,
                            accusamus? Optio, facilis? Tenetur, repellat.</p>
                        <a href="#" class="click">Purchase Now</a>
                    </div>
                </div>
                <div class="product">
                    <div class="details">
                        <p class="productname">Lorem, ipsum dolor.</p>
                        <p class="productdescription">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati,
                            accusamus? Optio, facilis? Tenetur, repellat.</p>
                        <a href="#" class="click">Purchase Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="testimonials">
        <div class="images">
            <div class="image">
                <img src={{ asset('images/testimonial.jpg') }} alt="homeimage">
            </div>
        </div>
        <div class="texts">
            <div class="testimonial">
                <h1 class="heading">Client testimonials</h1>
                <p class="name">Bernard Kusi</p>
                <p class="comment">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit velit impedit nostrum, porro nisi
                    mollitia possimus?
                </p>
            </div>
        </div>
    </div>
@endsection

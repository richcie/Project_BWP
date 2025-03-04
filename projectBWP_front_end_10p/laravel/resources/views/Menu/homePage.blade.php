@extends('template.hometemplate')

@section('carousel')
    <div class="containerBox">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="height: 20vw;">
                <div class="carousel-item active">
                    <img src="/Carousel1.jpg" style="object-fit: cover; height: 100%; width: 100%;" class="d-block"
                        alt="Slide 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/Carousel2.jpg" style="object-fit: contain; height: 100%;" class="d-block w-100"
                        alt="Slide 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/Carousel3.jpg" style="object-fit: contain; height: 100%;" class="d-block w-100"
                        alt="Slide 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/Carousel3.jpg" style="object-fit: contain; height: 100%;" class="d-block w-100"
                        alt="Slide 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection



@section('category')
    <div class="container" style="margin-top: 2vw">
        <div id="carouselExample" class="carousel slide" style="background-color: black">
            <h5>
                <div class="text-light text-center" style="margin-left: 10vw">
                    Category
                </div>
            </h5>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col" style="margin-top: 1vw; margin-left: 10vw;">
                            <div class="bg-light" style="width: 50px; height: 50px;">
                                <a href="{{ url('/shopping/electric') }}">
                                    <img src="/assets/category/electric.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                            <div class="bg-light" style="width: 50px; height: 50px; margin-top: 1vw; margin-bottom: 1vw;">
                                <a href="{{ url('/shopping/clothes') }}">
                                    <img src="/assets/category/shirt.png" style="width: 50px; height: 50px;" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col" style="margin-top: 1vw;">
                            <div class="bg-light" style="width: 50px; height: 50px;">
                                <a href="{{ url('/shopping/jewelry') }}">
                                    <img src="/assets/category/jewel.png" style="width: 50px; height: 50px;" alt="">
                                </a>
                            </div>
                            <div class="bg-light" style="width: 50px; height: 50px; margin-top: 1vw; margin-bottom: 1vw;">
                                <a href="{{ url('/shopping/medicine') }}">
                                    <img src="/assets/category/medic.png" style="width: 50px; height: 50px;" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col" style="margin-top: 1vw;">
                            <div class="bg-light" style="width: 50px; height: 50px;">
                                <a href="{{ url('/shopping/shoes') }}">
                                    <img src="/assets/category/shoes.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                            <div class="bg-light" style="width: 50px; height: 50px; margin-top: 1vw; margin-bottom: 1vw;">
                                <a href="{{ url('/shopping/bag') }}">
                                    <img src="/assets/category/bag.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col" style="margin-top: 1vw;">
                            <div class="bg-light" style="width: 50px; height: 50px;">
                                <a href="{{ url('/shopping/book') }}">
                                    <img src="/assets/category/book.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                            <div class="bg-light" style="width: 50px; height: 50px; margin-top: 1vw; margin-bottom: 1vw;">
                                <a href="{{ url('/shopping/cook') }}">
                                    <img src="/assets/category/cook.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col" style="margin-top: 1vw;">
                            <div class="bg-light" style="width: 50px; height: 50px;">
                                <a href="{{ url('/shopping/toys') }}">
                                    <img src="/assets/category/toys.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                            <div class="bg-light" style="width: 50px; height: 50px; margin-top: 1vw; margin-bottom: 1vw;">
                                <a href="{{ url('/shopping/sport') }}">
                                    <img src="/assets/category/sport.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col" style="margin-top: 1vw; margin-left: 10vw;">
                            <div class="bg-light" style="width: 50px; height: 50px;">
                                <a href="{{ url('/shopping/pediatrics') }}">
                                    <img src="/assets/category/pediatrics.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                            <div class="bg-light" style="width: 50px; height: 50px; margin-top: 1vw; margin-bottom: 1vw;">
                                <a href="{{ url('/shopping/headphone') }}">
                                    <img src="/assets/category/headphone.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col" style="margin-top: 1vw;">
                            <div class="bg-light" style="width: 50px; height: 50px;">
                                <a href="{{ url('/shopping/phone') }}">
                                    <img src="/assets/category/phone.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                            <div class="bg-light" style="width: 50px; height: 50px; margin-top: 1vw; margin-bottom: 1vw;">
                                <a href="{{ url('/shopping/cook') }}">
                                    <img src="/assets/category/cook.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col" style="margin-top: 1vw;">
                            <div class="bg-light" style="width: 50px; height: 50px;">
                                <a href="{{ url('/shopping/music') }}">
                                    <img src="/assets/category/music.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                            <div class="bg-light" style="width: 50px; height: 50px; margin-top: 1vw; margin-bottom: 1vw;">
                                <a href="{{ url('/shopping/art') }}">
                                    <img src="/assets/category/art.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col" style="margin-top: 1vw;">
                            <div class="bg-light" style="width: 50px; height: 50px;">
                                <a href="{{ url('/shopping/food') }}">
                                    <img src="/assets/category/food.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                            <div class="bg-light" style="width: 50px; height: 50px; margin-top: 1vw; margin-bottom: 1vw;">
                                <a href="{{ url('/shopping/keyboard') }}">
                                    <img src="/assets/category/keyboard.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col" style="margin-top: 1vw;">
                            <div class="bg-light" style="width: 50px; height: 50px;">
                                <a href="{{ url('/shopping/pets') }}">
                                    <img src="/assets/category/pets.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                            <div class="bg-light" style="width: 50px; height: 50px; margin-top: 1vw; margin-bottom: 1vw;">
                                <a href="{{ url('/shopping/garden') }}">
                                    <img src="/assets/category/garden.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
@endsection

@section('rekomendasi')
    <div class="container" style="margin-top: 2vw;">
        <div class="content d-flex align-items-center justify-content-center"
            style="background-color: black; height: 70px;">
            <h4 style="color: white;">Rekomendasi</h4>
        </div>
    </div>
@endsection

@section('product')
    <div class="container">
        <div class="content ms-2">
            <div class="row row-cols-5">
                @foreach ($product as $p)
                    <div class="col d-flex align-items-stretch">
                        <div class="card" style="margin-top: 2vw;">
                            <img src="{{ $p->product_img }}" style=" height: 12vw; object-fit: cover;"
                                class="card-img-top img-fluid w-100" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $p->product_name }}</h5>
                                <p class="card-text">{{ $p->Category->category_name }}</p>

                            </div>
                            <div class="ms-3 mt-auto mb-3">
                                <a href="#" class="btn btn-primary">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection

@section('keterangan')
    <hr style="border-top: 7px solid navy; margin-top: 2vw;">
    <div class="container" style="margin-bottom: 2vw;">
        <div class="content" style="margin-top: 2vw;">
            <h5>KA Store</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, inventore ipsum. Tenetur nobis commodi
                expedita. Eos eum ipsum quasi iusto, pariatur corrupti at impedit incidunt numquam dolorum qui accusamus
                unde vero esse soluta nisi minima voluptatum reiciendis rerum earum corporis minus officiis facilis error!
                Sed, officiis exercitationem! Aut dolor debitis a! Ducimus debitis necessitatibus quisquam? Ea suscipit
                magni blanditiis, veritatis molestias qui necessitatibus odio ut quidem magnam, quo pariatur tempore tenetur
                praesentium vero sunt harum asperiores veniam aut ratione. Ex ea quidem error ad voluptas modi dolores natus
                nam nihil doloremque, dolore quaerat, et accusantium harum minus tempore minima quo.</p>
            <br>
            <h5>Toko Online Terpercaya</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi iusto cupiditate doloribus ab neque.
                Distinctio, ipsum, nam provident explicabo maiores dolorem, quod quo voluptatem sequi deleniti incidunt
                voluptate earum doloribus temporibus architecto dolore! Sint quas earum ratione nisi quam, natus nostrum
                aperiam vitae numquam fugit. Temporibus consequatur architecto cumque quod! Fuga blanditiis corrupti eum
                possimus illo, quis iure modi odio, magnam perspiciatis cupiditate quo quas sunt id praesentium nesciunt
                enim nulla rerum. Esse expedita quod veritatis neque incidunt. Magni maiores eligendi recusandae molestiae
                ex eos? Consequuntur nobis quod suscipit pariatur veniam sed facere maxime quo, cupiditate doloremque iusto.
                Rerum quae laboriosam tempora dolorem modi quis alias libero dolore sint, ducimus incidunt illo voluptas
                laudantium, esse saepe inventore nesciunt perferendis, possimus eius non! Non voluptatum praesentium autem
                totam assumenda doloribus, dolore doloremque unde ea natus, veniam eligendi eveniet, dolores distinctio
                excepturi repellendus a ab dolorum officiis esse libero aut nostrum. Id saepe alias consectetur. Aut itaque
                voluptatum veniam, alias eos quasi laudantium, aliquid omnis corrupti eius quis nisi ab ad cumque similique
                amet modi tempore dolores? Numquam, incidunt non. Dolores, officia illum quia omnis eligendi ad voluptas,
                nam quis alias corporis atque assumenda, enim quod. Quia ab saepe quae ipsam atque.</p>
        </div>
    </div>
@endsection

{{-- @section('content')
    <div class="container-fluid"
        style="background-color: rgb(37, 30, 30); padding-top: 2vw; padding-bottom: 2vw; display: flex; flex-direction: column; justify-content: center;">
        <div class="categoryTitleBox" style="text-align: center; margin-bottom: 2vw;">
            <h1 style="color: aliceblue">
                CATEGORY LIST
            </h1>
        </div>
        <div class="categoryListBox" style="display: flex; justify-content: center;">
            <div class="categoryListBox"
                style="width: 50vw; height: 30vw; background-color: #e9e9e965; border-radius: 1vw; display: flex; flex-direction: column; justify-content: center;">
                <div class="categoryRowBox"
                    style="width: 50vw; height: 10vw; display: flex; justify-content: center; padding-top: 2vw; padding-bottom: 2vw;">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="categoryContainerSmallBox"
                            style="width: 5vw; background-color: white; height: 6vw; margin-right: 2vw; margin-left: 2vw; display: flex; flex-direction: column; justify-content: center; border-radius: 0.5vw; border: black 2px solid">
                            <div class="categoryImageBox" style="text-align: center; margin-top: 1.5vw;">
                                <i class="bi bi-phone" style="font-size: 2.5vw"></i>
                            </div>
                            <div class="categoryNameBox" style="margin-bottom: 1vw; text-align: center">
                                <p style="color: rgb(6, 37, 63);">Alat Elektronik</p>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="categoryRowBox"
                    style="width: 50vw; height: 10vw; display: flex; justify-content: center; padding-top: 2vw; padding-bottom: 2vw;">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="categoryContainerSmallBox"
                            style="width: 5vw; background-color: red; height: 6vw; margin-right: 2vw; margin-left: 2vw;">

                        </div>
                    @endfor
                </div>
                <div class="categoryRowBox"
                    style="width: 50vw; height: 10vw; display: flex; justify-content: center; padding-top: 2vw; padding-bottom: 2vw;">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="categoryContainerSmallBox"
                            style="width: 5vw; background-color: red; height: 6vw; margin-right: 2vw; margin-left: 2vw; margin-bottom: 1vw;">

                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection --}}

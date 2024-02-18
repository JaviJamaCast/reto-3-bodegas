@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="carruselWelcome" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carruselWelcome" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carruselWelcome" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carruselWelcome" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/images/carrusel1.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h5>Producto de calidad</h5>
                            <p>Descubre la excelencia y el compromiso detrás de cada una de nuestras cervezas. Calidad que
                                puedes
                                saborear en cada sorbo, resultado de ingredientes seleccionados y un proceso de elaboración
                                perfeccionado con años de experiencia.</p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="{{ asset('/images/carrusel2.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption  d-md-block">
                            <h5>Sabor artesano</h5>
                            <p>Experimenta el gusto auténtico de lo hecho a mano con nuestras cervezas artesanales. Cada
                                lote es
                                una
                                obra de arte, fusionando tradición y creatividad para ofrecerte una experiencia única y un
                                sabor
                                inigualable que solo el toque artesano puede proporcionar.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/images/carrusel3.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption  d-md-block">
                            <h5>Variedad</h5>
                            <p>Nuestra selección de cervezas es un viaje de sabores. Desde las más clásicas hasta las más
                                innovadoras, hay una cerveza para cada paladar. Descubre la amplia gama de estilos y
                                encuentra
                                tu
                                favorita. La variedad es el sabor de la vida y la base de nuestra colección.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carruselWelcome" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carruselWelcome" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container mt-5">
                <div class="row bg-white opacity-75 p-4">
                    <div class="col-md-7">
                        <h2 class="col-sm fs-1"><strong>Sobre Nosotros</strong></h2>
                        <p class="col-sm fs-5 col-md fs-3">En Cervezas Killer, combinamos tradición e innovación para crear
                            cervezas
                            únicas. Desde 1995,
                            hemos
                            estado a la vanguardia en la elaboración de cervezas artesanales, respetando los métodos
                            tradicionales
                            mientras exploramos nuevos sabores y técnicas.</p>
                        <p class="col-sm fs-5 col-md fs-3">Nuestra misión es ofrecer experiencias memorables a través de
                            cada sorbo, con
                            una dedicación
                            inquebrantable a la calidad y el sabor. Nos enorgullecemos de nuestra capacidad para innovar,
                            manteniendo siempre el respeto por la cervecería clásica.</p>
                        <p class="col-sm fs-5 col-md fs-3">Si quieres saber mas sobre nuestra historia <a href="#"
                                class="text-decoration-none">conocenos!</a> </p>
                    </div>
                    <div class="col-md-5 my-2">
                        <img src="{{ asset('/images/Logo.png') }}" class="rounded float-end img-fluid" alt="Sobre Nosotros">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-md-12">
            <div class="container mt-5">
                <h2 class="text-white">Nuestros Productos Estrella</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-white opacity-90 p-2 m-1">
                            <img src="{{ asset('/images/Ambar.png') }}" class="card-img-top img-fluid" alt="Producto 1">
                            <div class="card-body">
                                <h5 class="card-title">Cerveza Ámbar</h5>
                                <p class="card-text">Una mezcla perfecta de malta tostada y lúpulo, con notas de caramelo y
                                    un toque
                                    afrutado.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-white opacity-90 p-2 m-1">
                            <img src="{{ asset('/images/Rubia.png') }}" class="card-img-top img-fluid" alt="Producto 2">
                            <div class="card-body">
                                <h5 class="card-title">Cerveza Rubia</h5>
                                <p class="card-text">Ligera y refrescante, con un equilibrio perfecto entre dulzura y
                                    amargura,
                                    ideal para cualquier ocasión.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-white opacity-90 p-2 m-1">
                            <img src="{{ asset('/images/Negra.png') }}" class="card-img-top img-fluid" alt="Producto 3">
                            <div class="card-body">
                                <h5 class="card-title">Cerveza Negra</h5>
                                <p class="card-text">Intensa y robusta, con sabores profundos de café y chocolate, para los
                                    amantes
                                    de las sensaciones fuertes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-white">Testimonios</h2>
                    </div>
                    <div id="carouselTestimonials" class="col-12 carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('/images/Testimonios1.png') }}" class="d-block w-100"
                                    alt="Testimonio 1">
                                <div class="carousel-caption d-md-block">
                                    <p>"La mejor cerveza artesanal que he probado. Cada sorbo es una experiencia única." -
                                        Juan Pérez
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/images/Testimonios2.png') }}" class="d-block w-100"
                                    alt="Testimonio 2">
                                <div class="carousel-caption d-md-block">
                                    <p>"Impresionante variedad y calidad. Killer se ha convertido en mi referencia para la
                                        cerveza
                                        artesanal." - María Gómez</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

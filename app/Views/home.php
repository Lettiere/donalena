<?= $this->extend('layoult/default') ?>


<?= $this->section('css') ?>
<!-- CSS -->
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- CONTEÚDO -->

<section
    style="background-image: url('<?= base_url('assets/images/banner-1.jpg') ?>');background-repeat: no-repeat;background-size: cover;">
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-6 pt-5 mt-5">
                <h2 class="display-1 ls-1"><span class="fw-bold text-primary">Alimentos</span> Orgânicos na sua <span
                        class="fw-bold">Porta</span></h2>
                <p class="fs-4">Dignissim massa diam elementum.</p>
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-primary text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Comece
                        a Comprar</a>
                    <a href="#" class="btn btn-dark text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Junte-se
                        Agora</a>
                </div>
                <div class="row my-5">
                    <div class="col">
                        <div class="row text-dark">
                            <div class="col-auto">
                                <p class="fs-1 fw-bold lh-sm mb-0">14k+</p>
                            </div>
                            <div class="col">
                                <p class="text-uppercase lh-sm mb-0">Variedades de Produtos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row text-dark">
                            <div class="col-auto">
                                <p class="fs-1 fw-bold lh-sm mb-0">50k+</p>
                            </div>
                            <div class="col">
                                <p class="text-uppercase lh-sm mb-0">Clientes Satisfeitos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row text-dark">
                            <div class="col-auto">
                                <p class="fs-1 fw-bold lh-sm mb-0">10+</p>
                            </div>
                            <div class="col">
                                <p class="text-uppercase lh-sm mb-0">Locais de Lojas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 g-0 justify-content-center">
            <div class="col">
                <div class="card border-0 bg-primary rounded-0 p-4 text-light">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <svg width="60" height="60">
                                <use xlink:href="#fresh"></use>
                            </svg>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body p-0">
                                <h5 class="text-light">Frescos da fazenda</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 bg-secondary rounded-0 p-4 text-light">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <svg width="60" height="60">
                                <use xlink:href="#organic"></use>
                            </svg>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body p-0">
                                <h5 class="text-light">100% Orgânico</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 bg-danger rounded-0 p-4 text-light">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <svg width="60" height="60">
                                <use xlink:href="#delivery"></use>
                            </svg>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body p-0">
                                <h5 class="text-light">Entrega Grátis</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="py-5 overflow-hidden">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header d-flex flex-wrap justify-content-between mb-5">
                    <h2 class="section-title">Categoria</h2>

                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-primary me-2">Ver Todas</a>
                        <div class="swiper-buttons">
                            <button class="swiper-prev category-carousel-prev btn btn-yellow">❮</button>
                            <button class="swiper-next category-carousel-next btn btn-yellow">❯</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="category-carousel swiper">
                    <div class="swiper-wrapper">
                        <a href="<?= base_url('category.html') ?>" class="nav-link swiper-slide text-center">
                            <img src="<?= base_url('assets/images/category-thumb-1.jpg') ?>" class="rounded-circle"
                                alt="Categoria Thumbnail">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Frutas e Vegetais</h4>
                        </a>
                        <a href="<?= base_url('category.html') ?>" class="nav-link swiper-slide text-center">
                            <img src="<?= base_url('assets/images/category-thumb-2.jpg') ?>" class="rounded-circle"
                                alt="Categoria Thumbnail">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Pães e Doces</h4>
                        </a>
                        <a href="<?= base_url('category.html') ?>" class="nav-link swiper-slide text-center">
                            <img src="<?= base_url('assets/images/category-thumb-3.jpg') ?>" class="rounded-circle"
                                alt="Categoria Thumbnail">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Frutas & Vegetais</h4>
                        </a>
                        <a href="<?= base_url('category.html') ?>" class="nav-link swiper-slide text-center">
                            <img src="<?= base_url('assets/images/category-thumb-4.jpg') ?>" class="rounded-circle"
                                alt="Categoria Thumbnail">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Bebidas</h4>
                        </a>
                        <a href="<?= base_url('category.html') ?>" class="nav-link swiper-slide text-center">
                            <img src="<?= base_url('assets/images/category-thumb-5.jpg') ?>" class="rounded-circle"
                                alt="Categoria Thumbnail">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Produtos de Carne</h4>
                        </a>
                        <a href="<?= base_url('category.html') ?>" class="nav-link swiper-slide text-center">
                            <img src="<?= base_url('assets/images/category-thumb-6.jpg') ?>" class="rounded-circle"
                                alt="Categoria Thumbnail">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Pães</h4>
                        </a>
                        <a href="<?= base_url('category.html') ?>" class="nav-link swiper-slide text-center">
                            <img src="<?= base_url('assets/images/category-thumb-7.jpg') ?>" class="rounded-circle"
                                alt="Categoria Thumbnail">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Frutas & Vegetais</h4>
                        </a>
                        <a href="<?= base_url('category.html') ?>" class="nav-link swiper-slide text-center">
                            <img src="<?= base_url('assets/images/category-thumb-8.jpg') ?>" class="rounded-circle"
                                alt="Categoria Thumbnail">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Pães & Doces</h4>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="pb-5">
    <div class="container-lg">

        <div class="row">
            <div class="col-md-12">

                <div class="section-header d-flex flex-wrap justify-content-between my-4">

                    <h2 class="section-title">Produtos Mais Vendidos</h2>

                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-primary rounded-1">Ver Todos</a>
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-md-12">

                <div
                    class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">

                    <div class="col">
                        <div class="product-item">
                            <figure>
                                <a href="index.html" title="Título do Produto">
                                    <img src="<?= base_url('assets/images/product-thumb-1.png') ?>"
                                        alt="Miniatura do Produto" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Pão Integral para Sanduíche</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-full.svg') ?>"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-full.svg') ?>"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-full.svg') ?>"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-full.svg') ?>"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-half.svg') ?>"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>R$ 24,00</del>
                                    <span class="text-dark fw-semibold">R$ 18,00</span>
                                    <span
                                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">
                                        10% OFF
                                    </span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3">
                                            <input type="number" name="quantity"
                                                class="form-control border-dark-subtle input-number quantity" value="1">
                                        </div>
                                        <div class="col-7">
                                            <a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart">
                                                <svg width="18" height="18">
                                                    <use xlink:href="<?= base_url('assets/icons/cart.svg') ?>"></use>
                                                </svg> Adicionar ao Carrinho
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6">
                                                <svg width="18" height="18">
                                                    <use xlink:href="<?= base_url('assets/icons/heart.svg') ?>"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col">
                        <div class="product-item">
                            <figure>
                                <a href="index.html" title="Título do Produto">
                                    <img src="<?= base_url('assets/images/product-thumb-4.png') ?>"
                                        alt="Miniatura do Produto" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Espinafre Orgânico Baby</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-full.svg') ?>"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-full.svg') ?>"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-full.svg') ?>"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-full.svg') ?>"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-half.svg') ?>"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>R$ 24,00</del>
                                    <span class="text-dark fw-semibold">R$ 18,00</span>
                                    <span
                                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">
                                        10% OFF
                                    </span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3">
                                            <input type="number" name="quantity"
                                                class="form-control border-dark-subtle input-number quantity" value="1">
                                        </div>
                                        <div class="col-7">
                                            <a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart">
                                                <svg width="18" height="18">
                                                    <use xlink:href="<?= base_url('assets/icons/cart.svg') ?>"></use>
                                                </svg> Adicionar ao Carrinho
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6">
                                                <svg width="18" height="18">
                                                    <use xlink:href="<?= base_url('assets/icons/heart.svg') ?>"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-item">
                            <figure>
                                <a href="index.html" title="Título do Produto">
                                    <img src="<?= base_url('assets/images/product-thumb-5.png') ?>"
                                        alt="Miniatura do Produto" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Folhas de Espinafre Orgânico (Produto Fresco)</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-full.svg') ?>"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-full.svg') ?>"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-full.svg') ?>"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-full.svg') ?>"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-half.svg') ?>"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>R$ 24,00</del>
                                    <span class="text-dark fw-semibold">R$ 18,00</span>
                                    <span
                                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">
                                        10% OFF
                                    </span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3">
                                            <input type="number" name="quantity"
                                                class="form-control border-dark-subtle input-number quantity" value="1">
                                        </div>
                                        <div class="col-7">
                                            <a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart">
                                                <svg width="18" height="18">
                                                    <use xlink:href="<?= base_url('assets/icons/cart.svg') ?>"></use>
                                                </svg> Adicionar ao Carrinho
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6">
                                                <svg width="18" height="18">
                                                    <use xlink:href="<?= base_url('assets/icons/heart.svg') ?>"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-item">
                            <figure>
                                <a href="index.html" title="Título do Produto">
                                    <img src="<?= base_url('assets/images/product-thumb-5.png') ?>"
                                        alt="Miniatura do Produto" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Folhas de Espinafre Orgânico (Produto Fresco)</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-full.svg') ?>"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-full.svg') ?>"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-full.svg') ?>"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-full.svg') ?>"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="<?= base_url('assets/icons/star-half.svg') ?>"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>R$ 24,00</del>
                                    <span class="text-dark fw-semibold">R$ 18,00</span>
                                    <span
                                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">
                                        10% OFF
                                    </span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3">
                                            <input type="number" name="quantity"
                                                class="form-control border-dark-subtle input-number quantity" value="1">
                                        </div>
                                        <div class="col-7">
                                            <a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart">
                                                <svg width="18" height="18">
                                                    <use xlink:href="<?= base_url('assets/icons/cart.svg') ?>"></use>
                                                </svg> Adicionar ao Carrinho
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6">
                                                <svg width="18" height="18">
                                                    <use xlink:href="<?= base_url('assets/icons/heart.svg') ?>"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- / product-grid -->


            </div>
        </div>
    </div>
</section>

<section class="py-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">

                <div class="banner-blocks">

                    <div class="banner-ad d-flex align-items-center large bg-info block-1"
                        style="background: url('<?php echo base_url('assets/images/banner-ad-1.jpg'); ?>') no-repeat; background-size: cover;">
                        <div class="banner-content p-5">
                            <div class="content-wrapper text-light">
                                <h3 class="banner-title text-light">Itens em OFERTA</h3>
                                <p>Descontos de até 30%</p>
                                <a href="#" class="btn-link text-white">Compre Agora</a>
                            </div>
                        </div>
                    </div>

                    <div class="banner-ad bg-success-subtle block-2"
                        style="background:url('<?php echo base_url('assets/images/banner-ad-2.jpg'); ?>') no-repeat;background-size: cover">
                        <div class="banner-content align-items-center p-5">
                            <div class="content-wrapper text-light">
                                <h3 class="banner-title text-light">Ofertas Combo</h3>
                                <p>Descontos de até 50%</p>
                                <a href="#" class="btn-link text-white">Compre Agora</a>
                            </div>
                        </div>
                    </div>

                    <div class="banner-ad bg-danger block-3"
                        style="background:url('<?php echo base_url('assets/images/banner-ad-3.jpg'); ?>') no-repeat;background-size: cover">
                        <div class="banner-content align-items-center p-5">
                            <div class="content-wrapper text-light">
                                <h3 class="banner-title text-light">Cupons de Desconto</h3>
                                <p>Descontos de até 40%</p>
                                <a href="#" class="btn-link text-white">Compre Agora</a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- / Banner Blocks -->

            </div>
        </div>
    </div>
</section>


<section id="featured-products" class="products-carousel">
    <div class="container-lg overflow-hidden py-5">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header d-flex flex-wrap justify-content-between my-4">

                    <h2 class="section-title">Produtos em Destaque</h2>

                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-primary me-2">Ver Todos</a>
                        <div class="swiper-buttons">
                            <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                            <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="swiper">
                    <div class="swiper-wrapper">

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Título do Produto">
                                    <img src="<?php echo base_url('assets/images/product-thumb-10.png'); ?>"
                                        alt="Miniatura do Produto" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Iogurte Grego Natural</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span
                                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10%
                                        OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3">
                                            <input type="number" name="quantity"
                                                class="form-control border-dark-subtle input-number quantity" value="1">
                                        </div>
                                        <div class="col-7">
                                            <a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart">
                                                <svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Adicionar ao Carrinho
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6">
                                                <svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
                <!-- / products-carousel -->

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-lg">

        <div class="bg-secondary text-light py-5 my-5"
            style="background: url('<?php echo base_url('assets/images/banner-newsletter.jpg'); ?>') no-repeat; background-size: cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 p-3">
                        <div class="section-header">
                            <h2 class="section-title display-5 text-light">Obtenha 25% de Desconto na sua primeira
                                compra</h2>
                        </div>
                        <p>Cadastre-se agora e se torne um membro.</p>
                    </div>
                    <div class="col-md-5 p-3">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label d-none">Nome</label>
                                <input type="text" class="form-control form-control-md rounded-0" name="name" id="name"
                                    placeholder="Nome">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label d-none">E-mail</label>
                                <input type="email" class="form-control form-control-md rounded-0" name="email"
                                    id="email" placeholder="Endereço de E-mail">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark btn-md rounded-0">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>

<section id="popular-products" class="products-carousel">
    <div class="container-lg overflow-hidden py-5">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header d-flex justify-content-between my-4">

                    <h2 class="section-title">Produtos mais populares</h2>

                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-primary me-2">Ver Todos</a>
                        <div class="swiper-buttons">
                            <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                            <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="swiper">
                    <div class="swiper-wrapper">

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="<?php echo base_url('index.html'); ?>" title="Título do Produto">
                                    <img src="<?php echo base_url('assets/images/product-thumb-15.png'); ?>"
                                        alt="Miniatura do Produto" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Pão de Sandwich</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span
                                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10%
                                        OFF</span>
                                </div>




                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3">
                                            <input type="number" name="quantity"
                                                class="form-control border-dark-subtle input-number quantity" value="1">
                                        </div>
                                        <div class="col-7">
                                            <a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart">
                                                <svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Adicionar ao Carrinho
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6">
                                                <svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <!-- / products-carousel -->

                    </div>
                </div>
            </div>
</section>

<section id="latest-products" class="products-carousel">
    <div class="container-lg overflow-hidden pb-5">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header d-flex justify-content-between my-4">

                    <h2 class="section-title">Acabaram de chegar</h2>

                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-primary me-2">Ver Todos</a>
                        <div class="swiper-buttons">
                            <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                            <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="swiper">
                    <div class="swiper-wrapper">

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Título do Produto">
                                    <img src="<?= base_url('assets/images/product-thumb-20.png') ?>"
                                        alt="Miniatura do Produto" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Suco de Melão Sunstar Fresco</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span
                                        class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10%
                                        OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3">
                                            <input type="number" name="quantity"
                                                class="form-control border-dark-subtle input-number quantity" value="1">
                                        </div>
                                        <div class="col-7">
                                            <a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart">
                                                <svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Adicionar ao Carrinho
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6">
                                                <svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <!-- / products-carousel -->

            </div>
        </div>
    </div>
</section>

<section id="latest-blog" class="pb-4">
    <div class="container-lg">
        <div class="row">
            <div class="section-header d-flex align-items-center justify-content-between my-4">
                <h2 class="section-title">Nosso Blog Recente</h2>
                <a href="#" class="btn btn-primary">Ver Todos</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <article class="post-item card border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect">
                        <a href="#">
                            <img src="<?= base_url('assets/images/post-thumbnail-1.jpg') ?>" alt="post"
                                class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                            <div class="meta-date"><svg width="16" height="16">
                                    <use xlink:href="#calendar"></use>
                                </svg>22 Ago 2021</div>
                            <div class="meta-categories"><svg width="16" height="16">
                                    <use xlink:href="#category"></use>
                                </svg>dicas & truques</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="#" class="text-decoration-none">Top 10 ideias de look casual para vestir seus
                                    filhos</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim
                                tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="post-item card border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect">
                        <a href="#">
                            <img src="<?= base_url('assets/images/post-thumbnail-2.jpg') ?>" alt="post"
                                class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                            <div class="meta-date">
                                <svg width="16" height="16">
                                    <use xlink:href="#calendar"></use>
                                </svg>25 Ago 2021
                            </div>
                            <div class="meta-categories">
                                <svg width="16" height="16">
                                    <use xlink:href="#category"></use>
                                </svg>tendências
                            </div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="#" class="text-decoration-none">Últimas tendências do uso de roupas de rua
                                    supremamente</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim
                                tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
                        </div>
                    </div>

                </article>
            </div>


        </div>
    </div>
</section>

<section class="pb-4 my-4">
    <div class="container-lg">

        <div class="bg-warning pt-5 rounded-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4">
                        <h2 class="mt-5">Baixe o App Orgânico</h2>
                        <p>Pedidos online feitos de forma fácil, rápida e confiável</p>
                        <div class="d-flex gap-2 flex-wrap mb-5">
                            <a href="#" title="App store">
                                <img src="<?= base_url('assets/images/img-app-store.png') ?>" alt="app-store">
                            </a>
                            <a href="#" title="Google Play">
                                <img src="<?= base_url('assets/images/img-google-play.png') ?>" alt="google-play">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="<?= base_url('assets/images/banner-onlineapp.png') ?>" alt="phone" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="py-4">
    <div class="container-lg">
        <h2 class="my-4">As pessoas também estão procurando</h2>
        <a href="#" class="btn btn-warning me-2 mb-2">Amêndoas Blue Diamond</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Pipoca Angie’s Boomchickapop</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Pipoca Kettle Salgada</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Iogurte Grego Chobani</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Iogurte de Baunilha Doce</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Asas Crocantes Foster Farms Takeout</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Warrior Blend Orgânico</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Queijo Chao Cremoso</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Almôndegas de Frango</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Amêndoas Blue Diamond</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Pipoca Angie’s Boomchickapop</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Pipoca Kettle Salgada</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Iogurte Grego Chobani</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Iogurte de Baunilha Doce</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Asas Crocantes Foster Farms Takeout</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Warrior Blend Orgânico</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Queijo Chao Cremoso</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Almôndegas de Frango</a>
    </div>
</section>


<section class="py-5">
    <div class="container-lg">
        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-5">
            <div class="col">
                <div class="card mb-3 border border-dark-subtle p-3">
                    <div class="text-dark mb-3">
                        <svg width="32" height="32">
                            <use xlink:href="#package"></use>
                        </svg>
                    </div>
                    <div class="card-body p-0">
                        <h5>Entrega gratuita</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 border border-dark-subtle p-3">
                    <div class="text-dark mb-3">
                        <svg width="32" height="32">
                            <use xlink:href="#secure"></use>
                        </svg>
                    </div>
                    <div class="card-body p-0">
                        <h5>Pagamento 100% seguro</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 border border-dark-subtle p-3">
                    <div class="text-dark mb-3">
                        <svg width="32" height="32">
                            <use xlink:href="#quality"></use>
                        </svg>
                    </div>
                    <div class="card-body p-0">
                        <h5>Garantia de qualidade</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 border border-dark-subtle p-3">
                    <div class="text-dark mb-3">
                        <svg width="32" height="32">
                            <use xlink:href="#savings"></use>
                        </svg>
                    </div>
                    <div class="card-body p-0">
                        <h5>Economias garantidas</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 border border-dark-subtle p-3">
                    <div class="text-dark mb-3">
                        <svg width="32" height="32">
                            <use xlink:href="#offers"></use>
                        </svg>
                    </div>
                    <div class="card-body p-0">
                        <h5>Ofertas diárias</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?= $this->section('js') ?>
<!-- JS -->

<?= $this->endSection() ?>

<?= $this->endSection() ?>
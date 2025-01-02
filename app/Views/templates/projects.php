<main>
    <secttion id="projects">
        <h2>PROJEKTI</h2>
        <div class="container">
            <?php foreach ($projekti as $proj) : ?>
            <div class="row proj-row g-0">
                <h3><?php echo $proj['adresa'] ?></h3>
                <div class="col-sm-12">
                    <div class="row g-0 proj-info">
                        <div class="col-md-3 text-center">
                            <h4>Stanova<span><?= esc($proj['stanova']) ?></span></h4>
                        </div>
                        <div class="col-md-3 text-center">
                            <h4>Garažnih mesta<span><?= esc($proj['garaza']) ?></span></h4>
                        </div>
                        <div class="col-md-3 text-center">
                            <h4>Poslovnih prostora<span><?= esc($proj['poslovni']) ?></span></h4>
                        </div>
                        <div class="col-md-3 text-center">
                            <h4>Godina<span><?= esc($proj['godina']) ?></span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-12-col-md-6">
                    <div id="carouselExampleDark<?= esc($proj['id']) ?>"
                        class="carousel carousel-dark slide proj-carousel" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark<?= esc($proj['id']) ?>"
                                data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark<?= esc($proj['id']) ?>"
                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark<?= esc($proj['id']) ?>"
                                data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <?php $slike = explode(',', $proj['slikeList']);
                                foreach ($slike as $index => $slika) : ?>
                            <?php if ($index == 0) : ?>
                            <div class="carousel-item active">
                                <img src="slike/projekti/<?= esc($slika) ?>" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?= esc($proj['adresa']) ?></h5>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="carousel-item">
                                <img src="slike/projekti/<?= esc($slika) ?>" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?= esc($proj['adresa']) ?></h5>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleDark<?= esc($proj['id']) ?>" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleDark<?= esc($proj['id']) ?>" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
            <?php endforeach; ?>

        </div>
    </secttion>
</main>
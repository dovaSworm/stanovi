<main>
    <secttion id="projects">
        <h2>PRETHODNI PROJEKTI</h2>

        <div class="container">
            <p class="proj-head">Preduzeće <strong>Termometal</strong> je do sada izgradilo sledeće
                stambeno-poslovne
                objekte u Novom Sadu.
            </p>
            <p class="proj-head">Pozivamo Vas da
                pogledate trenutno stanje prethodno izgrađenih objekata i proverite zašto imamo više od 300 zadovoljnih
                kupaca, koji sada upućuju svoju decu da takođe kupe stan od nas.</p>
            <div class="phone">
                <a href="tel:+38163557528"><i class="fas fa-mobile-alt"></i>+38163557528</a>
            </div>
            <?php foreach ($projekti as $proj) : ?>
                <div class="row proj-row g-0">
                    <h3><?php echo $proj['adresa'] ?></h3>
                    <div class="col-sm-12">
                        <div class="row g-0 proj-info">
                            <div class="col-lg-3 text-md-center proj-data">
                                <div>Stanova</div>
                                <div><?= esc($proj['stanova']) ?></div>
                            </div>
                            <div class="col-lg-3 text-md-center proj-data">
                                <div>Garažnih mesta</div>
                                <div><?= esc($proj['garaza']) ?></div>
                            </div>
                            <div class="col-lg-3 text-md-center proj-data">
                                <div>Poslovnih prostora</div>
                                <div><?= esc($proj['poslovni']) ?></div>
                            </div>
                            <div class="col-lg-3 text-md-center proj-data">
                                <div>Godina</div>
                                <div><?= esc($proj['godina']) ?></div>
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
                                        </div>
                                    <?php else: ?>
                                        <div class="carousel-item">
                                            <img src="slike/projekti/<?= esc($slika) ?>" alt="...">
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
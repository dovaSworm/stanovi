<section id="stanovi">
    <div class="container">
        <h2>PONUDA STANOVA</h2>
        <div class="lokacija">
            <strong><i class="fas fa-map-marker-alt fa-2x"></i>&nbsp;&nbsp;Lokacija:</strong>
            <span> Bolmanska 1, Novi Sad</span>
        </div>

        <?php foreach ($stanovi as $stan) : ?>
            <div class="row g-0 h-stan">
                <div class="info-bar w-100">
                    <div class="col-sm-12 col-md-7 img-activator">
                        <strong><?= esc($stan['tip'] . ' - ' . $stan['kvadratura']) ?>m²</strong>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <div class="row w-100">
                            <?php if ($stan['slobodan'] == 1): ?>
                                <span class="dostupnost">slobodno</span>
                            <?php else: ?>
                                <span>slobodno</span>
                            <?php endif; ?>

                            <?php if ($stan['rezervisano'] == 1): ?>
                                <span class="dostupnost">rezervisano</span>
                            <?php else: ?>
                                <span>rezervisano</span>
                            <?php endif; ?>

                            <?php if ($stan['prodato'] == 1): ?>
                                <span class="dostupnost">prodato</span>
                            <?php else: ?>
                                <span>prodato</span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
                <img class="img-stan" src="slike/stanovi/<?= esc($stan['slika']) ?>" alt="<?= esc($stan['tip']) ?>">
                <div class="info-stan">
                    <div class="col-12 col-md-3 text-md-center">
                        <h4>SPRAT<span><?= esc($stan['sprat']) ?></span></h4>

                    </div>
                    <div class="col-12 col-md-3 text-md-center">
                        <h4>KVADRATURA<span><?= esc($stan['kvadratura']) ?>m²</span></h4>

                    </div>
                    <div class="col-12 col-md-3 text-md-center">
                        <h4>TIP STANA<span><?= esc($stan['tip']) ?></span></h4>

                    </div>
                    <div class="col-12 col-md-3 text-md-center">
                        <h4>DOSTUPNOST
                            <?php if ($stan['slobodan'] == 1): ?>
                                <span>slobodno</span>
                            <?php endif; ?>
                            <?php if ($stan['rezervisano'] == 1): ?>
                                <span>rezervisano</span>
                            <?php endif; ?>
                            <?php if ($stan['prodato'] == 1): ?>
                                <span>prodato</span>
                            <?php endif; ?>
                        </h4>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="phone">
            <a class="act-btn" href="tel:+38163557528">Pozovite <i class="fas fa-mobile-alt"></i></a>
        </div>
    </div>
</section>
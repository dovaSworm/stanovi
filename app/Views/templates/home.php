<main>
    <secttion id="about">
        <div class="container h-about">
            <h2>O nama</h2>
            <div class="row g-0">
                <div class="col-sm-12 col-md-6">
                    <div class="h-img">
                        <img src="slike/meeting2.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 ho-about">
                    <p class="text">Građevinsko preduzeće TERMOMETAL se bavi izgradnjom stanova u Novom Sadu. Za
                        više od dve
                        decenije rada izgradili smo preko 300 novih domova i uticali na razvoj novih delova Novog
                        Sada.</p>
                    <p class="text"> Preduzeće je osnovano 2002.godine sa sedištem u Novom Sadu, ul.Hadži Ruvimova
                        br.65,
                        PIB
                        114242523, MB 21993506.</p>
                    <p class="text"> U okviru sistema „TERMOMETAL„ formirana su tokom godina preduzeća
                        „TERMOMETAL GRADNJA“ DOO, „TERMOMETAL ERSTE“ DOO, „TERMOMETAL DJD“ DOO i „TERMOMETAL PARTNER
                        DAD“
                        DOO
                    </p>
                </div>
            </div>
        </div>
        <p class="hint container">Vaš novi stan na lepoj lokaciji čeka na Vas!</p>
        <div class="container-fluid h-number">
            <div class="container">
                <div class="row g-0">
                    <div class="numbers text-center">
                        <h3>
                            uspešnih<br>godina
                        </h3>
                        <div class="txt-number">23</div>
                    </div>
                    <div class="numbers text-center">
                        <h3>
                            realizovanih projekata
                        </h3>
                        <div class="txt-number">16</div>
                    </div>
                    <div class="numbers text-center">
                        <h3>
                            napravljenih stanova
                        </h3>
                        <div class="txt-number">474</div>
                    </div>
                    <div class="numbers text-center">
                        <h3>
                            napravljenih kvadrata
                        </h3>
                        <div class="txt-number">21958</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <p class="hint">Saznajte više detalja o dostupnim stanovima i rezervišite svoje mesto u Novom Sadu. <br>
                <!-- <div class="phones"> -->
                <a class="act-btn" href="tel:+38163557528"><i class="fas fa-mobile-alt"></i>&nbsp;Pozovite</a>
                <!-- </div> -->
            </p>

        </div>


    </secttion>
    <secttion id="project">
        <div class="container">
            <h2>Novi projekat<span></span></h2>
            <h3 class="">Bolmanska 1, Telep <br>u blizini <span>Sunčanog keja</span></h3>
            <p></p>
            <!-- <div class="h-proj"> -->
            <p class="sj">
                23 <strong>nova stana</strong>
            </p>
            <div class="row g-0 proj-up">
                <div class="col-12 col-md-6 offset-md-6 h-txt">
                    <p class="text"><strong>Stambeni objekat </strong> se sastoji od 23 stambene jedinice smeštene
                        na
                        P+3 etaže.
                        Većina stanova ima pogled na severoistočnu stranu objekta. Krovna konstrukcija je pod
                        nagibom
                        10%, pokriveno vodonepropusnom zaštitom, kamenom vunom i trapezastim limom. Svi stanovi
                        imaju
                        punu spratnu visinu, bez kosina. Vertikalna komunikacija se obavlja stepeništem i liftom.
                    </p>
                </div>
                <div class="col-12 col-md-6 h-txt justify-content-end">
                    <p class="text"><strong>Lokacija</strong> se nalazi na južnom Telepu, u blizini Sunčanog
                        keja i
                        reke
                        Dunav. Ako se
                        lokacija nalazi na 450m od Farmaceutskog fakulteta, u radijusu od 500 m od dva vrtića, dva
                        supermarketa i u ulici sa niskim prometom saobraćaja, možemo reći da se zgrada nalazi na
                        dobroj
                        lokaciji.</p>
                </div>
            </div>
            <!-- <div class="col-sm-12 h-text">
                    
                </div> -->
            <!-- </div> -->
            <h4>Stanovi različitih struktura, od garsonjere do trosobnih.</h4>
            <div class="row g-0 proj-down">
                <div class="col-12 col-md-6 offset-md-6 h-txt">
                    <p class="text"><strong>Stanovi</strong> su tipa garsonjera, jednosobni, dvosobni i trosobni. Svi
                        stanovi imaju maksimalnu funkcionalnost i stambeni prostor je dobro iskorišćen.
                    </p>


                </div>
                <div class="col-12 col-md-4 justify-content-end h-txt">
                    <p class="text"><strong>Zajedničke prostorije </strong> će biti na raspolaganju stanarima
                        zgrade.<br><strong>Parkiranje</strong> je planirano ispred stambenog objekta i u
                        dvorištu stambenog objekta.
                    </p>
                </div>
            </div>
        </div>
    </secttion>
    <section id="stanovi">
        <div class="container">
            <h2>PONUDA STANOVA</h2>
            <h3><strong><i class="fas fa-map-marker-alt fa-2x"></i>&nbsp;&nbsp;Lokacija:</strong> Bolmanska 1, Novi Sad
            </h3>
            <?php foreach ($stanovi as $stan) : ?>
                <div class="row g-0 h-stan">
                    <div class="info-bar w-100">
                        <div class="col-7 img-activator">
                            <strong><?= esc($stan['tip'] . ' - ' . $stan['kvadratura']) ?>m²</strong>
                        </div>
                        <div class="col-5 align-self-center">
                            <div class="row justify-content-end">
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
                    <img class="img-stan" src="slike/stanovi/<?= esc($stan['ime']) ?>" alt="<?= esc($stan['tip']) ?>">
                    <div class="d-flex flex-row w-100 justify-content-center info-stan">
                        <div class="col-3 text-center">
                            <h4>SPRAT<span><?= esc($stan['sprat']) ?></span></h4>

                        </div>
                        <div class="col-3 text-center">
                            <h4>KVADRATURA<span><?= esc($stan['kvadratura']) ?>m²</span></h4>

                        </div>
                        <div class="col-3 text-center">
                            <h4>TIP STANA<span><?= esc($stan['tip']) ?></span></h4>

                        </div>
                        <div class="col-3 text-center">
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
                <a class="act-btn" href="tel:+38163557528">Pozovi <i class="fas fa-mobile-alt"></i></a>
            </div>
        </div>
    </section>
</main>
<div class="newstan">
    <h3>Novi stan</h3>
    <?= validation_list_errors() ?>
    <?php echo form_open_multipart('stan/register'); ?>
    <div class="d-flex flex-row">
        <div class="d-flex flex-row flex-wrap">
            <div class="form-group">
                <label>Broj</label> <?php $errors = validation_errors();
                                    if (isset($errors['broj'])): ?>
                    <p><?php echo validation_show_error('broj'); ?></p>
                <?php endif; ?>
                <input value="" type="text" id="broj" name="broj" class="form-control"
                    placeholder="Broj stana u objektu">
            </div>
            <div class="form-group"> <?php $errors = validation_errors();
                                        if (isset($errors['sprat'])): ?>
                    <p><?php echo validation_show_error('sprat'); ?></p>
                <?php endif; ?>
                <label>Sprat</label>
                <input value="" type="text" id="sprat" name="sprat" class="form-control" placeholder="Sprat stana">
            </div>
            <div class="form-group"> <?php $errors = validation_errors();
                                        if (isset($errors['kvadratura'])): ?>
                    <p><?php echo validation_show_error('kvadratura'); ?></p>
                <?php endif; ?>
                <label>Kvadratura</label>
                <input value="" type="text" id="kvadratura" name="kvadratura" class="form-control"
                    placeholder="Kvadratura stana">
            </div>
            <div class="form-group"> <?php $errors = validation_errors();
                                        if (isset($errors['cena'])): ?>
                    <p><?php echo validation_show_error('cena'); ?></p>
                <?php endif; ?>
                <label>Cena</label>
                <input value="" type="text" id="cena" name="cena" class="form-control" placeholder="Cena">
            </div>
            <div class="form-group"> <?php $errors = validation_errors();
                                        if (isset($errors['tip'])): ?>
                    <p><?php echo validation_show_error('tip'); ?></p>
                <?php endif; ?>
                <label>Tip</label>
                <input value="" type="text" id="tip" name="tip" class="form-control" placeholder="Tip stana, broj soba">
            </div>
            <div class="form-group">
                <div class="form-check"> <?php $errors = validation_errors();
                                            if (isset($errors['slobodan'])): ?>
                        <p><?php echo validation_show_error('slobodan'); ?></p>
                    <?php endif; ?>
                    <label>Slobodan</label>
                    <input class="form-check-input" type="checkbox" id="slobodan" name="slobodan" class="form-control"
                        placeholder="Da li je Slobodan">
                </div>
                <div class="form-check"> <?php $errors = validation_errors();
                                            if (isset($errors['rezervisano'])): ?>
                        <p><?php echo validation_show_error('rezervisano'); ?></p>
                    <?php endif; ?>
                    <label>Rezervisano</label>
                    <input class="form-check-input" type="checkbox" id="rezervisano" name="rezervisano"
                        class="form-control" placeholder="Da li je rezervisan">
                </div>
                <div class="form-check"> <?php $errors = validation_errors();
                                            if (isset($errors['prodato'])): ?>
                        <p><?php echo validation_show_error('prodato'); ?></p>
                    <?php endif; ?>
                    <label>Prodato</label>
                    <input class="form-check-input" type="checkbox" id="prodato" name="prodato" class="form-control"
                        placeholder="Da li je prodat">
                </div>
            </div>

            <div class="form-group d-flex flex-column">
                <label>Dodaj sliku</label>
                <input type="file" name="images" size="20">
            </div>
            <div class="form-group" id="zaslike">

            </div>
        </div>
        <div class="form-group ms-auto">
            <label></label>
            <button class="btn btn-primary" type="submit">SNIMI</button>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
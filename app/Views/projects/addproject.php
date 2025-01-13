<div class="editproject">
    <h3>NOvi projekt</h3>
    <?= validation_list_errors() ?>
    <?php echo form_open_multipart('projects/register'); ?>
    <div class="d-flex flex-row">
        <div class="d-flex flex-row flex-wrap">
            <div class="form-group">
                <?php $errors = validation_errors();
                if (isset($errors['adresa'])): ?>
                    <p><?php echo validation_show_error('adresa'); ?></p>
                <?php endif; ?>
                <label>Adresa</label>
                <input type="text" name="adresa" id="adresa" class="form-control"
                    value="<?php echo isset($project['adresa']) ? $project['adresa'] : '' ?>">
            </div>
            <div class="form-group">
                <?php if (isset($errors['naziv'])): ?>
                    <p><?php echo validation_show_error('naziv'); ?></p>
                <?php endif; ?>
                <label>Naziv</label>
                <input type="text" name="naziv" id="naziv" class="form-control"
                    value="<?php echo isset($project['naziv']) ? $project['naziv'] : '' ?>">
            </div>
            <div class="form-group">
                <?php if (isset($errors['objekat'])): ?>
                    <p><?php echo validation_show_error('objekat'); ?></p>
                <?php endif; ?>
                <label>Objekat</label>
                <input type="text" id="objekat" name="objekat" class="form-control"
                    value="<?php echo isset($project['objekat']) ? $project['objekat'] : '' ?>">
            </div>
            <div class="form-group">
                <?php if (isset($errors['lokacija'])): ?>
                    <p><?php echo validation_show_error('lokacija'); ?></p>
                <?php endif; ?>
                <label>Lokacija</label>
                <input type="text" id="lokacija" name="lokacija" class="form-control"
                    value="<?php echo isset($project['lokacija']) ? $project['lokacija'] : '' ?>">
            </div>
            <div class="form-group">
                <?php if (isset($errors['tipovi'])): ?>
                    <p><?php echo validation_show_error('tipovi'); ?></p>
                <?php endif; ?>
                <label>Tipovi</label>
                <input type="text" id="tipovi" name="tipovi" class="form-control"
                    value="<?php echo isset($project['tipovi']) ? $project['tipovi'] : '' ?>">
            </div>
            <div class="form-group">
                <?php if (isset($errors['parking'])): ?>
                    <p><?php echo validation_show_error('parking'); ?></p>
                <?php endif; ?>
                <label>Parking</label>
                <input type="text" id="parking" name="parking" class="form-control"
                    value="<?php echo isset($project['parking']) ? $project['parking'] : '' ?>">
            </div>
            <div class="form-group">
                <?php if (isset($errors['prostorije'])): ?>
                    <p><?php echo validation_show_error('prostorije'); ?></p>
                <?php endif; ?>
                <label>Prostorije</label>
                <input type="text" id="prostorije" name="prostorije" class="form-control"
                    value="<?php echo isset($project['prostorije']) ? $project['prostorije'] : '' ?>">
            </div>
            <div class="form-group">
                <?php if (isset($errors['novi'])): ?>
                    <p><?php echo validation_show_error('novi'); ?></p>
                <?php endif; ?>
                <label>Novi</label>
                <input type="text" id="novi" name="novi" class="form-control"
                    value="<?php echo isset($project['novi']) ? $project['novi'] : '' ?>">
            </div>
            <div class="form-group">
                <?php if (isset($errors['stanova'])): ?>
                    <p><?php echo validation_show_error('stanova'); ?></p>
                <?php endif; ?>
                <label>Stanova</label>
                <input type="text" id="stanova" name="stanova" class="form-control"
                    value="<?php echo isset($project['stanova']) ? $project['stanova'] : '' ?>">
            </div>
            <div class="form-group">
                <?php if (isset($errors['garaza'])): ?>
                    <p><?php echo validation_show_error('garaza'); ?></p>
                <?php endif; ?>
                <label>Garaza</label>
                <input type="text" id="garaza" name="garaza" class="form-control"
                    value="<?php echo isset($project['garaza']) ? $project['garaza'] : '' ?>">
            </div>
            <div class="form-group">
                <?php if (isset($errors['parkinga'])): ?>
                    <p><?php echo validation_show_error('parkinga'); ?></p>
                <?php endif; ?>
                <label>Parkinga</label>
                <input type="text" id="parkinga" name="parkinga" class="form-control"
                    value="<?php echo isset($project['parkinga']) ? $project['parkinga'] : '' ?>">
            </div>
            <div class="form-group">
                <?php if (isset($errors['poslovni'])): ?>
                    <p><?php echo validation_show_error('poslovni'); ?></p>
                <?php endif; ?>
                <label>Poslovni</label>
                <input type="text" id="poslovni" name="poslovni" class="form-control"
                    value="<?php echo isset($project['poslovni']) ? $project['poslovni'] : '' ?>">
            </div>
            <div class="form-group">
                <?php if (isset($errors['godina'])): ?>
                    <p><?php echo validation_show_error('godina'); ?></p>
                <?php endif; ?>
                <label>Godina</label>
                <input type="text" id="godina" name="godina" class="form-control"
                    value="<?php echo isset($project['godina']) ? $project['godina'] : '' ?>">
            </div>
            <div class="form-group d-flex flex-column justify-content-around">
                <label>Slike projekta</label>
                <input type="file" name="images[]" size="20" multiple>
            </div>
        </div>
        <div class="form-group ms-auto confirm-btn">
            <label></label>
            <button class="btn btn-primary" type="submit">SNIMI</button>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
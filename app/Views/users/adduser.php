<div class="newuser">
    <h3>Novi korisnik</h3>
    <?php if (session()->has('newuser')): ?>
        <?php $newuser = session()->get('newuser');
        echo $newuser->ime ?>
    <?php endif; ?>
    <?php echo form_open('users/register'); ?>
    <div class="d-flex flex-row">
        <div class="d-flex flex-row flex-wrap">
            <div class="form-group">
                <?php $errors = validation_errors();
                if (isset($errors['username'])): ?>
                    <p><?php echo validation_show_error('username'); ?></p>
                <?php endif; ?>
                <label>Korisničko ime</label>
                <input type="text" name="username" class="form-control" placeholder="Unesit Korisničko ime">
            </div>
            <div class="form-group">
                <?php if (isset($errors['password'])): ?>
                    <p><?php echo validation_show_error('password'); ?></p>
                <?php endif; ?>
                <label>Lozinka</label>
                <input type="password" name="password" class="form-control" placeholder="Unesit lozinku">
            </div>
            <div class="form-group">
                <?php if (isset($errors['password2'])): ?>
                    <p><?php echo validation_show_error('password2'); ?></p>
                <?php endif; ?>
                <label>Ponovljena lozinka</label>
                <input type="password" name="password2" class="form-control" placeholder="Ponovite lozinku">
            </div>
        </div>
        <div class="form-group ms-auto confirm-btn">
            <label></label>
            <button class="btn btn-primary" type="submit">SNIMI</button>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
<?= validation_list_errors() ?>
<?php echo form_open('users/register'); ?>

<div class="form-group">
    <label>Korisničko ime</label>
    <input type="text" name="username" class="form-control" placeholder="Unesit Korisničko ime">
</div>
<div class="form-group">
    <label>Lozinka</label>
    <input type="password" name="password" class="form-control" placeholder="Unesit lozinku">
</div>
<div class="form-group">
    <label>Ponovljena lozinka</label>
    <input type="password" name="password2" class="form-control" placeholder="Ponovite lozinku">
</div>
<button class="btn btn-primary" type="submit">Submit</button>
<?php echo form_close(); ?>
<div class="container backlight edit bigshadow">
    <?php echo form_open('users/login'); ?>
    <div class="row no-gutters">
        <div class="col-md-4 offset-md-4">
            <br>
            <h4>Ovu stranicu koriste samo ovlastena lica firme Pro-technology!!! Molimo vas vratite se na pocetnu
                stranicu klikom na ovaj link <a class="text-danger" href="<?php echo base_url(); ?>">Početna</a></h4>
            <br>
            <h2 class="text-center"><?php echo $title; ?> 22</h2>
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" class="form-control" required autofocus>
                <input type="password" name="password" placeholder="password" class="form-control" required autofocus>
                <button class="btn btn-default w-100" type="submit">Uloguj se</button>
            </div>
        </div>
    </div>
</div>

<?php echo form_close(); ?>
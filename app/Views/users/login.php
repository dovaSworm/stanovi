<div class="container backlight edit bigshadow">
    <!-- <img class="w-full" src="<?php echo base_url(); ?>slike/stan01.webp" alt=""> -->
    <div class="row no-gutters">
        <?= validation_list_errors() ?>
        <?php echo form_open('users/login'); ?>
        <div class="col-md-4 offset-md-4 text-blue-600">
            <br>
            <h4 class="text-blue-600">Ovu stranicu koriste samo ovlaštena lica firme TERMOMETAL!!! Molimo vas
                vratite se na početnu
                stranicu klikom na ovaj link <a class="text-danger" href="<?php echo base_url(); ?>">Početna</a></h4>
            <br>
            <h2 class="text-center"><?php echo $title; ?></h2>
            <div class="form-group">
                <?= \Config\Services::validation()->listErrors() ?>
                <?php if (isset($errors)): ?><h1> <?php echo 'ima' ?> </h1>
                <?php endif; ?>
                <input type="text" name="username" placeholder="Username" class="form-control" required autofocus>
                <input type="password" name="password" placeholder="password" class="form-control" autofocus>
                <button class="btn btn-default w-100" type="submit">Uloguj se</button>
            </div>
        </div>
        <?php echo form_close(); ?>
        <a href="<?php base_url(); ?>users/add">registracija</a>
    </div>
</div>
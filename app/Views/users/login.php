<div class="container">
    <div class="row g-0">
        <?php echo form_open('/users/login'); ?>
        <div class="col-8 offset-2 ">
            <br>
            <h4 class="">Ovu stranicu koriste samo ovlaštena lica firme TERMOMETAL!!! Molimo vas
                vratite se na početnu
                stranicu klikom na ovaj link <a class="text-danger" href="<?php echo base_url(); ?>">Početna</a></h4>
            <br>
            <h2 class="text-center"><?php echo $title; ?></h2>
            <div class="form-group col-md-6 m-auto">
                <?php
                $errors = validation_errors();
                if (isset($errors['username'])): ?>
                    <p><?php echo validation_show_error('username'); ?></p>
                <?php endif; ?>
                <input type="text" name="username" placeholder="Username" class="form-control mb-2" required autofocus>
                <?php
                if (isset($errors['password'])): ?>
                    <p><?php echo validation_show_error('password'); ?></p>
                <?php endif; ?>
                <input type="password" name="password" placeholder="password" class="form-control mb-2" autofocus>
                <button class="btn btn-primary w-100 mb-5" type="submit">Uloguj se</button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<script type="text/javascript">
    function getUserById() {
        let id = $('#getid').val();
        console.log(id);
        $.ajax({
            type: "GET",
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'xmlhttprequest'
            },
            data: {
                'id': id
            },
            url: "<?php echo site_url(); ?>users/getById/" + id,
            success: function(data) {
                console.log(data + 'dosao')
                getuser = JSON.parse(data)['getuser'];
                $('#ime').val(getuser['ime']);
                $('#getov').val(getuser['id']);
                $('#sifra').val(getuser['sifra']);
                $('#uloga').val(getuser['uloga']);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
<div class="edituser">
    <h3>Izmeni korisnika</h3>
    <?= validation_list_errors() ?>
    <div class="form-group col-md-6">
        <select class="form-control" id="getid" name="getid" onChange="getUserById()">
            <?php foreach ($users as $usr) : ?>
                <option value="<?php echo $usr['id']; ?>"><?php echo $usr['ime']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <?php echo form_open('users/edit'); ?>
    <div class="d-flex flex-row">
        <div class="d-flex flex-row flex-wrap">
            <div class="form-group">
                <input id="getov" type="hidden" name="getov" class="form-control"
                    value="<?php echo isset($getovid) ? $getovid : '' ?>">
                <?php $errors = validation_errors();
                if (isset($errors['ime'])): ?>
                    <p><?php echo validation_show_error('ime'); ?></p>
                <?php endif; ?>
                <label>Korisničko ime</label>
                <input type="text" id=ime name="ime" class="form-control"
                    value="<?php echo isset($getuser->ime) ? $getuser->ime : '' ?>">
            </div>
            <div class="form-group">
                <?php if (isset($errors['sifra'])): ?>
                    <p><?php echo validation_show_error('sifra'); ?></p>
                <?php endif; ?>
                <label>Lozinka</label>
                <input type="text" id="sifra" name="sifra" class="form-control"
                    value="<?php echo isset($getuser->sifra) ? $getuser->sifra : '' ?>">
            </div>
            <div class="form-group">
                <?php if (isset($errors['novasifra'])): ?>
                    <p><?php echo validation_show_error('novasifra'); ?></p>
                <?php endif; ?>
                <label>Nova lozinka</label>
                <input type="text" name="novasifra" id="novasifra" class="form-control"
                    value="<?php echo isset($getuser->novasifra) ? $getuser->novasifra : '' ?>">
            </div>
            <div class="form-group">
                <?php if (isset($errors['uloga'])): ?>
                    <p><?php echo validation_show_error('uloga'); ?></p>
                <?php endif; ?>
                <label>Uloga</label>
                <input type="text" id="uloga" name="uloga" class="form-control"
                    value="<?php echo isset($getuser->uloga) ? $getuser->uloga : '' ?>">
            </div>
        </div>
        <div class="form-group ms-auto confirm-btn">
            <label></label>
            <button class="btn btn-primary" type="submit">SNIMI</button>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
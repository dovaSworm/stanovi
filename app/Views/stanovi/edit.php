<script type="text/javascript">
    function getStanById() {
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
            url: "<?php echo site_url(); ?>stan/getById/",
            success: function(data) {
                console.log(data);
                $("#zaslike").empty();
                $('#slobodan').prop('checked', false);
                $('#rezervisano').prop('checked', false);
                $('#prodato').prop('checked', false);
                getstan = JSON.parse(data)['getstan'];
                $('#getovidstana').val(getstan['id']);
                $('#broj').val(getstan['broj']);
                $('#sprat').val(getstan['sprat']);
                $('#kvadratura').val(getstan['kvadratura']);
                $('#tip').val(getstan['tip']);
                $('#cena').val(getstan['cena']);
                console.log(typeof getstan['slobodan']);
                if (getstan['slobodan'] == 1) {
                    $('#slobodan').prop('checked', true);
                }
                if (getstan['rezervisano'] == 1) {
                    $('#rezervisano').prop('checked', true);
                }
                if (getstan['prodato'] == 1) {
                    $('#prodato').prop('checked', true);
                }
                var slika = getstan['slikeList'];
                if (slika != null) {
                    $("#zaslike").empty();
                    $("#zaslike").append('<label>Slika</label>');
                    let name = slika.substring(0, slika.lastIndexOf('.') + 4);
                    let idslike = slika.substring(slika.lastIndexOf('.') + 4, slika.length);
                    $("#zaslike").append(
                        '<div class=\"img-holder\"><input type=\"text\" name=\"slika' +
                        idslike +
                        '\" id="slika' + idslike +
                        '\" class=\"form-control\" value=\"' + name + '\">' +
                        '<a onClick="getSlike(' + idslike +
                        ')" class=\"btn btn-danger\">OBRISI</a></div>');
                }
            },
            error: function(data) {
                console.log(data);
            }
        });
    }

    function getSlike(slikaid) {
        console.log("klikno " + slikaid);
        $.ajax({
            type: "POST",
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'xmlhttprequest'
            },
            data: {
                'id': slikaid,
            },
            url: "<?php echo site_url(); ?>stan/deleteslika/" + slikaid,
            success: function(data) {
                $("#zaslike").empty();
                getstan = JSON.parse(data)['getstan'];
                var slika = getstan['slikeList'];
                if (slika != null) {
                    $("#zaslike").empty();
                    $("#zaslike").append('<label>Slika</label>');
                    let name = slika.substring(0, slika.lastIndexOf('.') + 4);
                    let idslike = slika.substring(slika.lastIndexOf('.') + 4, slika.length);
                    $("#zaslike").append(
                        '<div class=\"img-holder\"><input type=\"text\" name=\"slika' +
                        idslike +
                        '\" id="slika' + idslike +
                        '\" class=\"form-control\" value=\"' + name + '\">' +
                        '<a onClick="getSlike(' + idslike +
                        ')" class=\"btn btn-danger\">OBRISI</a></div>');
                }
                console.log($("#zaslike").html());
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
<div class="editstan">
    <h3>Izmeni stan</h3>
    <?= validation_list_errors() ?>
    <div class="form-group col-md-6">
        <select class="form-control" id="getid" name="getid" onChange="getStanById()">
            <?php foreach ($stanovi as $stan) : ?>
                <option value="<?php echo isset($stan['id']) ? $stan['id'] : '' ?>">
                    <?php echo $stan['broj'] . " " . $stan['tip'] . " " . $stan['kvadratura']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <?php echo form_open_multipart('stan/edit'); ?>
    <div class="d-flex flex-row">
        <div class="d-flex flex-row flex-wrap">
            <div class="form-group">
                <input type="hidden" name="getovidstana" id="getovidstana" class="form-control" value="">
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
        <div class="form-group ms-auto confirm-btn">
            <label></label>
            <button class="btn btn-primary" type="submit">SNIMI</button>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
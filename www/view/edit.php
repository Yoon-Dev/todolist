<div class="container text-center marg-contain">
    <div class="row">
        <div class="col-12 d-flex justify-content-end add-btn mb-2 right">
            <a class="list" href="#"><img src="./img/icone/back-btn.svg" alt=""></a>
        </div>
        <div class="col-12 form-style">
            <form>
                <fieldset>
                    <a class="lien-select-form" href="#repe">edit</a>
                    <div class="row">
                        <div class="col-xl-3 text-center">
                            <label for="nom"><span>Nom</span><span class="required">*</span><br><input type="text" class="input-form input-field" name="nom" value=""></label>
                        </div>
                        <div class="col-xl-3 text-center">
                            <label for="detail"><span>Detail</span><br><textarea class="input-form textarea-field" name="detail"></textarea></label>
                        </div>
                        <div class="col-xl-3 text-center">
                            <label for="limite"><span>Limite</span><span class="required">*</span><br><input type="date" id="date" name="limite" value=""></label>
                        </div>
                        <div class="col-xl-3 text-center">
                            <label for="types"><span>Type</span><span class="required">*</span><br>
                                <select id="edit" name="types" class="input-form select-field">
                                </select>
                            </label>
                        </div>
                        <input type="hidden" name="id" value="">
                    </div>
                    <div class="row mt-5">
                        <div class="col-xl-12 text-center">
                            <label for="tache_edit"><input class="sub-btn" type="submit" value="submit" name="tache_edit"></label>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

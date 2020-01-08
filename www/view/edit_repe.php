<div class="container text-center">
    <div class="row">
        <div class="col-12 d-flex justify-content-end add-btn mb-2 righ">
            <a class="backoffice" href="#"><img class="mr-3" src="./img/icone/back-btn.svg" alt=""></a>
        </div>
        <div class="col-12 form-style">
            <form>
                <fieldset>
                    <a class="lien-select-form" href="#repe">edit</a>
                    <div class="row">
                        <div class="col-xl-3 text-center">
                            <label for="nom_repe"><span>Nom</span><span class="required">*</span><br><input type="text" class="input-form input-field" name="nom_repe" value=""></label>
                        </div>
                        <div class="col-xl-3 text-center">
                            <label for="detail_repe"><span>Detail</span><br><textarea class="input-form textarea-field" name="detail_repe"></textarea></label>
                        </div>
                        <div class="col-xl-3 text-center">
                            <label for="repe_jour"><span>Jour</span><span class="required">*</span><br>
                            <select class="input-form select-field multiselect" name="repe_jour" id="multiselect_repe" multiple="multiple">
                                <option value="Mon">Mon</option>
                                <option value="Tue">Tue</option>
                                <option value="Wed">Wed</option>
                                <option value="Thu">Thu</option>
                                <option value="Fri">Fri</option>
                                <option value="Sat">Sat</option>
                                <option value="Sun">Sun</option>
                            </select>
                            </label>
                        </div>
                        <div class="col-xl-3 text-center">
                            <label for="types_repe"><span>Type</span><span class="required">*</span><br>
                                <select id="types" name="types_repe" class="input-form select-field">
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

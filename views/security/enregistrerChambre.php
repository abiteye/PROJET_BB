<style>@import url("<?=BASE_URL?>/public/css/enregistrer_chambre.css");</style>

<form method="POST" action="<?=BASE_URL?>/Gestionnaire/enregistrer" class="form">

                <div class="form-group ml-5">
                    <label for="batiment" class="">Numéro de batiment</label>
                    <input type="text" name="numDep" id="batiment" placeholder="00" class="form-control col-3">
                    <small class="error-form" id="error_numero"></small>
                </div>

                <div class="form-group ml-5">
                    <label for="type" class="">Type</label>
                        <select name="type" id="type" class="form-control col-3">
                            <option value="" selected></option>
                            <option name="individuel" value="individuel" id="individuel">Individuel</option>
                            <option name="a_deux" value="double" id="a_deux">Double</option>
                        </select>
                </div>
                <div class="label_input">
                    <button type="submit" name="btn_save" id="enregistrer" class="btn btn-primary">Enregistrer</button>
                </div>
</form>
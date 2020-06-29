<style>@import url("<?=BASE_URL?>/public/css/gestion_etudiant.css");</style>

        <article class="col-md">
            <div class="rechercher">
                <label for="rechercher" class="rechercher_label">Rechercher</label>
                <input type="text" class="form-control" id="recherche" placeholder="Search..">
            </div>
        </article>

            <div id="scrollZone" class="col">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>Matricule</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Telephone</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        
            <?php
            foreach(@$etudiant as $key => $value){
            ?>

                <tr class="text-center">
                    <td><?= $value->getMatricule(); ?></td>
                    <td><?= $value->getPrenom(); ?></td>
                    <td><?= $value->getNom(); ?></td>
                    <td><?= $value->getTelephone(); ?></td>
                    <td><button type="button" class="btn btn-outline-primary"id="mdf">Modify</button></td>
                    <td><input type="hidden" value="<?=$value->getId();?>"></td>
                </tr>

            <?php
            }
            ?>
                        
                    </tbody>
                </table>
            </div>
            <div class="col-6 m-auto">
                <nav aria-label="...">
                    <ul class="pagination text-success">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Précédent</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Suivant</a>
                        </li>
                    </ul>
                </nav>            
            </div>   
            
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>            
<script>
$(document).ready(function(){

  $("#recherche").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

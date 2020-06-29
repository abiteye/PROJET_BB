<style>@import url("<?=BASE_URL?>/public/css/style-defaut.css");</style>

<div id="scrollZone" class="col">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>Matricule</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Téléphone</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
            <?php
            foreach(@$etudiant as $key => $value){
            ?>

                <tr class="text-center">
                    <td><?= $value->getMatricule();?></td>
                    <td><?= $value->getPrenom();?></td>
                    <td><?= $value->getNom();?></td>
                    <td><?= $value->getTelephone();?></td>
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
        <ul class="pagination">
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
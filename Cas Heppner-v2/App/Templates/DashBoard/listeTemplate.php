<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Tableau de bord</a>
    </li>
</ol>


<div class="row">

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-globe"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\ClientModel::count(); ?> clients</div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-globe"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\VehiculeModel::count(); ?> véhicules</div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-globe"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\ConducteurModel::count(); ?> conducteurs</div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-globe"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\DevisModel::getDevisValide(); ?> devis à réaliser </div>

            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-globe"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\TrajetModel::getConducteurNonLibre(); ?> Conducteurs actuellement en déplacement</div>

            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-globe"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\ConducteurModel::count() - \App\M\TrajetModel::getConducteurNonLibre(); ?> Conducteurs actuellement disponible !</div>

            </div>
        </div>
    </div>
    </div>
<div>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Listes</a>
            </li>
        </ol>


    <?php

    echo '<div class="card mb-3">
            <div class="card-header"><i class="fa fa-table"></i>  Liste des conducteurs</div>
                <div class="card-body">
                    <div class="table-responsive">';
    echo '      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
    echo '      <thead><th>Nom</th><th>Prenom</th><th>Date d\'embauche</th><th>Date de naissance</th><th>Date de sortie</th></tr></thead><tbody>';

    // Contenu du tableau
    foreach($this->getConducteursLibre() as $conducteur){
        echo '<tr>';

        echo '<td>',$conducteur->getNom(),'</td>';
        echo '<td>',$conducteur->getPrenom(),'</td>';
        echo '<td>',$conducteur->getDateEmbauche(),'</td>';
        echo '<td>',$conducteur->getDateNaissance(),'</td>';
        echo '<td>',$conducteur->getDateSortie(),'</td>';

        echo '</tr>';
    }

    // Fin du tableau et des cadres
    echo '      </tbody>
            </table>
            </div>
            </div>
     </div>';
    ?>

</div>


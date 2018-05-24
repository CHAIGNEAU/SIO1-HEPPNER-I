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
                    <i class="fa fa-fw fa-users"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\ClientModel::count(); ?> clients</div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-truck"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\VehiculeModel::count(); ?> véhicules</div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-user"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\ConducteurModel::count(); ?> conducteurs</div>
            </div>
        </div>
    </div>





</div>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Comptabilité</a>
    </li>
</ol>
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-book "></i>
                </div>
                <div class="mr-5"><?php echo \App\M\DevisModel::getDevisValide(); ?> devis à réaliser </div>

            </div>
        </div>
    </div>
    <!--
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-euro "></i>
                </div>
                <div class="mr-5">chiffre d'affaire du jour: <?php echo 'non traité'; ?></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-euro "></i>
                </div>
                <div class="mr-5">chiffre d'affaire du mois: <?php echo 'non traité'; ?></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-euro"></i>
                </div>
                <div class="mr-5">chiffre d'affaire moyen par client cette semaine-ci: <?php echo 'non traité'; ?></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-euro"></i>
                </div>
                <div class="mr-5">chiffre d'affaire moyen par client ce mois-ci: <?php echo 'non traité'; ?></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-euro"></i>
                </div>
                <div class="mr-5">Coût moyen pour une tonne sur un kilomètre: <?php echo 'non traité'; ?></div>
            </div>
        </div>
    </div>
    -->
</div>



<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Gestion des véhicules </a>
    </li>
</ol>
<div class="row">
    <!--
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-truck "></i>
                </div>
                <div class="mr-5">Nombre de véhicules par catégorie : <?php echo 'non traité'; ?> </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-road "></i>
                </div>
                <div class="mr-5">Kilométrage moyen de chaque véhicule : <?php echo 'non traité'; ?> </div>
            </div>
        </div>
    </div>
    -->
</div>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Gestion des trajets </a>
    </li>
</ol>
<div class="row">

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-road "></i>
                </div>
                <div class="mr-5"> Plus longue distance réalisé (Km) : <?php echo \App\M\DemandeTransportModel::getTrajetPlusLong(); ?>  </div>
            </div>
        </div>
    </div>
    <!--
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-road "></i>
                </div>
                <div class="mr-5">Nombre de kilomètres parcourus aujourd'hui : <?php echo 'non traité'; ?> </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-road "></i>
                </div>
                <div class="mr-5">Nombre de kilomètres parcourus ce mois-ci : <?php echo 'non traité'; ?> </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-map-marker "></i>
                </div>
                <div class="mr-5">Trajet d'une ville à un autre le plus souvent réalisé : <?php echo 'non traité'; ?> </div>
            </div>
        </div>
    </div>
    -->
</div>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Gestion des conducteurs </a>
    </li>
</ol>
<div class="row">

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-check "></i>
                </div>
                <div class="mr-5"><?php echo \App\M\TrajetModel::getConducteurNonLibre(); ?> Conducteurs actuellement en déplacement</div>

            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-times "></i>
                </div>
                <div class="mr-5"><?php echo \App\M\ConducteurModel::count() - \App\M\TrajetModel::getConducteurNonLibre(); ?> Conducteurs actuellement non affectés à un trajet </div>

            </div>
        </div>
    </div>

</div>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Listes</a>
    </li>
</ol>
<div class="row">
    <!--
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-balance-scale  "></i>
                </div>
                <div class="mr-5">Poids transporté par type de marchandise : <?php echo 'non traité'; ?> </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-road "></i>
                </div>
                <div class="mr-5">Kilométrage moyen de chaque véhicule : <?php echo 'non traité'; ?> </div>
            </div>
        </div>
    </div>
    -->
    <div class="col-xl-12 col-sm-6 mb-3">
        <div class="card-header"><i class="fa fa-table"></i>  Nombre de véhicules par catégorie </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            </div>
            <?php
            // Contenu du tableau
            foreach($this->getNbVehicules() as $unElement){
                echo '<tr>';

                echo '<td>',$unElement['categorie']->getLibelle(),'</td>';
                echo '<td>',$unElement['nbVehicules'].'</td>';

                echo '</tr>';
            }
            ?>
            </table>
        </div>
    </div>
</div>
</div>
<div class="col-xl-12 col-sm-6 mb-3">
    <div class="card-header"><i class="fa fa-table"></i>  Liste des conducteurs actuellement non affectés à un trajet </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead><th>Nom</th><th>Prenom</th><th>Date d\'embauche</th><th>Date de naissance</th><th>Date de sortie</th></tr></thead><tbody>
                <?php
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
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
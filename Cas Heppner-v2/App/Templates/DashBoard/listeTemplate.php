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
<!--
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-globe"></i>
                </div>
                <div class="mr-5"><?php //echo \App\M\TrajetModel::getConducteurNonLibre(); ?> Conducteurs actuellement en déplacement</div>

            </div>
        </div>
    </div>
    -->
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

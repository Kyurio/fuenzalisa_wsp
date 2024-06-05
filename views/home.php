<div class="container mt-5">
    <h2 class="mb-4">Formulario de Solicitud</h2>
    <form id="form-step">

        <!-- Progress Indicator -->
        <div class="position-relative m-4 mt-5 mb-5">
            <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
                <div id="progress-bar" class="progress-bar" style="width: 0%;"></div>
            </div>
            <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill step-indicator" style="width: 2rem; height:2rem;">1</button>
            <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-secondary rounded-pill step-indicator" style="width: 2rem; height:2rem;">2</button>
            <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill step-indicator" style="width: 2rem; height:2rem;">3</button>
        </div>

        <!-- Step 1: Datos Personales -->
        <div class="step active">
            <h4>Datos Personales</h4>
            <?php include 'components/form/FormDatosPersonales.php' ?>
        </div>

        <!-- Step 2: Datos de Solicitud -->
        <div class="step">
            <h4>Datos de Solicitud</h4>
            <?php include 'components/form/FormDatosSolicitud.php' ?>
        </div>

        <!-- Step 3: Confirmación y Envío -->
        <div class="step">
            <h4>Confirmación y Envío</h4>
            <?php include 'components/form/FormConfirmacionEnvios.php' ?>
        </div>

    </form>
</div>
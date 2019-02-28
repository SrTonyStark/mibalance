<div class="container-fluid">
    <div class="row">
        <h2 class="text-center col-12">Error en el usuario o contraseña</h2>
        <p class="col-4"></p>
        <button id="botonError" class="btn btn-block morado col-4" type="submit" style="color : white;">Haga click aquí para reintentar</button>    
    </div>
</div>

<script>
    $('#botonError').click(function () {
        $('#principal').load('index.php');
        
    });
</script>

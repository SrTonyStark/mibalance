<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h3><i class="fa fa-user fa-4x"></i></h3>
                        <h2 class="text-center">Login</h2>
                        <p>Inicia sesión.</p>
                        <div class="panel-body">
                            <!--<form id="register-form" role="form" autocomplete="off" class="form" method="post">-->
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>
                                        <input id="cajaNombre"  placeholder="ID" class="form-control"  type="name">                          
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>
                                        <input id="cajaPassword"  placeholder="Contraseña" class="form-control"  type="password">                          
                                    </div>
                                </div>                                
                                <input type="hidden" class="hide" name="token" id="token" value="">                                
                                <div class="form-group">
                                    <input id="botonAcceder" class="btn btn-lg btn-block btn-morado" value="Login" type="submit">
                                </div>
                            <!--</form>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="prueba"></div>



<script>
    $('#botonAcceder').click(function () {
        //leo el contenido de las cajas de nombre y contraseña.
        var _cajaNombre = $('#cajaNombre').val();
        var _cajaPassword = $('#cajaPassword').val();

        $('#principal').load('login.php', {
            cajaNombre: _cajaNombre,
            cajaPassword: _cajaPassword
        });
    });
</script>

<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Forgot Password?</h2>
                        <p>Recupera tu contraseña.</p>
                        <div class="panel-body">

                            <form id="register-form" autocomplete="off" class="form" method="post">

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                        <input id="correo" name="email" placeholder="Email" class="form-control"  type="email">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase color-blue"></i></span>
                                        <input id="password" name="password-new" placeholder="Contraseña" class="form-control"  type="password">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase color-blue"></i></span>
                                        <input id="confirmacion_password" name="password-new-verify" placeholder="Actualiza tu contraseña" class="form-control"  type="password">
                                    </div>
                                </div>
                                <div class="input-group">
                                    <button id="botonForgot" class="btn btn-lg btn-block btn-morado" style="color: white">Recupera tu contraseña</button>
                                </div>

                                <input type="hidden" class="hide" name="token" id="token" value=""> 
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#botonForgot').click(function () {
        //Leo el contenido de todas las cajas para luego poder jugar con su contenido 
        var _cajaCorreo = $('#correo').val();
        var _cajaPassword = $('#password').val();
        var _cajaPassword2 = $('#confirmacion_password').val();

        //Si las cajas no son igual debe de saltar una alerta
        if (_cajaPassword !== _cajaPassword2)
        {
            alert('La contraseña no coincide, por favor, vuelve a intentarlo');
            return false;
        } else {
            console.log("Actualizando contraseña");
            $('#botonForgot').load("forgotPassword.php", {
                cajaPassword: _cajaPassword,
                cajaCorreo: _cajaCorreo
            });
        }
    });
</script>

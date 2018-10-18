<?php
require '../negocio/numeroAleatorios.clase.php';
require_once '../util/funciones/definiciones.php';

require_once '../negocio/sesion.clase.php';

$obj = new numeroAleatorios();
$ar = $obj->numeroAleatorio();

if (isset($_COOKIE["S"])){
    $dni = $_COOKIE["S"];
} else {
    $dni = "";
}


?>

<!DOCTYPE html>
<html>    
    
    <script type="text/javascript">
        function clave(numero) {
            if (numero == 11) {
                document.form.txtclave.value = "";
            } else {
                document.form.txtclave.value += numero;
                alert(numero);
                document.form.entrar.focus();
            }
            return;
        }</script>

    
    <head>
        <meta charset="UTF-8">
        <title><?php echo C_NOMBRE_SOFTWARE; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="../util/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="../util/lte/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../util/lte/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="../util/lte/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
        <!-- box-msg -->
        <link href="../util/bootstrap/css/box-msg.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><h3><?php echo C_NOMBRE_SOFTWARE; ?></h3></a>
            </div><!-- /.login-logo -->

            <div class = "row">
                <div class = "col-xs-3">
                    <div class="login-box-image">
                        <img src="../imagenes/logo2.jpg" style="width: 100%; height: 474px"/>
                    </div>
                </div>
                <div class = "col-xs-1">
                </div>
                <div class = "col-xs-4">
                    <div class="login-box-body">
                        <p class="login-box-msg">
                            Ingrese sus datos para iniciar sesión</p>

                        <form action="../controlador/sesion.iniciar.controlador.php" method="post" role="form" name="form" action="login.php" method="post">
                              <td whi> 
                            <form class="form-signin" role="form" name="form" action="login.php" method="post">
                                <h2 class="form-signin-heading">Inicio de Sesion</h2>
                                <input type="email" class="form-control" placeholder="Email address" id="txtdni" name="txtdni" value="<?php echo $dni ?>" required autofocus>
                                <br>
                                <input type="label" class="form-control" placeholder="Password" name="txtclave" required readonly="false">
                                <label class="checkbox">
                                    <input type="checkbox" value="S" name="chkRecordar"> Recordar
                                </label>
                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="entrar">Entrar</button>
                            </form>
                        </td>
                        
<!--                            <div class="form-group has-feedback">
                                <input type="email" class="form-control" placeholder="Usuario" autofocus="" name="txtusuario" required="" value="<?php echo $loginUsuario; ?>" />
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" placeholder="Contraseña" name="txtclave"/>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>-->

                            <!--codigo captcha-->
                            <td>
                            <form action="index.php" method="post" name="formulario" class="form-signin">
                                <!--<input type="text" name="campo" size="21"><br>-->
                                <input onclick="clave('<?php echo $ar[1];?>');" type="button" value="<?php echo $ar[1];?>" name="1" class="btn btn-lg">
                                <input onclick="clave('<?php echo $ar[2];?>');" type="button" value="<?php echo $ar[2];?>" name="2" class="btn btn-lg">
                                <input onclick="clave('<?php echo $ar[3];?>');" type="button" value="<?php echo $ar[3];?>" name="3" class="btn btn-lg"><br>
                                <input onclick="clave('<?php echo $ar[4];?>');" type="button" value="<?php echo $ar[4];?>" name="4" class="btn btn-lg">
                                <input onclick="clave('<?php echo $ar[5];?>');" type="button" value="<?php echo $ar[5];?>" name="5" class="btn btn-lg">
                                <input onclick="clave('<?php echo $ar[6];?>');" type="button" value="<?php echo $ar[6];?>" name="6" class="btn btn-lg"><br>
                                <input onclick="clave('<?php echo $ar[7];?>');" type="button" value="<?php echo $ar[7];?>" name="7"class="btn btn-lg">
                                <input onclick="clave('<?php echo $ar[8];?>');" type="button" value="<?php echo $ar[8];?>" name="8"class="btn btn-lg">
                                <input onclick="clave('<?php echo $ar[9];?>');" type="button" value="<?php echo $ar[9];?>" name="9" class="btn btn-lg"><br>
                                <input onclick="clave('<?php echo $ar[10];?>');" type="button" value="<?php echo $ar[10];?>" name="0" class="btn btn-lg">
                                <input onclick="clave('11');" type="button" value="Limpiar" name="Limpiar" class="btn btn-lg">
                                <!--<input type="reset" value="Borrar" name="borrar" class="btn btn-lg btn-primary btn-sm">-->
                            </form>
                            </div>
                        </td>


<!--                            <script src="../util/jquery/jquery.min.js"></script>
<script>
                    $(document).ready(function () {
                        alert($("#btncaptcha").text());
                    });
</script>
                            <!--fin codigo captcha-->

<!--                            <div class="row">
                                <div class="col-xs-8">
                                    <div class="checkbox icheck">
                                        <label>
                                            <input type="checkbox" name="chkrecordar" value="S"> Recordar datos
                                        </label>
                                    </div>
                                </div> /.col 
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-success btn-block btn-flat">Ingresar</button>
                                </div> /.col 
                            </div>-->
                        <!--</form>-->
                        <a href="#">Recuperar Contraseña</a><br>
                    </div><!-- /.login-box-body -->
                </div>
            </div>

        </div><!-- /.login-box -->

        <div class="box-footer">
            El acceso proporciona información de carácter CONFIDENCIAL, por esta razón durante la sesión, todas las acciones del usuario pueden AUDITADAS; es decir, se generarán reportes de uso y son de responsabilidad absoluta del usuario. No debe compartir su usuario ni contraseña, ni proporcionar información a personas ajenas a estas, toda consulta deberá ser realizada mediante documentación sustentatoria. El USUARIO y CONTRASEÑA son personales e intransferibles. Tome sus medidas de seguridad.
        </div>

        <!-- jQuery 2.1.3 -->
        <script src="../util/jquery/jquery.min.js"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="../util/bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="../util/lte/plugins/iCheck/icheck.js" type="text/javascript"></script>
        <script>
                                            $(function () {
                                                $('input').iCheck({
                                                    checkboxClass: 'icheckbox_square-blue',
                                                    radioClass: 'iradio_square-blue',
                                                    increaseArea: '20%' // optional
                                                });
                                            });
        </script>
    </body>
</html>
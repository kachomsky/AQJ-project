<!DOCTYPE html>
<html>
  <?php include __DIR__."/head.html"; ?>
  <body>

    <?php include __DIR__."/header.php"; ?>

    <?php if(isset($_SESSION['user'])): ?>

    <form id="register-form" role="form" autocomplete="off">
      <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form">
              <h2>Alta de administrador <small>- Rellena todos los campos</small></h2>
              <hr class="colorgraph">
              
              <div class="col-xs-12 col-sm-6 col-md-6"></div>
              
              <div class="form-group">
                <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Nombre" tabindex="4">
                <span class="help-block" id="error"></span>
              </div>

              <div class="form-group">
                <input type="text" name="ciudad" id="ciudad" class="form-control input-lg" placeholder="Ciudad" tabindex="4">
                <span class="help-block" id="error"></span>
              </div>

              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="4">
                <span class="help-block" id="error"></span>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña" tabindex="5">
                    <span class="help-block" id="error"></span>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="password" name="cpassword" id="password_confirmation" class="form-control input-lg" placeholder="Confirma contraseña" tabindex="6">
                    <span class="help-block" id="error"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3">
                  <span class="button-checkbox">
                    <button type="button" class="btn" data-color="info" tabindex="7">De acuerdo</button>
                                <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
                  </span>
                </div>
                <div class="col-xs-8 col-sm-9 col-md-9">
                   Haciendo click en <strong class="label label-primary">Registrar</strong>, estas aceptando los <a href="#" data-toggle="modal" data-target="#t_and_c_m">Términos y condiciones</a> de este sitio web, incluido el uso de las cookies.
                </div>
              </div>
              
              <hr class="colorgraph">
              <div class="row">
                <div class="col-xs-12 col-md-6"><input type="submit" value="Registrar" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                
              </div>
            </form>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
              </div>
              <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        </div>
      </form>

      <?php else:
              echo "Debes iniciar sesión para ver este contenido.";
              endif;
      ?>
      <?php
        include __DIR__.'/footer.html';
      ?>

  </body>
</html>

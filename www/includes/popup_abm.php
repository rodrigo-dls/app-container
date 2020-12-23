<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
    ABM
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ABM Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group form-inline">
                <label for="phoneNumber">Número de teléfono</label>
                <div class="ABM-form__phone-number">
                    <span>+</span>
                    <input type="number" class="form-control" id="phoneNumberPrefix" placeholder="34">
                    <input type="tel" class="form-control" id="phoneNumber" aria-describedby="phoneHelp" placeholder="123 123 123">
                </div>
                <!-- <small id="phoneHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <button type="button" onclick="getInputValue();" id="ABM-form__accept-phone-number" class="btn btn-primary">Aceptar</button>
        </form>
      </div>
      
      <div class="modal-footer modal-footer-site">

        <div class="modal-footer-site--step-1">
            <div class="form-group mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">Password</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary mb-2" id="ABM-form__check-code">Verificar código</button>
        </div>

        <div class="modal-footer-site--step-2">
            <div class="form-group">
                <label for="exampleInputEmail1">Que queres hacer?</label>
                <button type="submit" class="btn btn-primary" id="create-item">
                  Agregar un nuevo servicio
                </button>
                <button type="submit" class="btn btn-primary" id="edit-item">
                  Modificar/Eliminar
                </button>
                <!-- <a href="./edit-item.php?telefono=<?php echo $row['telefono']?>">
                  Modificar item
                </a> -->
            </div>
        </div>
        
      </div>

    </div>
  </div>
</div>


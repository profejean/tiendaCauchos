<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$a->id}}">

  {{Form::Open(array('action'=>array('ProductoController@destroy',$a->id),'method'=>'delete'))}}
           
           <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">¿Eliminar el Producto?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                  <span aria-hidden="true">x</span>
                  
                </button>
              </div>

              <div class="modal-body">
                <p>Confirme si desea eliminar el producto</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

                <button type="submit" class="btn btn-danger">Confirmar</button>


              </div>
            </div>
           </div>
     
     {{Form::Close()}}
  
</div>
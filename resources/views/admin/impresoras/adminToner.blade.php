<div class="modal fade" id="modalAdministrarToner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Administrar toner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div>
            <form method="post" id="adminToner">
              @csrf
              <div class="form-inline">
                <label for="">Modelo</label>
                <input type="text" class="ml-3 form-control" name="modelo">
                <button class="btn btn-success"><i class="fa fa-plus-circle"></i></button>
              </div>
            </form>
          </div>

          <hr>

      </div>

    </div>
  </div>
</div>


<script>
  $("#adminToner").submit(function(){
    event.preventDefault();
    $.ajax({
      type:"POST",
      url: "{{route('cartucho.store')}}",
      data:$("#adminToner").serialize(),
      success:function(resp){
        $.each(resp, function(llave,valor){
          if(valor==1){
            swal({
                  title: "Correcto",
                  text: "Se agregó la impresora",
                  icon: "success",
                  button: "OK",
                });
            setTimeout(function(){
              location.reload()
            },2000)
          }else{
            swal({
              title: "Error",
              text: "Ocurrió un error:, "+valor.error,
              icon: "error",
              button: "OK",
            });
          console.warn(valor)
          }
        })
      },
      error:function(err){
        console.error(err)
      }
    })
  })
</script>

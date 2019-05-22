<div class="modal fade" id="modalAgregarToner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Catálogo de toner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div>
            <form method="post" id="agregarToner">
              @csrf
              <div class="form-inline">
                <label for="">Modelo</label>
                <input type="text" class="ml-3 form-control mr-3" name="modelo">
                <label for="">Cantidad</label>
                <input type="number" min="0" class="ml-3 form-control" name="cantidad" value="1">
                <button class="btn btn-success"><i class="fa fa-plus-circle"></i></button>
              </div>
            </form>
          </div>

          <hr>
        <table class="table table-striped" id="catalogoToner">
          <thead>
            <th>ID</th>
            <th>Modelo</th>
            <th>Cantidad</th>
            <th></th>
          </thead>
          <tbody>
            @isset($listadoToner)
              @forelse ($listadoToner as $toner)
                <tr>
                  <td>{{$toner->id_cartucho}}</td>
                  <td>{{$toner->modelo}}</td>
                  <td>{{$toner->cantidad}}</td>
                  <td><button class="btn btn-warning"><i class="fa fa-plus-circle"></i>/<i class="fa fa-minus-circle"></i></button></td>
                </tr>
              @empty
                <tr><td colspan="3"><div class="alert alert-info">No hay cartuchos registrados</div></td></tr>
              @endforelse
            @endisset
          </tbody>
        </table>

      </div>

    </div>
  </div>
</div>


<script>
  $("#agregarToner").submit(function(){
    event.preventDefault();
    $.ajax({
      type:"POST",
      url: "{{route('cartucho.store')}}",
      data:$("#agregarToner").serialize(),
      success:function(resp){
        $.each(resp, function(llave,valor){
          if(valor==1){
            swal({
                  title: "Correcto",
                  text: "Se agregó el cartucho",
                  icon: "success",
                  button: "OK",
                });
            setTimeout(function(){
              location.reload()
            },2000)
          }else{
            swal({
              title: "Error",
              text: "Ocurrió un error:, "+valor.errorInfo,
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
<script>
$(document).ready(function(){
  $("#catalogoToner").DataTable({
    "iDisplayLength": 5,
    "language": {
      "emptyTable":     "Sin datos",
      "info":           "Mostrando del _START_ al _END_ de _TOTAL_ ",
      "infoEmpty":      "Mostrando 0 de 0 de los 0 resultados",
      "infoFiltered":   "(Filtrado de _MAX_ resultados)",
      "infoPostFix":    "",
      "thousands":      ",",
      "lengthMenu":     "Mostrar hasta _MENU_ resultados por página",
      "loadingRecords": "Cargando...",
      "processing":     "Procesando...",
      "search":         "<i class='fa fa-search'></i> Buscar:",
      "zeroRecords":    "No hay resultados para la búsqueda",
      "paginate": {
          "first":      "Primero",
          "last":       "Último",
          "next":       "Siguiente",
          "previous":   "Anterior"
      },
      "aria": {
          "sortAscending":  ": Orden ascendente",
          "sortDescending": ": Orden descendente"
      }
    }
  })
})
</script>

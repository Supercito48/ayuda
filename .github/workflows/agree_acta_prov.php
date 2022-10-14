<?php
$z=$_GET['z']; 
$q=$_GET['q']; 
require_once "../conexionjb.php";

$sql = "SELECT   ubigeo_reniec, id_departamento, id_region, id_provincia, nom_distrito, '' as opciones FROM distritos c where ubigeo_reniec='".$_GET['z']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $ubig =  $row["nom_distrito"];
  }
} else {
 // echo "0 results";
  $ubig =  "ERROR";//barranca
}
$conn->close();

?>





<!--
$stmt = Conexion::conectar()->prepare("SELECT   id_candidato, 
                                                        ubigeo, 
                                                        codigo_agrupacion,
                                                        nombre_candidato,
                                                        '' as opciones
                                                FROM candidatos c where ubigeo='".$_GET['z']."' order BY id_candidato");
-->

<!-- Content Header (Page header) -->



<!-- Ventana Modal para ingresar o modificar un Productos -->
<!--<div class="modal fade" id="mdlGestionarProducto" role="dialog">-->

    <div class="modal-dialog modal-lg">

        <!-- contenido del modal -->
        <div class="modal-content">

            <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title">Agregar Acta</h5>

            </div>

            <!-- cuerpo del modal -->
            <div class="modal-body">
    
                <form class="needs-validation" novalidate >
                    <!-- Abrimos una fila -->
                    <div class="row">

                        <!-- Columna para registro de MESA DE SUFRAGIO -->
                        <div class="col-12 col-lg-4">
                            <div class="form-group mb-2">
                                <label class="" for="iptMesaSufragio"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">NUMERO DE MESA DE SUFRAGIO</span><span class="text-danger">*</span>
                                </label>
                                <input type="number" class="form-control form-control-sm" id="iptMesaSufragio"
                                    name="iptMesaSufragio" placeholder="Ingresar mesa de Sufragio" required>
                                <div class="invalid-feedback">Debe ingresar numero de mesa de SUFRAGIO</div>
                            </div>
                        </div>


   <!-- Columna para registro de TOTAL ELECTORES HABILES -->
   <div class="col-12 col-lg-4">
                            <div class="form-group mb-2">
                                <label class="" for="iptTotalHabiles"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">TOTAL ELECTORES HABILES</span><span class="text-danger">*</span>
                                </label>
                                <input type="number" class="form-control form-control-sm" id="iptTotalHabiles"
                                    name="iptTotalHabiles" placeholder="Ingresar Electores Habíles" required>
                                <div class="invalid-feedback">Debe ingresar el total de Electores Habíles</div>
                            </div>
                        </div>










                        <!-- Columna para registro de CIUDAD O DISTRITO -->
                        <div class="col-12  col-lg-2">
                            <div class="form-group mb-2">
                                <label class="" for="iptNumUbigeo"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">PROVINCIA</span><span class="text-danger">*</span>
                                </label>
                                
                                <input type="number" class="form-control form-control-sm" id="iptNumUbigeo"
                                    name="iptNumUbigeo"  value="<?=$z?>" placeholder="<?=$z?>" disabled="">

                                    
                                <div class="invalid-feedback">Seleccione la Ciudad</div>
                            </div>
                        </div>


     <!-- Columna para registro de CIUDAD O DISTRITO -->
     <div class="col-12  col-lg-2">
                            <div class="form-group mb-2">
                                <label class="" for="iptNumDisst"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">DISTRITO</span><span class="text-danger">*</span>
                                </label>
                                 
                                <input type="number" class="form-control form-control-sm" id="iptNumDisst"
                                    name="iptNumDisst"  value="<?=$q?>" placeholder="<?=$q?>" disabled="">

                                    
                                <div class="invalid-feedback">Seleccione la Ciudad</div>
                            </div>
                        </div>










                        <!-- Columna para registro de ACTAS -->
                        <div class="col-12">
                        <label class="" for="selCategoriaReg"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">ACTA DE VOTACIÓN</span><span class="text-danger">* <?=$ubig?></span>
                                </label>
                       <div class="card card-info card-outline ">
               <!--         <table class="table table-sm  table-bordered  table-striped ">-->
 <table class=" table-bordered  table-striped ">
<!--
<table class="table table-bordered table-striped dataTable dtr-inline" style="display: block;
    padding-left: 0px;">
-->


<thead>
<tr>
<th style="width: 10px">#</th>
<th style="width: 410px">Organizaciones Politicas</th>
<th style="width: 50px">Foto</th>
<th style="width: 50px">Logo</th>
<th style="width: 120px">Votos</th>

</tr>
</thead>
<tbody>

<tbody id="selCategoriaReg">
    

</tbody>
<tr>
<td></td>
<td>VOTOS EN BLANCO</td>
<td></td><td></td>
<td><input type="number" min="0" class="form-control form-control-sm" id="iptVtBlancoProv" placeholder="Votos" required=""></td>
</tr>

<tr>
<td></td>
<td>VOTOS NULOS</td>
<td></td><td></td>
<td><input type="number" min="0" class="form-control form-control-sm" id="iptVtNuloProv" placeholder="Votos" required=""></td>
</tr>

<tr>
<td></td>
<td>VOTOS IMPUGNADOS</td>
<td></td><td></td>
<td><input type="number" min="0" class="form-control form-control-sm" id="iptVtImpugProv" placeholder="Votos" required=""></td>
</tr>

<tr>
<td></td>
<td>TOTAL DE VOTOS EMITIDOS <i class="fas fa-long-arrow-alt-right"></i> </td>
<td></td><td></td>
<td><input type="number" min="0" class="form-control form-control-sm" id="iptVtEmiTotal" placeholder="Votos" required=""></td>
</tr>

</table>



</div>
                        </div>




                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Imagen:</label>
                            <form method="post" enctype="multipart/form-data" id="IptImagen">
                        	<input type="file" class="form-control form-control-sm" name="archivo" id="IptImagen" accept="image/*">
                            <input id="IptImagen" type="hidden" name="boton">
                              <!--  <img src="" width="150px" height="120px" id="imagenmuestra" style="display: none;">-->
                          </div>


                        <!-- creacion de botones para cancelar y guardar el producto -->
                        <div class="col-md-12">
                                <div class="form-group m-0 mt-2">
                                    <a style="cursor:pointer;" class="btn btn-primary btn-lg w-100" id="btnRegistrarCategoria">REGISTRAR ACTA
                                    </a>
                                </div>
                            </div>
                    </div>
                </form>
            
            </div>

        </div>
    </div>


</div>



<script>

/*===================================================================*/
//INICIALIZAMOS EL MENSAJE DE TIPO TOAST (EMERGENTE EN LA PARTE SUPERIOR)
/*===================================================================*/
var Toast = Swal.mixin({
        position: 'center',
        showConfirmButton: false,
        timer: 3000
        
    });


$(document).ready(function() {


    $.ajax({
        url: "ajax/jala-datos-sql.ajax.php?z=<?=$z?>",
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(respuesta) {

            var options = '';
          
            for (let index = 0; index < respuesta.length; index++) 
             {
              resultado = 1 + index;
              options = options + '<tr><td>' + resultado + '.</td><td>' + respuesta[index][5] + '</td><td><img class="direct-chat-img" src="../ico/' + respuesta[index][1] + '/' + respuesta[index][2] + '.jpg" title="' + respuesta[index][3] + '" alt="Message User Image"></td><td><img class="direct-chat-img" src="../ico/' + respuesta[index][2] + '.jpg" title="' + respuesta[index][3] + '" alt="Message User Image"></td><td><input type="number" min="0" class="form-control form-control-sm" id="iptVtProv' + respuesta[index][2] + '" placeholder="Votos" required=""></td></tr>';

            }

            $("#selCategoriaReg").append(options);
            
        }
    });

    

});




























        
        $(document).ready(function() {

             //variables para registrar o editar la categoria
     
            var tableCategorias = $('#lstCategorias').DataTable({
                    },
                    {

            });







    
           








            document.getElementById("btnRegistrarCategoria").addEventListener("click", function() {

                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {

                    if (form.checkValidity() === true) { 
                        
                   


                        
                        num_mesa_sufragio = $("#iptMesaSufragio").val();// post defrente
                        num_total_habiles = $("#iptTotalHabiles").val();// post defrente
                        num_ubigeo = $("#iptNumUbigeo").val();// post defrente
                        num_dist_dos = $("#iptNumDisst").val();// post defrente


                        // nuevo iptNumDisst|num_dist_dos
                        num_vtprov1jb = $("#iptVtProv1").val();// post defrente
                        num_vtprov2jb = $("#iptVtProv2").val();// post defrente
                        num_vtprov3jb = $("#iptVtProv3").val();// post defrente
                        num_vtprov4jb = $("#iptVtProv4").val();// post defrente
                        num_vtprov5jb = $("#iptVtProv5").val();// post defrente
                        num_vtprov6jb = $("#iptVtProv6").val();// post defrente
                        num_vtprov7jb = $("#iptVtProv7").val();// post defrente
                        num_vtprov8jb = $("#iptVtProv8").val();// post defrente
                        num_vtprov9jb = $("#iptVtProv9").val();// post defrente
                        num_vtprov10jb = $("#iptVtProv10").val();// post defrente
                        num_vtprov11jb = $("#iptVtProv11").val();// post defrente
                        num_vtprov12jb = $("#iptVtProv12").val();// post defrente
                        num_vtprov13jb = $("#iptVtProv13").val();// post defrente
                        num_vtprov14jb = $("#iptVtProv14").val();// post defrente
                        num_vtprov15jb = $("#iptVtProv15").val();// post defrente
                        num_vtprov16jb = $("#iptVtProv16").val();// post defrente
                        num_vtprov17jb = $("#iptVtProv17").val();// post defrente
                        num_vtprov18jb = $("#iptVtProv18").val();// post defrente
                        num_vtprov19jb = $("#iptVtProv19").val();// post defrente
                        num_vtprov20jb = $("#iptVtProv20").val();// post defrente

                        num_vt_blancoprov = $("#iptVtBlancoProv").val();// post defrente
                        num_vt_nuloprov = $("#iptVtNuloProv").val();// post defrente
                        num_vt_impugprov = $("#iptVtImpugProv").val();// post defrente
                        num_vt_emitotal = $("#iptVtEmiTotal").val();// post defrente

                        imagenjb = $("#IptImagen").val();// post defrente

                        
                      

                   

                        
                        var datos = new FormData();

                      //  datos.append("idCategoria",idCategoria);
                     
                        datos.append("num_mesa_sufragio",num_mesa_sufragio);// post defrente
                        datos.append("num_total_habiles",num_total_habiles);// post defrente
                        datos.append("num_ubigeo",num_ubigeo);// post defrente
                        datos.append("num_dist_dos",num_dist_dos);// post defrente


                       


                     

                
                  

                        datos.append("num_vtprov1jb",num_vtprov1jb);// post defrente
                        datos.append("num_vtprov2jb",num_vtprov2jb);// post defrente    
                        datos.append("num_vtprov3jb",num_vtprov3jb);// post defrente
                        datos.append("num_vtprov4jb",num_vtprov4jb);// post defrente
                        datos.append("num_vtprov5jb",num_vtprov5jb);// post defrente
                        datos.append("num_vtprov6jb",num_vtprov6jb);// post defrente
                        datos.append("num_vtprov7jb",num_vtprov7jb);// post defrente
                        datos.append("num_vtprov8jb",num_vtprov8jb);// post defrente
                        datos.append("num_vtprov9jb",num_vtprov9jb);// post defrente
                        datos.append("num_vtprov10jb",num_vtprov10jb);// post defrente
                        datos.append("num_vtprov11jb",num_vtprov11jb);// post defrente
                        datos.append("num_vtprov12jb",num_vtprov12jb);// post defrente
                        datos.append("num_vtprov13jb",num_vtprov13jb);// post defrente
                        datos.append("num_vtprov14jb",num_vtprov14jb);// post defrente
                        datos.append("num_vtprov15jb",num_vtprov15jb);// post defrente
                        datos.append("num_vtprov16jb",num_vtprov16jb);// post defrente
                        datos.append("num_vtprov17jb",num_vtprov17jb);// post defrente
                        datos.append("num_vtprov18jb",num_vtprov18jb);// post defrente
                        datos.append("num_vtprov19jb",num_vtprov19jb);// post defrente
                        datos.append("num_vtprov20jb",num_vtprov20jb);// post defrente

                        datos.append("num_vt_blancoprov",num_vt_blancoprov);// post defrente
                        datos.append("num_vt_nuloprov",num_vt_nuloprov);// post defrente
                        datos.append("num_vt_impugprov",num_vt_impugprov);// post defrente
                        datos.append("num_vt_emitotal",num_vt_emitotal);// post defrente

                        datos.append("imagenjb",imagenjb);// post defrente

    





                        Swal.fire({
                            title: 'Está seguro de guardar el acta?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Si, deseo registrarlo!',
                            cancelButtonText: 'Cancelar!',
                        }).then((result) => {

                            if (result.isConfirmed) {
                                
                                $.ajax({
                                    url: "ajax/neu.ajax.php?z=<?=$z?>",
                                    type: "POST",
                                    data: datos,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    dataType: 'json',
                                    success:function(respuesta){

                                        Toast.fire({
                                            icon: 'success',
                                            title: respuesta
                                            //title: 'El producto registro acta correctamente'
                                        });
                                        
                                     
                                        
                              
                                        

                                  
                                        $("#iptMesaSufragio").val("");// post defrente
                                        $("#iptTotalHabiles").val("");// post defrente
                                       // $("#iptNumUbigeo").val("");// post defrente
                                       // $("#iptNumDisst").val("");// post defrente




                             
                                 
                                        $("#iptVtProv1").val("");// post defrente
                                        $("#iptVtProv2").val("");// post defrente
                                        $("#iptVtProv3").val("");// post defrente
                                        $("#iptVtProv4").val("");// post defrente
                                        $("#iptVtProv5").val("");// post defrente
                                        $("#iptVtProv6").val("");// post defrente
                                        $("#iptVtProv7").val("");// post defrente
                                        $("#iptVtProv8").val("");// post defrente
                                        $("#iptVtProv9").val("");// post defrente
                                        $("#iptVtProv10").val("");// post defrente
                                        $("#iptVtProv11").val("");// post defrente
                                        $("#iptVtProv12").val("");// post defrente
                                        $("#iptVtProv13").val("");// post defrente
                                        $("#iptVtProv14").val("");// post defrente
                                        $("#iptVtProv15").val("");// post defrente
                                        $("#iptVtProv16").val("");// post defrente
                                        $("#iptVtProv17").val("");// post defrente
                                        $("#iptVtProv18").val("");// post defrente
                                        $("#iptVtProv19").val("");// post defrente
                                        $("#iptVtProv20").val("");// post defrente



                                        $("#iptVtBlancoProv").val("");// post defrente
                                        $("#iptVtNuloProv").val("");// post defrente
                                        $("#iptVtImpugProv").val("");// post defrente
                                        $("#iptVtEmiTotal").val("");// post defrente
                                        $("#IptImagen").val("");// post defrente



                                    
                              


                                        tableCategorias.ajax.reload();
                                        $(".needs-validation").removeClass("was-validated");
                                    }
                                });
                            }
                        })
                    }

                    form.classList.add('was-validated');

             
               
            });
        });
    });
        

</script>




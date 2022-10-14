<?php

require_once "../conexionjb.php";


////$imagen=isset($_POST["imagenactual"])? $_POST["imagenactual"]:"";



$final = $_POST['num_vtprov1jb'].",".$_POST['num_vtprov2jb'].",".$_POST['num_vtprov3jb'].",".$_POST['num_vtprov4jb'].",".$_POST['num_vtprov5jb'].",".$_POST['num_vtprov6jb'].",".$_POST['num_vtprov7jb'].",".$_POST['num_vtprov8jb'].",".$_POST['num_vtprov9jb'].",".$_POST['num_vtprov10jb'].",".$_POST['num_vtprov11jb'].",".$_POST['num_vtprov12jb'].",".$_POST['num_vtprov13jb'].",".$_POST['num_vtprov14jb'].",".$_POST['num_vtprov15jb'].",".$_POST['num_vtprov16jb'].",".$_POST['num_vtprov17jb'].",".$_POST['num_vtprov18jb'].",".$_POST['num_vtprov19jb']; 
$fid = str_replace("undefined,", "", $final);
$fip = str_replace("undefined", "", $fid);

$sql5 = "INSERT INTO tab_vt_provincial_acta(ubigeo,mesa_sufragio,total_reniec_habiles,detalle_vt_prov,vt_blanco_prov,vt_nulo_porv,vt_impugnado_porv,total_vt_emitidos_porv) 
VALUES(
'" . $_POST["num_dist_dos"]. "',
'" . $_POST["num_mesa_sufragio"]. "',
'" . $_POST["num_total_habiles"]. "',
'".$fip."',
'" . $_POST["num_vt_blancoprov"]. "',
'" . $_POST["num_vt_nuloprov"]. "',
'" . $_POST["num_vt_impugprov"]. "',
'" . $_POST["num_vt_emitotal"]. "'
)"; 
$result6 = $conn->query($sql5); 



$sql3 = "SELECT  id_candidato, ubigeo, codigo_agrupacion, nombre_candidato, '' as opciones 
FROM candidatos c where ubigeo='".$_GET['z']."' order BY id_candidato LIMIT 20";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
// output data of each row
while($roow = $result3->fetch_assoc()) {
// echo "" . $p. "id: " . $row["nombre_candidato"]. " -<br>";
//  INSERT INTO `tab_vt_candidato`(`id`, `ubigeo`, `mesa_sufragio`, `codigo_agrupacion`, `vt_prov`, `vt_dist`) 
//VALUES ('','','','','','')
//	id	ubigeo	mesa_sufragio	codigo_agrupacion	vt_prov	vt_dist	

  $sql4 = "INSERT INTO tab_vt_provincial_xdistritos(ubigeo,mesa_sufragio,codigo_agrupacion,vt_prov) 
VALUES(
'" . $_POST["num_dist_dos"]. "',
'" . $_POST["num_mesa_sufragio"]. "',
'" . $roow["codigo_agrupacion"]. "',
'" . $_POST["num_vtprov" . $roow["codigo_agrupacion"]. "jb"]. "'
)"; 
      
        $result5 = $conn->query($sql4); 


/* 
ubigeo
mesa_sufragio
total_reniec_habiles
detalle_vt_prov
vt_blanco_prov
vt_nulo_porv
vt_impugnado_porv
total_vt_emitidos_porv




num_mesa_sufragio
num_total_habiles
num_ubigeo

num_vt_blancoprov
num_vt_nuloprov
num_vt_impugprov
num_vt_emitotal
*/



  }

} else {
  //echo "0 results";
}

$conn->close();




?>
"Se registró el acta correctamente."








	
<?php

$filde_temp=($_FILES['IptImagen']['tmp_name']);
echo"$filde_temp";


    $file_temp=($_FILES['imagenjb']['tmp_name']);
    echo"$file_temp";

	$file_stemp=($_FILES['archivo']['tmp_name']);
    echo"$file_stemp";

?>


<?php
require 'consultas.php';
?>




<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listados de asistencias</title>



<style>
body{
    
    width: 100%;
    height: 100%;
    background-image:url("../fotos/Group\ 4.svg");
}


h1{  
text-align:center;
padding-top:5%;
color:gray;

}


th,td{
  border: 1px solid;
  text-align: center;
  padding:30px;
  border-color:gray;
  
}

.table{
margin:0 auto;
box-shadow: 1px 1px 18px lightblue inset;
padding-top:1%;


}



@media screen and (min-width:1025px) and (max-width:3000px){
    h1{
       
        
        margin-left:30%;
       width:30%;


    }
    
    header{
        padding-bottom:5%;
        margin-left: 6%;
        
        
     }
     table{
        padding:5%;
        margin-left: 100%;
        
       
     }

}







@media screen and (min-width:780px) and (max-width:1024px){
    h1{
        
        margin-left:26%;
        position: absolute;

    }
    


    
    header{
        padding:5%;
         margin-left: 6%;
        padding-bottom:10%;
        padding-top:5%;
        
     }
     table{
        padding:5%;
        margin-left: 100%;
        position: absolute;
     }

}




@media screen and (min-width:480px) and (max-width:780px){
    h1{
        
        margin-left:50%;
       width:30%;

    }
    
    
    header{
        padding:5%;
         margin-left: 6%;
         
         
     }
     table{
        
        padding:5%;
        margin-left: 100%;
        position: absolute;
     }



}






@media screen and (max-width:480px){
    h1{
        
        margin-left:100%;
       width:25%;

    }
    header{
        padding-top:80%;
         margin-left: 80%;
         
         
       
     }
     table{
        padding:5%;
        float:right;
        position: absolute;
     }

}








 </style>


</head>


<header>

<h1> Lista de asistencias </h1>


</header>

<body>
<table class="table"> 
    <thead>
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Correo electrónico</th>
    <th>país</th>
    <th>Numero telefónico</th>
    <th>Puesto de trabajo</th>
  </tr>
</thead>
<tbody id="datos">
    <?php
    foreach ($query as $row){?>

    <tr class="td">
        <td><?php echo $row ['Nombre']; ?> </td>
        <td><?php echo $row ['Apeliido']; ?> </td>
        <td><?php echo $row ['Email']; ?> </td>
        <td><?php echo $row ['Pais']; ?> </td>
        <td><?php echo $row ['Telefono']; ?> </td>
        <td><?php echo $row ['Puesto_trabajo']; ?> </td>
    </tr>

    </tbody>

    <?php
    }
    ?>


</table>




</body>



</html>
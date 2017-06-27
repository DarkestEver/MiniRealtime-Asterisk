<?php

switch ($view) {
    case "add":
        edit(null, $type);
        break;
    case "edit":
        edit($id, $type);
        break;
    default: // List
        showlist();
        break;
}

function showlist(){
  global $db, $module;
  // Mostrar listado
  $query="select id, confno, pin, adminpin from meetme";
  $dbdata = db::getInstance()->query($query);

  if (isset ($dbdata)){
    ?>
    <table>
      <tr>
        <th>Numero Conf</th>
        <th>PIN</th>
        <th>Admin PIN</th>
        <th></th>
      </tr>
    <?php
    foreach ($dbdata as $data) {
      echo '<tr>';
        echo '<td>'.$data['confno'].'</td>';
        echo '<td>'.$data['pin'].'</td>';
        echo '<td>'.$data['adminpin'].'</td>';
        echo '<td><a href="?module='.$module.'&view=edit&id='.$data['id'].'">Editar</a> | <a href="?module='.$module.'&view=delete&id='.$data['id'].'">Eliminar</a></td>';
      echo '</tr>';
    }
    ?>
    </table>
    <?php
  }

}

function edit($id, $postType){

  if ($postType == "store"){
    if ($id == null){ // ADD NEW ENTRY

    }else{ // EDIT ENTRY WITH ID $ID

    }
    // Guardar cambios en base de datos

  }else{
    // Mostrar formulario de edicion
    if (isset($id)){
      $query="select id, confno, pin, adminpin from meetme where id = $id";
      $dbdata = db::getInstance()->getResult($query);
      $confno = $dbdata['confno'];
    }

    ?>
      <form action="" method="post" class="form">
        <fieldset>
          <legend>Salas de conferencia</legend>
            <label for="confno">Numero de extension</label>
            <input type="text" name="confno" id="confno" placeholder="3001" value="<?php echo $confno ?>">

            <label for="pin">PIN</label>
            <input type="text" name="pin" id="pin" placeholder="0000">

            <label for="adminpin">PIN Administrador</label>
            <input type="text" name="adminpin" id="adminpin" placeholder="8888">
        </fieldset>
      </form>
    <?php
  }
}

 ?>

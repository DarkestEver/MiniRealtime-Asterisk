<div id="menu">
  <ul>
    <li><a href='?module=home' class='<?php if ($module=='home') echo 'selected';?>>'>Portada</a></li>
    <li><a href='?module=sip_buddies' class='<?php if ($module=='sip_buddies') echo 'active';?>>'>Extensiones SIP</a></li>
    <li><a href='?module=sip_buddies' class='<?php if ($module=='queues') echo 'active';?>>'>Colas</a></li>
    <li><a href='?module=sip_buddies' class='<?php if ($module=='meetme') echo 'active';?>>'>Salas de conferencia</a></li>
  </ul>
</div>

<div id="submenu">
<?php if ($module == 'sip_buddies') {?>
  <a href='?module=sip_buddies&view=list'>Listado</a>
  <a href='?module=sip_buddies&view=add'>Anadir</a>
<?php } elseif ($module == 'voicemail') {?>

<?php } else {?>

<?php }?>
</div>

<?php

include "../model/viewtableModel.php";
$aux = $_POST["aux"];

if ($aux == "consultarFlujo") {
    $programa = $_POST["programa"];

    $listaPerfiles = consultarFlujo($programa);
  
  ?>
    <table class="display table table-hover table-striped" style="width: 100%;" id="tableFlujo">
      <thead>
  
        <tr>
          <th></th>
          <th>ID</th>
          <th>AÑO</th>
          <th>MES</th>
          <th>SEMANA</th>
          <th>DIA</th>
          <th>OBJETIVO</th>
          <th>HERRAMIENTAS</th>
          <th>COLABORACION</th>
          <th>POST</th>
          <th>CONTENIDO</th>
          <th>REDES SOCIALES</th>


        </tr>
      </thead>
      <tbody>
        <tr>
        <?php
        foreach ($listaPerfiles as $auxLista) {
            ?>
            <th>
              <table>
                <td>
                  <form action="" method="POST">
                    <input name="id" value="<?php echo $auxLista["id"]; ?>" type="hidden" id="id">
                    <button class="btn btn-outline-secondary btn-sm mr-1" type="submit">
                      <span class="bi bi-view-list"></span>
                    </button>
                  </form>
                </td>
                <td>
                  <form action="" method="POST">
                    <input name="id" value="<?php echo $auxLista["id"]; ?>" type="hidden" id="id">
                    <button class="btn btn-outline-secondary btn-sm mr-1" type="submit">
                      <span class="bi bi-pencil"></span>
                    </button>
                  </form>
                </td>
  
              </table>
  
            </th>
  
            <td><?php echo $auxLista["id"]  ?></td>
            <td><?php echo $auxLista["year"]; ?></td>
            <td><?php echo $auxLista["mes"]; ?></td>
            <td><?php echo $auxLista["semana"]; ?></td>
            <td><?php echo $auxLista["fecha"]; ?></td>
            <td><?php echo $auxLista["objetivo"]; ?></td>
            <td><?php echo $auxLista["herramienta"]; ?></td>
            <td><?php echo $auxLista["colaboracion"]; ?></td>
            <td><?php echo $auxLista["post"]; ?></td>
            <td><?php echo $auxLista["contenido"]; ?></td>
            <td><?php echo $auxLista["redsocial"]; ?></td>
  
            
        </tr>
      <?php
          }
      ?>
      </tbody>
    </table>
  <?php
  
  }
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Login</th>
      <th scope="col">Nivel</th>
      <th scope="col">Data de Criacao</th>
    </tr>
  </thead>
  <tbody>
      <?php
      foreach($resultado as $linhas){?>
      <tr>
        <th scope="row"><?php echo $linhas['id_usuario'];?></th>
        <td><?php echo $linhas['Nome'];?></td>
        <td><?php echo $linhas['login'];?></td>
        <td><?php echo $linhas['nivel'];?></td>
        <td><?php echo $linhas['dt_criacao'];?></td>
        </tr>
      <?php
      }
      ?>
    
   </tbody>
</table>


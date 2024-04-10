<?php include "cabecalho.php" ?>

<h1>📌 Tarefas</h1>
<a href="novo-formulario.php" class="btn btn-primary">Adicionar Tarefa</a>
<table class="table">

    <tr>
        <th>&nbsp;</th>
        <th>ID</th>
        <th>Titulo</th>
        <th>Descrição</th>
        <th>Status</th>


    </tr>
    <?php
    include "conexao.php";
    $sql = "select * from tarefas order by status asc, id desc";
    $resultado = mysqli_query($conexao, $sql);

    while($umaTarefa = mysqli_fetch_assoc($resultado)):
        ?>
           <tr>
            <td>
                <?php
                if($umaTarefa['status'] ==0){
                  ?>  
                    <a href='editar-salvar.php' class="btn">✅</a>
                    <?php
                    
                }    
            ?>

            </td>
            <td><?=$umaTarefa['id'];?></td>
            <td><?=$umaTarefa['Titulo'];?></td>
            <td><?=$umaTarefa['descricao'];?></td>
            <td>
                <?php
                if($umaTarefa['status']== 1){
                    echo "completo";
                }else{
                    echo "Pendente";
                }
                ?>
                
                </td>

           </tr> 
            

        <?php
    endwhile;
    ?>
</table>



<?php include "rodape.php" ?>
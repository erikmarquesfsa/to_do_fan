<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>To Do List</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/style.css" rel="stylesheet" />    
  </head>

  <body>
    <div class="container mt-5">
      <h1 class="text-center mb-4">To Do List</h1>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <form id="todo-form" class="row g-2" method="post" action="scripts/salvar.php">
                <div class="col-md-12">
                  <label for="inputEmail4" class="form-label">Cadestre uma Tarefa</label>
                  <input type="text" name="cad_tarefa" required class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Data de Conclusão</label>
                  <input type="date" name="dt_conclusao" required class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Criticidade</label>
                    <select name="criticidade" class="form-control" required>
                      <option value="">-</option>
                      <option value="Baixa">Baixa</option>
                      <option value="Média">Média</option>
                      <option value="Alta">Alta</option>
                    </select>
                </div>
                <div class="col-md-12">
                  <label for="inputEmail4" class="form-label">Responsável</label>
                    <select name="responsavel" class="form-control" required>
                      <option value="">-</option>
                      <option value="Adriana">Adriana</option>
                      <option value="Romeu">Romeu</option>
                      <option value="Etevaldo">Etevaldo</option>
                    </select>
                </div>
                <div class="col-md-12 text-center d-grid gap-2">
                  <button type="submit" class="btn btn-primary btn-large">Salvar</button>
                </div>
              </form>
              <table id="example" class="display table table-striped text-center " style="width: 100%">
                <thead>
                  <tr>
                    <th style="text-align: center;">Tarefa</th>
                    <th style="text-align: center;">Criticidade</th>
                    <th style="text-align: center;">Prazo</th>
                    <th style="text-align: center;">Responsável</th>
                    <th colspan="2">#</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include "scripts/config.php";
                    $sql = "SELECT * FROM tarefas";
                    $query = $mysqli->query($sql);
                    while($dados = $query->fetch_array()){
                  ?>
                  <tr>
                    <td><?php echo $dados['nome_tarefa']; ?></td>
                    <td><?php echo $dados['criticidade']; ?></td>
                    <td><?php echo $dados['data_conclusao']; ?></td>
                    <td><?php echo $dados['responsavel']; ?></td>
                    <td><i class="fa-solid fa-pen-to-square btn btn-primary"></i></td>
                    <td><i class="fa-solid fa-trash btn btn-danger"></i></td>
                  </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th style="text-align: center;">Tarefa</th>
                    <th style="text-align: center;">Criticidade</th>
                    <th style="text-align: center;">Prazo</th>
                    <th style="text-align: center;">Responsável</th>
                    <th colspan="2">#</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  
  </body>
</html>

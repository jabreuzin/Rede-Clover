<title>Rede Clover | Itens</title>
<?php 
    include("conexao.php");
    include("header.php");

    $prod = "SELECT *FROM produtos WHERE pro_tipo = 3 ORDER BY pro_id ASC";
    $result = $mysqli->query($prod);
?>
<div class="container">
    <div class="row p-3">
        <div class="col-3 p-3">
            <h3 class="text-center mt-3 fw-light">Categorias</h3>
            <ul class="nav p-2 d-flex flex-column">
                <li class="nav-item menu p-2">
                    <a class="nav-link text-dark" href="vip.php"><h4 class="m-0 fw-light">VIPs</h4></a>
                </li>
                <li class="nav-item menu p-2">
                    <a class="nav-link text-dark" href="cash.php"><h4 class="m-0 fw-light">Cash</h4></a>
                </li>
                <li class="nav-item menu p-2">
                    <a class="nav-link text-dark" href="outros.php"><h4 class="m-0 fw-light">Outros</h4></a>
                </li>
            </ul>
        </div>
        <div class="col-9 p-3">
            <div class="row">
                <?php
                    $i = null;
                    if ($result->rowCount() > 0) {
                        while ($user_data = $result->fetch(PDO::FETCH_ASSOC)) {
                            $i+=0;
                            echo "<div class='col-4 p-3 text-center'>";
                            echo "<div class=' col-12 text-center d-flex justify-content-center'><p class='m-0 col-4 valor p-1'>R$ ".$user_data['pro_valor']."</p></div>";
                            echo "<img src='".$user_data['pro_img']."' class='prodimg'>";
                            echo "<h4 class='text-center p-3 m-0'>" .$user_data['pro_nome']. "</h4>";
                            echo "<button type='button' class='btn btn-primary col-8 butaum-compra my-2'>Comprar</button>";
                            echo "<button type='button' class='btn btn-primary col-8 butaum' data-bs-toggle='modal' data-bs-target='#exampleModal$i'>
                            Ver detalhes
                          </button>";
                            echo "<div class='modal fade' id='exampleModal$i' tabindex='-1' aria-labelledby='exampleModalLabel$i' aria-hidden='true'>";
                            echo     "<div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>";
                            echo         "<div class='modal-content'>";
                            echo         "<div class='modal-header'>";
                            echo             "<h1 class='modal-title fs-3' id='exampleModalLabel$i'>". $user_data['pro_nome'] ."</h1>";
                            echo        "</div>";
                            echo         "<div class='modal-body'>";
                            echo             "<h4 class='m-0'>".$user_data['pro_desc']."</h4>";
                            echo         "</div>";
                            echo         "<div class='modal-footer'>";
                            echo             "<button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Fechar</button>";
                            echo             "<button type='button' class='btn btn-success'>Comprar</button>";
                            echo         "</div>";
                            echo         "</div>";
                            echo     "</div>";
                            echo "</div>";
                            echo "</div>";
                            $i++;
                        }
                    }
                    else{
                        echo "<h3 class='text-center'>Nenhum produto encontrado</h3>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<?php include("footer.php")?>
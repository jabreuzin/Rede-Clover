<title>Rede Clover | Equipe</title>
<?php
    include("conexao.php");
    include("header.php");
    include("traducMeses.php");

    $master = "SELECT *FROM usuarios WHERE usu_niv_id = 5 ORDER BY usu_id ASC";
    $result1 = $mysqli->query($master);

    $dev = "SELECT *FROM usuarios WHERE usu_niv_id = 6 ORDER BY usu_id ASC";
    $result2 = $mysqli->query($dev);

    $gerente = "SELECT *FROM usuarios WHERE usu_niv_id = 4 ORDER BY usu_id ASC";
    $result3 = $mysqli->query($gerente);

    $admin = "SELECT *FROM usuarios WHERE usu_niv_id = 3 ORDER BY usu_id ASC";
    $result4 = $mysqli->query($admin);

    date_default_timezone_set('America/Sao_Paulo');
?>
<div class="container p-3">
    <div class="card mt-5 mb-5">
        <div class="card-header master-header">
            <h4 class="m-2"><?php echo "Master (" . $result1->rowCount() . ")" ?></h4>
        </div>
        <div class="row p-5">
            <?php include("equipe/master.php")?>
        </div>
    </div>

    <div class="card mt-5 mb-5">
        <div class="card-header dev-header">
            <h4 class="m-2"><?php echo "Developer (" . $result2->rowCount() . ")" ?></h4>
        </div>
        <div class="row p-5">
            <?php include("equipe/dev.php")?>
        </div>
    </div>

    <div class="card mt-5 mb-5">
        <div class="card-header gerente-header">
            <h4 class="m-2"><?php echo "Gerente (" . $result3->rowCount() . ")" ?></h4>
        </div>
        <div class="row p-5">
            <?php include("equipe/gerente.php")?>
        </div>
    </div>

    <div class="card mt-5 mb-5">
        <div class="card-header admin-header">
            <h4 class="m-2"><?php echo "Admin (" . $result4->rowCount() . ")" ?></h4>
        </div>
        <div class="row p-5">
            <?php include("equipe/admin.php")?>
        </div>
    </div>
</div>
</div>
<?php
    include("footer.php");
?>
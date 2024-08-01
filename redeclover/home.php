    <title>Rede Clover | Início</title>
    <?php 
        include("conexao.php");
        include("header.php");
        include("traducMeses.php");

        $sql = "SELECT *FROM noticias ORDER BY not_id DESC";
        $result = $mysqli->query($sql);

        $historico = "SELECT *FROM pedidos INNER JOIN usuarios ON ped_usu_id = usu_id ORDER BY ped_id DESC";
        $result1 = $mysqli->query($historico);

        $top = "SELECT *FROM pedidos INNER JOIN usuarios ON ped_usu_id = usu_id ORDER BY ped_valor DESC";
        $result2 = $mysqli->query($top);

        date_default_timezone_set('America/Sao_Paulo');
    ?>
    
    <div class="row p-3">
        <div class="col-8">
            <?php
                    while ($user_data = $result->fetch(PDO::FETCH_ASSOC)) {
                    
                        echo "<div class='col-12 not mb-3'><div class='col-12 d-flex justify-content-center p-2 titulo'>" . 
                                    $user_data['not_titulo'] .
                            "</div>
                            <div class='col-12 d-flex justify-content-center p-3 sub'>" .
                                    $user_data['not_subtitulo'] .
                            "</div>";
                        if (isset($user_data['not_banner'])) { 
                            echo "<div class='col-12 d-flex justify-content-center'> 
                                    <img src=".$user_data['not_banner']." class='img-fluid bannernot'> 
                                </div>";
                        }
                        else{
                            echo "<div class='col-12 d-none justify-content-center'> 
                                    <img src=".$user_data['not_banner']."> 
                                </div>";
                        }
                        echo "<div class='col-12 d-flex justify-content-center p-2 titulo'>" . 
                                $user_data['not_descricao'] .
                            "</div>";
                        echo "<div class='row'>
                                <div class='col-12 p-3'>
                                    ". date("j/n/Y") ." 
                                </div>
                            </div>";
                        echo "</div>";
                    }
            ?>
        </div>
        <div class="col-4">
            <div class="col-12 p-3 rounded border">
                <h5 class="text-center">META DO MÊS DE <?php echo $mes;?></h5>
                <div class="progress mt-3" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped" style="width: 70%">70%</div>
                </div>
            </div>
            <div class="col-12 my-3 rounded border p-3 scroll-container">
                <h5 class="text-center">TOP DOADORES DE <?php echo $mes;?></h5>
                <?php
                    $i1 = null;
                    if ($result2->rowCount() > 0) {
                        while ($user_data1 = $result2->fetch(PDO::FETCH_ASSOC)) {
                                echo "<div class='p-2 text-center'>";
                                echo "<div class='row'>";
                                if ($user_data1['ped_usu_id'] == $user_data1['usu_id']) {
                                    $i1 += 0;
                                    echo "<hr class='m-0 mb-2'>";
                                    echo "<div class='col-3'>";
                                    echo "<img id='playe$i1' src='' alt='Skin do Jogador'>";
                                    echo "</div>";
                                    echo "<script>";
                                    echo "var skinUrl2 = `https://mc-heads.net/avatar/".$user_data1['usu_nick']."/20`;";
                                    echo "document.getElementById('playe$i1').src = skinUrl2;";
                                    echo "</script>";
                                    echo "<div class='col-3'>";
                                    echo $user_data1['usu_nick'];
                                    echo "</div>";
                                    echo "<div class='col-6 mb-1'>";
                                    echo "R$ " . $user_data1['ped_valor'];
                                    echo "</div>";
                                    echo "<hr class='m-0'>";  
                                    $i1++;
                                }
                                echo "</div>";
                                echo "</div>";
                        }
                    }
                    else{
                        echo "<h5 class='text-center mt-5'>Nenhum doador encontrado.</h5>"; 
                    }
                ?>
            </div>
            <div class="col-12 my-3 rounded border p-3 scroll-container">
                <h5 class="text-center mb-3">ULTIMAS DOAÇÕES</h5>
                <?php
                    $i = null;
                    if ($result1->rowCount() > 0) {
                        while ($user_data = $result1->fetch(PDO::FETCH_ASSOC)) {
                                echo "<div class='p-2 text-center'>";
                                echo "<div class='row'>";
                                if ($user_data['ped_usu_id'] == $user_data['usu_id']) {
                                    $i += 0;
                                    echo "<hr class='m-0 mb-2'>";
                                    echo "<div class='col-3'>";
                                    echo "<img id='player$i' src='' alt='Skin do Jogador'>";
                                    echo "</div>";
                                    echo "<script>";
                                    echo "var skinUrl = `https://mc-heads.net/avatar/".$user_data['usu_nick']."/20`;";
                                    echo "document.getElementById('player$i').src = skinUrl;";
                                    echo "</script>";
                                    echo "<div class='col-3'>";
                                    echo $user_data['usu_nick'];
                                    echo "</div>";
                                    echo "<div class='col-6 mb-1'>";
                                    echo "R$ " . $user_data['ped_valor'];
                                    echo "</div>";
                                    echo "<hr class='m-0'>";  
                                    $i++;
                                }
                                echo "</div>";
                                echo "</div>";
                        }
                    }
                    else{
                        echo "<h5 class='text-center mt-5'>Nenhum doador encontrado.</h5>"; 
                    }
                ?>
            </div>
            <div class="col-12">
                <iframe src="https://discord.com/widget?id=699790894563328010&theme=dark" width="405" height="350" allowtransparency="true" frameborder="0"></iframe>
            </div>
        </div>
    </div>

    </div><!-- Fecha o container do header -->
    <?php include("footer.php")?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
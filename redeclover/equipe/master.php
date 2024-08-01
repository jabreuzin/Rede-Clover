<?php
include("./conexao.php");

            $i = null;
            if ($result1->rowCount() > 0) {
                while ($user_data = $result1->fetch(PDO::FETCH_ASSOC)) {
                    $playerName = $user_data['usu_nick'];
                    $i += 0;
                    echo "<div class='col-2 text-center'>";
                    echo "<img id='player-skin$i' src='' alt='Skin do Jogador' class='rounded mb-3'>";
                    echo "<script>";
                    echo "var skinUrl = `https://mc-heads.net/avatar/${playerName}/100`;";
                    echo "document.getElementById('player-skin$i').src = skinUrl;";
                    echo "</script>";
                    echo "<h5>" . $user_data['usu_nick'] . "</h5>";
                    echo "</div>";
                    $i++;
                }
            }
            else{
                echo "<h5 class'text-center'>Nenhum membro ocupa este cargo.</h5>";
            }
        ?>
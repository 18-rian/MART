<?php

    session_start();


    echo '<form action = "../empresa/eventos/processa_eventos.php" method = "POST" class="form">
            <label>
                Nome do evento:
            </label>
            <input type = "text" name = "nome" value = "" required  class="form-control form-control-sm"/>

            <br />

            <label for="comment">
                Descrição do evento:
            </label>
            <textarea id =  "descri" name = "descricao" class="form-control" rows="5">

            </textarea>

            <br />

            <label>
                Local físico do evento:
            </label>
            <input type = "text" name = "endereco" value = "" required class="form-control form-control-sm"/>

            <br />

            <label>
                Horário do evento:
            </label>
            <input type="datetime-local" name="data_hora" value="" class="form-control"/>

            <label>
                CNPJ:
            </label>
            <input type = "text" name = "cnpj" value = "'.$_SESSION["cnpj"].'" class = "form-control form-control-sm" />

            <br />

            <label>
                URL(endereço do evento online):
            </label>
            <input type = "url" name = "url" value = "" class = "form-control form-control-sm"/>

            <input type = "submit" name = "submeter" value = "ENVIAR" class="form-control"/>
            <input type = "reset" name = "resetar" value = "LIMPAR" class="form-control"/>

        </form>';

?>
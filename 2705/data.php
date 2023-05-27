<?php
    include_once('config.php');

    if(isset($_POST['submit']))
    {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $birth = $_POST['birth'];
        $adress = $_POST['location'];
        $uf = $_POST['estado'];
        $psw = $_POST['psw'];
        $serv = "NA";
        $serv1 = "NA";
        $sexo = "NA";


        if(isset($_POST['service'])) {
            $serv = $_POST['service'];
        }

        if(isset($_POST['service1'])){
            $serv1 = $_POST['service1'];
        }

        if(isset($_POST['sexo'])){
            $sexo = $_POST['sexo'];
        }

        $result = mysqli_query($conection, "INSERT INTO usuarios(nome, email, cpf, nascimento, endereco, uf, senha, sexo, srv, srv1) 
        VALUES ('$name', '$email', '$cpf', '$birth', '$adress', '$uf', '$psw', '$sexo', '$serv', '$serv1')");



        // if($result){

        //     echo "Sucesso";
        // } else{
        //     echo "Error" . mysqli_error($conection);
        // }
    }
?>





<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        
        <title>E-commerce</title>
        <meta name="description" content="The Easiest E-commerce You Will Find">
        <meta name="Ismael" content="E-commerce">
        <meta name="Descrição" content="Codastro E-commerce">
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="shopping.ico" type="image/x-icon">
        <script src="script.js"></script>

        
    </head>

    <body>

        <form action="data.php" method="post">
            <header>
                <center>
                    <h1 id="singUpH1">Cadastre-se</h1>
                </center>
                    
                <br>

                <div class="div1">
                    <label>Nome: </label>
                    <br>
                    <input required id="name" class="inp" type="text" placeholder = "Insira Seu Nome" name="name"/>
                    
                    <br>

                    <label>E-mail: </label>
                    <br>
                    <input required class="inp" type="email" placeholder = "Insira Seu Email" name="email"/>

                    
                    <br>

                    <label>CPF: </label>
                    <br>
                    <input required class="inp" type="number" placeholder = "Insira Seu CPF" name="cpf"/>

                    
                    <br>

                    <label>Data de Nascimento: </label>
                    <br>
                    <input required style="cursor: pointer;" class="inp" type="date" name="birth" class="date"/>

                    
                    <br>
                    
                    <label>Endereço: </label>
                    <br>
                    <input required class="inp" type="text" placeholder = "Insira Seu Endereço" name="location"/>


                    <br>
                    
                    <label >Estado: </label>
                    <br>
                    <select required class="inp" style="cursor: pointer;" name="estado">
                        <option class="inp" value="" disable selected>Selecione Seu Estado</option>
                        <option class="inp" value="RS">Rio Grande do Sul</option>
                        <option class="inp" value="AC">Acre</option>
                        <option class="inp" value="AL">Alagoas</option>
                        <option class="inp" value="AP">Amapá</option>
                        <option class="inp" value="AM">Amzonas</option>
                        <option class="inp" value="BA">Bahia</option>
                        <option class="inp" value="CE">Ceara</option>
                        <option class="inp" value="DF">Distrito Federal</option>
                        <option class="inp" value="ES">Espirito Santo</option>
                        <option class="inp" value="GO">Goiás</option>
                        <option class="inp" value="MA">Maranhão</option>
                        <option class="inp" value="MT">Mato Grosso</option>
                        <option class="inp" value="MS">Mato Grosso do Sul</option>
                        <option class="inp" value="MG">Minas Gerais</option>
                        <option class="inp" value="PA">Pará</option>
                        <option class="inp" value="PB">Paraiba</option>
                        <option class="inp" value="PR">Paraná</option>
                        <option class="inp" value="PE">Pernambuco</option>
                        <option class="inp" value="PI">Piauí</option>
                        <option class="inp" value="RJ">Rio de Janeiro</option>
                        <option class="inp" value="RN">Rio Grande Do Norte</option>
                        <option class="inp" value="RO">Rondônia</option>
                        <option class="inp" value="RR">Roraima</option>
                        <option class="inp" value="SC">Santa Catarina</option>
                        <option class="inp" value="SP">São Paulo</option>
                        <option class="inp" value="SE">Sergipe</option>
                        <option class="inp" value="TO">Tocantins</option>

                    </select>
                    <br>


                    <div class="opt">
                        <label>Sexo:</label>
                        <input class="inpr" type="radio" value="Feminino" name="sexo"/>Feminino

                        <input class="inpr" type="radio" value="Masculino" name="sexo"/>Masculino
                    </div>
                    <br>

        
                    <label>Senha: </label>
                    <br>
                    <input required class="inp" type="password" placeholder = "Insira Sua Senha" name="psw"/>
                    <br>

                    <div class="opt">
                        <label>Serviços: </label>
                        <input type="checkbox" name="service" value="Retirada">Retirada
                        <input type="checkbox" name="service1" value="Entrega">Entrega
                    </div>

                    <br>

                        <input type="submit" value="Enviar" class="sendb" name="submit">
                        <br>
                        <input type="reset" value="Limpar Campos" class="sendb">

                </div>

            </header>

        
        </form>
    </body>

</html>

<?php

mysqli_close($conection);
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
	<body>
        <br/><br/>
    <center>
    <div class="col-sm-6">
        <div class="card shadow-sm">
            <div class="card-header">
                <img src="img_sis/techman.png">
            </div>
        <div class="card-body">
            <form action="login.php" method="POST"  name="senhaform" method="post">
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" name="senha" required />
                    <br/>   

                    <center>
                    <fieldset class="field1">
          <table id="senhaform">    
             <tr>
                <td><input type="button" name="num9" class="num" value="9" onclick="SenhaNum(9)" /></td>
                <td><input type="button" name="num8" class="num" value="8" onclick="SenhaNum(8)" /></td>
                <td><input type="button" name="num7" class="num" value="7" onclick="SenhaNum(7)" /></td>
             </tr>
             <tr>
                <td><input type="button" name="num6" class="num" value="6" onclick="SenhaNum(6)" /></td>
                <td><input type="button" name="num5" class="num" value="5" onclick="SenhaNum(5)" /></td>
                <td><input type="button" name="num4" class="num" value="4" onclick="SenhaNum(4)" /></td>
             </tr>
             <tr>
                <td><input type="button" name="num3" class="num" value="3" onclick="SenhaNum(3)" /></td>
                <td><input type="button" name="num2" class="num" value="2" onclick="SenhaNum(2)" /></td>
                <td><input type="button" name="num1" class="num" value="1" onclick="SenhaNum(1)" /></td>
             </tr>
             <tr>
                <td><input type="button" name="num0" class="num" value="0" onclick="SenhaNum(0)" /></td>
                <td>
                <td><input type="button" name="limpar" class="num" value="Clear" onclick="Limpar()" /></td>
                <td><input type="submit" name="num0" class="num" value="Login" onclick="Entrar()" /></td></td>
            </tr>
          </table>
       </fieldset>
       </center>
                </div>
            </form>

        </div>
    </div>
    
    </center>
    </body>
    <script src="script/script.js"></script>
</html>
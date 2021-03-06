<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div class= "container">
            <center>
                <div class='main borda'>                 
                    <table>
                        <tr>
                            <td colspan="6"><form name='form'><input class="textview form-control" name='textview'></form></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary bot3" onclick='AC()' value="AC">AC</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan = "2">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary bot2" onclick="insert(7)" value="7">7</button>
                                </div>
                            </td>
                            <td colspan = "2">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary bot2" onclick="insert(8)" value="8">8</button>
                                </div>
                            </td>
                            <td colspan = "2">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary bot2" onclick="insert(9)" value="9">9</button>
                                </div>
                            </td>
                            <td colspan = "2">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary bot" onclick="insert('/')" value="/">/</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan = "2">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary bot2" onclick="insert(4)" value="4">4</button>
                                </div>
                            </td>
                            <td colspan = "2">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary bot2" onclick="insert(5)" value="5">5</button>
                                </div>
                            </td>
                            <td colspan = "2">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary bot2"onclick="insert(6)" value="6">6</button>
                                </div>
                            </td>
                            <td colspan = "2">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary bot"  onclick="insert('*')" value="*">*</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan = "2">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary bot2" onclick="insert(1)" value="1">1</button>
                                </div>
                            </td>
                            <td colspan = "2">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary bot2" onclick="insert(2)" value="2">2</button>
                                </div>
                            </td>
                            <td colspan = "2">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary bot2"onclick="insert(3)" value="6">3</button>
                                </div>
                            </td>
                            <td colspan = "2">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary bot"  onclick="insert('-')" value="-">-</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan = "2">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary bot2" onclick="insert(0)" value="0">0</button>
                                </div>
                            </td>
                            <td colspan = "2">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary bot2" onclick="insert('.')" value=".">.</button>
                                </div>
                            </td>
                            <td colspan = "2">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-primary bot3" onclick='equal()' value="=">=</button>
                                </div>
                            </td>
                            <td colspan = "2">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary bot"  onclick="insert('+')" value="+">+</button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </center>
        </div>
        <script src="js/calcular.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>        
        <script src="js/validaform.min.js"></script>
    </body>
</html>

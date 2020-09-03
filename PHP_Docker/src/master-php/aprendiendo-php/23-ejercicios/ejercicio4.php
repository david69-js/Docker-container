<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <!-----Bootstrap------>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <div class="container">
            <div class="row">
                <h1>Calculadora</h1>
            </div>    
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="#" method="POST">    
                                    <div class="form-group">
                                        <label for="numberOne">Number nines</label>
                                        <input type="number" name="numberOne">
                                    </div>

                                    <div class="form-group">
                                        <label for="numberTwo">Number Two</label>
                                        <input type="number" name="numberTwo">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <input type="submit" value="Sumar" name="sumar">
                                            <input type="submit" value="Restar" name="restar">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="submit" value="Multiplicar" name="multiplicar">
                                            <input type="submit" value="Dividir" name="dividir">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-md-3">
                <h3>El resultado es </h3>
                    <?php
                        include 'ejercicio4.alt.php';
                    ?>
                </div>
            </div>
        </div>    
</body>
</html>
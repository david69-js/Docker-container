<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-------Bootstrap------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <title>Fomulario</title>
</head>
<body>


    <div class="container">
        <div class="row justify-content-center">
            <h1>Formulario</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="file">File</label>
                                <input type="file" name="file">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <div class="row justify-content-center">
        <h1>Uploads Images</h1>
    </div>
        <?php
            $gestor = opendir('./uploadImages');
            
            if(isset($gestor)):
                while(($uploadImages = readdir($gestor)) != false ):
                    if($uploadImages != '.' && $uploadImages != '..'):
                        echo " <div class='col-md-5'>
                                    <div class='card'>
                                        <div class='card-body'>
                                            <img src='uploadImages/$uploadImages' width='' class='img-thumbnail'>
                                        </div>
                                    </div>
                                </div>" ;
                    endif;
                endwhile;
            endif;
        ?>

    </div>
    
        
</body>
</html>
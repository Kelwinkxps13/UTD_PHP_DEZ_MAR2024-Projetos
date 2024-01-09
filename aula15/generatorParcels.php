<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-4 alert alert-danger">

                <h2 class="text-center"><?php $productName ?></h2>
                <p class="text-center">

                    <img src="<?php $img ?>" alt="" class="img-fluid">
                
                </p>
                

            </div>

            <div class="col-8">

                <table class="table-bordered table-hover table-stripped text-center">
                    <thead>

                    </thead>
                    <tbody>
                        <?php for($i=1; $i <= $qtdParcels; $i++): ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    
</body>
</html>
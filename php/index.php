<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>PHP Pagination</title>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center">PHP Paginator</h1>
        <table class="table">
            
            <tbody>
                <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
                        <tr>
                                <td><?php echo $results->data[$i]['ad']; ?></td>
                                <td><?php echo $results->data[$i]['soyad']; ?></td>
                                <td><?php echo $results->data[$i]['telefon']; ?></td>
                                <td><?php echo $results->data[$i]['adres']; ?></td>
                                <td><?php echo $results->data[$i]['email']; ?></td>
                                
                        </tr>
                <?php endfor; ?>
            </tbody>
        </table>
        <?php echo $paginator->createLinks($links); ?> 
    </div>
</body>
</html>
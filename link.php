<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     body {
    font-family: Arial, sans-serif;
    margin: 4rem;
    padding: 0;
    text-align: center;
    background-color: #11235A;

}

.container{
    padding: 5rem;
    margin-top: 8rem;
    background-color: #596FB7;
    border-radius: 10px;
}

h2{
    color: #fff;
    font-weight: bold;
    font-size: 23px;
    margin-left: 15px;

}

table {
    border-collapse: collapse;
    /* width: 70%; */
    margin-left: 14%;

}

th, td {
    border: 1px solid black;
    padding: 10px;
    padding-left: 8rem;
}

th {
    background-color: #11235A;
    font-size: 14px;
    color: white;
}

tr {
    background-color: white;
}


</style>
<body>
<div class= container>
    <h2>ini data siswa</h2>
    <form action="" method="post">
    <button type= "submit" value="cetak"><a href= 'form.php'>Kembali</a></button>

    <?php

    session_start();

    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Nama</th>';
    echo '<th>Nis</th>';
    echo '<th>Rayon</th>';
    echo'</tr>';

    

    


        foreach($_SESSION['dataSiswa'] as $index => $value){
            echo '<tr>';
            echo '<td>'. $value['nama'] .'</td>';
            echo '<td>'. $value['nis'] .'</td>';
            echo '<td>'. $value['rayon'] .'</td>';
            // echo '<td><a href="?hapus='.$index.'">Hapus</a></td>';
            echo '</tr>';
    }
        echo '<table/>';









    ?>
</div>
</body>
</html>
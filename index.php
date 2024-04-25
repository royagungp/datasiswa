<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
 body {
    font-family: Arial, sans-serif;
    margin: 20px;
    padding: 0;
    text-align: center;
    background-color: #11235A;

}

.container{
    padding: 3rem;
    width: 25rem;
    background-color: #596FB7;
    border-radius: 10px;
}

h2{
    color: #fff;
    font-weight: bold;
    font-size: 23px;
    margin-left: 15px;

}

form {
    padding: 20px;
    text-align: center;
    border-radius: 50px 10 50px 10;
    margin-bottom: 20px;    
}

label {
    display: inline-block;
    font-size: 15px;
    color: #fff;
}

input {
    width: 150px;
    padding: 2px;
    margin-bottom: 5px;
    border-radius: 10px;
}

button {
    padding: 2px 4px;
    background-color: #11235A;
    color: #fff;
    border: none;
    border-radius: 5px;
}

table {
    border-collapse: collapse;
    /* width: 70%; */
    margin-left: 14%;

}

th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #11235A;
    font-size: 14px;
    color: white;
}

tr {
    background-color: white;
}

a.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
    padding: 5px 10px;
    border-radius: 3px;
    text-decoration: none;
}

a.btn-danger:hover {
    /* background-color: #c82333; */
    /* border-color: #bd2130; */
}

    </style>
<body>
    <div class= container>
        <h2>Masukan Data Siswa</h2>
    <form action="" method="post">
            <label><b>Nama</b></label><br>
            <input type="text" id="nama" name="nama" required><br>
            <label><b>Nis</b></label><br>
            <input type="number" id="nis" name="nis" required><br>
            <label><b>Rayon</b></label><br>
            <input type="text" id="nama" name="rayon" required><br>
            <button type= "submit" value="kirim"><b>Kirim</b></button>
            <button type= "submit" value="cetak"><a href= 'link.php'>cetak</a></button>
            <button type= "submit" value="cetak"><a href= 'link.php'><a href = distroy.php>hapus data</a></button>  
    </form>

    <?php

    session_start();


    if(!isset($_SESSION['dataSiswa'])) {
        $_SESSION['dataSiswa']= array();
    }

    if(isset($_POST['nama']) && isset($_POST['nis']) && isset($_POST['rayon'])){
        $data = array(
            'nama' => $_POST['nama'],
            'nis' => $_POST['nis'],
            'rayon' => $_POST['rayon']
        );
        array_push($_SESSION['dataSiswa'], $data);
    }

    if(isset($_GET['hapus'])) {
        $index = $_GET['hapus'];
        unset($_SESSION['dataSiswa'][$index]);
        //kembali ke hal awal
        header('Location: http://localhost/session/form.php');
        exit;
    }
    // var_dump($_SESSION['dataSiswa']);

    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Nama</th>';
    echo '<th>Nis</th>';
    echo '<th>Rayon</th>';
    echo '<th>Action</th>';
    echo'</tr>';
   



    foreach($_SESSION['dataSiswa'] as $index => $value){
        echo '<tr>';
        echo '<td>'. $value['nama'] .'</td>';
        echo '<td>'. $value['nis'] .'</td>';
        echo '<td>'. $value['rayon'] .'</td>';
        echo '<td><a href="?hapus='.$index.'">Hapus</a></td>';
        echo '</tr>';
    }
        echo '<table/>';


?>
</div>
</body>
</html>
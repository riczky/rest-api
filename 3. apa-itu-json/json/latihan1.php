<?php 


$mahasiswa = [
    [
        "nama" => "Sandhika Galih",
        "nrp" => "043040023",
        "email" => "sandhikagalih@unpas.ac.id"
    ],
    [
        "nama" => "Erik Doank",
        "nrp" => "023040001",
        "email" => "erik@gmail.com"
    ]
];

// $dbh = new PDO('mysql:host=localhost;dbname=ciperpus', 'root', '');
// $db = $dbh->prepare('SELECT * FROM anggota');
// $db->execute();
// $mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

// Array manjadi JSON
$data = json_encode($mahasiswa);
echo $data;

?>
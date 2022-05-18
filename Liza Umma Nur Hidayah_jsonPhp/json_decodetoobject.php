<?php 
$JSON = '{
    "DATA_MAHASISWA":
    {
        "Nama Mahasiswa": "Liza Umma Nur Hidayah",
        "data":
        {
            "NIM": "20050974048",
            "No_Telepon": "08882610168",
            "Hobi": "Membaca"
        }     
            
    }
}';

$outputObject = json_decode($JSON);

print "<PRE>";
print_r($outputObject);
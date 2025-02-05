<?php

use Core\DB;

$data = $_POST;

// DB::table('buku')
// ->create(['judul' => 'ensiklopedia', 'pengarang' => 'Ligas', 'isbn' => '00000'])
// ->execute()

// var_dump($data);
DB::table("buku")
->create($data)
->execute();

header('Location: /buku');
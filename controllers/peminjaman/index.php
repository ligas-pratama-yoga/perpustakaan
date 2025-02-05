<?php
use Core\DB;

$datas = DB::table("peminjaman")
            ->selectRaw("peminjaman. id, users.nama, buku.judul, peminjaman.tanggal_peminjaman, peminjaman.tanggal_pengembalian, peminjaman.status from peminjaman
                                inner join users on peminjaman.id_users = users.id
                                inner join buku on peminjaman.id_buku = buku.id;")
            ->execute()
            ->all();
$data_users = DB::table('users')
            ->select(['id', 'nama'])
            ->execute()
            ->all();
$data_buku = DB::table('buku')
            ->select(['id', 'judul'])
            ->execute()
            ->all();  
require views("peminjaman");



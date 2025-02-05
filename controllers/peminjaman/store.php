<?php

use Core\DB;

DB::table("peminjaman")
    ->create($_POST)
    ->execute();

header('location: /peminjaman');
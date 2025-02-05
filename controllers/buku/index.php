<?php

use Core\DB;

$datas = DB::table("buku")
        ->select(["*"])
        ->execute()
        ->all();

require views("buku");

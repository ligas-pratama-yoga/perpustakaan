<?php


use Core\DB;

$datas = DB::table("users")
        ->select()
        ->execute()
        ->all();

require views("users");

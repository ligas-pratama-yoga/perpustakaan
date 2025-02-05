<?php

$routes = [
    "get" => [
        "/" => views("index"),
        "/contact" => views("contact"),
        "/about" => views("about"),

        "/buku" => controllers("buku/index"),
        "/users" => controllers("users/index"),
        "/peminjaman" => controllers("peminjaman/index"),
        "/test" => controllers("test")
    ],
    "post" => [
        "/buku" => controllers("buku/store"),
        "/users" => controllers("users/store"),
        "/peminjaman" => controllers("peminjaman/store"),
    ],
    "patch" => [
        "/buku/{id}" => controllers("buku/update")
    ]
];

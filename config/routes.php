<?php


// npg_eEzi9vZg7lMt
// napi_df0gj6ryrk2271gdav133wq0r7hzwdn3zluowv0rhr9b7q8z9c4jffzbt6cvk8ru

// Nothing to say
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

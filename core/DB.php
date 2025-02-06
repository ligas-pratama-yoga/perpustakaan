<?php

namespace Core;

use PDO;

class DB
{
    /** @var PDO|null Koneksi ke database */
    private $connection = null;

    /** @var string Nama table */
    public $table = "";

    /** @var string Query untuk SQL */
    public $query = "";

    /** @var \PDOStatement|null Hasil query */
    public $result;

    /** @var string Where condition */
    private $where = "";

    public function __construct()
    {
        // postgresql://ligas:npg_eEzi9vZg7lMt@ep-twilight-hat-a1eeu4gn-pooler.ap-southeast-1.aws.neon.tech/perpustakaan?sslmode=require
        $this->connection = new PDO(
            "pgsql:host=ep-twilight-hat-a1eeu4gn-pooler.ap-southeast-1.aws.neon.tech;user=ligas;password=npg_eEzi9vZg7lMt;dbname=perpustakaan",
            options: [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );
    }

    /**
     * Ambil koneksi dari database
     * @return PDO|null
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Buat instance DB dan isi field table dengan nilai yang ditentukan
     * @param string $table
     * @return DB
     */
    public static function table(string $table): DB
    {
        // Buat instance dari class DB
        $instance = (new static());
        // Isi field table dari instance dengan $table
        $instance->table = $table;
        // Kembalikan nilai instance
        return $instance;
    }

    /**
     * Select query untuk table
     * @param array $columns
     * @return DB
     */
    public function select(array $columns = ["*"])
    {
        $pre_query = "select " . implode(', ', $columns);
        $this->query .= $pre_query . " from {$this->table}";
        return $this;
    }


    /**
     * Select Raw query untuk table
     * @param string $query
     * @return DB
     */
    public function selectRaw(string $query)
    {
        $pre_query = "select {$query}";
        $this->query .= $pre_query;
        return $this;
    }

    public function create(array $data)
    {
        $columns = array_keys($data);
        $columns_query = implode(",", $columns);

        $values = array_values($data);
        $values_query = "'" . implode("','", $values) .  "'";

        $this->query .= "insert into {$this->table}({$columns_query}) values({$values_query})";
        return $this;
    }


    /**
     * Eksekusi query
     * @return DB
     */
    public function execute()
    {
        $this->result = $this->getConnection()->prepare($this->query);
        $this->result->execute();
        // var_dump($this->query . " {$this->where}");

        return $this;
    }

    /**
     * Method untuk mengambil seluruh data yang ada di dalam tabel
     * @return array
     */
    public function all()
    {
        return $this->result->fetchAll();
    }
}

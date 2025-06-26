<?php

class dbss_link
{
    protected $dbss;

    function __construct()
    {
        try {
            $this->dbss = new PDO("mysql:host=localhost;dbname=spark_dbss;charset=utf8", "root", "");
        } catch (PDOException $e) {
            ?>
            <script language="JavaScript">
                location.replace('e503.php');
            </script>
            <?php
            die("Server Message: " . $e->getMessage());
        }
    }

    function get_data($condition)
    {
        $query = $this->dbss->prepare($condition);
        return $query->fetchAll();
    }

    function set_data($condition, $data)
    {
        $result = false;
        $query = $this->dbss->prepare($condition);
        if ($query->execute($data)) {
            $result = true;
        }
        return $result;
    }

    function __destruct()
    {
        $this->dbss = null;
    }
}
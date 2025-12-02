<?php

class Database {
    protected $host;
    protected $user;
    protected $password;
    protected $db_name;
    protected $conn;

    public function __construct() {
        $this->getConfig();
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db_name);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        $this->conn->set_charset("utf8mb4");
    }

    private function getConfig() {
        include_once("config.php");
        $this->host     = $config['host'];
        $this->user     = $config['username'];
        $this->password = $config['password'];
        $this->db_name  = $config['db_name'];
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }

    public function get($table, $where = null) {
        $whereClause = '';
        if ($where) {
            $whereClause = " WHERE " . $where;
        }
        $sql = "SELECT * FROM " . $table . $whereClause;
        $result = $this->conn->query($sql);
        if ($result === false) {
            return false;
        }
        return $result->fetch_assoc();
    }

    public function insert($table, $data) {
        if (!is_array($data) || empty($data)) {
            return false;
        }

        $columns = [];
        $values  = [];

        foreach ($data as $key => $val) {
            $columns[] = $this->conn->real_escape_string($key);

            $values[] = "'" . $this->conn->real_escape_string($val) . "'";
        }

        $columnsStr = implode(",", $columns);
        $valuesStr  = implode(",", $values);

        $sql = "INSERT INTO " . $table . " (" . $columnsStr . ") VALUES (" . $valuesStr . ")";
        $res = $this->conn->query($sql);

        if ($res === true) {
            return $this->conn->insert_id;
        } else {
            return false;
        }
    }

    public function update($table, $data, $where) {
        if (!is_array($data) || empty($data) || empty($where)) {
            return false;
        }

        $updateParts = [];
        foreach ($data as $key => $val) {
            $k = $this->conn->real_escape_string($key);
            $v = $this->conn->real_escape_string($val);
            $updateParts[] = "{$k}='{$v}'";
        }
        $updateStr = implode(",", $updateParts);

        $sql = "UPDATE " . $table . " SET " . $updateStr . " WHERE " . $where;
        $res = $this->conn->query($sql);

        return ($res === true);
    }

    public function delete($table, $filter) {

        $filterStr = trim($filter);
        if ($filterStr === '') {
            return false;
        }

        if (stripos($filterStr, 'where') !== 0) {
            $sql = "DELETE FROM " . $table . " WHERE " . $filterStr;
        } else {
            $sql = "DELETE FROM " . $table . " " . $filterStr;
        }

        $res = $this->conn->query($sql);
        return ($res === true);
    }
}

?>
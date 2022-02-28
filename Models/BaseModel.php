<?php
class BaseModel extends Database {
    public function __construct() {
        $this->connection = $this->connect();
    }

    private function _query($query) {
        return  mysqli_query($this->connection, $query);
    }

    /**
     * Return all records of a table in database
     *
     * @param array $select The columns to be selected, default is * (all)
     * @param integer $limit The number of records limited, default is 10
     * @param array $order The sorting rules for records. It is an associative array, and looks like this ['column' => 'id', 'orderType' => 'desc']
     * @return void
     */
    public function getAll($select = ['*'], $limit = 10, $order = ['column' => 'id', 'orderType' => 'desc']) {
        $selectColumns = $select ? implode(', ', $select) : '*';
        $orderBys = implode(' ', $order);

        $query = 'SELECT ' . $selectColumns . ' FROM ' . $this->tableName;

        if ($orderBys) {
            $query .= ' ORDER BY ' . $orderBys;
        }

        $query .= ' LIMIT ' . $limit;

        // die($query);
        $result = $this->_query($query);

        $data = [];

        while ($row = mysqli_fetch_assoc($result)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function getById($id) {
        
    }

    public function store() {
    }

    public function update() {
    }

    public function delete() {
    }
}

    <?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'db_zalopedia');

    class Database
    {
        public $mysqli;

        function __construct()
        {
            $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if ($this->mysqli->connect_errno) {
                echo "Failed to connect to MySQL: " . $this->mysqli->connect_error;
            }
        }

        function select($table, $where = null)
        {
            $sql = "SELECT * FROM $table";

            if ($where != null) {
                foreach ($where as $key => $value) {
                    $sql .= " WHERE $key = '$value'";
                }
            }

            $result = $this->mysqli->query($sql);

            return $result->fetch_all(MYSQLI_ASSOC);
        }

        function insert($table, $data)
        {
            $sql = "INSERT INTO $table SET ";
            foreach ($data as $key => $value) {
                $sql .= "$key = '$value', ";
            }
            $sql = rtrim($sql, ", ");
            $this->mysqli->query($sql);
        }

        function update($table, $data, $where)
        {
            $sql = "UPDATE $table SET ";
            foreach ($data as $key => $value) {
                $sql .= "$key = '$value', ";
            }
            $sql = rtrim($sql, ", ");
            $sql .= " WHERE ";
            foreach ($where as $key => $value) {
                $sql .= "$key = '$value', ";
            }
            $sql = rtrim($sql, ", ");
            $this->mysqli->query($sql);
        }

        function delete($table, $where)
        {
            $sql = "DELETE FROM $table WHERE ";
            foreach ($where as $key => $value) {
                $sql .= "$key = '$value', ";
            }
            $sql = rtrim($sql, ", ");
            $this->mysqli->query($sql);
        }

        function __destruct()
        {
            $this->mysqli->close();
        }
    }

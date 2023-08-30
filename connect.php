<?php 
    class connect{
        var $db=null;
        public function __construct(){
            $dsn = 'mysql:host=localhost;dbname=lt_web';
            $user='root';
            $pass='';
            try {
                $this->db=new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                // $this->db = new PDO($dsn, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Kết nối thành công!";
            } catch(PDOException $e) {
                echo "Kết nối thất bại: " . $e->getMessage();
            }
        }
        public function getInstance($select){
            $results = $this->db->query($select);
            $result=$results->fetch();
            return $result;
        }
        public function getList($select){
            $results=$this->db->query($select);
            return $results;
        }
        public function execute($select){
            $results=$this->db->exec($select);
            return $results;
        }
    }

    // $c = new connect();
 
?>  
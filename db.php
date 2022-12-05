<?php

namespace portalove;

class db
{

    private $host;
    private $dbName;
    private $username;
    private $password;
    private $port;

    private $connection;

    public function __construct($host, $dbName, $username, $password, $port = '')
    {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->username = $username;
        $this->password = $password;
        $this->port = $port;

        try {
            $this->connection = new \PDO("mysql:host=$host;dbname=$dbName;port=$port", $username, $password);
            // set the PDO error mode to exception
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function getMenuItems()
    {
        $menuItems = [];
        $sql = "SELECT * FROM menu";


        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $menuItems[] = [
                    'href' => $row['href'],
                    'item' => $row['item']
                ];
            }

            return  $menuItems;
        } catch (\PDOException $e) {
            return [];
        }
    }

    public function getPopularItems()
    {
        $popular = [];
        $sql = "SELECT * FROM popular";

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $popular[] = [
                    'id' => $row['id'],
                    'name' => $row['nazov'],
                    'text' => $row['text'],
                    'fotka1' => $row['fotka1'],
                    'fotka2' => $row['fotka2'],
                    'fotka3' => $row['fotka3'],
                ];
            }
            return  $popular;
        } catch (\PDOException $e) {
            return [];
        }
    }

    public function getContinents()
    {
        $continent = [];
        $sql = "SELECT * FROM continent";

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $continent[] = [
                    'id' => $row['id'],
                    'name' => $row['nazov'],
                    'fotka' => $row['fotka']
                ];
            }
            return  $continent;
        } catch (\PDOException $e) {
            return [];
        }
    }
    public function getHotels()
    {
        $hotels = [];
        $sql = "SELECT * FROM hotels";

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $hotels[] = [
                    'div' => $row['div'],
                    'name' => $row['nazov'],
                    'place' => $row['poloha'],
                    'text' => $row['text'],
                    'price' => $row['cena'],
                    'photo' => $row['fotka']
                ];
            }
            return  $hotels;
        } catch (\PDOException $e) {
            return [];
        }
    }
    public function getHotel($div_id){
        $hotels = [];

        $sql = "SELECT * FROM hotels WHERE `div` ='".$div_id."'";

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $hotels[] = [
                    'div' => $row['div'],
                    'name' => $row['nazov'],
                    'place' => $row['poloha'],
                    'text' => $row['text'],
                    'price' => $row['cena'],
                    'photo' => $row['fotka']
                ];
            }
            return  $hotels;
        } catch (\PDOException $e) {
            return [];
        }
    }
    public function getUsers(){
        $users = [];

        $sql = "SELECT * FROM users";

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $users[] = [
                    'id' => $row['id'],
                    'username' => $row['username'],
                    'password' => $row['password']
                ];
            }
            return  $users;
        } catch (\PDOException $e) {
            return [];
        }
    }

    public function login($username, $password){
        $sql = "SELECT COUNT(id) AS is_admin FROM users WHERE username ='".$username."' AND password = '".$password."'";


        try {
            $query = $this->connection->query($sql);
            $user_exists = $query->fetch(\PDO::FETCH_ASSOC);
            if (intval($user_exists['is_admin'])===1){
                return true;
            }else return false;

        } catch (\PDOException $e) {
            return false;
        }
    }
    public function insertPopular($nazov, $text,$fotka1,$fotka2,$fotka3){
        $sql = "INSERT INTO popular VALUES (null,'".$nazov."','".$text."','".$fotka1."','".$fotka2."','".$fotka3."')";


        try {
            $this->connection->query($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function deletePopular($id){
        $sql = "DELETE FROM popular WHERE id = ".$id;
        try {
            $this->connection->query($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }
    public function getPopular($id)
    {
        $popular = [];
        $sql = "SELECT * FROM popular WHERE id = ".$id;

        try {
            $query = $this->connection->query($sql);
            $popular = $query->fetchAll(\PDO::FETCH_ASSOC);
                return  $popular;
        } catch (\PDOException $e) {
            return [];
        }
    }
    public function updatePopular($id,$nazov,$text,$fotka1,$fotka2,$fotka3 ){
        $sql = "UPDATE popular SET nazov='".$nazov."',text ='".$text."',fotka1='".$fotka1."',fotka2='".$fotka2."',fotka3='".$fotka3."' WHERE id = ".$id;
        try {
            $this->connection->query($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }
}
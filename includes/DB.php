<?php
error_reporting(E_ALL);
session_start();

class DB {

    public static $host = "localhost";
    public static $user = "root";
    public static $password = "";
    public static $dbname = "carwash_db";

    function connect()
    {
        //OOP connect to database with mysqli
        $conn = new mysqli(DB::$host, DB::$user, DB::$password, DB::$dbname);
        if ($conn->connect_error) {
            $this->install_db();
        }
        return $conn;
    }

    //Runs the SQL query and if statement contains a SELECT, fetches the result OOP else returns true
    function query($sql)
    {
        $conn = $this->connect();
        $result = $conn->query($sql);
        if (str_starts_with(strtoupper($sql), 'SELECT')) {
            $result = $result->fetch_all(MYSQLI_ASSOC);
        }
        $conn->close();
        return $result;
    }

    // Run the SQL query and returns number of rows affected
    function count($sql)
    {
        $conn = $this->connect();
        $result = $conn->query($sql);
        $num_rows = $result->num_rows;
        $conn->close();
        return $num_rows;
    }


    //OOP install database from .sql file and connect to database with mysqli
    function install_db()
    {
        $conn = new mysqli(DB::$host, DB::$user, DB::$password);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = file_get_contents('install/carwash_db.sql');
        if ($conn->multi_query($sql) === TRUE) {
            echo "Database installed successfully";
        } else {
            echo "Error installing database: " . $conn->error;
        }
        $conn->close();
        $this->connect();
    }

    public function insertUser(mixed $name, mixed $phone, mixed $email, mixed $password, mixed $gender)
    {
        $sql = "INSERT INTO user_tb (name, phone, email, password, gender) VALUES ('$name', '$phone', '$email', '$password', '$gender')";
        return $this->query($sql);
    }

    //escape inputs string for security OOP
    public function escape_string($string)
    {
        $conn = $this->connect();
        return mysqli_real_escape_string($conn, trim($string));
    }

    public function login(string $email, string $password)
    {
        $sql = "SELECT * FROM user_tb WHERE email = '$email' AND password = '$password'";
        $result = $this->query($sql);
        if (count($result) > 0) {
            $_SESSION['user_id'] = $result[0]['id'];
            return true;
        } else {
            return false;
        }
    }

    public function getUser(mixed $user_id)
    {
        $sql = "SELECT * FROM user_tb WHERE id = '$user_id'";
        return $this->query($sql)[0];
    }

    public function addBooking(mixed $user_id, mixed $phone, mixed $car, mixed $cleaning, mixed $date_booked)
    {
        $sql = "INSERT INTO booking_tb (user_id, phone, car, cleaning, date_booked) VALUES ('$user_id', '$phone', '$car', '$cleaning', '$date_booked')";
        return $this->query($sql);
    }

    public function sendSMS(mixed $phone, string $message)
    {
        $url = "https://api.textlocal.in/send/";
        $data = array('apikey' => '0jqXQZqZQZW-0jqXQZqZQZW-0jqXQZqZQZW'.
        '&numbers=91' . $phone . '&message=' . $message);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }


}

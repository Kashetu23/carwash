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
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.ikelvin.co/sms/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\n\t\"api_key\": \"709d65740b1ca881b60e077062810354\",\n\t\"source\": \"StreetsWash\",\n\t\"destination\": \"".$phone."\",\n\t\"message\": \"".$message."\",\n\t\"type\": \"2\",\n\t\"report\": \"1\"\n}",
            CURLOPT_HTTPHEADER => [
                "Authorization: Basic OjcwOWQ2NTc0MGIxY2E4ODFiNjBlMDc3MDYyODEwMzU0",
                "Content-Type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        }
        return $response;
    }

    public function userExists(mixed $user_id)
    {
        $sql = "SELECT * FROM user_tb WHERE id = '$user_id'";
        return count($this->query($sql)) > 0;
    }

    public function getLastBookingId()
    {
        $sql = "SELECT id FROM booking_tb ORDER BY id DESC LIMIT 1";
        return $this->query($sql)[0]['id'];
    }


}

<?php

class SMS {
    public function send(mixed $phone, string $message)
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


}

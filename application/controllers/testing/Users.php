<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function display()
    {
        //API URL
        $url = 'http://localhost/codeigniter/api/users/user';
        //$url = 'http://localhost/codeigniter/api/users/user/1';

        //API Key
        $apiKey = '@mazhar@123';

        //Auth Credentials
        $username = "admin";
        $password = "1234";

        //create a new cURL resource
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("X-API-KEY:" . $apiKey));
        curl_setopt($curl, CURLOPT_USERPWD, "username:password");

        $result = curl_exec($curl);

        echo "<pre>";
        echo $result;

        //close cURL resource
        curl_close($curl);

    }

    public function delete()
    {
        //API URL
        $url = 'http://localhost/codeigniter/api/users/user/3';

        //API Key
        $apiKey = '@mazhar@123';

        //Auth Credentials
        $username = "admin";
        $password = "1234";

        //create a new cURL resource
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("X-API-KEY:" . $apiKey));
        curl_setopt($curl, CURLOPT_USERPWD, "username:password");
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');

        $result = curl_exec($curl);

        echo "<pre>";
        echo $result;

        //close cURL resource
        curl_close($curl);

    }

    public function insert()
    {
        //API URL
        $url = 'http://localhost/codeigniter/api/users/user';

        //API Key
        $apiKey = '@mazhar@123';

        //Auth Credentials
        $username = "admin";
        $password = "1234";

        //User Information
        $userData = array(
            'first_name' => 'Imran',
            'last_name' => 'Hossain',
            'email' => 'imo@gmail.com',
            'phone' => '01911913250'
        );

        //create a new cURL resource
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("X-API-KEY:" . $apiKey));
        curl_setopt($curl, CURLOPT_USERPWD, "username:password");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $userData);

        $result = curl_exec($curl);

        echo "<pre>";
        echo $result;

        //close cURL resource
        curl_close($curl);

    }

    public function update()
    {
        //API URL
        $url = 'http://localhost/codeigniter/api/users/user';

        //API Key
        $apiKey = '@mazhar@123';

        //Auth Credentials
        $username = "admin";
        $password = "1234";

        //User Information
        $userData = array(
            'id' => 10,
            'first_name' => 'john',
            'last_name' => 'doe',
            'email' => 'imo@gmail.com',
            'phone' => '01911913250'
        );

        //create a new cURL resource
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("X-API-KEY:" . $apiKey, 
            "Content-Type: application/x-www-form-urlencoded"));
        curl_setopt($curl, CURLOPT_USERPWD, "username:password");
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($userData));

        $result = curl_exec($curl);

        echo "<pre>";
        echo $result;

        //close cURL resource
        curl_close($curl);

    }

}
<?PHP
try {
        $db_auth = new PDO("mysql:host=localhost;port=3306;dbname=acore_auth","acore", "acore", array(1002 => 'SET NAMES utf8'));
    }
    catch(PDOException $e){
    echo $e;
    die();
}
$serverSettings['servername'] = "MyServerName - World of Warcraft Private Server";
$serverSettings['title'] = "MyServerNameTitle";
$serverSettings['desc'] = "HTMLDesc";
$serverSettings['url'] = "http://mywebsiteurl.com";
$serverSettings['server_ip'] = "127.0.0.1";
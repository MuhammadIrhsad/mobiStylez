<?php

use PhpParser\Node\Scalar\LNumber;

require __DIR__ . '/vendor/autoload.php';

$options = array(
    'cluster' => 'ap2',
    'useTLS' => true
);
$pusher = new Pusher\Pusher(
    'e0ffe076e64df8486c12',
    'b5d6ed27548c9d7a90be',
    '1401081',
    $options
);



$fn = $_POST['fname'];
$ln = $_POST['lname'];
$conn = mysqli_connect("localhost", "root", "", "test");
if ($conn) {
    $sql = "INSERT INTO user(f_name,l_name) VALUES('{$fn}','{$ln}')";
    $response = mysqli_query($conn, $sql);
    if ($response) {
        $data['message'] = $fn." ".$ln;
        $pusher->trigger('mobiStylez', 'add-user', $data);
        echo "Record is inserted";
    } else {
        echo "Not inserted";
    }
}

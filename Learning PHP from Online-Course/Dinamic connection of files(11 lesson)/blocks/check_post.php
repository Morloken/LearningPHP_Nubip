    <?php
//    print_r($_POST);
//        $list = [4,5,6,7];
//        print_r($list);

// Use isset() to check if the keys exist in the $_POST array
    $username = isset($_POST['username']) ? $_POST['username'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$message = isset($_POST['message']) ? $_POST['message'] : null;

    if (trim($username) == '') {
        echo "Name is required";
} elseif (strlen(trim($username)) < 3) {
    echo "Name must be at least 3 characters";
} elseif (trim($email) == '') {
    echo "Email is required";
} elseif (trim($password) == '') {
    echo "Password is required";
} elseif (trim($message) == '') {
    echo "Message is required";
} else {
    echo "<h1> All your data </h1>";
    foreach ($_POST as $key => $value) {
        echo "<p>Key: $key, value: $value</p>";
    }
}

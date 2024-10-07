    <?php
//    print_r($_POST);
//        $list = [4,5,6,7];
//        print_r($list);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password  = $_POST['password'];
    $message = $_POST['message'];

    if(trim($name) == ''){
        echo "Name is required";
    }elseif(strlen(trim($name)) < 3){
        echo "Name must be at least 3 characters";
    }

    else if(trim($email) == ''){
        echo "Email is required";
    }else if(trim($password) == ''){
        echo "Password is required";
    }
    else if(trim($message) == ''){
        echo "Message is required";
    }



    else{
        echo "<h1> All your data </h1>";
        foreach ($_POST as $key => $value) {
            echo "<p>Key: $key, value: $value</p>";
        }
    }
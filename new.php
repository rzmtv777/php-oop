<?php
// FUNCTION
function greet($name){
    return "Salom, $name!";
}

// OOP CLASS
class User {

    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function checkAge(){
        if($this->age >= 18){
            return "Voyaga yetgan";
        } else {
            return "Voyaga yetmagan";
        }
    }

    public function show(){
        echo "<h3>Foydalanuvchi ma'lumoti</h3>";
        echo "Ism: " . $this->name . "<br>";
        echo "Yosh: " . $this->age . "<br>";
        echo "Status: " . $this->checkAge() . "<br>";
    }
}

// ARRAY
$colors = ["Qizil", "Ko'k", "Yashil", "Sariq"];

?>

<!DOCTYPE html>
<html>
<head>
<title>PHP All in One</title>
</head>
<body>

<h2>PHP All-in-One Example</h2>

<!-- SERVER SUPERGLOBAL -->
<p>Server: <?php echo $_SERVER['SERVER_NAME']; ?></p>

<!-- FORM -->
<form method="POST">
    Ism: <input type="text" name="name"><br><br>
    Yosh: <input type="number" name="age"><br><br>
    <button type="submit">Yuborish</button>
</form>

<hr>

<?php

// SUPERGLOBAL POST
if(isset($_POST['name']) && isset($_POST['age'])){

    $name = $_POST['name'];
    $age = $_POST['age'];

    echo greet($name);

    // OBJECT
    $user = new User($name, $age);

    echo "<br><br>";
    $user->show();
}

?>

<hr>

<h3>Array + Loop Example</h3>

<?php

// LOOP
for($i=0; $i<count($colors); $i++){
    echo $colors[$i] . "<br>";
}

?>

</body>
</html>
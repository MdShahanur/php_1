
<?PHP include "db.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Admin login</title>
  </head>
  <body>
  <?php
  /*database connection code goes here
  $connect = mysqli_connect('localhost', 'root', '', 'ssb234');
  if ($connect){
    echo "database connect hurraaaaa!";
  }else{
    die("database connection failed");
  }*/

  if(isset($_POST['login'])){
    $username = $_POST['username'];
   $password = $_POST['password'];
   //echo $username. "<br/>".$password;
  }
  
 

$username = "Hellow friend i am md Shahanur";
echo $username;
echo "<br>";
echo var_dump($username)."<br>";
echo strlen($username)."<br>";
echo str_word_count($username)."<br>";
echo strrev($username)."<br/>";

/*global variable
$_POST[];
$_GET[];
$_SERVER[];*/

/*data type
1.string--text/number/apace/sign
2.in

php oparator
1.  arithmetic oparator--   +, -, *, /, %,
2.  assignment oparator-    =, +=, -=, *=, /=,
3.  logical operator-       &&, ।।, !,
4.  comparission oparator   ==, ===, !=, !==, <, >, <=, >=,
5.  string operator         ., .=,
6.  array oparator          +, ==, ===, !=, !===, <, >,
7.  update operator --, ++,
*/

/*if else*/
    $username = "Shahanur";
    $passwor = 12345;

    if ($username == "Shahanur"){
        if ( $passwor == 12345){
            echo "Wellcome" . "" . $username ;
        }
        else{
            echo "Wrong password";
        }        
    }
    else{
        echo "Worng username";
    } 
    echo "<br/>";

    /*switch case*/
    $car = "Toyota";
    switch ($car){

        case 'Toyota':
            echo "I love this" . $car;
            break;

            case 'BMW':
                echo "I love this" . $car;
                break;

               case 'FERARI':
                    echo "I love this" . $car;
                  break;

            case 'AUDI':
                echo "I love this". $car;
            break;
            
        default:
            echo "Notning match";
        break;
    }
    echo "<br/>";


    $name = "Shahanur";
    switch($name){

        case 'Shahanur':
            echo "Wellcome.$name";
        break;

        case 'Kibria':
            echo "wellcome . $name";
        break;

        default:
         'Nothing match';
    break;
    }

/*for loop*/
for($i=1; $i<10; $i++){
    echo " The serial is :".$i. "<br/>";
}

$a = 27;
$b;

for($i=1; $i<=10; $i++){
    $b = $a*$i;
    echo $a."x".$i."=". $b."<br/>";
}
 
$a= 44;
$b;

for($i=1; $i<=10; $i++){
    $b= $a*$i;
    echo $a."x".$i. "=". $b. "<br>";
}
echo "My name is Shahanur";
     
/*while loop*/
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
 $x= 150;
 $y;

 while ($i <=10){
     $y = $x * $i;
     echo "" . $x . "x" . $i . "=" . $y . "<br/>";
     $i++;
     
 }

  $x= 15;
 $y;

 do{
     $y = $x * $i;
     echo "" . $x . "x" . $i . "=" . $y . "<br/>";
     $i++;
     
 }while ($i <=10);

/*foreach loop*/
 $a = array ("tonoy", "tomal", "tagib", "ashab");
    foreach ($a as $name ) {
        echo $name. "<br>";
    }
//form data input
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  echo "$username". "<br>". "$password". "<br/>";
}

?>

<!--html ducoment-->

<div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <form action="" method="POST" class="main_form">

            <div class="form_group">
              <h1>User Login</h1>              
            </div>

            <div class="form_group">
             <label for="">Username</label>
             <input type="text" class="form-control" name="username">           
            </div>

            <div class="form_group">
             <label for="">password</label>
             <input type="password" class="form-control" name="password">           
            </div> 

            <button type="submit" class="btn btn-primary" name="login">Login</button>

          </form>          
        </div>
      </div>
    </div>
    









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
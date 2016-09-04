<?php
// Functions and Includes
function greetings($name){
    echo "hello to you, $name !<br/>";
}


greetings('John Doe');

/*function numbers($number){
return $number + 2;
}*/

//greetings();


?>

<?php
$current_user = "User";
function is_user(){
    global $current_user;
    if($current_user == 'User'){
        echo "It's User";
    } else{
        echo "This is not the User";
    }
}

is_user();

?>
<br/>
<?php
function hello($arr){
    if(is_array($arr)){
        foreach($arr as $name){
            echo "Hello, $name, how's it going!<br/>";
        }
    } else{
        echo 'Hello, Everyone!';
    }
}

$names = array(
    'John',
    'Joan',
    'Jean',
    'Jessy',
    'Jacob',
    'Joshua',
    'Julia',
    'Jayden',
    'Jasmine',
    'Jake',
    'James',
    'Joseph',
    'Julian',
    'Jeffrey',
    'Jackson',
    'Jasper',
    'Jonah',
    'Jude',
    'Jose',
    'Jesus'
);

hello($names);
?>

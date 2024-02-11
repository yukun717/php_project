<?php

$method = $_SERVER["REQUEST_METHOD"];
echo "当前请求的方式是：". $method;

if($method=="POST"){
    $name= $_POST["name"];
    $passwd= $_POST["passwd"];
    $school= $_POST["school"];
    $hobby= $_POST["hobby"];
    $hobbys = '';
    foreach($hobby as $value){
        $hobbys = $hobbys.$value.',';
    }
    $hobbys = rtrim($hobbys,',');

    $sex = $_POST["sex"];
    $skills = $_POST["skills"];
    $skill = '';
    foreach($skills as $value){
        $skill = $skill.$value.',';
    }
    $skill = rtrim($skill, ',');

    echo '<br>姓名是：'. $name . '<br>密码是：' . $passwd . 
    '<br>学校：'. $school . '<br>爱好：'. $hobbys . 
    '<br>性别：'. $sex . '<br>技能：'. $skill;
}else if($method=="GET"){

}
?>
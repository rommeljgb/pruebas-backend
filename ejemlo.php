<?php
/*$input = preg_quote('f', '~'); // don't forget to quote input string!
$data = array(
    "foo" => "bar",
    "bar" => "foo",
);
foreach ($data as $getrow){
  echo $getrow."<br>";
}
echo "<br><br><br>";
$result = preg_grep('~' . $input . '~', $data);
foreach ($result as $get){
  echo $get."<br>";
}*/



/*global $result;
function array_searc_result($array,$key,$value)
{
    global $result;
    foreach($array as $k=>$v)
    {
        if(array_key_exists($key,$v) && ($v[$key] == $value))
        {
            $result[] = $v;
        }
    }
    return $result;;
}
$array = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
$data = array_searc_result($array,'Volvo',22);
echo '<pre>';
print_r($data);
echo '</pre>';*/

$array = array(
    array('name' => 'John Doe', 'email' => 'john@gmail.com'),
    array('name' => 'Marry Lies', 'email' => 'marry@gmail.com'),
    array('name' => 'Andrew Joe', 'email' => 'andrew@gmail.com'),
);

$like = 'Marry';

$result = array_filter($array, function ($item) use ($like) {
    if (stripos($item['name'], $like) !== false) {
        return true;
    }
    return false;
});

foreach ($result as $getdata){
   echo $getdata['name']."-".$getdata['email']."<br>";
}



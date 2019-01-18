<?php 

$arr_students = array(
    array('alicia', '...'),
    array('judy', '...'),
    array('yara', '...')
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <div class="students">
<?php for ($i = 0; $i < count($arr_students); $i++) {
    echo '<div class="student">' . $arr_students[$i][0] . '</div>';
    echo '<div class="student_info">' . $arr_students[$i][1] . '</div>'; 
} ?>

  </div>  
</body>
</html>
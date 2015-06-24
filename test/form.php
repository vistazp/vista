<?php
require '../config/database.php';
require '../libs/form.php';
require '../libs/database.php';

if (isset($_REQUEST['run'])) {
try{
    $form = new form();

    $form   ->post('name')
            ->val('minlength', 5)
            
            ->post('age')
            ->val('digit')
            
            ->post('gender');

    $form   ->mit();
    
    echo 'form passed!';
    $data = $form->fetch();
    
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    
    //$db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
//    $db->insert('person', $data);
    $this->model->addUser($data);
    
}
 catch (Exception $e){
       echo $e->getMessage();
 }
    
}
?>

<form method="post" action="?run">
    Name<input type="text" name="name" />
    Age<input type="text" name="age" />
    Gender<select name="gender">
        <option value="m">Male</option>
        <option value="f">Female</option>
    </select>
    <input type="submit" />
</form>





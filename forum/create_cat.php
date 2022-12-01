<?php
//create_cat.php
include 'connect.php';
include 'header.php';

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    //the form hasn't been posted yet, display it
    echo "<form method='post' action=''>
        Category name: <input type='text' name='cat_name' />
        Category description: <textarea name='cat_description' /></textarea>
        <input type='submit' value='Add category' />
     </form>";
}
else
{
    //the form has been posted, so save it
    $sql = "INSERT INTO categories(cat_name, cat_description)
       VALUES('" . mysqli_real_escape_string($conn, $_POST['cat_name']) . "',
             '" . mysqli_real_escape_string($conn, $_POST['cat_description']). "');";
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        //something went wrong, display the error
        echo 'Error' . mysqli_error();
    }
    else
    {
        echo 'New category successfully added.';
    }
}

include 'footer.php';

?>

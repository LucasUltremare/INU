<?php
//index.php
include 'connect.php';
include 'header.php';

$sql = "SELECT  *
   FROM CATEGORIES
   INNER JOIN TOPICS
   ON CATEGORIES.CAT_ID = TOPICS.TOPIC_CAT;";


$result = mysqli_query($conn, $sql);

if(!$result)
{
    echo 'The categories could not be displayed, please try again later.';
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'No categories defined yet.';
    }
    else
    {
        //prepare the table
        echo '<table border="1">
              <tr>
                <th>Category</th>
                <th>Topic</th>
              </tr>';

        while($row = mysqli_fetch_assoc($result))
        {
            echo '<tr>';
                echo '<td class="leftpart">';
                    echo '<h3><a href="category.php?id=' . $row['cat_id'] . '">' . $row['cat_name'] . '</a></h3>' . $row['cat_description'];
                echo '</td>';
                echo '<td class="rightpart">';
                            echo '<h3><a href="topic.php?id=' . $row['topic_id'] . '">' . $row['topic_subject'] . '</a><h3>';;
                echo '</td>';
            echo '</tr>';
        }
    }
}
include 'footer.php';
?>

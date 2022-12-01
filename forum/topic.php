<?php
//topic.php
include 'connect.php';
include 'header.php';

//first select the topic based on $_GET['topic_id']
$sql = "SELECT
        topic_id,
        topic_subject
        FROM
        topics
        WHERE
        topics.topic_id = " . mysqli_real_escape_string($conn, $_GET['id']);

$result = mysqli_query($conn, $sql);

if(!$result)
{
    echo 'The topic could not be displayed, please try again later.' . mysqli_error($conn);
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'This topic does not exist.';
    }
    else
    {
        //display category data
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<h2>Posts in ' . $row['topic_subject'] . ' topic</h2>';
        }

        //do a query for the posts
        $sql = "SELECT
                posts.post_id,
                posts.post_topic,
                posts.post_content,
                posts.post_date,
                posts.post_by,
                users.user_id,
                users.user_name
                FROM
                posts
                LEFT JOIN
                users
                ON
                posts.post_by = users.user_id
                WHERE
                posts.post_topic = " . mysqli_real_escape_string($conn, $_GET['id']);

        $result = mysqli_query($conn, $sql);

        if(!$result)
        {
            echo 'The topic could not be displayed, please try again later.';
        }
        else
        {
            if(mysqli_num_rows($result) == 0)
            {
                echo 'This topic is empty.';
            }
            else
            {
                //prepare the table
                echo '<table border="1">
                      <tr>
                        <th>Post</th>
                        <th>Date and user name</th>
                      </tr>';

                while($row = mysqli_fetch_assoc($result))
                {
                    echo '<tr>';
                        echo '<td class="leftpart">';
                            echo $row['post_content'];
                        echo '</td>';
                        echo '<td class="rightpart">';
                            echo date('d-m-Y', strtotime($row['post_date']));
                            echo "\n";
                            echo $_SESSION['user_name'];
                        echo '</td>';
                    echo '</tr>';
                }

                echo '<form method="post" action="reply.php?id=' . $row['topic_id'] . '">
                    <textarea name="reply-content"></textarea>
                    <input type="submit" value="Submit reply" />
                </form>';
                
            }
        }
    }
}
include 'footer.php';
?>

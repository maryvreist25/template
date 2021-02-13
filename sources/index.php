
/* Duplicated from Javajam - no changes yet - 2/10/21
*/
<?php


include 'includes/db.inc.html.php';

try {
    $sql = 'SELECT * FROM content WHERE id=1';
    $result = $pdo->query($sql);
} catch (PDOException $e) {
    $error = 'Error fetching content: ' . $e->getMessage();
    include 'includes/error.html.php';
    exit();
}

while ($row = $result->fetch()) {
    $contents[] = array(
        "title" => $row["title"],
        "body" => $row["body"],
        "image" => $row["image"]
    );
}

/*foreach ($result as $row)
{
  $contents[] = array(
      'title' => $row['title'],
      'body' => $row['body']
      )
}
*/

include 'home/home.html.php';


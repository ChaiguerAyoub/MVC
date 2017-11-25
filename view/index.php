<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<?php echo "hello ".$users->name." !</br>"; ?>


    <?php  echo"The post owner : ".$post->owner."</br>";
            echo "tags : ";foreach ($post->tags as $tag) echo $tag." ";
    ?>
	
</body>
</html>


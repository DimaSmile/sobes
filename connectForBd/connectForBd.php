<?php 

$connection = mysqli_connect('localhost', "root", '', 'test_db');

if ($connection == false) {
	echo "Не удалось подключиться к бд";
	echo mysqli_connect_error();
	exit();
}

$result = mysqli_query($connection, "SELECT * FROM articles_categories");
?>
<ul>
	<?php 
	while ($record = mysqli_fetch_assoc($result)) {
	$articles_count = mysqli_query($connection, "SELECT COUNT(`id`) AS `total_count` FROM `articles` WHERE `categorie_id` = " . $record['id']);
	$articles_count_resault = mysqli_fetch_assoc($articles_count);
	echo "<li>" . $record['title']. ' ('.$articles_count_resault["total_count"].')' ."</li>";
} ?>
	

</ul>


<?php 	mysqli_close($connection); ?>
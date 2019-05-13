<?php
require_once("database.php");
$limit = 20;
$query = "SELECT * FROM bengkel";

$s = $pdo_conn->prepare($query);
$s->execute();
$total_results = $s->rowCount();
$total_pages = ceil($total_results/$limit);

if (!isset($_GET['page'])) {
    $page = 1;
} else{
    $page = $_GET['page'];
}



$starting_limit = ($page-1)*$limit;
$show  = "SELECT * FROM bengkel ORDER BY ID_BENGKEL ASC LIMIT $starting_limit, $limit";

$r = $pdo_conn->prepare($show);
$r->execute();

while($res = $r->fetch(PDO::FETCH_ASSOC)):
?>
<h4><?php echo $res['ID_BENGKEL'];?></h4>
<p><?php echo $res['NAMA_BENGKEL'];?></p>
<hr>
<?php
endwhile;


for ($page=1; $page <= $total_pages ; $page++):?>

<a href='<?php echo "?page=$page"; ?>' class="links"><?php  echo $page; ?>
 </a>

<?php endfor; ?>
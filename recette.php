<?php
require_once('templates/header.php');
require_once('lib/recipe.php');

$pdo = new PDO('mysql:dbname=studi_live_cuisinea;host=localhost;charset=utf8mb4', 'root', '');

$id = $_GET['id'];


$query = $pdo->prepare("SELECT * FROM recipes WHERE id = :id");
$query->bindParam(':id', $id, PDO::PARAM_INT);
$query->execute();
$recipe = $query->fetch();


?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?=_RECIPES_IMG_PATH_.$recipe['image']; ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3"><?=$recipe['title']; ?></h1>
        <p class="lead"><?=$recipe['description']; ?></p>
    </div>
</div>

<?php
require_once('templates/footer.php');
?>
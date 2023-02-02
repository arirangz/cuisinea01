<?php
require_once('templates/header.php');
require_once('lib/tools.php');
require_once('lib/recipe.php');

if (isset($_POST['saveRecipe'])) {
    $res = saveRecipe($pdo, $_POST['category'], $_POST['title'], $_POST['description'], $_POST['ingredients'], $_POST['instructions'], null);
    var_dump($res);
}


?>

<form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label"">Titre</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="ingredients" class="form-label">Ingredients</label>
        <textarea name="ingredients" id="ingredients" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="instructions" class="form-label">Instructions</label>
        <textarea name="instructions" id="instructions" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Catégorie</label>
        <select name="category" id="category" class="form-select">
            <option value="1">Entrée</option>
            <option value="2">Plat</option>
            <option value="3">Dessert</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Image</label>
        <input type="file" name="file" id="file">
    </div>
    <input type="submit" value="Enregistrer" name="saveRecipe" class="btn btn-primary">


</form>

<?php
require_once('templates/footer.php');
?>
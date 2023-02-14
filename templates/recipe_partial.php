<div class="col-md-4 my-2 d-flex">
    <div class="card">
        <img src="<?=getRecipeImage($recipe['image']); ?>" class="card-img-top" alt="<?= $recipe['title']; ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $recipe['title']; ?></h5>
            <p class="card-text"><?= $recipe['description']; ?></p>
            <a href="recette.php?id=<?=$recipe['id']; ?>" class="btn btn-primary">Voir la recette</a>
        </div>
    </div>
</div>
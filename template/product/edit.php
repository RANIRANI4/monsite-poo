<h1>
    <?= $title ?>
</h1>

<form action="/product/<?= $product->getId() ?>/delete" method="post">
    <input type="hidden" name="_METHOD" value="DELETE">
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</form>

<form action="" method="POST" name="myForm">
    <div>
        <label for="picture">Image</label>
        <input id="picture" type="file" name="picture" placeholder="ChANGEZ l'image" accept="image/*">
    </div>
    <img src="<?= $product->getPicture() ?>" alt="" width="500">


    <div>
        <label for="title">titre</label>
        <input id="title" name="title" value="<?= $product-> getTitle() ?>">
    </div>
    <div>
        <label for="price">price</label>
        <input id="price" name="price" value="<?= $product-> getPrice() ?>">
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" row="10" placeholder="saisissez une description" style="resize: none;" required >
         <?= $product->getDescription() ?>
    </textarea>
    </div>

    <button type="submit">Soumettre</button>

</form>
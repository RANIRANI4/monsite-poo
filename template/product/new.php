<h1>
    <?= $title ?>
</h1>
<form action="" method="POST" enctype="multipart/form-data">

    <div>
        <label for="picture">Image</label>
        <input id="picture" type="file" name="picture" placeholder="Choisissez une image" accept="image/*">
    </div>


    <div>
        <label for="title">titre</label>
        <input id="title" name="title">
    </div>
    <div>
        <label for="price">price</label>
        <input id="price" name="price" placeholder="Saissisez votre description">
    </div>
    <div>
        <label for="description">description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>

    <button type="submit">Soumettre</button>

</form>
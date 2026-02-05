<h1>
    <?= $description ?>
</h1>
<form action="" method="POST" name="myForm">

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
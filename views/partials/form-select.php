<div class="mb-3">
    <label for="<?= $id ?>" class="form-label"><?= $label ?></label>
    <select name="<?= $id ?>" id="<?= $id ?>" class="form-select">
        <option selected>Pilih nama peminjam</option>
        <?php foreach($data as $option): ?>
        <option value="<?= $option['id']?>">
            <?= $option[$value] ?>
        </option>
        <?php endforeach; ?>
    </select>
</div>
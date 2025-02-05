<?php $readonly = $readonly ?? false ?>
<div class="mb-3">
    <label  for="<?= $id ?>" class="form-label"><?= $label ?></label>
    <input 
    type="<?= $type ?>" 
    name="<?= $id ?>" 
    class="form-control" 
    id="<?= $id ?>" 
    value="<?= ($value ?? '') ?>" 
    <?=  ($readonly == true ? "readonly" : "") ?>>
</div>
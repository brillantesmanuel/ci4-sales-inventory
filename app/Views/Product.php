<?php helper('form'); ?>

<?= $this->extend('Template') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h4">Categories</h1>
</div>

<?= form_open(); ?>
    <div class="form-floating mb-3">
        <input 
            id="name"
            type="text" 
            placeholder="Product Name"
            name="name"
            class="form-control<?= isset($errors['name']) ? ' is-invalid' : ''; ?>" 
            value="<?= $name ?? ''; ?>"
            />
        <label for="product_name">Product</label>
        
        <div id="validationServer04Feedback" class="invalid-feedback">
            <?= $errors['name'] ?? ''; ?>
        </div>
    </div>

    <div class="form-floating mb-3">
        <input
            id="description" 
            type="text" 
            placeholder="Description"
            name="description"
            class="form-control<?= isset($errors['description']) ? ' is-invalid' : ''; ?>"
            value="<?= $description ?? ''; ?>" 
            />
        <label for="product_name">Description</label>
        
        <div id="validationServer04Feedback" class="invalid-feedback">
            <?= $errors['description'] ?? ''; ?>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
<?= form_close(); ?>
<?= $this->endSection(); ?>
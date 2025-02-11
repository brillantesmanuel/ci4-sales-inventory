<?php helper('form'); ?>

<?= $this->extend('Template') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h4">Invetory</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="<?= base_url('products/create'); ?>" class="btn btn-sm btn-outline-secondary">
            <span data-feather="plus"></span>
            Add Inventory        
        </a>
    </div>
</div>

<?= validation_list_errors() ?>

<?= form_open(); ?>
    <div class="form-floating mb-3">
        <input 
            id="item_id"
            type="text" 
            placeholder="Item ID"
            name="item_id"
            class="form-control<?= isset($errors['item_id']) ? ' is-invalid' : ''; ?>" 
            value="<?= $item_id ?? ''; ?>"
            />
        <label for="item_id">Item ID</label>
        
        <div id="validationServer04Feedback" class="invalid-feedback">
            <?= $errors['item_id'] ?? ''; ?>
        </div>
    </div>

    <div class="form-floating mb-3">
        <select id="product" class="form-select<?= isset($errors['product']) ? ' is-invalid' : ''; ?>" name="product">
            <option value="">Product Name</option>
            <?php if ($products) : ?>
                <?php foreach ($products as $product) : ?>
                    <option value="<?= $product['id']; ?>"<?= $product['id'] === $prod ? ' selected="selected"' : ''; ?>><?= $product['name']; ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
        <label for="product">Product Name</label>
        
        <div id="validationServer04Feedback" class="invalid-feedback">
            <?= $errors['product'] ?? ''; ?>
        </div>
    </div>

    <div class="form-floating mb-3">
        <select id="category" name="category" class="form-select<?= isset($errors['category']) ? ' is-invalid' : ''; ?>">
            <option value="">Category Name</option>
            <?php if ($categories) : ?>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?= $category['id']; ?>"<?= $category['id'] === $cat ? ' selected="selected"' : ''; ?>><?= $category['name']; ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
        <label for="category">Category Name</label>
        
        <div id="validationServer04Feedback" class="invalid-feedback">
            <?= $errors['category'] ?? ''; ?>
        </div>
    </div>

    <div class="form-floating mb-3">
        <input
            id="sold_qty"
            type="number"
            placeholder="Sold Qty"
            name="sold_qty"
            min="0"
            class="form-control<?= isset($errors['sold_qty']) ? ' is-invalid' : ''; ?>" 
            value="<?= $sold_qty ?? 0; ?>"
            />
        <label for="sold_qty">Sold Qty</label>
        
        <div id="validationServer04Feedback" class="invalid-feedback">
            <?= $errors['sold_qty'] ?? ''; ?>
        </div>
    </div>
    
    <div class="form-floating mb-3">
        <input
            id="remaining_stock"
            type="number"
            placeholder="Remaining Stock"
            name="remaining_stock"
            min="0"
            class="form-control<?= isset($errors['remaining_stock']) ? ' is-invalid' : ''; ?>" 
            value="<?= $remaining_stock ?? 0; ?>"
            />
        <label for="remaining_stock">Remaining Stock</label>
        
        <div id="validationServer04Feedback" class="invalid-feedback">
            <?= $errors['remaining_stock'] ?? ''; ?>
        </div>
    </div>

    <div class="form-floating mb-3">
        <input
            id="Remaining Threshold"
            type="number"
            placeholder="Remaining Threshold"
            name="remaining_threshold"
            min="0"
            class="form-control<?= isset($errors['remaining_threshold']) ? ' is-invalid' : ''; ?>" 
            value="<?= $remaining_threshold ?? 0; ?>"
            />
        <label for="remaining_threshold">Remaining Threshold</label>
        
        <div id="validationServer04Feedback" class="invalid-feedback">
            <?= $errors['remaining_threshold'] ?? ''; ?>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
<?= form_close(); ?>
<?= $this->endSection(); ?>
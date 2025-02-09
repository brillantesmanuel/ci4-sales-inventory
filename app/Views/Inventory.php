<?php helper('form'); ?>

<?= $this->extend('Template') ?>

<?= $this->section('content') ?>

<div class="nav-scroller bg-body shadow-sm">
    <nav class="nav" aria-label="Secondary navigation">
        <?= anchor( 'inventory', 'List', 'class="nav-link active"'); ?>
        <?= anchor( 'inventory/create', 'Form', 'class="nav-link"'); ?>
    </nav>
</div>

<div class="container">

    <div class="mt-3 mb-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-3">Inventory \ Form</h6>

        <?= validation_list_errors() ?>

        <?= form_open(); ?>
            <div class="form-floating mb-3">
                <input 
                    id="item_id"
                    type="text" 
                    placeholder="Item ID"
                    name="item_id"
                    class="form-control" 
                    value="<?= $item_id ?? ''; ?>"
                    />
                <label for="item_id">Item ID</label>
            </div>

            <div class="form-floating mb-3">
                <input 
                    id="product_name"
                    type="text" 
                    placeholder="Product Name"
                    name="product_name"
                    class="form-control" 
                    value="<?= $product_name ?? ''; ?>"
                    />
                <label for="product_name">Product Name</label>
            </div>

            <div class="form-floating mb-3">
                <input
                    id="description" 
                    type="text" 
                    placeholder="Description"
                    name="description"
                    class="form-control"
                    value="<?= $description ?? ''; ?>" 
                    />
                <label for="product_name"></label>
            </div>

            <div class="form-floating mb-3">
                <select id="category" name="category" class="form-select">
                    <option value="">Category Name</option>
                </select>
                <label for="category">Product Name</label>
            </div>

            <div class="form-floating mb-3">
                <input
                    id="sold_qty"
                    type="number"
                    placeholder="Sold Qty"
                    name="sold_qty"
                    min="0"
                    class="form-control"
                    value="<?= $sold_qty ?? 0; ?>"
                    />
                <label for="sold_qty">Sold Qty</label>
            </div>
            
            <div class="form-floating mb-3">
                <input
                    id="remaining_stock"
                    type="number"
                    placeholder="Remaining Stock"
                    name="remaining_stock"
                    min="0"
                    class="form-control"
                    value="<?= $remaining_stock ?? 0; ?>"
                    />
                <label for="remaining_stock">Remaining Stock</label>
            </div>

            <div class="form-floating mb-3">
                <input
                    id="Remaining Threshold"
                    type="number"
                    placeholder="Remaining Threshold"
                    name="remaining_threshold"
                    min="0"
                    class="form-control"
                    value="<?= $remaining_threshold ?? 0; ?>"
                    />
                <label for="remaining_threshold">Remaining Threshold</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        <?= form_close(); ?>
    </div>
</div>
<?= $this->endSection(); ?>
<?php helper(['date', 'form']); ?>

<?= $this->extend('Template') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h4">Products</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="<?= base_url('products/create'); ?>" class="btn btn-sm btn-outline-secondary">
            <span data-feather="plus"></span>
            Add Product        
        </a>
    </div>
</div>

<form action="products" method="GET" class="row gx-3 gy-2 align-items-center mb-3">
    <div class="col-sm-3">
        <label class="visually-hidden" for="search">Search</label>
        <input 
            type="text" 
            class="form-control" 
            id="search" 
            name="q" 
            placeholder="Search.."
            value="<?= $search ?? ''; ?>"
            />
    </div>
</form>

<div class="table-responsive">
    <table class="table table-bordered table-striped table-sm shadow-sm">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Description</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if ($products) : ?>
                <?php foreach ($products as $product ): ?>
                    <tr>
                        <td><?= $product['name']; ?></td>
                        <td><?= $product['description']; ?></td>
                        <td><?= humanizer($product['created_at']); ?></td>
                        <td><?= humanizer($product['updated_at']); ?></td>
                        <td class="text-center">
                            <?= anchor('products/update/'.$product['id'], 'Edit'); ?>
                            <?= anchor('products/delete/'.$product['id'], 'Delete'); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No records found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $pager->links('product', 'bs_full'); ?>
<?= $this->endSection() ?>
<?php helper(['date', 'form']); ?>

<?= $this->extend('Template') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h4">Invetory</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="<?= base_url('inventory/create'); ?>" class="btn btn-sm btn-outline-secondary">
            <span data-feather="plus"></span>
            Add Inventory        
        </a>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped table-sm shadow-sm">
        <thead>
            <tr>
                <th>Item ID</th>
                <th>Product</th>
                <th>Category Name</th>
                <th>Sold Qty</th>
                <th>Remaining Stock</th>
                <th>Remaining Threshold</th>
                <th>Create At</th>
                <th>Updated At</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if ($inventories) : ?>
                <?php foreach ($inventories as $inventory ): ?>
                    <tr>
                        <td><?= $inventory['item_id']; ?></td>
                        <td><?= $inventory['product']; ?></td>
                        <td><?= $inventory['category']; ?></td>
                        <td><?= $inventory['sold_qty']; ?></td>
                        <td><?= $inventory['remaining_stock']; ?></td>
                        <td><?= $inventory['remaining_threshold']; ?></td>
                        <td><?= humanizer($inventory['created_at']); ?></td>
                        <td><?= humanizer($inventory['updated_at']); ?></td>
                        <td class="text-center">
                            <?= anchor('inventory/update/'.$inventory['id'], 'Edit'); ?>
                            <?= anchor('inventory/delete/'.$inventory['id'], 'Delete'); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8">No records found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $pager->links('inventory', 'bs_full'); ?>
<?= $this->endSection() ?>
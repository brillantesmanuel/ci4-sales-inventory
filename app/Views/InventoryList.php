<?php helper('form'); ?>

<?= $this->extend('Template') ?>

<?= $this->section('content') ?>

<div class="nav-scroller bg-body shadow-sm">
    <nav class="nav" aria-label="Secondary navigation">
        <?= anchor( 'inventory', 'List', 'class="nav-link active"'); ?>
        <?= anchor( 'inventory/create', 'Form', 'class="nav-link"'); ?>
    </nav>
</div>

<div class="container-fluid">
    <div class="mt-3 mb-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-3">Inventory \ List</h6>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-sm shadow-sm">
                <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Category Name</th>
                        <th>Sold Qty</th>
                        <th>Remaining Stock</th>
                        <th>Remaining Threshold</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="9">No records found.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
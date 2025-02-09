<?php helper('form'); ?>

<?= $this->extend('Template') ?>

<?= $this->section('content') ?>

<div class="nav-scroller bg-body shadow-sm">
    <nav class="nav" aria-label="Secondary navigation">
        <?= anchor( 'sales', 'List', 'class="nav-link active"'); ?>
        <?= anchor( 'sales/create', 'Form', 'class="nav-link"'); ?>
    </nav>
</div>

<div class="container-fluid">
    <div class="mt-3 mb-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-3">Sales \ List</h6>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-sm shadow-sm">
                <thead>
                    <tr>
                        <th>SI #</th>
                        <th>Client/Company Name</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>Tin #</th>
                        <th>Email</th>
                        <th>Order ID</th>
                        <th>Date Order</th>
                        <th>Fund Transfer</th>
                        <th>Qty.</th>
                        <th>Unit</th>
                        <th>Articles</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="14">No records found.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
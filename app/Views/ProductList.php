<?php helper('form'); ?>

<?= $this->extend('Template') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h4">Products</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button type="button" class="btn btn-sm btn-outline-secondary">
            Add Category
        </button>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped table-sm shadow-sm">
        <thead>
            <tr>
                <th>Category</th>
                <th>Product Name</th>
                <th>Description</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="5">No records found.</td>
            </tr>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
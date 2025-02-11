<?php helper(['date', 'form']); ?>

<?= $this->extend('Template') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h4">Categories</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="<?= base_url('category/create'); ?>" class="btn btn-sm btn-outline-secondary">
            <span data-feather="plus"></span>
            Add Category
        </a>
    </div>
</div>

<form action="category" method="GET" class="row gx-3 gy-2 align-items-center mb-3">
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
                <th>Category Name</th>
                <th>Description</th>
                <th>Created</th>
                <th>Updated</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if ( $categories ): ?>
                <?php foreach ($categories as $category ): ?>
                    <tr>
                        <td><?= $category['name']; ?></td>
                        <td><?= $category['description']; ?></td>
                        <td><?= humanizer($category['created_at']); ?></td>
                        <td><?= humanizer($category['updated_at']); ?></td>
                        <td class="text-center">
                            <?= anchor('category/update/'.$category['id'], 'Edit'); ?>
                            <?= anchor('category/delete/'.$category['id'], 'Delete'); ?>
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

<?= $pager->links('category', 'bs_full'); ?>
<?= $this->endSection(); ?>
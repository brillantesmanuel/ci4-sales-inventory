<?php helper(['date', 'form']); ?>

<?= $this->extend('Template') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h4">Categories</h1>
</div>

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
            <?php if ( isset($categories) ): ?>
                <?php foreach ($categories as $category ): ?>
                    <tr>
                        <td><?= $category['name']; ?></td>
                        <td><?= $category['description']; ?></td>
                        <td><?= humanizer($category['created_at']); ?></td>
                        <td><?= humanizer($category['updated_at']); ?></td>
                        <td>
                            <?= anchor('category/update/'.$category['id'], 'Edit'); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php print_r($pager->links('category', 'bs_full')); ?>
<?= $this->endSection(); ?>
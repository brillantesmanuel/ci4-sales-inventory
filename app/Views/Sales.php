<?php helper('form'); ?>

<?= $this->extend('Template') ?>

<?= $this->section('content') ?>

<div class="nav-scroller bg-body shadow-sm">
    <nav class="nav" aria-label="Secondary navigation">
        <?= anchor( 'sales', 'List', 'class="nav-link"'); ?>
        <?= anchor( 'sales/create', 'Form', 'class="nav-link active"'); ?>
    </nav>
</div>

<div class="container">
    <div class="mt-3 mb-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-3">Sales \ Form</h6>

        <?= validation_list_errors() ?>

        <?= form_open(); ?>
            <div class="form-floating mb-3">
                <input 
                    id="sales_invoice_number"
                    type="text" 
                    placeholder="SI #"
                    name="sales_invoice_number"
                    class="form-control" 
                    value="<?= $sales_invoice_number ?? ''; ?>"
                    />
                <label for="sales_invoice_number">SI #</label>
            </div>

            <div class="form-floating mb-3">
                <input 
                    id="client_name"
                    type="text" 
                    placeholder="Client/Company Name"
                    name="client_name"
                    class="form-control" 
                    value="<?= $client_name ?? ''; ?>"
                    />
                <label for="client_name">Client/Company Name</label>
            </div>
            
            <div class="form-floating mb-3">
                <input 
                    id="address"
                    type="text" 
                    placeholder="Address"
                    name="address"
                    class="form-control" 
                    value="<?= $address ?? ''; ?>"
                    />
                <label for="address">Address</label>
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
                <label for="address">Description</label>
            </div>
            
            <div class="form-floating mb-3">
                <input 
                    id="tin_number"
                    type="text" 
                    placeholder="Tin #"
                    name="tin_number"
                    class="form-control" 
                    value="<?= $tin_number ?? ''; ?>"
                    />
                <label for="tin_number">Tin #</label>
            </div>
            
            <div class="form-floating mb-3">
                <input 
                    id="email"
                    type="email" 
                    placeholder="Email"
                    name="email"
                    class="form-control" 
                    value="<?= $email ?? ''; ?>"
                    />
                <label for="email">Email</label>
            </div>
            
            <div class="form-floating mb-3">
                <input 
                    id="order_id"
                    type="text" 
                    placeholder="Order ID"
                    name="order_id"
                    class="form-control" 
                    value="<?= $order_id ?? ''; ?>"
                    />
                <label for="order_id">Order ID</label>
            </div>
            
            <div class="form-floating mb-3">
                <input 
                    id="date_order"
                    type="date" 
                    placeholder="Date Order"
                    name="date_order"
                    class="form-control" 
                    value="<?= $date_order ?? ''; ?>"
                    />
                <label for="date_order">Date Order</label>
            </div>
            
            <div class="form-floating mb-3">
                <input 
                    id="fund_transfer"
                    type="text" 
                    placeholder="Fund Transfer"
                    name="fund_transfer"
                    class="form-control" 
                    value="<?= $fund_transfer ?? ''; ?>"
                    />
                <label for="fund_transfer">Fund Transfer</label>
            </div>
            
            <div class="form-floating mb-3">
                <input 
                    id="qty"
                    type="number" 
                    placeholder="Qty."
                    name="qty"
                    class="form-control"
                    min="0" 
                    value="<?= $qty ?? ''; ?>"
                    />
                <label for="qty">Qty.</label>
            </div>
            
            <div class="form-floating mb-3">
                <input 
                    id="unit"
                    type="number" 
                    placeholder="Unit"
                    name="unit"
                    class="form-control"
                    min="0" 
                    value="<?= $unit ?? ''; ?>"
                    />
                <label for="unit">Unit</label>
            </div>
            
            <div class="form-floating mb-3">
                <input 
                    id="articles"
                    type="text" 
                    placeholder="Articles"
                    name="articles"
                    class="form-control"
                    value="<?= $articles ?? ''; ?>"
                    />
                <label for="articles">Articles</label>
            </div>
            
            <div class="form-floating mb-3">
                <input 
                    id="unit_price"
                    type="text" 
                    placeholder="Unit Price"
                    name="unit_price"
                    class="form-control"
                    value="<?= $unit_price ?? ''; ?>"
                    />
                <label for="unit_price">Unit Price</label>
            </div>
            
            <div class="form-floating mb-3">
                <input 
                    id="amount"
                    type="text" 
                    placeholder="Amount"
                    name="amount"
                    class="form-control"
                    value="<?= $amount ?? ''; ?>"
                    />
                <label for="amount">Unit Price</label>
            </div>
            
            <div class="form-floating mb-3">
                <input 
                    id="total_sales"
                    type="text" 
                    placeholder="Total Sales"
                    name="total_sales"
                    class="form-control"
                    value="<?= $total_sales ?? ''; ?>"
                    />
                <label for="total_sales">Total Sales</label>
            </div>
            
            <div class="form-floating mb-3">
                <input 
                    id="platform"
                    type="text" 
                    placeholder="Platform"
                    name="platform"
                    class="form-control"
                    value="<?= $platform ?? ''; ?>"
                    />
                <label for="platform">Platform</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        <?= form_close(); ?>
    </div>
</div>
<?= $this->endSection() ?>
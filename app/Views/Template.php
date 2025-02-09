<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script type="text/javascript" src="<?= base_url('dist/main.js'); ?>"></script>

    <style>
        body {
        padding-top: 56px;
        }
                
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
</head>
<body class="bg-body-tertiary">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sales Inventory</a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <?= anchor('inventory','Inventory', 'class="nav-link" aria-current="page"'); ?>
                    </li>
                    <li class="nav-item">
                        <?= anchor('sales','Sales', 'class="nav-link" aria-current="page"'); ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content') ?>
</body>
</html>
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    
    <?php $this->load->view('layouts/_alert') ?>
    
    <!-- Filter -->
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="d-inline text-dark">Filter ketersediaan&nbsp;&#8594;&nbsp;</h5>
                            <span>
                                <a href="<?= base_url('items/availability/available') ?>" class="btn btn-rounded btn-success mt-1 mb-1">Tersedia</a>
                                <a href="<?= base_url('items/availability/empty') ?>" class="btn btn-rounded btn-danger mt-1 mb-1">Kosong</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- List Menu -->
    <div class="row">
        <?php foreach ($content as $row) : ?>
            <div class="col-md-6">
                <div class="card border-primary">
                    <div class="card-header bg-<?= $row->qty > 0 ? 'success' : 'danger' ?>">
                        <h4 class="mb-0 text-white">Stok <?= $row->qty > 0 ? 'Tersedia' : 'Kosong' ?></h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><?= $row->nama_barang ?></h3>
                        <p class="card-text"><strong>Rp.<?= number_format($row->harga, 0, ',', '.') ?>,-</strong></p>
                        <p class="card-text">Kuantitas barang: <?= $row->qty . ' pcs' ?></p>
                        <p class="card-text">Supplier: <?= $row->nama_supplier ?></p>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <form action="<?= base_url('cartin/add') ?>" method="POST">
                                    <input type="hidden" name="id_barang" value="<?= $row->id_barang ?>">
                                    <div class="input-group">
                                        <input type="number" name="qty_masuk" min="1" value="1" class="form-control">
                                        <div class="input-group-append">
                                            <button class="btn btn-light" type="submit">In</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 mt-2">
                                <form action="<?= base_url('cartout/add') ?>" method="POST">
                                    <input type="hidden" name="id_barang" value="<?= $row->id_barang ?>">
                                    <div class="input-group">
                                        <input type="number" name="qty_keluar" min="0" max="<?= $row->qty ?>" value="1" class="form-control">
                                        <div class="input-group-append">
                                            <button class="btn btn-light" type="submit">Out</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>         
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <div class="row d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <?= $pagination ?>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->



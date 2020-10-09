<div class="container">
    <div class="bg-black_c  mb-1 card">
        <h1 class="text-center">Tanaman</h1>
        <div class="mx-auto">
            <div class="row">
                <? foreach ($kategori as $key => $ln) : ?>
                    <div class="col-md-3 pb-1">
                        <a href="<?= base_url('/dagang/rtree?val=' . $ln->id) ?>" class="text-danger">
                            <div class="btn card bg-black_ch">
                                <div class="text-center">
                                    <img src="<?= base_url('assets/img/produk/') . $ln->img ?>" class="contrast drop-shadow rounded-circle" width="80px" height="80px" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</div>
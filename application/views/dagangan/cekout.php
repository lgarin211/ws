<div class="container">
<div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Keranjangmu</span>
        <span class="badge badge-secondary badge-pill"><?=$one?></span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
          <!-- <? var_dump($two[0]);?> -->
            <h6 class="my-0"><?=$two[0]->nama_produk;?></h6>
            <small class="text-muted"><?=$two[0]->banyak_produk;?></small>
          </div>
          <span class="text-muted">Rp<?=$two[0]->harga;?>.000,~</span>
        </li>
      </ul>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">harap lengkapi</h4>
      <form class="needs-validation" method="POST" action="<?=base_url('dagang/beli')?>" novalidate>
        <div class="row">
          <div class="col-md mb-3">
            <label for="firstName">Nama lengkap</label>
            <input type="text" name="namapembeli" class="form-control" id="firstName" placeholder="udin rizky" value="" required>
            <div class="invalid-feedback">
              Harap isi Nama Lengkap.
            </div>
          </div>
        </div>
        <input type="hidden" value="<?=$two[0]->img_link?>" name="gambar">
        <input type="hidden" value="<?=$two[0]->id?>" name="id">
        <input type="hidden" value="<?=$two[0]->banyak_produk?>" name="banyak">
        <input type="hidden" value="<?=$two[0]->nama_produk?>" name="nama">
        <input type="hidden" value="<?=$two[0]->harga?>" name="harga">
        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(tidak wajib)</span></label>
          <input type="email" email name="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            tolong masukan email.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="address" placeholder="Bogor Selatan,Tajur,rt1,rw1,no 12" required>
          <div class="invalid-feedback">
            harap masukan alamat pengiriman
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">tingaalkan Pesan Untuk pengantar<span class="text-muted">(tidak wajib)</span></label>
          <input type="text" name="pesan" class="form-control" id="address2" placeholder="di sebelah alfamart tajur">
        </div>
         <button class="btn btn-primary btn-lg btn-block" type="submit">lanjutkan</button> 
      </form> 
    </div>
  </div>
  </div>
    <div class="container card bg-dark mb-3">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?=base_url('')?>assets/img/produk/head.jpg" alt="" width="500px" height="20%">
    <h2>Checkout</h2>
    <p class="lead">Silahkan Lengakapi Form Pembelian</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Keranjangmu</span>
        <span class="badge badge-secondary badge-pill"><?=$one?></span>
      </h4>
      <ul class="list-group mb-3">
        <?$total=0; foreach ($isi as $key => $two) :?>
            <?$total=$total+($two[0]->harga*$link[$key])?>
      <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
          <!-- <? var_dump($two[0]);?> -->
            <h6 class="my-0"><?=$two[0]->nama_produk;?></h6>
            <small class="text-muted"><?=$link[$key];?></small>
          </div>
          <span class="text-muted">Rp<?=$two[0]->harga;?>.000,~</span>
        </li>
        <?endforeach?>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>RP.<?=$total?>.000,~</strong>
        </li> 
      </ul>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">harap lengkapi</h4>
      <form class="needs-validation" method="POST" action="<?=base_url('dagang/manycek')?>" novalidate>
        <div class="row">
          <div class="col-md mb-3">
            <label for="firstName">Nama lengkap</label>
            <input type="text" required autofocus name="namapembeli" class="form-control" id="firstName" placeholder="udin rizky" value="" required>
            <div class="invalid-feedback">
              Harap isi Nama Lengkap.
            </div>
          </div>
        </div>
        <input type="hidden" name="total" value="<?=$total?>">
        <div class="mb-3">
          <label for="email">No telp <span class="text-muted">(tidak wajib)</span></label>
          <input type="text" email name="telp" required class="form-control" id="email" placeholder="08xxxxxxxx">
          <div class="invalid-feedback">
            tolong masukan Nomor telphon.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Alamat</label>
          <input type="text" name="alamat" required class="form-control" id="address" placeholder="Bogor Selatan,Tajur,rt1,rw1,no 12" required>
          <div class="invalid-feedback">
            harap masukan alamat pengiriman
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">tingaalkan Pesan Untuk pengmtar<span class="text-muted">(tidak wajib)</span></label>
          <input type="text" name="pesan" class="form-control" id="address2" placeholder="di sebelah alfamart tajur">
        </div>
         <button class="btn btn-primary btn-lg btn-block" type="submit">lanjutkan</button> 
      </form> 
    </div>
  </div>
</div>
        </div>

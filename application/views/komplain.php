<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6">
        <h3>Komplain Pelanggan</h3>
      </div>
      <div class="col-6">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>"> <i data-feather="home"></i></a></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item">Layanan</li>
          <li class="breadcrumb-item">Komplain</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <div class="date-picker">
            <form class="theme-form" action="<?= site_url('komplain/add') ?>" method="post">
              <div class="mb-3 row g-3" <?=form_error('nama') ? 'has-error' : null?>>
                <label class="col-sm-3 col-form-label text-sm-end">Nama*</label>
                <div class="col-xl-5 col-sm-9">
                  <div class="input-group">
                    <input class="form-control" type="text" name="nama" value="<?=set_value('nama')?>">
                  </div>
                </div>
                <span class="help-block"><?=form_error('nama')?></span>
              </div>
              <div class="mb-3 row g-3" <?=form_error('nohp') ? 'has-error' : null?>>
                <label class="col-sm-3 col-form-label text-sm-end">No Hp*</label>
                <div class="col-xl-5 col-sm-9">
                  <div class="input-group">
                    <input class="form-control" type="text" name="nohp" value="<?=set_value('nohp')?>">
                  </div>
                </div>
                <span class="help-block"><?=form_error('nohp')?></span>
              </div>
              <div class="mb-2 row g-3" <?=form_error('kelamin') ? 'has-error' : null?>>
                <label class="col-sm-3 col-form-label text-sm-end">Jenis Kelamin*</label>
                <div class="col-xl-5 col-sm-9">
                  <select class="js-example-basic-single col-sm-12" name="kelamin">
                    <option value="">- Pilih Jenis -</option>
                    <option value="1" <?=set_value('kelamin') == 1 ? "selected" : null ?>>Pria</option>
                    <option value="2" <?=set_value('kelamin') == 2 ? "selected" : null ?>>Wanita</option>
                  </select>
                </div>
                <span class="help-block"><?=form_error('kelamin')?></span>
              </div>
              <div class="mb-3 row g-3" <?=form_error('keluhan') ? 'has-error' : null?>>
                <label class="col-sm-3 col-form-label text-sm-end">Keluhan*</label>
                <div class="col-xl-5 col-sm-9">
                  <div class="input-group">
                  <textarea class="form-control" name="keluhan" rows="4"><?=set_value('keluhan')?></textarea>
                  </div>
                </div>
                <span class="help-block"><?=form_error('keluhan')?></span>
              </div>
              <div class="mb-3 row g-3" <?=form_error('alamat') ? 'has-error' : null?>>
                <label class="col-sm-3 col-form-label text-sm-end">Alamat Permintaan*</label>
                <div class="col-xl-5 col-sm-9">
                  <div class="input-group">
                  <textarea class="form-control" name="alamat" rows="4"><?=set_value('alamat')?></textarea>
                  </div>
                </div>
                <span class="help-block"><?=form_error('alamat')?></span>
              </div>
              <div class="mb-3 row g-3 mb-0" <?=form_error('tanggal') ? 'has-error' : null?>>
                <label class="col-sm-3 col-form-label text-sm-end">Tanggal Permintaan*</label>
                <div class="col-xl-5 col-sm-9">
                  <div class="input-group">
                    <input class="form-control" type="date" name="tanggal" value="<?=set_value('tanggal')?>">
                  </div>
                </div>
                <span class="help-block"><?=form_error('tanggal')?></span>
              </div>
              <div id="map">
                <div class="mb-3 row g-3" <?=form_error('lat') ? 'has-error' : null?>>
                  <label class="col-sm-3 col-form-label text-sm-end">Latitude*</label>
                  <div class="col-xl-5 col-sm-9">
                    <div class="input-group">
                      <input class="form-control" type="text" id="lat" name="lat" value="<?=set_value('lat')?>"> 
                    </div>
                  </div>
                  <span class="help-block"><?=form_error('lng')?></span>
                </div>
                <div class="mb-3 row g-3" <?=form_error('lng') ? 'has-error' : null?>>
                  <label class="col-sm-3 col-form-label text-sm-end">Longitude*</label>
                  <div class="col-xl-5 col-sm-9">
                    <div class="input-group">
                      <input class="form-control" type="text" id="lng" name="lng" value="<?=set_value('lng')?>">
                    </div>
                  </div>
                  <span class="help-block"><?=form_error('lng')?></span>
                </div>
              </div>
              <div id="googleMap" style="width:100%;height:380px;"></div><br>
              <div class="col-sm-9 offset-sm-3">
                <button class="btn btn-primary" type="submit">Submit</button>
                <input class="btn btn-light" type="reset" value="Cancel">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
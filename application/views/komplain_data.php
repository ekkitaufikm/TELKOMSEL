
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Data Answer Komplain</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Keluhan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Latitude</th>
                                <th scope="col">Longitude</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach($row->result() as $key => $data ){ ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->nama ?></td>
                                <td><?= $data->nohp ?></td>
                                <td><?= $data->kelamin == 1 ? "Pria" : "Wanita" ?></td>
                                <td><?= $data->keluhan ?></td>
                                <td><?= $data->alamat ?></td>
                                <td><?= $data->tanggal ?></td>
                                <td><?= $data->lat ?></td>
                                <td><?= $data->lng ?></td>
                            </tr>
                            <?php 
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
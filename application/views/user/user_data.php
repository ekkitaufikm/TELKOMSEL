
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Data User</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Role</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach($row->result() as $key => $data ){ ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->username ?></td>
                                <td><?= $data->nama ?></td>
                                <td><?= $data->level == 1 ? "Super Admin" : "Customer" ?></td>
                                <td class="text-center" width="160px">
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <form action="<?=site_url('user/del')?>" method="post">
                                            <input type="hidden" name="user_id" value="<?=$data->user_id?>">
                                            <button onclick="return confirm('Apakah yakin menghapus?')" class="btn btn-danger">Delete</buton>
                                        </form>
                                    </div>
                                </td>
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
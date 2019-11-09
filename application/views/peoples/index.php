
<div class="container">
    <h3 class="mt-3">List of Peoples</h3>
    <div class="row">
        <div class="col-md-5">
            <form action="<?= base_url('peoples'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search keyword.." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url();?>peoples/tambah" class="btn btn-outline-primary btn-lg">Tambah Data Peoples</a>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-10">
            <h5>Result : <?= $total_rows; ?></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if( empty($peoples) ) : ?>
                    <tr>
                        <td colspan="4">
                            <div class="alert alert-danger" role="alert">
                                Data not found!
                            </div>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php foreach( $peoples as $p ) : ?>
                        <tr>
                            <th><?= ++$start; ?></th>
                            <td><?= $p['name']; ?></td>
                            <td><?= $p['address']; ?></td>
                            <td><?= $p['email']; ?></td>
                            <td>
                                <a href="<?=base_url()?>peoples/detail/<?= $p['id'];?>" class="badge badge-primary">detail</a>
                                <a href="<?=base_url()?>peoples/ubah/<?= $p['id'];?>" class="badge badge-success">edit</a>
                                <a href="<?=base_url()?>peoples/hapus/<?= $p['id'];?>" class="badge badge-danger tombol-hapus">delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Home/user</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data User
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Start date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($user as $u) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $u->nama; ?></td>
                                        <td><?= $u->username; ?></td>
                                        <td><?= $u->email; ?></td>
                                        <td><?= $u->created_at; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>Home/edit/<?= $u->id_nama ?>" class='btn btn-info'>edit</a>
                                            <a href="<?= base_url(); ?>Home/delete/<?= $u->id_nama ?>" class='btn btn-danger'>delete</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
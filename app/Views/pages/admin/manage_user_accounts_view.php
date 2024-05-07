<!-- ======= Main ======= -->
<main id="main">
    <section class="inner-page bg-white">
        <div class="container-fluid">
            <?php if (session()->get("user_id")) : ?>
                <div class="row">
                    <div class="col-md-6">
                        <h3>List of Registered Accounts</h3>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary mb-3 float-end" id="btn_new_user_account">
                            <i class="fa fa-plus me-1"></i>
                            New User Account
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table id="data_table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Access Level</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($users) : ?>
                                    <?php foreach ($users as $user) : ?>
                                        <?php if ($user["id"] != session()->get("user_id")) : ?>
                                            <tr>
                                                <td><?= $user["name"] ?></td>
                                                <td><?= $user["username"] ?></td>
                                                <td class="text-muted">Password is hidden for security</td>
                                                <td><?= strtoupper($user["user_type"]) ?> Level</td>
                                                <td class="text-center">
                                                    <i class="fa fa-edit text-primary update_user_account" user_id="<?= $user["id"] ?>" role="button"></i>
                                                </td>
                                            </tr>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php else : ?>
                <div class="text-center">
                    <h1 class="text-muted mb-5">You need an MIS or Admin level access to view this page</h1>
                    <button class="btn btn-success px-5 py-2" data-bs-toggle="modal" data-bs-target="#login_modal">Login</button>
                </div>
            <?php endif ?>
        </div>
    </section>
</main>
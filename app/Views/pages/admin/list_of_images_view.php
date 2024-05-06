<!-- ======= Main ======= -->
<main id="main">
    <section class="inner-page bg-white">
        <div class="container-fluid">
            <?php if (session()->get("user_id")) : ?>
                <div class="card">
                    <div class="card-body">
                        <table id="data_table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Processed By</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Email</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($messages) : ?>
                                    <?php foreach ($messages as $message) : ?>
                                        <?php $user_data = $User_Model->where('id', $message["processed_by"])->first() ?>

                                        <tr style="font-weight: <?= $message["status"] == "unprocessed" ? "bold" : "normal" ?>;">
                                            <td><?= $message["status"] == "unprocessed" ? "Not Yet Available" : $user_data["name"] ?></td>
                                            <td><?= $message["name"] ?></td>
                                            <td><?= date("F j, Y, g:i a", strtotime($message["date_created"])) ?></td>
                                            <td><?= $message["email"] ?></td>

                                            <td class="text-center">
                                                <i role="button" class="fa fa-eye text-primary <?= $message["status"] == "unprocessed" ? "me-1" : null ?> view_message" processed_by="<?= $message["status"] == "unprocessed" ? "Not Yet Available" : $user_data["name"] ?>" message_id="<?= $message["id"] ?>" title="View Message"></i>
                                                <i role="button" class="fa fa-thumbs-up text-success update_status <?= $message["status"] != "unprocessed" ? "d-none" : null ?>" message_id="<?= $message["id"] ?>" title="Set status to Processed"></i>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php else : ?>
                <div class="text-center">
                    <h1 class="text-muted mb-5">You need an admin level access to view this page</h1>
                    <button class="btn btn-success px-5 py-2" data-bs-toggle="modal" data-bs-target="#login_modal">Login as Admin</button>
                </div>
            <?php endif ?>
        </div>
    </section>
</main>
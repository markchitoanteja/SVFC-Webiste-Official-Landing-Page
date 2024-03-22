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
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Email</th>
                                    <th>Facebook Account</th>
                                    <th>Mobile Number</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($messages) : ?>
                                    <?php foreach ($messages as $message) : ?>
                                        <tr style="font-weight: <?= $message["status"] == "unprocessed" ? "bold" : "normal" ?>;">
                                            <td><?= $message["name"] ?></td>
                                            <td><?= date("F j, Y, g:i a", strtotime($message["date_created"])) ?></td>
                                            <td><?= $message["email"] ?></td>
                                            <td><?= $message["facebook_account"] ?></td>
                                            <td><?= $message["mobile_number"] ?></td>
                                            <td><?= ucfirst($message["status"]) ?></td>
                                            <td class="text-center">
                                                <i role="button" class="fa fa-eye text-primary me-1" title="View Message"></i>
                                                <i role="button" class="fa fa-thumbs-up text-success" title="Set status to Processed"></i>
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
                    <button class="btn btn-success px-5 py-2">Login as Admin</button>
                </div>
            <?php endif ?>
        </div>
    </section>
</main>
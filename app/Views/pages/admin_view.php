<!-- ======= Main ======= -->
<main id="main">
    <section class="inner-page bg-white">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <table id="data_table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Facebook Account</th>
                                <th>Mobile Number</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($messages) : ?>
                                <?php foreach ($messages as $message) : ?>
                                    <tr>
                                        <td><?= $message["name"] ?></td>
                                        <td><?= $message["email"] ?></td>
                                        <td><?= $message["facebook_account"] ?></td>
                                        <td><?= $message["mobile_number"] ?></td>
                                        <td><?= $message["message"] ?></td>
                                    </tr>
                                <?php endforeach ?>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
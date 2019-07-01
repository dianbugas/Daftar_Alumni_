    <div class="container">
        <h3 class="mt-3">List of Peoples</h3>

        <div class="row">
            <div class="col-md-5">
                <form action="<?= base_url('peoples'); ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search Keyword.." name="keyword" autocomplete="off" autofocus>
                        <div class="input-group-append">
                            <input class="btn btn-primary" type="submit" name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($peoples as $peoples) :
                        ?>
                        <tbody>
                            <tr>
                                <td><?= ++$start; ?></td>
                                <td><?= $peoples['name']; ?></td>
                                <td><?= $peoples['email']; ?></td>
                                <td>
                                    <a href="" class="badge badge-warning">detail</a>
                                    <a href="" class="badge badge-success">edit</a>
                                    <a href="" class="badge badge-danger">delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </thead>
                </table>
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>
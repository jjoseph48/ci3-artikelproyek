<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
    <main class="main">
        <?php $this->load->view('admin/_partials/side_nav.php') ?>

        <div class="content">
            <h1>Setting</h1>

            <div class="card">
                <div class="card-header">
                    <b>Avatar</b>
                    <div style="display: flex; gap: 1em">
                        <a href="<?= site_url('admin/setting/remove_avatar') ?>" class="txt-red">Remove Avatar</a>
                        <a href="<?= site_url('admin/setting/upload_avatar') ?>">Change Avatar</a>
                    </div>
                </div>
                <div class="card-body">
                    <?php
                    $avatar = $current_user->avatar ? base_url('upload/avatar/' . $curent_user->avatar) : get_gravatar($current_user->email)
                    ?>
                    <img src="<?= $avatar ?>" alt="<?= htmlentities($current_user->name, TRUE) ?>" height="80" width="80">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <b>Profile Settings</b>
                    <a href=

                <div class="card-body">
                    Name : <span class="text-gray"><?= html_escape($curent_user->name) ?></span><br>
                    Email : <span class="text-gray"><?= html_escape($current_user->email) ?></span>
                </div>
            <div class="card">
                <div class="card-header">
                    <b>Security & Password</b>
                    <a href="<?= site_url('admin/setting/edit_password') ?>">Edit Password</a>
                </div>


            <?php $this->load->view('admin/_partials/footer.php') ?>
        </div>
    </main>
</body>

</html>
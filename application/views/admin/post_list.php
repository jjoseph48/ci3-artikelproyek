<!DOCTYPE html>
<html lang="en">

<head>
    <main class="main">
        <?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
    <main class ="main">
        <?php $this->load->view('admin/_partials/side_nav.php') ?>

        <div class="content">
            <h1>List Artikel</h1>

            <div class="toolbar">
                <a href="#" class="button button-primary" role="button">+ Tulis Artikel</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th style="width: 15%;" class="text-center">Status</th>
                        <th style="width: 25%." class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($articles as $article): ?>
                    <tr>
                        <td>
                            <div><?= $article->title ?></div>
                            <div class="text-gray"><small><?= $article->created_at ?></small></div>
                        </td>
                        <?php if($article->draft === 'true'): ?>
                            <td class="text-center"><span class="badge badge-warning">Draft</span></td>
                </tbody>
            </table>

            <?php $this->load->view('admin/_partials/footer.php') ?>
</div>
</main>
</body>
</html>



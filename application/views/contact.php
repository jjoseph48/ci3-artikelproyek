<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_partials/head'); ?>
</head>

<body>
    <?php $this->load->view('_partials/navbar'); ?>

    <div class="container">
        <h1>Contact Us</h1>
        <p>Hubungi kami melalui form berikut</p>
        <form action="" method="post" style="max-width: 600px;">
            <div>
                <label for="name">Name*</label>
                <input type="text" name="name" class="<?= form_error('name') ? 'invalid' : ''?>" placeholder="your name" value="<?= set_value('name') ?>"/>
                <div class="invalid-feedback"><?= form_error('name') ?></div>
            </div>
            <div>
                <label for="email">Email*</label>
                <input type="email" name="name" 

    <h1>Contact Us</h1>
    <p>Hubungi kami melalui form berikut</p>
    <?php // apabila ingin mengirim data ke controller yang lain, kita bisa tentukan alamat controllernya pada atribut action=""?>
    <form action="" method="post">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="your name" required/>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="your email" required/>
        </div>
        <div>
            <label for="message">Message</label>
            <textarea name="message" cols="30" rows="5" placeholder="write your message" required></textarea>
        </div>

        <div>
            <input type="submit" value="Kirim"/>
            <input type="reset" value="Reset"/>
        </div>        
    </form>

    <?php $this->load->view('_partials/footer'); ?>
</body>

</html>
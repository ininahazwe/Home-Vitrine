<section class="contact" id="contact">
    <h2>Contact us</h2>
    <div class="form">
        <?php if (array_key_exists('errors', $_SESSION)) : ?>
            <div class="alert alert-danger">
                <?= implode('<br>', $_SESSION['errors']); ?>
            </div>
        <?php unset($_SESSION['errors']);
        endif; ?>

        <?php if (array_key_exists('success', $_SESSION)) : ?>
            <div class="alert alert-success">
                Your message is well received. Thanks !
            </div>
        <?php unset($_SESSION['errors']);
        endif; ?>

        <form action="contact-form.php" class="contact-form" method="POST">
            <div class="block">
                <div class="inputBx">
                    <input type="text" name="name" placeholder="Full name" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
                </div>
                <div class="inputBx">
                    <input type="email" name="email" placeholder="Email Address" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
                </div>
                <div class="inputBx">
                    <input type="number" name="phone" placeholder="Mobile No" value="<?= isset($_SESSION['inputs']['phone']) ? $_SESSION['inputs']['phone'] : ''; ?>">
                </div>
                <div class="inputBx">
                    <input type="text" name="subject" placeholder="Subject" value="<?= isset($_SESSION['inputs']['subject']) ? $_SESSION['inputs']['subject'] : ''; ?>">
                </div>
            </div>
            <div class="block">
                <div class="inputBx">
                    <textarea name="message" placeholder="Write your message..." value="<?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?>"></textarea>
                </div>
                <div class="inputBx">
                    <button type="submit" name="submit">Send</button>
                </div>
            </div>
        </form>
    </div>
</section>
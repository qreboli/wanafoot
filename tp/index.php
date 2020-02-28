<?php
require_once 'class/Message.php';
require_once 'class/GuestBook.php';
$errors = null;
if (isset($_POST['username'], $_POST['message'])) {
    $message = new Message($_POST['username'], $_POST['message']);
    if ($message->isValide()) {
        $successFields = $message->getSuccess();
        $guestBook = new GuestBook(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'messages');
        $guestBook->addMessage($message);
    } else {
        $errors = $message->getErrors();
    }
}
$title = "Wanafoot";
require 'elements/header.php';
?>
<div class="container">
    <h1>Wanafoot Feeling</h1>

    <?php if ($errors): ?>
    <div class="alert alert-danger">
        Formulaire invalide
    </div>
<?php endif ?>

    <form action="" method="post">
        <div class="form-group">
            <input value="<?= htmlentities($_POST['username'] ?? '') ?>" type="text" name="username" placeholder="Your name" class="form-control <?= isset($errors['username']) ? 'is-invalid' : '' ?> <?= isset($successFields['username']) ? 'is-valid' : '' ?>">
            <?php if (isset($errors['username'])): ?>
            <div class="invalid-feedback"><?= $errors['username'] ?></div>
            <?php endif ?>
            <?php if (isset($successFields['username'])): ?>
                <div class="valid-feedback"><?= $successFields['username'] ?></div>
            <?php endif ?>
        </div>
        <div class="form-group">
            <textarea value="<?= $_POST['username'] ?? '' ?>" type="text" name="message" placeholder="Your message" class="form-control <?= isset($errors['message']) ? 'is-invalid' : '' ?> <?= isset($successFields['message']) ? 'is-valid' : '' ?>"><?= htmlentities($_POST['message'] ?? '') ?></textarea>
            <?php if (isset($errors['message'])): ?>
                <div class="invalid-feedback"><?= $errors['message'] ?></div>
            <?php endif ?>
            <?php if (isset($successFields['message'])): ?>
                <div class="valid-feedback"><?= $successFields['message'] ?></div>
            <?php endif ?>
        </div>
        <button class="btn btn-primary">Send</button>
    </form>
</div>
<?php
require 'elements/footer.php';
?>
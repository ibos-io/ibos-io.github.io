<?php include 'header.php'; ?>
<section class="contact container">
    <h1>Contact Us</h1>
    <?php
    if (isset($_GET['success']) && $_GET['success'] == '1') {
        echo '<p class="success-message">Thank you for contacting us. We will get back to you shortly.</p>';
    }
    if (isset($_GET['error']) && $_GET['error'] == '1') {
        echo '<p class="error-message">There was an error submitting the form. Please try again.</p>';
    }
    ?>
    <form action="process-contact.php" method="post" id="contactForm">
        <label for="name">Name<span class="required">*</span></label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email<span class="required">*</span></label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone</label>
        <input type="tel" id="phone" name="phone">

        <label for="message">Message<span class="required">*</span></label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit" class="btn">Send Message</button>
    </form>
</section>
<?php include 'footer.php'; ?>

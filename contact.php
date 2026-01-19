<?php include 'header.php'; ?>
<section class="contact">
    <div class="container">
        <h1>Contact Us</h1>
        <form action="process-contact.php" method="POST" id="contactForm">
            <label for="name">Name<span class="required">*</span></label>
            <input type="text" id="name" name="name" required maxlength="100">
            
            <label for="email">Email<span class="required">*</span></label>
            <input type="email" id="email" name="email" required maxlength="100">

            <label for="subject">Subject<span class="required">*</span></label>
            <input type="text" id="subject" name="subject" required maxlength="150">

            <label for="message">Message<span class="required">*</span></label>
            <textarea id="message" name="message" rows="6" required maxlength="1000"></textarea>

            <button type="submit" class="btn-primary">Send Message</button>
        </form>
    </div>
</section>
<?php include 'footer.php'; ?>

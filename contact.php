<?php include 'header.php'; ?>
<section class="page-section container">
    <h1>Contact Us</h1>
    <form action="process-contact.php" method="POST" class="contact-form" novalidate>
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required placeholder="Your full name">

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required placeholder="Your email address">

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="Your phone number">

        <label for="message">Message</label>
        <textarea id="message" name="message" required placeholder="Write your message here..."></textarea>

        <button type="submit" class="btn-primary">Send Message</button>
    </form>
</section>
<?php include 'footer.php'; ?>

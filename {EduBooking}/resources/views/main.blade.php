<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('header.css') }}">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <title>Main Page</title>
</head>

<body>
    @include('header')

    <div class="footer">
        <p class="book-appointments-txt">Book appointments in 2 minutes !</p>

        <div class="btn-container">
            <div class="continue-btn">
                <a href="{{ url('student_page') }}">Continue as a student</a>
            </div>
            <div class="continue-btn">
                <a href="{{ url('teacher_page') }}">Continue as a teacher</a>
            </div>
        </div>
    </div>

    <div class="widget" id="contact-widget">
        <span class="close-btn" id="close-widget">&times;</span>
        <div class="widget-content">
            <!-- Widget content goes here -->
            <h2>Contact Us</h2>
            <p>Fill out the form below to get in touch with us:</p>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="4" required></textarea><br><br>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactBtn = document.querySelector('.btn-block a[href=""]'); // Adjust the selector if needed
            const widget = document.getElementById('contact-widget');
            const closeBtn = document.getElementById('close-widget');

            contactBtn.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default action of the link
                widget.classList.add('open');
            });

            closeBtn.addEventListener('click', function() {
                widget.classList.remove('open');
            });

            // Optionally close the widget if clicked outside
            document.addEventListener('click', function(event) {
                if (!widget.contains(event.target) && !contactBtn.contains(event.target)) {
                    widget.classList.remove('open');
                }
            });
        });
    </script>

</body>

</html>
<?php
require_once 'header.php';
?>
<body>
<header>
    <nav>

        <a href="#">About</a>
        <a href="#">Developement</a>
        <img src="img/DEFINITIVE%20LITTLE%20GUY.png" alt="de logo van de website">
        <a href="#">UX Design</a>
        <a href="#">Contact</a>
    </nav>

<section class="banner">
    <div class="banner_title">
        <h1 >Jennifer Willems</h1>
    </div>
    <h2 class="subtitle">Web Developer & Designer</h2>
    <img src="img/border_le_sombra.png" alt="">
    </section>

</header>
<!-- start about me-->
<section class="about_me">
    <div class="div1"></div>
    <div class="inspo"><img src="img/inspo.png" alt=""></div>
    <div class="ervaring"><img src="img/ervaring.png" alt=""></div>
    <div class="about"><img src="img/about.png" alt=""></div>
    <div class="div5"></div>
    <div class="div6"></div>
    <div class="div7"></div>
    <div class="div8"></div>
    <div class="div9"></div>
</section>
<!--end about me-->

<section class="character_sheet">
    <h2>Character Sheet</h2>
    <div class="character_grid">
        @foreach ($websites as $website)
        <div class="character_info">
            <h3>Project details</h3>
            <p><strong>Name:</strong> {{ $website->name }}</p>
            <p><strong>Customer:</strong> {{ $website->customer }}</p>
            <p><strong>Type:</strong> {{ $website->type }}</p>
            <p><strong>Development:</strong> {{ $website->development }}</p>
            <p><strong>Concept:</strong> {{ $website->concept }}</p>
        </div>

        <div class="disciplines">
            <h3>Disciplines</h3>
            <p>Design: <span class="dots">{{ generateDots($website->design) }}</span></p>
            <p>Front-end: <span class="dots">{{ generateDots($website->frontend) }}</span></p>
            <p>Back-end: <span class="dots">{{ generateDots($website->backend) }}</span></p>
            <p>Database: <span class="dots">{{ generateDots($website->database) }}</span></p>
        </div>

        <button>
            <a href="{{ $website->url }}" target="_blank">Visit Website</a>
        </button>
        @endforeach

</section>


<section class="slider-test">
    <div class="your-slider">
        <div class="slide">
            <img src="{{ asset('/img/template_img.png') }}" alt="Image 1">
            <h3>Project One</h3>
            <p>A dark and elegant masterpiece that echoes the past.</p>
        </div>
        <div class="slide">
            <img src="{{ asset('/img/template_img.png') }}" alt="Image 2">
            <h3>Project Two</h3>
            <p>An eerie yet beautiful creation shrouded in mystery.</p>
        </div>
        <div class="slide">
            <img src="{{ asset('/img/template_img.png') }}" alt="Image 3">
            <h3>Project Three</h3>
            <p>A gothic marvel standing against the test of time.</p>
        </div>
    </div>
</section>

<footer class="gothic-footer">
    <div class="footer-content">
        <div class="footer-info">
            <h2>Contact Us</h2>
            <p>Email: contact@example.com</p>
            <p>Phone: +123 456 7890</p>
            <p>Location: A location near by</p>
        </div>

        <div class="contact-form">
            <h3>Send a Message</h3>
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="text" name="phone" placeholder="Your Phone (Optional)">
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>

        </div>

    </div>
</footer>






@endsection


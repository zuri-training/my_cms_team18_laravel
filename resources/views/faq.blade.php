<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="{{asset('faq/faq.css')}}">
    <title>Forge - FAQ</title>
</head>
<body>
    <main>
        <section class="heading">
            <h1 class="main-title">Frequently Asked Questions</h1>
            <p>Have questions? We're here to help</p> 
        </section>
        
        <section class="faq">
            <div class="question">
                <h2>What is FORGE and how does it work?</h2>
                <p>
                    FORGE is a content management software that allow users
                    spin up basic websites for personal or business use. It also
                    allows easy customization of websites.
                </p>
            </div>
            <div class="question">
                <h2>Can I use my domain name with FORGE?</h2>
                <p>
                    Absolutely, FORGE has made it easy by allowing users
                    use their domain name.
                </p>
            </div>
            <div class="question">
                <h2>Do I need to be a designer or developer to use FORGE?</h2>
                <p>
                    FORGE is built in a way that it allow users with NO coding
                    or developer experience to navigate and own websites.
                </p>
            </div>
            <div class="question">
                <h2>Can I use website builder to create a landing page?</h2>
                <p>
                    Our platform gives access for users to create their own
                    websites from scratch.
                </p>
            </div>
            <div class="question">
                <h2>Is it easy to build a website with FORGE?</h2>
                <p>
                    FORGE has made it easy for users to own their websites.
                </p>
            </div>
            <div class="question">
                <h2>Do I need to make any payment to enjoy FORGE?</h2>
                <p>
                    FORGE is totally free. User gets access to powerful tools once
                    they are verified.
                </p>
            </div>
            <div class="question">
                <h2>Do I need to make any payment before registration?</h2>
                <p>
                    No, registration is absolutely free on our plaatform.
                </p>
            </div>
        </section>

        <section class="extra-question">
            <p>Have additional question?</p>
            <div class="get-in-touch">
                <a href="#">Get in touch</a>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-details">
            <div class="item1">
                <nav class="footer-nav-bar">
                    <div>
                        <p><strong>Products</strong></p>
                        <a href="#">Templates</a>
                        <a href="#">Websites</a>
                        <a href="#">Features</a>
                    </div>
                    <div>
                        <p><strong>Explore</strong></p>
                        <a href="#">Website Builder</a>
                        <a href="#">Activity</a>
                        <a href="#">Recent Posts</a>
                    </div>
                    <div>
                        <p><strong>About Forge</strong></p>
                        <a href="">FAQs</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Use</a>
                    </div>
                </nav>
                <div class="flex-2">
                    <a href="{{route('landing-page')}}"><img src="{{asset('faq/Group 271.png')}}" alt="Forge logo"></a>
                    <p>
                        Forge gives users access to create, personalize,
                        edit the functionality and usability of any website of 
                        their choice through our given templates.
                    </p>
                </div>
            </div>
            <div class="item2">
                <div class="flex-3">
                    <h2>Subscribe to our Newsletter</h2>
                    <form action="#">
                        <input type="email" id="subscriber"
                         placeholder="Enter your email address">
                        <button class="sub-btn" type="buttton">Subscribe</button>
                    </form>
                </div>
                <div class="flex-4">
                    <h2>Connect with us</h2>
                    <div class="social-links">
                        <a href="#"><img src="{{asset('faq/twitter icon.png')}}" alt="Twitter"></a>
                        <a href="#"><img src="{{asset('faq/instagram icon.png')}}" alt="Instagram"></a>
                        <a href="#"><img src="{{asset('faq/Linkedin icon.png')}}" alt="LinkedIn"></a>
                        <a href="#"><img src="{{asset('faq/facebook icon.png')}}" alt="Facebook"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="rights">
            <p>All Rights reserved &#64;Forge2022</p>
        </div>
    </footer>
</body>
</html>
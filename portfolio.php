<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes\header.php'); ?>
    <title>Our Packages - IWYS</title>
    <meta name="description" content="Choose from our flexible packages designed to meet the content, branding, and digital needs of businesses of all sizes.">
</head>

<body>
    <?php include('includes\nav.php'); ?>

    <!-- Hero Section -->
    <section id="billboard" class="jarallax bg-secondary text-white">
        <div class="container-lg">
            <div class="row align-items-center text-center" data-aos="zoom-in-up">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-2 fw-bold">Our Packages</h2>
                    <div class="breadcrumbs mb-3">
                        <span class="item"><a href="index.php" class="text-white text-decoration-none">Home</a> /</span>
                        <span class="item">Packages</span>
                    </div>
                    <p class="lead">Flexible plans tailored to meet your goals — whether you're a startup, growing business, or enterprise.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="padding-large">
        <div class="container-lg">
            <div class="section-header text-center mb-5">
                <span class="text-primary">Affordable & Scalable</span>
                <h2 class="display-5 fw-bold">Choose Your Package</h2>
                <p class="lead text-muted">We offer transparent pricing and scalable plans to suit every business size and need.</p>
            </div>

            <div class="row g-4">

                <!-- Starter Package -->
                <div class="col-md-4">
                    <div class="p-5 border rounded-3 shadow-sm text-center h-100" data-aos="fade-up">
                        <h4 class="fw-bold mb-2">Starter</h4>
                        <p class="text-muted">Perfect for individuals & startups</p>
                        <h3 class="display-6 fw-bold mb-4">$199 <small class="fs-6 text-muted">/month</small></h3>
                        <ul class="list-unstyled mb-4">
                            <li>✔ 5 Blog Posts / Month</li>
                            <li>✔ Basic SEO Optimization</li>
                            <li>✔ Social Media Captions</li>
                            <li>✔ Email Support</li>
                        </ul>
                        <a href="contact.php" class="btn btn-outline-dark">Get Started</a>
                    </div>
                </div>

                <!-- Growth Package -->
                <div class="col-md-4">
                    <div class="p-5 border rounded-3 shadow-lg text-center h-100 bg-light" data-aos="fade-up" data-aos-delay="200">
                        <h4 class="fw-bold mb-2">Growth</h4>
                        <p class="text-muted">For small & medium businesses</p>
                        <h3 class="display-6 fw-bold mb-4">$499 <small class="fs-6 text-muted">/month</small></h3>
                        <ul class="list-unstyled mb-4">
                            <li>✔ 15 Blog Posts / Month</li>
                            <li>✔ Advanced SEO Optimization</li>
                            <li>✔ Social Media Strategy</li>
                            <li>✔ Priority Support</li>
                        </ul>
                        <a href="contact.php" class="btn btn-dark">Choose Growth</a>
                    </div>
                </div>

                <!-- Enterprise Package -->
                <div class="col-md-4">
                    <div class="p-5 border rounded-3 shadow-sm text-center h-100" data-aos="fade-up" data-aos-delay="400">
                        <h4 class="fw-bold mb-2">Enterprise</h4>
                        <p class="text-muted">For large teams & enterprises</p>
                        <h3 class="display-6 fw-bold mb-4">Custom <small class="fs-6 text-muted">Pricing</small></h3>
                        <ul class="list-unstyled mb-4">
                            <li>✔ Unlimited Content</li>
                            <li>✔ Full SEO & Strategy</li>
                            <li>✔ Dedicated Account Manager</li>
                            <li>✔ 24/7 Premium Support</li>
                        </ul>
                        <a href="contact.php" class="btn btn-outline-dark">Request Quote</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="padding-large bg-dark text-white text-center">
        <div class="container-lg">
            <h3 class="fw-bold mb-3">Need a Custom Plan?</h3>
            <p class="lead text-light mb-4">We understand every business is different. Let's create a package that fits your exact needs.</p>
            <a href="contact.php" class="btn btn-outline-light btn-lg">Talk to Our Team</a>
        </div>
    </section>

    <?php include('includes\footer.php'); ?>
</body>
</html>

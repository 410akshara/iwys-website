<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/header.php'); ?>
    <title>Contact Us | IWYS</title>
</head>

<body>
    <?php include('includes/nav.php'); ?>

    <!-- Page Header -->
    <section class="bg-secondary text-white py-5">
        <div class="container-lg text-center" data-aos="fade-down">
            <h1 class="display-4 fw-bold">Contact Us</h1>
            <p class="lead">We'd love to hear your story and help bring it to life.</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-light" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Contact Form & Info -->
    <section class="padding-large">
        <div class="container-lg">
            <div class="row align-items-center">
                <!-- Form -->
                <div class="col-md-6" data-aos="fade-right">
                    <h3 class="fw-bold mb-4">Send Us a Message</h3>
                    <form name="contactform" action="includes/contact_process.php" method="post" class="contact-form">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" name="name" placeholder="Your Name" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" name="email" placeholder="Your Email" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="subject" placeholder="Subject" class="form-control">
                        </div>
                        <div class="mb-3">
                            <textarea name="message" placeholder="Write your message..." class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" required>
                            <label class="form-check-label">
                                I agree to the <a href="terms.php">Terms & Conditions</a>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="col-md-6 mt-5 mt-md-0" data-aos="fade-left">
                    <div class="p-4 bg-light rounded shadow-sm">
                        <h3 class="fw-bold mb-4">Get in Touch</h3>
                        <p class="mb-3"><i class="bi bi-telephone text-primary"></i> <a href="tel:+16502430000">+1 650-243-0000</a></p>
                        <p class="mb-3"><i class="bi bi-envelope text-primary"></i> <a href="mailto:info@iwys.com">info@iwys.com</a></p>
                        <p class="mb-3"><i class="bi bi-geo-alt text-primary"></i> Remote - Serving Clients Worldwide 🌍</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section id="clients" class="bg-grey padding-large">
		<div class="container-lg" data-aos="zoom-in-up" data-aos-delay="300">
			<div class="row">
				<div class="section-header align-center mb-5">
					<h2 class="display-5 m-0">Ready to Share Your Story?</h2>
					<span class="text-black-50"><p class="lead mb-4">Let's work together to create words that inspire, engage, and convert.</p></span>
                    <a href="services.php" class="btn btn-primary mt-3">Explore Our Services</a>
                </div>
			</div>
		</div>
	</section>

    <?php include('includes/footer.php'); ?>
</body>
</html>

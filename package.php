<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuardianGuidance - Elder & Child Care Packages</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .hero {
            background: url('path/to/hero-image.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            text-align: center;
            padding: 100px 0;
        }
        .hero h1 {
            font-size: 3em;
        }
        .package-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 20px 0;
            transition: transform 0.3s;
        }
        .package-card:hover {
            transform: scale(1.05);
        }
        .accordion .card-header {
            cursor: pointer;
        }
        .testimonial {
            background: #f8f9fa;
            padding: 50px 0;
        }
        .testimonial p {
            font-style: italic;
        }
        .cta {
            background: #007bff;
            color: white;
            padding: 50px 0;
            text-align: center;
        }
        .cta a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border: 2px solid white;
            border-radius: 5px;
            transition: background 0.3s, border 0.3s;
        }
        .cta a:hover {
            background: white;
            color: #007bff;
        }
    </style>
</head>
<?php include 'header.html'; ?>

<body>

    <!-- Header -->


    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Compassionate Care for Your Loved Ones</h1>
            <p>Providing tailored services to meet the unique needs of your family.</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container my-5">
        
        <!-- Introduction Section -->
        <section class="text-center">
            <h2>Comprehensive Elder & Child Care Packages</h2>
            <p>Our packages are designed to provide personalized care for elders and children, ensuring their safety, health, and happiness.</p>
        </section>

        <!-- Package Overview Section -->
        <section>
            <h3 class="text-center">Our Packages</h3>
            <div class="row">
                <!-- Elder Care Package 1 -->
                <div class="col-md-6">
                    <div class="package-card">
                        <h4>Basic Elder Care</h4>
                        <p>Assistance with daily activities, companionship, basic medical monitoring.</p>
                        <p><strong>Price: $X/month</strong></p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
                <!-- Elder Care Package 2 -->
                <div class="col-md-6">
                    <div class="package-card">
                        <h4>Advanced Elder Care</h4>
                        <p>Specialized medical care, physical therapy, daily health monitoring.</p>
                        <p><strong>Price: $X/month</strong></p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
                <!-- Child Care Package 1 -->
                <div class="col-md-6">
                    <div class="package-card">
                        <h4>Basic Child Care</h4>
                        <p>Supervision, educational activities, meal preparation.</p>
                        <p><strong>Price: $X/month</strong></p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
                <!-- Child Care Package 2 -->
                <div class="col-md-6">
                    <div class="package-card">
                        <h4>Educational Child Care</h4>
                        <p>Tutoring, extracurricular activities, developmental assessments.</p>
                        <p><strong>Price: $X/month</strong></p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Detailed Package Descriptions Section -->
        <section>
            <h3 class="text-center">Package Details</h3>
            <div class="accordion" id="packageDetails">
                <!-- Elder Care Basic -->
                <div class="card">
                    <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h5 class="mb-0">Basic Elder Care</h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#packageDetails">
                        <div class="card-body">
                            Detailed description of daily activities, types of companionship, and basic medical services included.
                        </div>
                    </div>
                </div>
                <!-- Elder Care Advanced -->
                <div class="card">
                    <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h5 class="mb-0">Advanced Elder Care</h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#packageDetails">
                        <div class="card-body">
                            Detailed description of specialized medical services, types of therapy, and monitoring services.
                        </div>
                    </div>
                </div>
                <!-- Child Care Basic -->
                <div class="card">
                    <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h5 class="mb-0">Basic Child Care</h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#packageDetails">
                        <div class="card-body">
                            Detailed description of daily supervision, types of educational activities, and meal plans.
                        </div>
                    </div>
                </div>
                <!-- Child Care Educational -->
                <div class="card">
                    <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <h5 class="mb-0">Educational Child Care</h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#packageDetails">
                        <div class="card-body">
                            Detailed description of tutoring subjects, extracurricular activities offered, and developmental assessments.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonial text-center">
            <h3>What Our Clients Say</h3>
            <div class="carousel slide" id="testimonialsCarousel" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p>"GuardianGuidance has been a blessing for our family. The care for my father has been exceptional!" - Client Name</p>
                    </div>
                    <div class="carousel-item">
                        <p>"My daughter loves the activities and tutors provided by GuardianGuidance. Highly recommend!" - Client Name</p>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonialsCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#testimonialsCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="cta">
            <h3>Ready to Get Started?</h3>
            <p>Contact us to find the perfect care package for your loved ones.</p>
            <a href="#">Contact Us</a>
        </section>
    </main>

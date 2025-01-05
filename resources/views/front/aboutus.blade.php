


@extends('layouts.app')
@section('title') About Us @endsection


@section('css')
<style>

body {
    font-family: 'Roboto', sans-serif;
    background-color: #f4f7fc;
    color: #333;
}

/* Hero Section */
.hero-section {
    /* background: linear-gradient(to right, #00b4d8, #007bff); */
    color: white;
    padding: 80px 0;
    text-align: center;
}

.hero-section .main-heading {
    font-size: 42px;
    font-weight: 700;
    margin-bottom: 20px;
}

.hero-section .hero-text {
    font-size: 20px;
    margin-bottom: 30px;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

.cta-button {
    background-color: #ff6f61;
    padding: 15px 30px;
    color: white;
    font-size: 18px;
    text-decoration: none;
    border-radius: 25px;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: #d7564b;
}

/* How We Help Section */
.how-we-help {
    padding: 60px 0;
    background-color: #ffffff;
}

.section-heading {
    font-size: 32px;
    font-weight: 700;
    color: #333;
    text-align: center;
    margin-bottom: 40px;
}

.help-cards {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.help-card {
    background-color: #f8f8f8;
    padding: 30px;
    margin: 15px;
    width: 22%;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease;
}

.help-card:hover {
    transform: translateY(-10px);
}

.help-card .icon {
    font-size: 40px;
    color: #007bff;
    margin-bottom: 20px;
}

.help-card h3 {
    font-size: 22px;
    color: #333;
    font-weight: 600;
    margin-bottom: 15px;
}

.help-card p {
    font-size: 16px;
    color: #777;
    line-height: 1.5;
}

/* Why Choose Us Section */
.why-choose-us {
    background-color: #f8f9fa;
    padding: 50px 0;
}

.why-choose-us .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.why-choose-us .section-heading {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 40px;
    text-align: center;
    color: #333;
}

.reasons {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 30px;
}

.reason {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    width: 22%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.reason:hover {
    transform: translateY(-10px);
}

.icon {
    font-size: 40px;
    color: #007bff;
    margin-bottom: 15px;
}

.reason p {
    font-size: 18px;
    margin: 10px 0;
}

.reason .description {
    font-size: 14px;
    color: #777;
    line-height: 1.5;
    margin-top: 10px;
}


/* CTA Section */
.cta-section {
    /* background-color: #007bff; */
    color: white;
    padding: 60px 0;
    text-align: center;
}

.cta-heading {
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 20px;
}

.cta-text {
    font-size: 20px;
    margin-bottom: 30px;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}



/* Responsive Design */
@media (max-width: 768px) {
    .help-cards {
        flex-direction: column;
    }

    .reason {
        flex: 1 1 100%;
        margin-bottom: 20px;
    }
}
.idr{
		color: #1a76d1;
}

    
</style>
@endsection

@section('title')
    About
@endsection
@section('content')

<!-- Slider Area -->
<section class="slider">
    <div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
        <div class="row">
            <div class="col-12">
            <h2 class="idr">About Us</h2>
            <ul class="bread-list">
                {{-- <li><a href="https://www.free-css.com/free-css-templates">IDR</a></li>
                <li><i class="icofont-simple-right"></i></li> --}}
                 {{-- <li class="active">Independent Dispute Resolution</li><br> --}}
                {{-- <li>The U.S. federal government released the final rule on the No Surprises Act, establishing clear guidelines for how out-of-network medical bills will be reimbursed when providers and payers cannot reach an agreement, and the case enters independent dispute resolution (IDR).</li> --}}
            </ul>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>


<section class="why-choose section">
    <div class="container">
        <div class="row">
            <!-- Start About Us Left -->
            <div class="col-lg-12 col-12">
                <div class="choose-left">
                    <h3 class="">Who We Are</h3>
                    <p>At Aurorize Healthcare Solutions, we are a dedicated team of healthcare billing professionals committed to optimizing the revenue cycle for medical practices, hospitals, and healthcare providers. With years of experience in the industry, we specialize in providing comprehensive, accurate, and timely medical billing solutions that ensure maximum reimbursement with minimal stress.</p>
                    <p>Our team consists of certified coders, billing experts, and compliance specialists who are well-versed in the complexities of medical billing and insurance claims. We understand the unique challenges faced by healthcare providers, from navigating evolving regulations to managing payer negotiations. That's why we focus on streamlining your billing process, reducing claim denials, and improving cash flow so you can focus on what matters most—delivering quality patient care.</p>
                    <p>We pride ourselves on delivering personalized, transparent, and results-driven services. Whether you're a small clinic or a large healthcare system, we tailor our solutions to meet your specific needs, ensuring that you receive the highest level of support and expertise at every step of the process.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
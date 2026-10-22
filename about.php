<?php
// about.php
$pageTitle = 'Information - Las Huertas Staycation';
require_once 'includes/header.php';
?>
 
<!-- Page Header -->
<div class="row mb-5 mt-4">
    <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-5 fw-bold mb-3 text-light">Information & Policies</h1>
        <p class="lead text-pink-muted">Everything you need to know before your stay with us.</p>
    </div>
</div>
 
<!-- Host Section (Placed at the top) -->
<section class="row mb-5">
    <div class="col-lg-10 mx-auto">
        <div class="glass-card p-4 p-md-5">
            <div class="d-flex flex-column flex-md-row align-items-center align-items-md-start">
                <!-- Image: Replace this placeholder src with your actual image -->
                <img src="https://i.imgur.com/Rfj5maR.jpeg" alt="Mary Sunshine Huertas" class="rounded-circle border border-3 border-primary mb-3 mb-md-0 me-md-4 shadow" style="width: 120px; height: 120px; object-fit: cover;">
               
                <div class="text-center text-md-start">
                    <h3 class="text-light mb-2 text-uppercase" style="letter-spacing: 2px; font-size: 1.2rem;">Hosted by Mary Sunshine Huertas</h3>
                    <p class="text-pink-muted fst-italic mb-3" style="font-size: 1.1rem;">"Her main goal is to ensure that each and every one of her guests has an enjoyable stay, but she is equally committed to ensuring that each client feels safe and at home as soon as they step through her door."</p>
                    <p class="text-white fw-bold mb-0">Owner of Las Huertas Staycation</p>
                </div>
            </div>
        </div>
    </div>
</section>
 
<!-- FAQ Section -->
<section class="mb-5">
    <div class="text-center mb-4">
        <h2 class="section-title text-light">Frequently Asked Questions</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="accordion" id="faqAccordion">
                <!-- FAQ 1 -->
                <div class="accordion-item glass-card mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-light" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            <i class="bi bi-clock text-primary me-2"></i>What are your check-in and check-out times?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-pink-muted">
                            Regular check-in is from 7:00 AM to 10:00 PM. Early or late check-in may be available upon request, subject to additional fees.
                        </div>
                    </div>
                </div>
                <!-- FAQ 2 -->
                <div class="accordion-item glass-card mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            <i class="bi bi-cash-coin text-primary me-2"></i>How much is the damage deposit?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-pink-muted">
                            A deposit of ₱1,000 is required upon booking. This becomes non-refundable upon cancellation.
                        </div>
                    </div>
                </div>
                <!-- FAQ 3 -->
                <div class="accordion-item glass-card mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            <i class="bi bi-people text-primary me-2"></i>What's the maximum number of guests per unit?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-pink-muted">
                            Each unit has a maximum capacity of 4 guests. Extra charges apply for groups of 3 or more (₱250 per additional guest beyond 2).
                        </div>
                    </div>
                </div>
                <!-- FAQ 4 -->
                <div class="accordion-item glass-card mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            <i class="bi bi-volume-mute text-primary me-2"></i>Is there a noise curfew?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-pink-muted">
                            Yes, please keep noise levels down from 10:00 PM onwards to respect our neighbors and other guests.
                        </div>
                    </div>
                </div>
                <!-- FAQ 5 -->
                <div class="accordion-item glass-card mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                            <i class="bi bi-wifi text-primary me-2"></i>Do you offer WiFi and parking?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-pink-muted">
                            Yes! All units come with high-speed WiFi. Parking is available on a first-come, first-served basis.
                        </div>
                    </div>
                </div>
                <!-- FAQ 6 -->
                <div class="accordion-item glass-card mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                            <i class="bi bi-x-circle text-primary me-2"></i>What's your cancellation policy?
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-pink-muted">
                            Cancellations incur a ₱1,000 non-refundable fee. Please review our cancellation policy before booking.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
<hr class="border-secondary my-5">
 
<!-- Safety & Guest Policies Section -->
<section class="mb-5">
    <div class="text-center mb-5">
        <h2 class="section-title text-light">Safety & Guest Policies</h2>
        <p class="text-pink-muted">Our commitment to keeping you safe and comfortable.</p>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <!-- Policy 1 -->
        <div class="col">
            <div class="glass-card h-100 p-4 text-center">
                <i class="bi bi-shield-check text-primary display-5 mb-3"></i>
                <h5 class="text-light">Sanitization Protocol</h5>
                <p class="text-pink-muted small mb-0">Rooms are thoroughly cleaned and sanitized within 1 hour after each check-out.</p>
            </div>
        </div>
        <!-- Policy 2 -->
        <div class="col">
            <div class="glass-card h-100 p-4 text-center">
                <i class="bi bi-camera-video text-primary display-5 mb-3"></i>
                <h5 class="text-light">24/7 Security</h5>
                <p class="text-pink-muted small mb-0">CCTV cameras are installed in common areas for your safety.</p>
            </div>
        </div>
        <!-- Policy 3 -->
        <div class="col">
            <div class="glass-card h-100 p-4 text-center">
                <i class="bi bi-fire text-primary display-5 mb-3"></i>
                <h5 class="text-light">Fire Safety</h5>
                <p class="text-pink-muted small mb-0">Fire extinguishers and emergency exits are clearly marked in all units.</p>
            </div>
        </div>
        <!-- Policy 4 -->
        <div class="col">
            <div class="glass-card h-100 p-4 text-center">
                <i class="bi bi-trash text-primary display-5 mb-3"></i>
                <h5 class="text-light">Waste Disposal</h5>
                <p class="text-pink-muted small mb-0">Trash collection is scheduled at 9:00 AM and 2:00 PM daily.</p>
            </div>
        </div>
        <!-- Policy 5 -->
        <div class="col">
            <div class="glass-card h-100 p-4 text-center">
                <i class="bi bi-exclamation-triangle text-primary display-5 mb-3"></i>
                <h5 class="text-light">Liability</h5>
                <p class="text-pink-muted small mb-0">Guests are responsible for any broken or damaged items during their stay.</p>
            </div>
        </div>
        <!-- Policy 6 -->
        <div class="col">
            <div class="glass-card h-100 p-4 text-center">
                <i class="bi bi-slash-circle text-primary display-5 mb-3"></i>
                <h5 class="text-light">Smoking Policy</h5>
                <p class="text-pink-muted small mb-0">Smoking is strictly prohibited inside the units. Designated outdoor areas available.</p>
            </div>
        </div>
    </div>
</section>
 
<?php require_once 'includes/footer.php'; ?>
<?php
// index.php
$pageTitle = 'Home - Las Huertas Staycation';
require_once 'includes/header.php';
?>
 
<!-- Custom CSS for Full-Screen Hero Background and Global Text Shadows -->
<style>
    /* Global Text Shadow */
    .text-shadow-global,
    .text-shadow-global h1,
    .text-shadow-global h2,
    .text-shadow-global h3,
    .text-shadow-global h4,
    .text-shadow-global h5,
    .text-shadow-global h6,
    .text-shadow-global p,
    .text-shadow-global span,
    .text-shadow-global a,
    .text-shadow-global i,
    .text-shadow-global strong {
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8) !important;
    }
 
    /* Responsive Hero Container with HD GIF Background */
    .video-hero {
        position: relative;
        min-height: 85vh;
        width: 100%;
        overflow: hidden;
        display: flex;
        align-items: flex-end;
        justify-content: flex-start;
        border-radius: 1rem;
        margin-bottom: 4rem;
        border: 1px solid var(--glass-border);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.5);
       
        /* HD GIF Applied as Background */
        background-image: url('https://i.imgur.com/OV9fpsi.gif');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
       
        /* Forces the browser to render the background at max quality without blurring */
        image-rendering: -webkit-optimize-contrast;
    }
 
    /* Dark gradient overlay fading from bottom to top for text readability */
    .video-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to top, rgba(10, 0, 5, 0.95) 0%, rgba(10, 0, 5, 0.4) 40%, transparent 100%);
        z-index: 0;
    }
 
    .video-content {
        position: relative;
        z-index: 1;
        padding: 3rem;
        max-width: 800px;
        text-align: left;
    }
 
    /* Fancy glowing effect just for the Welcome title */
    .fancy-title {
        text-shadow: 0px 0px 15px rgba(255, 46, 147, 0.8), 2px 2px 5px rgba(0,0,0,0.9) !important;
    }
 
    /* Logo Position for Bottom Right */
    .hero-logo-bottom-right {
        position: absolute;
        bottom: 3rem;
        right: 3rem;
        z-index: 2;
        width: 130px;
        height: 130px;
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.6);
    }
   
    /* Step-by-Step Tutorial Styling */
    .step-card {
        transition: transform 0.3s ease;
    }
    .step-card:hover {
        transform: translateY(-5px);
    }
    .step-number {
        width: 40px;
        height: 40px;
        background-color: var(--bs-primary);
        color: #000;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
        margin: 0 auto 1rem auto;
        box-shadow: 0 0 15px rgba(255, 46, 147, 0.6);
    }
 
    @media (max-width: 768px) {
        .video-hero { min-height: 70vh; }
        .video-content { padding: 2rem; }
        .hero-logo-bottom-right { width: 80px; height: 80px; bottom: 1.5rem; right: 1.5rem; }
    }
</style>
 
<!-- Wrapper that applies the global text shadow -->
<div class="text-shadow-global">
 
    <!-- Hero Section -->
    <section class="video-hero">
        <!-- Logo in Bottom Right -->
        <img src="https://i.imgur.com/McZm00p.png" alt="Las Huertas Logo" class="hero-logo-bottom-right">
 
        <div class="video-content">
            <h1 class="display-3 fst-italic fw-bold text-primary mb-3 fancy-title">
                <i class="bi bi-stars me-2" style="font-size: 0.8em;"></i>Welcome to Las Huertas
            </h1>
           
            <!-- Original Text Formatting Restored (No Background/Border) -->
            <p class="lead text-white mb-2" style="font-weight: 500;">
                Different moods, different rooms, same #LasHuertasStaycation.
            </p>
            <p class="text-white mb-4" style="font-size: 1.1rem;">
                Experience a private garden escape right in the heart of Antipolo.
            </p>
           
            <!-- Split back into 3 distinct bordered badges -->
            <div class="d-flex flex-wrap gap-2 mt-4">
                <span class="badge glass-card text-white p-2 px-3 rounded-pill fs-6 shadow">
                    <i class="bi bi-shield-check text-primary me-2"></i>Clean & Safe
                </span>
                <span class="badge glass-card text-white p-2 px-3 rounded-pill fs-6 shadow">
                    <i class="bi bi-patch-check text-primary me-2"></i>Reliable
                </span>
                <span class="badge glass-card text-white p-2 px-3 rounded-pill fs-6 shadow">
                    <i class="bi bi-house-heart text-primary me-2"></i>Multiple units near Antipolo
                </span>
            </div>
        </div>
    </section>
 
    <!-- ABOUT US SECTION -->
    <section class="row mb-5">
        <div class="col-lg-10 mx-auto px-4 px-md-5">
            <div class="py-4">
                <p class="lead text-light mb-4">Welcome to Las Huertas Staycation where every stay is designed to feel like home, but with a touch of luxury and personality.</p>
               
                <p class="text-pink-muted">Our name "Las Huertas" reflects warmth, abundance, and the feeling of a private garden escape right in the heart of Antipolo.</p>
                <p class="text-pink-muted">What started as a passion for creating unique spaces has grown into a collection of 7 signature units, each with its own distinct mood and character. From the maximalist energy of <strong class="text-primary">CASA ALLEGRO</strong> to the serene simplicity of <strong class="text-primary">CASA SEMPLICITA</strong>, we've curated every detail to match your vibe.</p>
                <p class="text-pink-muted mb-5">Located just minutes from LRT2 Antipolo and SM Masinag, we offer the perfect balance of accessibility and tranquility.</p>
               
                <div class="my-4 text-center">
                    <p class="mb-0 text-primary fst-italic fw-bold fs-4">
                        <i class="bi bi-stars me-1"></i> Our promise: Clean, safe, reliable, and unforgettable stays.
                    </p>
                </div>
            </div>
        </div>
    </section>
 
    <!-- STAY DETAILS & RULES -->
    <section class="row mb-5 mt-4">
        <div class="col-lg-10 mx-auto px-4 px-md-5">
            <div class="py-4">
               
                <!-- Stay Details -->
                <h3 class="text-light mb-4 text-uppercase" style="letter-spacing: 1px;">
                    <i class="bi bi-clock text-primary me-2"></i>Stay Details
                </h3>
               
                <div class="d-flex gap-2 mb-3">
                    <span class="badge bg-dark border border-secondary text-white px-3 py-2 fw-normal">12 hours</span>
                    <span class="badge bg-dark border border-secondary text-white px-3 py-2 fw-normal">22 hours</span>
                </div>
               
                <p class="text-pink-muted mb-3 fs-5">
                    <i class="bi bi-hourglass-split text-light me-2"></i>Regular check-in: <strong class="text-white">7:00 AM – 10:00 PM</strong>
                </p>
               
                <div class="mb-4 ps-2 border-start border-2 border-secondary">
                    <p class="text-pink-muted mb-0 fst-italic">
                        <i class="bi bi-exclamation-triangle text-warning me-2"></i>Early / late check-in subject to availability. Additional fees may apply.
                    </p>
                </div>
 
                <hr class="border-secondary mb-4">
 
                <!-- Rules & Regulations -->
                <h3 class="text-light mb-4 text-uppercase" style="letter-spacing: 1px;">
                    <i class="bi bi-info-circle text-primary me-2"></i>Rules & Regulations
                </h3>
               
                <ul class="list-unstyled text-pink-muted mb-4">
                    <li class="mb-3 d-flex align-items-start">
                        <i class="bi bi-volume-mute text-light me-3 mt-1"></i>
                        <span>No loud noises, music, or shouting from 10pm onwards</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="bi bi-exclamation-triangle text-light me-3 mt-1"></i>
                        <span>Guests are liable to pay for items or equipment that are broken in the span of their stay.</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="bi bi-eye text-light me-3 mt-1"></i>
                        <span>Please be mindful of items in the room.</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="bi bi-trash text-light me-3 mt-1"></i>
                        <span>Trash disposal are around either 9am or 2pm</span>
                    </li>
                    <li class="mb-0 d-flex align-items-start">
                        <i class="bi bi-exclamation-lg text-light me-3 mt-1"></i>
                        <span>Rooms are cleaned in 1 hour, directly after previous check-in.</span>
                    </li>
                </ul>
 
                <!-- Cancellation Box -->
                <div class="p-3 mt-5 border-start border-4 border-primary">
                    <p class="mb-0 text-white fw-bold small" style="letter-spacing: 0.5px;">
                        <i class="bi bi-cash-coin text-primary me-2"></i>REGARDING THE CANCELLATION FEE: Once you cancel a booked room, the deposited 1,000php is no longer refundable.
                    </p>
                </div>
 
            </div>
        </div>
    </section>
 
    <!-- How to Book Tutorial Section -->
    <section class="row mb-5 mt-5">
        <div class="col-lg-10 mx-auto text-center">
            <h2 class="section-title text-light mb-2">How to Book Your Stay</h2>
            <p class="text-pink-muted mb-5">Follow these simple steps to secure your staycation.</p>
           
            <div class="row g-4 justify-content-center">
                <!-- Step 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="glass-card p-4 h-100 step-card">
                        <div class="step-number">1</div>
                        <i class="bi bi-images text-primary fs-1 mb-3"></i>
                        <h5 class="text-light">Choose Your Unit</h5>
                        <p class="text-pink-muted small mb-0">Browse our 7 unique units and pick the vibe that matches your mood.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="glass-card p-4 h-100 step-card">
                        <div class="step-number">2</div>
                        <i class="bi bi-calendar-check text-primary fs-1 mb-3"></i>
                        <h5 class="text-light">Fill Out the Form</h5>
                        <p class="text-pink-muted small mb-0">Go to the Book page and enter your preferred dates and guest details.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="glass-card p-4 h-100 step-card">
                        <div class="step-number">3</div>
                        <i class="bi bi-chat-dots text-primary fs-1 mb-3"></i>
                        <h5 class="text-light">Confirmation</h5>
                        <p class="text-pink-muted small mb-0">We will message you via Facebook or Email to confirm availability and send payment details.</p>
                    </div>
                </div>
                <!-- Step 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="glass-card p-4 h-100 step-card">
                        <div class="step-number">4</div>
                        <i class="bi bi-key text-primary fs-1 mb-3"></i>
                        <h5 class="text-light">Arrive & Enjoy</h5>
                        <p class="text-pink-muted small mb-0">Settle your deposit, check in, and enjoy your private garden escape!</p>
                    </div>
                </div>
            </div>
           
            <div class="mt-5">
                <a href="booking.php" class="btn btn-primary btn-lg px-5 shadow"><i class="bi bi-calendar-heart me-2"></i>Book Now</a>
            </div>
        </div>
    </section>
 
    <!-- Trust Bar -->
    <section class="glass-card p-4 mb-5 mt-5">
        <div class="row text-center g-4">
            <div class="col-md-4">
                <i class="bi bi-geo-alt text-primary fs-3 mb-2"></i>
                <h6 class="text-light mb-0">Prime Location</h6>
                <p class="text-pink-muted small mb-0">Minutes from LRT2 & SM Masinag</p>
            </div>
            <div class="col-md-4 border-start border-end border-secondary">
                <i class="bi bi-stars text-primary fs-3 mb-2"></i>
                <h6 class="text-light mb-0">Unique Aesthetics</h6>
                <p class="text-pink-muted small mb-0">7 distinct moods and characters</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-shield-check text-primary fs-3 mb-2"></i>
                <h6 class="text-light mb-0">Safe & Sanitized</h6>
                <p class="text-pink-muted small mb-0">24/7 security and strict cleaning</p>
            </div>
        </div>
    </section>
 
</div>
 
<!-- Gallery Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content glass-card border-0">
            <div class="modal-header border-secondary">
                <h5 class="modal-title text-light" id="galleryTitle">Image Gallery</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-0">
                <img id="galleryImage" src="" class="img-fluid w-100 rounded-bottom" alt="Gallery Image">
            </div>
        </div>
    </div>
</div>
 
<script>
function setGallery(title, imgSrc) {
    document.getElementById('galleryTitle').innerText = title;
    document.getElementById('galleryImage').src = imgSrc;
}
</script>
 
<?php require_once 'includes/footer.php'; ?>
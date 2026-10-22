<?php
// booking.php
$pageTitle = 'Book Your Stay - Las Huertas Staycation';
require_once 'includes/header.php';
 
// Simple form submission handling (in production, save to database)
$submitted = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // In a real application, you would save this to a database and send an email notification.
    $submitted = true;
}
?>
 
<div class="row mb-5">
    <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-5 fw-bold mb-3">Book Your Stay</h1>
        <p class="lead text-secondary">Fill out the form below and we'll get back to you to confirm your reservation. No online payment required — deposits are processed upon arrival.</p>
    </div>
</div>
 
<?php if ($submitted): ?>
    <div class="alert alert-success bg-success-subtle text-success border-success text-center mb-5" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i> Thank you! Your booking request has been received. We will contact you shortly to confirm availability and details.
    </div>
<?php endif; ?>
 
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="booking-form-container">
            <form method="POST" action="booking.php">
                <div class="row g-3">
                    <!-- Personal Info -->
                    <div class="col-md-6">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="pax" class="form-label">Number of Guests</label>
                        <select class="form-select" id="pax" name="pax" required>
                            <option value="" selected disabled>Select guests</option>
                            <option value="1">1 Guest</option>
                            <option value="2">2 Guests</option>
                            <option value="3">3 Guests</option>
                            <option value="4">4 Guests (Max)</option>
                        </select>
                    </div>
                   
                    <!-- Unit Selection -->
                    <div class="col-12">
                        <label for="unit" class="form-label">Select Unit</label>
                        <select class="form-select" id="unit" name="unit" required>
                            <option value="" selected disabled>Choose your Casa</option>
                            <option value="Casa Fino">Casa Fino</option>
                            <option value="Casa Marino">Casa Marino</option>
                            <option value="Casa Victoria">Casa Victoria</option>
                            <option value="Casa Semplicita">Casa Semplicita</option>
                            <option value="Casa Industria">Casa Industria</option>
                            <option value="Casa Macho">Casa Macho</option>
                            <option value="Casa Allegro">Casa Allegro</option>
                        </select>
                    </div>
 
                    <!-- Dates & Times -->
                    <div class="col-md-6">
                        <label for="checkin" class="form-label">Check-in Date</label>
                        <input type="date" class="form-control" id="checkin" name="checkin" required>
                    </div>
                    <div class="col-md-6">
                        <label for="checkout" class="form-label">Check-out Date</label>
                        <input type="date" class="form-control" id="checkout" name="checkout" required>
                    </div>
                   
                    <!-- NEW: Stay Duration & Check-in Time -->
                    <div class="col-md-6">
                        <label for="duration" class="form-label">Stay Duration</label>
                        <select class="form-select" id="duration" name="duration" required>
                            <option value="" selected disabled>Select duration</option>
                            <option value="12 hours">12 hours</option>
                            <option value="22 hours">22 hours</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="checkinTime" class="form-label">Preferred Check-in Time</label>
                        <input type="time" class="form-control" id="checkinTime" name="checkinTime" required>
                        <small class="text-muted" style="font-size: 0.75rem;">Regular check-in: 7:00 AM – 10:00 PM</small>
                    </div>
 
                    <!-- Special Requests -->
                    <div class="col-12 mt-4">
                        <label for="message" class="form-label">Special Requests / Inquiries</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Let us know if you have any special requests..."></textarea>
                    </div>
                   
                    <!-- Agreement & Submit -->
                    <div class="col-12 mt-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="agreePolicies" required>
                            <label class="form-check-label text-secondary small" for="agreePolicies">
                                I have read and agree to the
                                <a href="#" class="text-warning" data-bs-toggle="modal" data-bs-target="#policyModal">safety policies and cancellation rules</a>.
                            </label>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Submit Booking Request</button>
                    </div>
                </div>
            </form>
            <p class="text-muted small text-center mt-3 mb-0">We will confirm your booking via email or Facebook Messenger within 24 hours.</p>
        </div>
    </div>
</div>
 
<!-- ========================================== -->
<!-- POLICY & CANCELLATION MODAL POPUP          -->
<!-- ========================================== -->
<div class="modal fade" id="policyModal" tabindex="-1" aria-labelledby="policyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content glass-card" style="background: rgba(10, 0, 5, 0.95); border: 1px solid var(--pink-primary);">
           
            <div class="modal-header border-secondary">
                <h5 class="modal-title text-primary fw-bold" id="policyModalLabel">
                    <i class="bi bi-shield-check me-2"></i>Safety Policies & Cancellation Rules
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
            <div class="modal-body text-light" style="max-height: 60vh; overflow-y: auto;">
                <h6 class="text-primary mt-2 mb-3">Cancellation Policy</h6>
                <p class="text-pink-muted small mb-4">
                    <i class="bi bi-cash-coin text-primary me-2"></i>
                    <strong>Regarding the cancellation fee:</strong> Once you cancel a booked room, the deposited ₱1,000 is no longer refundable.
                </p>
 
                <h6 class="text-primary mb-3">House Rules & Safety</h6>
                <ul class="list-unstyled text-pink-muted small mb-0">
                    <li class="mb-3 d-flex align-items-start">
                        <i class="bi bi-volume-mute text-white me-3 mt-1"></i>
                        <span><strong>Quiet Hours:</strong> No loud noises, music, or shouting from 10:00 PM onwards.</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="bi bi-exclamation-triangle text-white me-3 mt-1"></i>
                        <span><strong>Liability:</strong> Guests are liable to pay for items or equipment that are broken in the span of their stay.</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="bi bi-eye text-white me-3 mt-1"></i>
                        <span><strong>Care of Items:</strong> Please be mindful of items in the room.</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="bi bi-trash text-white me-3 mt-1"></i>
                        <span><strong>Waste Disposal:</strong> Trash disposal is scheduled around either 9:00 AM or 2:00 PM daily.</span>
                    </li>
                    <li class="mb-0 d-flex align-items-start">
                        <i class="bi bi-clock-history text-white me-3 mt-1"></i>
                        <span><strong>Cleaning:</strong> Rooms are cleaned within 1 hour, directly after the previous guest's check-out.</span>
                    </li>
                </ul>
            </div>
           
            <div class="modal-footer border-secondary">
                <button type="button" class="btn btn-primary rounded-pill px-4" data-bs-dismiss="modal">I Understand</button>
            </div>
        </div>
    </div>
</div>
 
<?php require_once 'includes/footer.php'; ?>
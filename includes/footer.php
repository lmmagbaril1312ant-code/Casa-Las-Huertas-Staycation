<?php
// includes/footer.php
// This file contains the footer and closing body/html tags.
?>
    </main>
 
    <!-- Footer -->
    <footer class="bg-dark border-top border-secondary py-4 mt-auto">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <h5 class="text-uppercase mb-3">Las Huertas Staycation</h5>
                    <p class="text-muted small">Different moods, different rooms, same #LasHuertasStaycation. Your private garden escape in the heart of Antipolo.</p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-uppercase mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="about.php" class="text-muted text-decoration-none">About Us</a></li>
                        <li><a href="units.php" class="text-muted text-decoration-none">Our Units</a></li>
                        <li><a href="booking.php" class="text-muted text-decoration-none">Book a Stay</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-uppercase mb-3">Reach Us</h5>
                   
                    <!-- Clickable Google Maps Link -->
                    <p class="text-muted small mb-1">
                        <a href="https://maps.app.goo.gl/AtaZdA7hsUQ3soC66" target="_blank" class="text-muted text-decoration-none">
                            <i class="bi bi-geo-alt me-2"></i>102 Plaza Condominium, Antipolo
                        </a>
                    </p>
                   
                    <!-- Clickable Facebook Link -->
                    <p class="text-muted small mb-1">
                        <a href="https://www.facebook.com/lashuertasstaycation?rdid=ZQRXzrZhduwxKb35&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1GbqKRuBqW#" target="_blank" class="text-muted text-decoration-none">
                            <i class="bi bi-facebook me-2"></i>Las Huertas Staycation
                        </a>
                    </p>
                   
                    <!-- Clickable Gmail Link (opens Gmail web compose in a new tab) -->
                    <p class="text-muted small">
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=casaindustria888@gmail.com" target="_blank" class="text-muted text-decoration-none">
                            <i class="bi bi-envelope me-2"></i>casaindustria888@gmail.com
                        </a>
                    </p>
                </div>
            </div>
            <hr class="border-secondary">
            <div class="text-center text-muted small">
                &copy; <?php echo date("Y"); ?> Las Huertas Staycation. All rights reserved.
            </div>
        </div>
    </footer>
 
    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
    <!-- Custom CSS for Return to Top Button -->
    <style>
        .btn-return-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            display: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            justify-content: center;
            align-items: center;
            background-color: #8A004F !important; /* Dark Pink */
            border-color: #8A004F !important;
            color: white !important;
            box-shadow: 0 4px 15px rgba(138, 0, 79, 0.5);
            transition: opacity 0.3s ease, transform 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
        }
 
        /* Hover effect for the button */
        .btn-return-top:hover {
            background-color: #FF2E93 !important; /* Brighter pink on hover */
            border-color: #FF2E93 !important;
            transform: translateY(-3px);
        }
 
        .btn-return-top.show {
            display: flex;
            opacity: 1;
            transform: translateY(0);
        }
 
        @media (max-width: 768px) {
            .btn-return-top {
                bottom: 20px;
                right: 20px;
                width: 45px;
                height: 45px;
            }
        }
    </style>
 
    <!-- Return to Top Button -->
    <button id="returnToTop" class="btn btn-return-top shadow" aria-label="Return to top">
        <i class="bi bi-arrow-up fs-5"></i>
    </button>
 
    <!-- Return to Top Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const returnToTopBtn = document.getElementById('returnToTop');
           
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    returnToTopBtn.classList.add('show');
                } else {
                    returnToTopBtn.classList.remove('show');
                }
            });
           
            returnToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
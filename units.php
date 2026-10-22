<?php
// units.php
$pageTitle = 'Our Units - Las Huertas Staycation';
require_once 'includes/header.php';
 
$units = [
    'casa-allegro' => [
        'name' => 'Casa Allegro',
        'desc' => 'Perfect for hang-out, partying indoors and drinking night. Maximalist design with dim-energy vibes for unforgettable nights.',
        'price22' => '₱2,800', 'price12' => '₱1,800',
        'pax' => '2 pax only', 'beds' => '1 bedroom',
        'amenities' => ['Bathroom & Shower', 'Kitchen, Utensils and Appliances', 'Wi-Fi', 'Air conditioning', 'Drinking Tower', 'Mini Billiard Pool', 'Fresh linens and towels', 'TV & Speaker', 'Playing Cards'],
        'logo' => 'https://i.imgur.com/Mpg55qh.jpg',
        'images' => [
            'https://i.imgur.com/d3Ymp9G.jpg',
            'https://i.imgur.com/AvgrOAU.jpg',
            'https://i.imgur.com/OROD0ef.jpg',
            'https://i.imgur.com/rPv9l2r.jpg',
            'https://i.imgur.com/THXPcB2.jpg',
            'https://i.imgur.com/5fGLmpp.jpg'
        ]
    ],
    'casa-fino' => [
        'name' => 'Casa Fino',
        'desc' => 'Best for comfort and relaxation with a hint of clean modern and minimalist style. Luxurious elegance at its finest.',
        'price22' => '₱2,800', 'price12' => '₱1,800',
        'pax' => '2 pax only', 'beds' => '1 bedroom',
        'amenities' => ['Bathroom & Shower', 'Kitchen, Utensils and Appliances', 'Wi-Fi', 'Air conditioning', 'Mini Fridge', 'Fresh linens and towels', 'Workspace or desk area', 'TV, Speaker and Playstation', 'Playing Cards'],
        'logo' => 'https://i.imgur.com/t0VpaF3.jpg',
        'images' => [
            'https://i.imgur.com/b7taICn.jpg',
            'https://i.imgur.com/YTHu4gw.jpg',
            'https://i.imgur.com/4zL92tk.jpg',
            'https://i.imgur.com/hvPOr3n.jpg',
            'https://i.imgur.com/srXhXZ8.jpg',
            'https://i.imgur.com/UkzYv6h.jpg'
        ]
    ],
    'casa-industria' => [
        'name' => 'Casa Industria',
        'desc' => 'Inviting warm home stay perfect for travelers blending relaxation and comfort in a stylish room.',
        'price22' => '₱2,800', 'price12' => '₱1,800',
        'pax' => '2 pax only', 'beds' => '2 bedrooms',
        'amenities' => ['Bathroom & Shower', 'Kitchen, Utensils and Appliances', 'Wi-Fi', 'Air conditioning', 'Refrigerator', 'Fresh linens and towels', 'Workspace or desk area', 'Dining Table', 'TV, Speaker and Playstation', 'Playing Cards'],
        'logo' => 'https://i.imgur.com/HQrA8Xq.jpg',
        'images' => [
            'https://i.imgur.com/SQD417Z.jpg',
            'https://i.imgur.com/rhfpRxl.jpg',
            'https://i.imgur.com/mKCpJVv.jpg',
            'https://i.imgur.com/mdI4sLY.jpg',
            'https://i.imgur.com/s4ESg2D.jpg',
            'https://i.imgur.com/RneIG6Y.jpg'
        ]
    ],
    'casa-macho' => [
        'name' => 'Casa Macho',
        'desc' => 'Encaptures retro style with a barcade design best for playing while staying indoors. Gaming and relaxation combined.',
        'price22' => '₱2,800', 'price12' => '₱1,800',
        'pax' => '2 pax only', 'beds' => '1 bedroom',
        'amenities' => ['Bathroom & Shower', 'Kitchen, Utensils and Appliances', 'Wi-Fi', 'Air conditioning', 'Dining Table', 'Mini Fridge', 'Mini Billiard Pool', 'Fresh linens and towels', 'TV & Speaker', 'Playing Cards'],
        'logo' => 'https://i.imgur.com/HzKKL2w.jpg',
        'images' => [
            'https://i.imgur.com/8YjiG0J.jpg',
            'https://i.imgur.com/XkSyJFC.jpg',
            'https://i.imgur.com/zauNWd3.jpg',
            'https://i.imgur.com/UBOQRxy.jpg',
            'https://i.imgur.com/BC0sFk7.jpg',
            'https://i.imgur.com/llqA2xT.jpg'
        ]
    ],
    'casa-marino' => [
        'name' => 'Casa Marino',
        'desc' => 'Deep sea and long travel inside a yacht experience. A combination of comfort and nautical ambience for coastal relaxation.',
        'price22' => '₱2,800', 'price12' => '₱1,800',
        'pax' => '2 pax only', 'beds' => '2 bedrooms',
        'amenities' => ['Bathroom & Shower', 'Kitchen, Utensils and Appliances', 'Wi-Fi', 'Air conditioning', 'Mini Fridge', 'Fresh linens and towels', 'Workspace or desk area', 'TV, Speaker and Playstation', 'Playing Cards'],
        'logo' => 'https://i.imgur.com/2vah7yR.jpg',
        'images' => [
            'https://i.imgur.com/u39Mav3.jpg',
            'https://i.imgur.com/KMnwhN4.jpg',
            'https://i.imgur.com/PjDb3AI.jpg',
            'https://i.imgur.com/yhTcOvO.jpg',
            'https://i.imgur.com/H1E3lqt.jpg',
            'https://i.imgur.com/oPV0FJJ.jpg'
        ]
    ],
    'casa-semplicita' => [
        'name' => 'Casa Semplicita',
        'desc' => 'The comfort of simplicity and a serene warm vibes with wooden style and plants in a minimalist design.',
        'price22' => '₱2,800', 'price12' => '₱1,800',
        'pax' => '2 pax only', 'beds' => '1 bedroom',
        'amenities' => ['Bathroom & Shower', 'Kitchen, Utensils and Appliances', 'Wi-Fi', 'Air conditioning', 'Mini Fridge', 'Fresh linens and towels', 'Workspace or desk area', 'Dining Table', 'TV & Speaker', 'Playing Cards'],
        'logo' => 'https://i.imgur.com/76qTWJu.jpg',
        'images' => [
            'https://i.imgur.com/6gKy3g0.jpg',
            'https://i.imgur.com/WJ1ejZ6.jpg',
            'https://i.imgur.com/Shna3Nw.jpg',
            'https://i.imgur.com/PYwnqL8.jpg',
            'https://i.imgur.com/H16sgDP.jpg',
            'https://i.imgur.com/QPdAjhf.jpg'
        ]
    ],
    'casa-victoria' => [
        'name' => 'Casa Victoria',
        'desc' => 'Golden furnitures with a blended classic and elegance. Vintage vibes for timeless romantic stays.',
        'price22' => '₱2,800', 'price12' => '₱1,800',
        'pax' => '2 pax only', 'beds' => '1 bedroom',
        'amenities' => ['Bathroom & Shower', 'Kitchen, Utensils and Appliances', 'Wi-Fi', 'Air conditioning', 'Refrigerator', 'Fresh linens and towels', 'Dining Table', 'TV & Speaker', 'Playing Cards'],
        'logo' => 'https://i.imgur.com/ssZB2mV.jpg',
        'images' => [
            'https://i.imgur.com/Gd1yO8n.jpg',
            'https://i.imgur.com/PSGV8Fw.jpg',
            'https://i.imgur.com/2jAPhAH.jpg',
            'https://i.imgur.com/HOZSj7y.jpg',
            'https://i.imgur.com/uYZwbPq.jpg',
            'https://i.imgur.com/XconByC.jpg'
        ]
    ]
];
?>
 
<!-- Custom CSS for the Units Grid & Glassmorphism -->
<style>
    .unit-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .unit-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 40px 0 rgba(255, 46, 147, 0.3);
    }
   
    .img-container {
        position: relative;
        border-radius: 0.5rem;
        overflow: hidden;
        background-color: #000;
        cursor: pointer;
        height: 220px;
    }
   
    /* ZOOMED IN PREVIEW PHOTO */
    .main-cover-logo {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
   
    .img-container:hover .main-cover-logo {
        transform: scale(1.05);
    }
 
    /* --- Modal Glass Pink Styling (LIGHTER SHADE) --- */
    .modal-glass-pink {
        background: rgba(90, 10, 45, 0.85) !important; /* Lighter Glass Pink */
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 46, 147, 0.6) !important;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.8);
    }
   
    .stats-box-glass {
        background: rgba(0, 0, 0, 0.3); /* Slight dark tint for contrast */
        border: 1px solid rgba(255, 46, 147, 0.2);
    }
 
    .amenities-box-glass {
        background: rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(255, 46, 147, 0.2);
    }
 
    /* --- 3x2 GRID FORMAT STYLING --- */
    .gallery-grid-img {
        height: 200px;
        width: 100%;
        object-fit: cover;
        border-radius: 4px;
        cursor: pointer;
        transition: transform 0.3s ease, opacity 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
        background-color: #000;
    }
    .gallery-grid-img:hover {
        transform: scale(1.03);
        opacity: 0.8;
    }
 
    /* --- SLIDESHOW STYLING FOR ZOOM MODAL --- */
    .zoom-slider-container {
        position: relative;
        width: 100%;
        height: 80vh;
        background: transparent;
        display: flex;
        align-items: center;
        justify-content: center;
    }
   
    .zoom-slider-img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0,0,0,0.8);
    }
 
    /* Next / Prev Buttons */
    .zoom-slider-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 46, 147, 0.8);
        color: #fff;
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        font-size: 1.8rem;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.3s, transform 0.2s;
        z-index: 10;
    }
    .zoom-slider-btn:hover {
        background: var(--pink-primary);
        color: #000;
        transform: translateY(-50%) scale(1.1);
    }
    .zoom-slider-btn.prev { left: 20px; }
    .zoom-slider-btn.next { right: 20px; }
 
    /* Image Counter */
    .zoom-slider-counter {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0,0,0,0.8);
        color: var(--bs-primary);
        padding: 5px 20px;
        border-radius: 20px;
        font-size: 1rem;
        font-weight: bold;
        letter-spacing: 1px;
        border: 1px solid rgba(255, 46, 147, 0.5);
    }
</style>
 
<!-- Page Header -->
<div class="row mb-5 mt-4">
    <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-5 fw-bold mb-3 text-light">Our 7 Signature Units</h1>
        <p class="lead text-pink-muted">A mood for every stay — click any unit to explore.</p>
    </div>
</div>
 
<!-- Units Grid -->
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center mb-5">
    <?php foreach ($units as $id => $unit): ?>
    <div class="col">
        <div class="glass-card h-100 p-3 unit-card">
           
            <!-- Main Card Display (Shows Logo) -->
            <div class="img-container" data-bs-toggle="modal" data-bs-target="#unitModal<?php echo $id; ?>">
                <img src="<?php echo $unit['logo']; ?>" class="main-cover-logo" alt="<?php echo $unit['name']; ?>">
            </div>
           
            <div class="card-body d-flex flex-column mt-3 px-1">
                <h4 class="card-title text-primary mb-2" style="font-style: italic; font-weight: bold;"><?php echo $unit['name']; ?></h4>
                <p class="card-text text-pink-muted small flex-grow-1 mb-4"><?php echo $unit['desc']; ?></p>
               
                <button class="btn btn-primary w-100 mt-auto" data-bs-toggle="modal" data-bs-target="#unitModal<?php echo $id; ?>">
                    <i class="bi bi-images me-2"></i>View Details
                </button>
            </div>
        </div>
    </div>
 
    <!-- ========================================== -->
    <!-- UNIT MODAL (3x2 GRID FORMAT)               -->
    <!-- ========================================== -->
    <div class="modal fade" id="unitModal<?php echo $id; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content modal-glass-pink border-0">
               
                <!-- Modal Header -->
                <div class="modal-header border-secondary pb-0">
                    <h2 class="modal-title text-primary fw-bold" style="font-style: italic; text-transform: uppercase;"><?php echo $unit['name']; ?></h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
               
                <div class="modal-body p-4" style="max-height: 85vh; overflow-y: auto;">
                   
                    <!-- Description -->
                    <p class="text-light mb-4"><?php echo $unit['desc']; ?></p>
                   
                    <!-- Pricing & Stats Grid -->
                    <div class="row text-center stats-box-glass rounded p-3 mb-4 mx-1">
                        <div class="col-6 col-md-3 border-end border-secondary mb-3 mb-md-0">
                            <h5 class="text-primary mb-0 fw-bold"><?php echo $unit['price22']; ?></h5>
                            <small class="text-white opacity-75">22 hours stay</small>
                        </div>
                        <div class="col-6 col-md-3 border-md-end border-secondary mb-3 mb-md-0">
                            <h5 class="text-primary mb-0 fw-bold"><?php echo $unit['price12']; ?></h5>
                            <small class="text-white opacity-75">12 hours stay</small>
                        </div>
                        <div class="col-6 col-md-3 border-end border-secondary">
                            <h5 class="text-primary mb-0 fw-bold"><?php echo $unit['pax']; ?></h5>
                            <small class="text-white opacity-75">Maximum capacity</small>
                        </div>
                        <div class="col-6 col-md-3">
                            <h5 class="text-primary mb-0 fw-bold"><?php echo $unit['beds']; ?></h5>
                            <small class="text-white opacity-75">Bedrooms</small>
                        </div>
                    </div>
 
                    <!-- 3x2 GALLERY GRID -->
                    <div class="row g-2 mb-5">
                        <?php foreach ($unit['images'] as $index => $img): ?>
                        <div class="col-md-4 col-6">
                            <!-- Clicking this will open the slideshow zoom modal starting at this image -->
                            <img src="<?php echo $img; ?>"
                                 class="gallery-grid-img"
                                 onclick="openZoomModal('<?php echo $id; ?>', <?php echo $index; ?>)"
                                 alt="<?php echo $unit['name']; ?> Image <?php echo $index+1; ?>">
                        </div>
                        <?php endforeach; ?>
                    </div>
 
                    <!-- Amenities Section -->
                    <div class="p-3 rounded amenities-box-glass">
                        <h5 class="text-light mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i>Amenities & Features</h5>
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
                            <?php foreach ($unit['amenities'] as $amenity): ?>
                            <div class="col">
                                <p class="text-white opacity-75 mb-0 small"><i class="bi bi-check-circle-fill text-primary me-2"></i><?php echo $amenity; ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
 
                    <!-- Book Button -->
                    <div class="text-center mt-5">
                        <a href="booking.php?unit=<?php echo urlencode($unit['name']); ?>" class="btn btn-primary btn-lg px-5">
                            <i class="bi bi-calendar-heart me-2"></i>Book This Unit
                        </a>
                    </div>
 
                </div>
            </div>
        </div>
    </div>
    <!-- END OF UNIT MODAL -->
 
    <?php endforeach; ?>
</div>
 
<!-- ========================================== -->
<!-- UNIVERSAL ZOOM SLIDESHOW MODAL             -->
<!-- ========================================== -->
<div class="modal fade" id="imageZoomModal" tabindex="-1" aria-hidden="true" style="backdrop-filter: blur(10px); background: rgba(0,0,0,0.8);">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content" style="background: transparent; border: none;">
           
            <div class="modal-body p-0 position-relative">
                <!-- Close Button -->
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-4" data-bs-dismiss="modal" style="z-index: 20; filter: drop-shadow(0 0 5px black);"></button>
               
                <!-- Zoom Slider Container -->
                <div class="zoom-slider-container">
                    <img id="zoomImgSrc" src="" class="zoom-slider-img" alt="Zoomed Image">
                   
                    <!-- Next / Prev Buttons -->
                    <button class="zoom-slider-btn prev" onclick="zoomMoveSlide(-1)"><i class="bi bi-chevron-left"></i></button>
                    <button class="zoom-slider-btn next" onclick="zoomMoveSlide(1)"><i class="bi bi-chevron-right"></i></button>
                   
                    <!-- Counter -->
                    <div class="zoom-slider-counter" id="zoomCounter">1 / 6</div>
                </div>
            </div>
 
        </div>
    </div>
</div>
 
<!-- JavaScript for the Zoom Slideshow -->
<script>
    // Store all images for all units
    const unitImages = {
        <?php foreach ($units as $id => $unit): ?>
        '<?php echo $id; ?>': <?php echo json_encode($unit['images']); ?>,
        <?php endforeach; ?>
    };
 
    let currentZoomUnit = '';
    let currentZoomIndex = 0;
 
    // Function to open the zoom modal at a specific image
    function openZoomModal(unitId, index) {
        currentZoomUnit = unitId;
        currentZoomIndex = index;
       
        updateZoomImage();
 
        // Show the modal
        var myModal = new bootstrap.Modal(document.getElementById('imageZoomModal'));
        myModal.show();
    }
 
    // Function to move left/right in the zoom modal
    function zoomMoveSlide(direction) {
        const images = unitImages[currentZoomUnit];
        if (!images) return;
 
        currentZoomIndex += direction;
 
        // Loop around if at the end
        if (currentZoomIndex >= images.length) currentZoomIndex = 0;
        if (currentZoomIndex < 0) currentZoomIndex = images.length - 1;
 
        updateZoomImage();
    }
 
    // Function to update the image and counter in the zoom modal
    function updateZoomImage() {
        const images = unitImages[currentZoomUnit];
       
        // Update Image
        document.getElementById('zoomImgSrc').src = images[currentZoomIndex];
       
        // Update Counter
        document.getElementById('zoomCounter').innerText = `${currentZoomIndex + 1} / ${images.length}`;
    }
</script>
 
<?php require_once 'includes/footer.php'; ?>
<div class="section-tittle text-center fade-in-on-scroll">
    <div class="section-title__tagline-box">
        <div class="section-title__tagline-shape">
            <img src="assets/images/shapes/section-title-tagline-shape.png" alt="">
        </div>
        <span class="section-title__tagline">Pioneers in UV Technology</span>
    </div>
    <h2 class="section-title__title">UV Products</h2>
</div>

<div class="products-section-container">

    <div class="products-grid">

        <?php
        $products = [
            [
                'name' => 'UV222 Step-On',
                'desc' => 'The UV222 Step-On is a compact, touch-free Far-UVC unit designed to reduce contamination risks from cleanroom footwear. Installed at critical entry and exit points, it provides rapid decontamination of shoe soles—eliminating microbes in areas that sticky mats and wipes often miss. ',
                'img' => 'assets/images/products/Untitled-desig-(16).png',
            ],
            [
                'name' => 'UV222',
                'desc' => 'The UV222 lamp offers a safe and effective solution for improving air and surface decontamination in various environments. It enhances indoor air quality by significantly reducing pathogens and is engineered to be safe for human presence during operation, providing a reliable option for maintaining stringent cleanliness standards across multiple facilities.',
                'img' => 'assets/images/products/UV222-Standard-Lamp.png',
            ],
            [
                'name' => 'UV222 Downlight',
                'desc' => 'Designed for effective overhead Far-UVC decontamination, the UV222 Downlight ensures clean air and surfaces in various settings. It fits seamlessly into different environments without affecting people present.',
                'img' => 'assets/images/products/Uv222-Downlight-Website.png',
            ],
            [
                'name' => 'UV222 Cleanroom Downlight',
                'desc' => 'The UV222 Cleanroom Downlight is specially designed for cleanroom environments to effectively minimize microbial contamination risks. It integrates seamlessly into cleanroom ceilings, providing continuous, chemical-free surface and air decontamination using advanced Far-UVC technology.',
                'img' => 'assets/images/products/Uv222-Downlight.png',
            ],
            [
                'name' => 'UV222 Pendant',
                'desc' => 'The UV222 Pendant is a ceiling-mounted disinfection unit engineered specifically for environments like these. It uses Far-UVC 222 nm light, a scientifically validated and completely invisible wavelength that continuously inactivates airborne and surface pathogens — safely and effectively, even in occupied spaces.',
                'img' => 'assets/images/products/Uv222-Pendant-Light.png',
            ],
            [
                'name' => 'UV222 Booth',
                'desc' => 'The UV222 Booth from UV Medico is the only available solution that decontaminates gowned operators before entering the cleanroom',
                'img' => 'assets/images/products/UvBooth222.png',
            ],
            [
                'name' => 'Vertex 222',
                'desc' => 'The Vertex 222 is a state-of-the-art sanitation solution for optimal room coverage. With its 222 nm Krypton Chloride Excimer Lamp, this versatile device can be installed in corners, ensuring comprehensive decontamination.',
                'img' => 'assets/images/products/vertex222.png',
            ]
        ];


        foreach ($products as $product):
            $productUrl = 'parts/home/product-details.php?product=' . urlencode($product['name']);
        ?>
            <a href="<?= $productUrl ?>" class="product-card-link">
                <div class="product-card fade-in-on-scroll">
                    <img src="<?= $product['img'] ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                    <h3><?= htmlspecialchars($product['name']) ?></h3>
                    <p><?= htmlspecialchars($product['desc']) ?></p>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    obs.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        });

        document.querySelectorAll('.fade-in-on-scroll').forEach(el => {
            observer.observe(el);
        });
    });
</script>
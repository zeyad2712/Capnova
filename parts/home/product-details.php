<?php
$products = [
    'UV222 Step-On' => [
        'name' => 'UV222 Step-On',
        'desc1' => '- The UV222 Step-On is a compact, touch-free Far-UVC unit designed to reduce contamination risks from cleanroom footwear. Installed at critical entry and exit points, it provides rapid decontamination of shoe soles—eliminating microbes in areas that sticky mats and wipes often miss. ',
        'desc2' => '- Designed for seamless floor integration, the UV222 Step-On activates automatically when a user steps on it. In less than 15 seconds, it delivers a powerful dose of 222 nm light, neutralizing pathogens without chemicals or physical contact—supporting cleanroom hygiene from the ground up.',
        'img' => 'uv/assets/images/products/Untitled-desig-(16).png',
        'features' => 'Key Features and Benefits:',
        'featuresList' => [
            'Rapid disinfection of footwear in under 15 seconds',
            'Touchless activation for hygienic, hands-free use',
            'Chemical-free operation with no residues or waste',
            'Flush-mounted design for easy floor integration',
            'IP66-rated housing in 316 stainless steel for washdown compatibility',
            'Built-in IoT connectivity for system monitoring and performance tracking'
        ]
    ],
    'UV222' => [
        'name' => 'UV222',
        'desc1' => '- The UV222 lamp offers a safe and effective solution for improving air and surface decontamination in various environments. It enhances indoor air quality by significantly reducing pathogens and is engineered to be safe for human presence during operation, providing a reliable option for maintaining stringent cleanliness standards across multiple facilities.',
        'desc2' => '- UV222 harnesses this game-changing technology, offering a highly effective solution for surface and air disinfection. It can be used in all spaces and is safe to use in the presence of people, making it an essential tool to prevent the spread of existing and emerging viruses and other potential infections.',
        'img' => 'uv/assets/images/products/UV222-Standard-Lamp.png',
        'features' => '',
        'featuresList' => []
    ],
    'UV222 Downlight' => [
        'name' => 'UV222 Downlight',
        'desc1' => '- Designed for effective overhead Far-UVC decontamination, the UV222 Downlight ensures clean air and surfaces in various settings. It fits seamlessly into different environments without affecting people present.',
        'img' => 'uv/assets/images/products/Uv222-Downlight-Website.png',
        'features' => 'Decontamination easily integrated',
        'featuresList' => [
            'Children and young adults are among the most vulnerable, being particularly affected by the COVID-19 pandemic, during which over 90% of schools worldwide were fully or partially closed. Many organisations have pointed out the high risk of intergenerational inequality, and the need to find new solution to prevent this in the future.'
        ]
    ],
    'UV222 Cleanroom Downlight' => [
        'name' => 'UV222 Cleanroom Downlight',
        'desc1' => '- The UV222 Cleanroom Downlight is specially designed for cleanroom environments to effectively minimize microbial contamination risks. It integrates seamlessly into cleanroom ceilings, providing continuous, chemical-free surface and air decontamination using advanced Far-UVC technology.',
        'desc2' => '- Engineered to meet strict cleanroom standards up to Class A/B (ISO 5), the UV222 Cleanroom Downlight ensures optimal compatibility across all cleanroom zones—from CNC areas to highly controlled sterile environments.',
        'img' => 'uv/assets/images/products/Uv222-Downlight.png',
        'features' => 'Key Features:',
        'featuresList' => [
            'Far-UVC Technology (222 nm): Safe and effective microbial decontamination without harmful side effects or chemical residues.',
            'Programmable Operation: Offers various operational modes, including continuous operation, duty cycles, and motion-activated functionality for flexibility and energy efficiency.',
            'Active Dehumidification: Integrated solid-state electrolytic dehumidification effectively prevents internal corrosion, ensuring long-term durability and reliability.',
            'Primary Seal Compliance: Inspectable and replaceable primary seal, recommended for replacement every five years, ensuring long-term compliance and reliability.',
            'Seamless Integration: Flush-mounted installation compatible with various ceiling panel types, maintaining cleanroom aesthetics and airflow dynamics.',
            'Robust IP65 Certification: Dust-tight and protected against powerful water jets, ensuring safe and reliable operation even under rigorous cleaning and sterilization conditions.'
        ]
    ],
    'UV222 Pendant' => [
        'name' => 'UV222 Pendant',
        'desc1' => '- The UV222 Pendant is a ceiling-mounted disinfection unit engineered specifically for environments like these. It uses Far-UVC 222 nm light, a scientifically validated and completely invisible wavelength that continuously inactivates airborne and surface pathogens — safely and effectively, even in occupied spaces.',
        'desc2' => '- Unlike traditional UV technologies, Far-UVC at 222 nm does not penetrate the outer layer of human skin or eyes, making it safe for use around people while still being lethal to viruses and bacteria. The UV222 Pendant provides non-stop, automatic disinfection with no chemicals, no downtime, and no visible light, making it an ideal fit for sensitive and high-visibility airport zones.',
        'img' => 'uv/assets/images/products/Uv222-Pendant-Light.png',
    ],
    'UV222 Booth' => [
        'name' => 'UV222 Booth',
        'desc1' => '- The UV222 Booth from UV Medico is the only available solution that decontaminates gowned operators before entering the cleanroom',
        'desc2' => '- Using filtered Far-UVC, which is safe for use in occupied spaces, the UV222 Booth offers operator disinfection in under 30 seconds and an advanced touchless operation interface with built-in safety parameters. The UV222 Booth is a revolutionary addition to current contamination control measures in cleanrooms. It eliminates any residual microorganisms present on protective equipment*, ensuring a higher grade of cleanliness and a lower risk of product contamination.',
        'img' => 'uv/assets/images/products/UvBooth222.png',
    ],
    'Vertex 222' => [
        'name' => 'Vertex 222',
        'desc1' => '- The Vertex 222 is a state-of-the-art sanitation solution for optimal room coverage. With its 222 nm Krypton Chloride Excimer Lamp, this versatile device can be installed in corners, ensuring comprehensive decontamination.',
        'desc2' => '- The Vertex 222 model is designed to be either fixed or portable, making it easy to position in key locations within the desired area. The lamps utilize strategically positioned light sources to ensure uniform distribution of decontaminating Far-UVC light. Used independently in corner locations or in combination with other UV222 solutions from UV Medico, the Vertex 222 provides a comprehensive approach to creating safer and healthier environments.',
        'img' => 'uv/assets/images/products/vertex222.png',
        'features' => 'Key Features:',
        'featuresList' => [
            'Optimal Wavelength: Utilizes 222 nm light for effective sanitization.',
            'Flexible Installation: Designed for corners, maximizing room coverage.',
            'Customizable Operation: Features continuous, duty cycle, and motion sensor modes.',
            'Durable and Efficient: IP65 rated with minimal power consumption.'
        ]
    ]
];

$productKey = isset($_GET['product']) ? $_GET['product'] : '';
$product = isset($products[$productKey]) ? $products[$productKey] : null;
?>




<div class="product-details-container">
    <?php if ($product): ?>
        <div class="product-details-card fade-in-on-scroll">
            <img src="/<?= $product['img'] ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="product-details-img">
            <div class="product-details-info">
                <h1><?= htmlspecialchars($product['name']) ?></h1>
                <p><?= htmlspecialchars($product['desc1']) ?></p>
                <?php if (isset($product['desc2'])): ?>
                    <p><?= htmlspecialchars($product['desc2']) ?></p>
                <?php endif; ?>
                <?php if (isset($product['features'])): ?>
                    <h2><?= htmlspecialchars($product['features']) ?></h2>
                <?php endif; ?>
                <ul>
                    <?php if (isset($product['featuresList'])): ?>
                        <?php foreach ($product['featuresList'] as $feature): ?>
                            <li><?= htmlspecialchars($feature) ?></li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
                <a href="javascript:history.back()" class="thm-btn" style="margin-top:24px;display:inline-block;">Back to
                    Products</a>
            </div>
        </div>
    <?php else: ?>
        <div class="product-details-card fade-in-on-scroll">
            <h2>Product Not Found</h2>
            <p>The product you are looking for does not exist.</p>
            <a href="javascript:history.back()" class="thm-btn" style="margin-top:24px;display:inline-block;">Back to
                Products</a>
        </div>
    <?php endif; ?>
</div>

<style>
    /* Responsive styles */
    @media (max-width: 900px) {
        .product-details-card {
            flex-direction: column;
            width: 98%;
            padding: 18px;
            gap: 18px;
        }

        .product-details-img {
            width: 100%;
            max-width: 320px;
            margin: 0 auto 18px auto;
        }

        .product-details-info {
            width: 100%;
        }

        .product-details-container {
            padding: 18px 0;
        }
    }

    @media (max-width: 500px) {


        .product-details-card {
            padding: 8px;
        }

        .product-details-info h1 {
            font-size: 1.3rem;
        }

        .product-details-info p,
        .product-details-info ul,
        .product-details-info li {
            font-size: 1rem;
        }
    }

    * {
        font-family: "DM Sans", sans-serif;
        /* font-size: 16px; */
        line-height: 28px;
        font-weight: 600;
        /* color: var(--zefxa-gray); */

    }

    .product-details-container {
        width: 100%;
        min-height: 90vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 32px 0;
        box-sizing: border-box;
    }

    .product-details-card {
        display: flex;
        flex-direction: row;
        width: 80%;
        flex-wrap: wrap;
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 2px 16px rgba(0, 0, 0, 0.4);
        padding: 32px;
        align-items: center;
        gap: 32px;
        transition: all 0.25s ease-in-out 0s;
        animation: fadeIn 0.5s ease-in-out forwards;
    }

    .product-details-img {
        width: 280px;
        max-width: 100%;
        border-radius: 10px;
        background: #f4f5f8;
        padding: 16px;
        box-shadow: 0 1px 8px rgba(33, 150, 243, 0.07);
        /* filter: brightness(0.9); */
        transition: all 0.25s ease-in-out 0s;
    }

    

    /* .product-details-card:hover .product-details-img {
        filter: brightness(1);
    } */

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .product-details-info {
        flex: 1 1 300px;
    }

    .product-details-info h1 {
        font-size: 2rem;
        margin-bottom: 18px;
    }

    .product-details-info p {
        font-size: 1.1rem;
        color: #444;
    }

    .product-details-card .thm-btn {
        background-color: #ff5800;
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        padding: 20px 30px;
        border: none;
        border-radius: 10px;
        transition: all 0.25s ease-in-out 0s;
    }

    .product-details-card .thm-btn:hover {
        background-color: #e04d00;
    }
</style>
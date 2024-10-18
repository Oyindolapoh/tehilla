 <style>
        /* Button Container */
        .whatsapp-button {
            display: flex;
            align-items: center;
            background-color: white;
            padding: 10px;
            border-radius: 50px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: #333;
            text-decoration: none;
            position: fixed; /* Make it stay visible */
            bottom: 20px; /* Distance from the bottom of the screen */
            right: 20px; /* Distance from the right side of the screen */
            z-index: 1000; /* Ensure it stays above other content */
        }

        /* WhatsApp Icon */
        .whatsapp-icon {
            background-color: #25D366;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
        }

        /* WhatsApp Icon Image */
        .whatsapp-icon img {
            width: 20px;
            height: 20px;
        }

        /* Text */
        .whatsapp-text {
            color: #333;
            font-weight: bold;
        }
    </style>
   <style>
        /* Popup Container */
        .popup {
            position: fixed;
            bottom: 20px;
            left: 20px;
            width: 300px;
            padding: 20px;
            background-color: white;
            border-radius: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            z-index: 1000;
        }

        /* Product Info */
        .product-info {
            margin-left: 15px;
        }

        /* Product Title */
        .product-title {
            font-size: 18px;
            font-weight: bold;
            color: #2BB673; /* Match the green from the screenshot */
        }

        /* Product Description */
        .product-description {
            color: #555;
            font-size: 14px;
        }

        /* Image styling */
        .product-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Close button */
        .close-btn {
            position: absolute;
            right: 15px;
            top: 10px;
            cursor: pointer;
        }

    </style>
</head>
<body>

    <!-- Product Popup Container -->
    <div class="popup" id="product-popup">
        <img id="product-img" src="assets/img/i-1.png" alt="Product" class="product-image">
        <div class="product-info">
            <div class="product-title" id="product-title">WRAP TOP 2.0</div>
            <div class="product-description" id="product-description">210 people seeing this product right now</div>
        </div>
        <span class="close-btn" onclick="closePopup()">&#10005;</span>
    </div>

    <!-- JavaScript to switch products -->
    <script>
        let currentIndex = 0;

        const products = [
            {
                title: "WRAP TOP 2.0",
                description: "210 people seeing this product right now",
                img: "assets/img/i-1.png"
            },
            {
                title: "MIAMI DRESS",
                description: "150 people seeing this product right now",
                img: "assets/img/i-2.png"
            },
            {
                title: "ANKARA GOWN",
                description: "350 people seeing this product right now",
                img: "assets/img/i-3.png"
            },
            {
                title: "AFRICAN PRINT SKIRT",
                description: "180 people seeing this product right now",
                img: "assets/img/i-4.png"
            },
            {
                title: "KENTE WRAP DRESS",
                description: "220 people seeing this product right now",
                img: "assets/img/i-5.png"
            }
        ];

        // Function to switch the product every 10 seconds
        function switchProduct() {
            const product = products[currentIndex];
            document.getElementById("product-title").textContent = product.title;
            document.getElementById("product-description").textContent = product.description;
            document.getElementById("product-img").src = product.img;

            currentIndex = (currentIndex + 1) % products.length; // Cycle through products
        }

        // Close button function
        function closePopup() {
            document.getElementById("product-popup").style.display = 'none';
        }

        // Set interval to change the product every 10 seconds
        setInterval(switchProduct, 10000);
    </script>

    <!-- WhatsApp Chat Button -->
    <a href="https://wa.me/2348024687032" target="_blank" class="whatsapp-button">
        <div class="whatsapp-icon">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
        </div>
        <span class="whatsapp-text">Chat with us</span>
    </a>


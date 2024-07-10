<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ohm Ordering System</title>
    <style>
        :root {
            --primary-color: #bb86fc;
            --background-color: #121212;
            --surface-color: #1f1f1f;
            --on-surface-color: #e0e0e0;
            --on-background-color: #b0b0b0;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--background-color);
            color: var(--on-surface-color);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: var(--on-surface-color);
            transition: color 0.3s ease;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        a:hover {
            color: var(--primary-color);
        }

        .header-wrapper {
            background-color: #1f1f1f;
            border-bottom: 1px solid #333;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .header-logo {
            font-size: 24px;
            font-weight: bold;
            color: #e0e0e0;
        }

        .header-top ul {
            display: flex;
            gap: 20px;
        }

        .header-top ul li {
            display: inline;
        }

        .header-top ul li a {
            font-size: 16px;
            color: #e0e0e0;
            padding: 5px 10px;
            transition: color 0.3s;
        }

        .header-top ul li a:hover {
            color: #bb86fc;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
        }

        .form-container, .cart-container {
            background-color: var(--surface-color);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            max-width: 800px;
            width: 100%;
            margin-bottom: 20px;
            margin-right: 10px;
        }

        h1, h2 {
            margin-bottom: 30px;
            color: var(--primary-color);
            text-align: center;
        }

        .form-section {
            background-color: rgba(255,255,255,0.05);
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .form-section:hover {
            transform: translateY(-5px);
        }

        .card__heading {
            font-size: 20px;
            margin-bottom: 15px;
            color: var(--primary-color);
        }

        .card__text {
            margin-bottom: 15px;
            color: var(--on-background-color);
        }

        .card__radio {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        input[type="radio"] {
            display: none;
        }

        label {
            padding: 10px 15px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        input[type="radio"]:checked + label {
            background-color: var(--primary-color);
            color: var(--background-color);
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: rgba(255,255,255,0.1);
            color: var(--on-surface-color);
        }

        .form__buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        input[type="submit"],
        input[type="reset"],
        button {
            padding: 12px 25px;
            background-color: var(--primary-color);
            border: none;
            border-radius: 25px;
            color: var(--background-color);
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover,
        button:hover {
            background-color: #9d65e5;
            transform: scale(1.05);
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: rgba(255,255,255,0.05);
            margin-bottom: 10px;
            border-radius: 8px;
        }

        .cart-item button {
            margin-left: 10px;
        }

        .price-info {
            margin-top: 15px;
            font-size: 18px;
            color: var(--on-background-color);
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: var(--surface-color);
            color: var(--on-background-color);
        }

        @media (min-width: 768px) {
            .container {
                flex-direction: row;
                justify-content: space-around;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <div class="header-wrapper">
        <div class="header-top">
        <div class="header-logo">Ohm Cooperations | Hello, Customer.</div>
            <ul>
                <li><a href="customer-tracker.php">Delivery</a></li>
                <li><a href="customer-cart.php">Cart</a></li>
                <li><a href="customer-profile.html">Profile</a></li>
                <li><a href="index.html">Log Out</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="form-container">
            <h1>Custom T-Shirt Order Form</h1>
            <form id="orderForm">
                <div class="form-section">
                    <div class="card__heading">1. Choose Your Size</div>
                    <div class="card__text">Select the size that fits you best.</div>
                    <div class="card__radio">
                        <input type="radio" id="size-s" name="shirt-size" value="S" required>
                        <label for="size-s">S</label>
                        <input type="radio" id="size-m" name="shirt-size" value="M">
                        <label for="size-m">M</label>
                        <input type="radio" id="size-l" name="shirt-size" value="L">
                        <label for="size-l">L</label>
                        <input type="radio" id="size-xl" name="shirt-size" value="XL">
                        <label for="size-xl">XL</label>
                        <input type="radio" id="size-2xl" name="shirt-size" value="2XL">
                        <label for="size-2xl">2XL</label>
                        <input type="radio" id="size-3xl" name="shirt-size" value="3XL">
                        <label for="size-3xl">3XL</label>
                        <input type="radio" id="size-4xl" name="shirt-size" value="4XL">
                        <label for="size-4xl">4XL</label>
                    </div>
                </div>

                <div class="form-section">
                    <div class="card__heading">2. Select Sleeve Type</div>
                    <div class="card__text">Choose between short or long sleeves.</div>
                    <div class="card__radio">
                        <input type="radio" id="sleeve-short" name="sleeve-type" value="Short Sleeve" required>
                        <label for="sleeve-short">Short Sleeve</label>
                        <input type="radio" id="sleeve-long" name="sleeve-type" value="Long Sleeve">
                        <label for="sleeve-long">Long Sleeve</label>
                    </div>
                </div>

                <div class="form-section">
                    <div class="card__heading">3. Collar Option</div>
                    <div class="card__text">Decide if you want a collar on your shirt.</div>
                    <div class="card__radio">
                        <input type="radio" id="collar-no" name="collar-type" value="No Collar" required>
                        <label for="collar-no">No Collar</label>
                        <input type="radio" id="collar-yes" name="collar-type" value="With Collar">
                        <label for="collar-yes">With Collar</label>
                    </div>
                </div>

                <div class="form-section">
                    <div class="card__heading">4. Quantity</div>
                    <div class="card__text">How many shirts would you like to order?</div>
                    <div class="card__radio">
                        <input type="number" id="shirt-quan" name="shirt-quantity" min="1" value="1" required>
                    </div>
                </div>

                <div class="price-info" id="priceInfo">Base Price: $0.00</div>

                <div class="form__buttons">
                    <input type="submit" value="Add To Cart">
                    <input type="reset" value="Reset">
                </div>
            </form>
            <h2>Ready to complete your order? Add to cart!</h2>
        </div>

        <div class="cart-container">
            <h1>Your Shopping Cart</h1>
            <div id="cartItems"></div>
            <div class="price-info" id="totalPrice">Total Price: $0.00</div>
            <button id="checkoutButton" onclick="checkout()">Proceed to Checkout</button>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Ohm Ordering System. All rights reserved.</p>
    </div>

    <script>
        const prices = {
            sizes: {
                'S': 10,
                'M': 12,
                'L': 14,
                'XL': 16,
                '2XL': 18,
                '3XL': 20,
                '4XL': 22
            },
            sleeves: {
                'Short Sleeve': 5,
                'Long Sleeve': 7
            },
            collars: {
                'No Collar': 0,
                'With Collar': 3
            }
        };

        const priceInfo = document.getElementById('priceInfo');
        const totalPriceElement = document.getElementById('totalPrice');
        let totalPrice = 0;

        document.querySelectorAll('input[name="shirt-size"], input[name="sleeve-type"], input[name="collar-type"]').forEach(input => {
            input.addEventListener('change', updateBasePrice);
        });

        document.getElementById('orderForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const size = document.querySelector('input[name="shirt-size"]:checked').value;
            const sleeve = document.querySelector('input[name="sleeve-type"]:checked').value;
            const collar = document.querySelector('input[name="collar-type"]:checked').value;
            const quantity = document.getElementById('shirt-quan').value;

            addToCart(size, sleeve, collar, quantity);
            this.reset();
            updateBasePrice();
        });

        function updateBasePrice() {
            const size = document.querySelector('input[name="shirt-size"]:checked');
            const sleeve = document.querySelector('input[name="sleeve-type"]:checked');
            const collar = document.querySelector('input[name="collar-type"]:checked');

            const sizePrice = size ? prices.sizes[size.value] : 0;
            const sleevePrice = sleeve ? prices.sleeves[sleeve.value] : 0;
            const collarPrice = collar ? prices.collars[collar.value] : 0;

            const basePrice = sizePrice + sleevePrice + collarPrice;
            priceInfo.textContent = `Base Price: $${basePrice.toFixed(2)}`;
        }

        function addToCart(size, sleeve, collar, quantity) {
            const sizePrice = prices.sizes[size];
            const sleevePrice = prices.sleeves[sleeve];
            const collarPrice = prices.collars[collar];
            const itemPrice = (sizePrice + sleevePrice + collarPrice) * quantity;

            const cartItems = document.getElementById('cartItems');
            const cartItem = document.createElement('div');
            cartItem.className = 'cart-item';

            cartItem.innerHTML = `
                <span>${quantity} x T-Shirt (Size: ${size}, Sleeve: ${sleeve}, Collar: ${collar}) - $${itemPrice.toFixed(2)}</span>
                <button onclick="removeCartItem(this, ${itemPrice})">Remove</button>
            `;

            cartItems.appendChild(cartItem);

            totalPrice += itemPrice;
            updateTotalPrice();
        }

        function removeCartItem(button, itemPrice) {
            button.parentElement.remove();
            totalPrice -= itemPrice;
            updateTotalPrice();
        }

        function updateTotalPrice() {
            totalPriceElement.textContent = `Total Price: $${totalPrice.toFixed(2)}`;
        }

        function checkout() {
            const cartItems = document.getElementById('cartItems').children;
            if (cartItems.length === 0) {
                alert('Your cart is empty!');
                return;
            }

            let summary = 'Your order summary:\n';
            for (let item of cartItems) {
                summary += item.children[0].innerText + '\n';
            }

            summary += `Total Price: $${totalPrice.toFixed(2)}`;
            alert(summary + '\nThank you for your purchase!');
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Banking - Money Withdrawal</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .payment-method-options {
            display: flex;
            align-items: center;
        }

        .payment-method-option {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        .payment-method-image {
            width: 80px;
            height: 65px;
            margin-right: 10px;
        }

        .payment-method-image.selected {
            border: 3px solid black;
            width: 80px;
            height: 65px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Money Withdrawal</h1>
        <form>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" class="form-control" id="amount" placeholder="Enter withdrawal amount" required>
            </div>
            <div class="form-group">
                <label for="account">Account:</label>
                <select class="form-control" id="account" required>
                    <option value="checking">Checking Account</option>
                    <option value="savings">Savings Account</option>
                </select>
            </div>
            <div class="form-group">
                <label for="paymentMethod">Payment Method:</label>
                <div class="payment-method-options">
                    <div class="payment-method-option">
                        <img src="./images/payment_methood/visa_img.png" alt="visa" class="payment-method-image" onclick="selectPaymentMethod(this)">
                        
                    </div>
                    <div class="payment-method-option">
                        <img src="./images/payment_methood/paypal_img.png" alt="PayPal" class="payment-method-image" onclick="selectPaymentMethod(this)">
                        
                    </div>
                    <div class="payment-method-option">
                        <img src="./images/payment_methood/mastercard_img.png" alt="master card" class="payment-method-image" onclick="selectPaymentMethod(this)">
                      
                    </div>
                    <div class="payment-method-option">
                        <img src="./images/payment_methood/american_express_img.png" alt="american express" class="payment-method-image" onclick="selectPaymentMethod(this)">
                       
                    </div>
                    <!-- Add more payment options as needed -->
                </div>
            </div>
            <div class="form-group">
                <label for="paymentDetails">Payment Details:</label>
                <input type="text" class="form-control" id="paymentDetails" placeholder="Enter payment details" required>
            </div>
            <!-- Add more payment details fields as needed for different payment methods -->
            <div class="form-group">
                <label for="securityCode">Security Code:</label>
                <input type="text" class="form-control" id="securityCode" placeholder="Enter security code" required>
            </div>
            <button type="submit" class="btn btn-primary">Withdraw</button>
        </form>
        <div id="status" class="mt-3"></div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function selectPaymentMethod(imageElement) {
            var paymentMethodImages = document.querySelectorAll('.payment-method-image');
            paymentMethodImages.forEach(function (image) {
                image.classList.remove('selected');
            });
            imageElement.classList.add('selected');
        }

        // Payment gateway integration logic
    </script>
</body>
</html>

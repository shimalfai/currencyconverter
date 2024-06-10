<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="converter">
        <h1>Currency Converter</h1>
        <form id="converter-form">
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" required>
            
            <label for="from_currency">From:</label>
            <select id="from_currency" name="from_currency">
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="GBP">GBP</option>
                <!-- Add more currencies as needed -->
            </select>

            <label for="to_currency">To:</label>
            <select id="to_currency" name="to_currency">
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="GBP">GBP</option>
                <option value="MVR">MVR</option>

                <!-- Add more currencies as needed -->
            </select>

            <button type="button" onclick="convertCurrency()">Convert</button>
        </form>
        <div id="result"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>

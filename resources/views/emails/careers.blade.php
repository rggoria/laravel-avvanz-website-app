<!DOCTYPE html>
<html>
<head>
    <title>General Inquiry Form Submission</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 40px;
            text-align: center;
        }
        .container {
            max-width: 500px;
            background: #ffffff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            display: inline-block;
            text-align: left;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            margin: 10px 0;
        }
        strong {
            color: #333;
        }
        footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
            text-align: center;
            background-color: #eaf1ee;
            padding: 10px;
        }
        .logo {
            width: 150px;
            height: 50px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div style="text-align: center">
            <img src="https://www.avvanz.com/wp-content/uploads/2021/07/avvanz.webp" alt="Logo" class="logo">
        </div>
        <h1>Avvanz Careers Form Submission</h1>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Contact No.:</strong> {{ $data['contact'] }}</p>
        <p><strong>Country:</strong> {{ $data['country'] }}</p>
        <p><strong>Work Experience:</strong>  {{ $data['experience'] }}</p>
        <p><strong>Work Position:</strong>  {{ $data['position'] }}</p>
        <br>
        <div style="padding-top: 5px;">
            <p>Please do not reply to this email as it is automatically generated.</p>
            <p>Thank you for your inquiry!. We are here to assist you every step of the way!</p>
        </div>
        <footer>
            <p>
                Best regards,<br>
                IT Team
            </p>
        </footer>
    </div>
</body>
</html>

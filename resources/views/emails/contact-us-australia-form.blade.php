<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f4f4f4;">
    <div style="max-width: 600px; margin: auto; background: #ffffff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center">
            Contact Form Submission Confirmation
        </h1>
        <p>
            Here is the information you submitted:
        </p>
        <br>
        <p><strong>Role in the company:</strong> {{ $data['role'] }}</p>
        <p><strong>Company Size:</strong> {{ $data['companySize'] }}</p>
        <p><strong>Primary Need:</strong> {{ $data['primaryNeed'] }}</p>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone Number:</strong> {{ $data['phone'] }}</p>
        <p><strong>Company Name:</strong> {{ $data['companyName'] }}</p>
        <br>
        <p>
            If you experience any issues or have questions, please feel free to reach out to us. We look forward to supporting you in your leadership training journey!
        </p>
        <br>
        <p>Warm regards,</p>
        <p><strong>Avvanz IT Team</strong></p>
        <img src="https://www.avvanz.com/wp-content/uploads/2021/07/avvanz.webp" alt="Logo" style="width: 200px; height: auto;">
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <h1>Contact Form Submission</h1>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Company Name:</strong> {{ $data['cname'] }}</p>
    <p><strong>Company Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Company Contact No:</strong> {{ $data['contact'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
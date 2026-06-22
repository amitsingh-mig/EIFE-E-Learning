<!DOCTYPE html>
<html>
<head>
    <title>Welcome to EIFE E-Learning Portal</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2>Hello {{ $user->name }},</h2>
    
    <p>Welcome to EIFE E-Learning Portal.</p>
    
    <p>Your account has been created successfully.</p>
    
    <p>You can now:</p>
    <ul>
        <li>Browse courses</li>
        <li>Enroll in exchange programs</li>
        <li>Track learning progress</li>
        <li>Participate in discussions</li>
    </ul>
    
    <p>
        <a href="{{ route('dashboard') }}" style="display: inline-block; padding: 10px 20px; background-color: #0056b3; color: #fff; text-decoration: none; border-radius: 5px;">Login Here</a>
    </p>
    
    <p>Regards,<br>EIFE Learning Team</p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Course Enrollment Confirmation</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2>Hello {{ $student_name }},</h2>
    
    <p>You have successfully enrolled in:</p>
    
    <p>
        <strong>Course:</strong> {{ $course_name }}<br>
        <strong>University:</strong> {{ $university_name }}
    </p>
    
    <p>You can access your course from:</p>
    
    <p>
        <a href="{{ route('dashboard') }}" style="display: inline-block; padding: 10px 20px; background-color: #28a745; color: #fff; text-decoration: none; border-radius: 5px;">My Learning Dashboard</a>
    </p>
    
    <p>Happy Learning!</p>
    
    <p>EIFE Learning Team</p>
</body>
</html>

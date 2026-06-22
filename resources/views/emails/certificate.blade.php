<!DOCTYPE html>
<html>
<head>
    <title>Congratulations! Course Completed</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2>Congratulations, {{ $details['student_name'] }}!</h2>
    
    <p>You have successfully completed 100% of the course:</p>
    
    <p>
        <strong>Course:</strong> {{ $details['course_name'] }}<br>
        <strong>University:</strong> {{ $details['university_name'] }}<br>
        <strong>Completion Date:</strong> {{ $details['completion_date'] }}
    </p>
    
    <p>We have attached your official certificate of completion (ID: {{ $details['certificate_id'] }}) to this email. You can also download it anytime from your student dashboard.</p>
    
    <p>We wish you the best in your future endeavors!</p>
    
    <p>Regards,<br>EIFE Learning Team</p>
</body>
</html>

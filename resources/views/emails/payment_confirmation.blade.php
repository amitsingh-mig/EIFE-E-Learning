<!DOCTYPE html>
<html>
<head>
    <title>Payment Successful</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2>Payment Successful</h2>
    
    <p>Dear {{ $details['student_name'] }},</p>
    
    <p>We have successfully received your payment for the following course:</p>
    
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;"><strong>Course Name:</strong></td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $details['course_name'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;"><strong>Amount Paid:</strong></td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $details['amount'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;"><strong>Invoice Number:</strong></td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $details['invoice_number'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;"><strong>Transaction Date:</strong></td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $details['transaction_date'] }}</td>
        </tr>
    </table>
    
    <p>Thank you for choosing EIFE. You can view your invoice and access your course from the dashboard.</p>
    
    <p>Regards,<br>EIFE Learning Team</p>
</body>
</html>

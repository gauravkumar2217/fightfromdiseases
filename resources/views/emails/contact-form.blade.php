<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #0a4d78 0%, #0a5a8a 100%);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 0 0 8px 8px;
        }
        .info-box {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 5px;
            border-left: 4px solid #0a4d78;
        }
        .label {
            font-weight: bold;
            color: #0a4d78;
            display: inline-block;
            min-width: 100px;
        }
        .message-box {
            background: white;
            padding: 20px;
            border-radius: 5px;
            border-left: 4px solid #0a4d78;
            margin-top: 15px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Contact Form Submission</h1>
        <p>You have received a new message from your website</p>
    </div>
    
    <div class="content">
        <div class="info-box">
            <p><span class="label">Name:</span> {{ $contact->name }}</p>
            <p><span class="label">Email:</span> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
            @if($contact->phone)
            <p><span class="label">Phone:</span> <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></p>
            @endif
            <p><span class="label">Subject:</span> {{ $contact->subject }}</p>
        </div>
        
        <div class="message-box">
            <p><span class="label">Message:</span></p>
            <p style="white-space: pre-wrap; margin-top: 10px;">{{ $contact->message }}</p>
        </div>
        
        <div class="footer">
            <p>This email was sent from the contact form on {{ config('app.name') }}</p>
            <p>Submitted on: {{ $contact->created_at->format('F j, Y \a\t g:i A') }}</p>
        </div>
    </div>
</body>
</html>


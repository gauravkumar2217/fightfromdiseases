<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Medical Tourism Inquiry</title>
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
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 30px;
            border: 1px solid #e0e0e0;
        }
        .field {
            margin-bottom: 20px;
            padding: 15px;
            background: white;
            border-left: 4px solid #0a4d78;
            border-radius: 4px;
        }
        .field-label {
            font-weight: bold;
            color: #0a4d78;
            margin-bottom: 5px;
            display: block;
        }
        .field-value {
            color: #333;
        }
        .footer {
            background: #0a4d78;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 0 0 10px 10px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Medical Tourism Inquiry</h1>
        <p>Fight From Diseases</p>
    </div>
    
    <div class="content">
        <p>You have received a new inquiry from your medical tourism website:</p>
        
        <div class="field">
            <span class="field-label">Name:</span>
            <span class="field-value">{{ $contact->name }}</span>
        </div>
        
        <div class="field">
            <span class="field-label">Email:</span>
            <span class="field-value">{{ $contact->email }}</span>
        </div>
        
        @if($contact->phone)
        <div class="field">
            <span class="field-label">Phone:</span>
            <span class="field-value">{{ $contact->phone }}</span>
        </div>
        @endif
        
        @if($contact->country)
        <div class="field">
            <span class="field-label">Country:</span>
            <span class="field-value">{{ $contact->country }}</span>
        </div>
        @endif
        
        @if($contact->treatment_interest)
        <div class="field">
            <span class="field-label">Treatment Interest:</span>
            <span class="field-value">{{ $contact->treatment_interest }}</span>
        </div>
        @endif
        
        <div class="field">
            <span class="field-label">Subject:</span>
            <span class="field-value">{{ $contact->subject }}</span>
        </div>
        
        <div class="field">
            <span class="field-label">Message:</span>
            <span class="field-value">{{ $contact->message }}</span>
        </div>
        
        <div class="field">
            <span class="field-label">Submitted At:</span>
            <span class="field-value">{{ $contact->created_at->format('F j, Y, g:i a') }}</span>
        </div>
    </div>
    
    <div class="footer">
        <p>This email was sent from Fight From Diseases Medical Tourism Website</p>
        <p>Please respond to the inquiry promptly to provide excellent patient care.</p>
    </div>
</body>
</html>


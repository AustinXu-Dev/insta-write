<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        h2 {
            color: #333333;
        }

        p {
            color: #666666;
            line-height: 1.6;
        }

        .button {
            display: inline-block;
            margin-top: 20px;
            background-color: #1a73e8;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #999999;
            text-align: center;
        }

        @media only screen and (max-width: 600px) {
            .email-container {
                padding: 20px;
            }

            .button {
                width: 100%;
                text-align: center;
                box-sizing: border-box;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>Reset Your Password</h2>
        <p>Hello {{ $user->name }},</p>
        <p>We received a request to reset your password. Click the button below to set a new password.</p>

        <a href="{{ $actionLink }}" target="_blank"class="button">Reset Password</a>
        <p>This link is valid for 15 minutes.</p>
        <p>If you didn't request a password reset, no action is required.</p>

        <div class="footer">
            &copy; {{ date('Y') }} InstaWrite. All rights reserved.
        </div>
    </div>
</body>
</html>

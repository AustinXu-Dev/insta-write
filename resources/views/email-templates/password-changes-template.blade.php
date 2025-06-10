<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      @media only screen and (max-width: 600px) {
        .container {
          width: 100% !important;
          padding: 20px !important;
        }
      }
    </style>
  </head>
  <body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f6f6f6;">
    <table width="100%" bgcolor="#f6f6f6" cellpadding="0" cellspacing="0">
      <tr>
        <td>
          <table class="container" align="center" width="600" cellpadding="20" cellspacing="0" bgcolor="#ffffff" style="margin: 20px auto; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <tr>
              <td align="center" style="font-size: 24px; font-weight: bold; color: #333;">
                Password Changed Successfully
              </td>
            </tr>
            <tr>
              <td style="font-size: 16px; color: #555;">
                Hello <strong>{{ $user->name }}</strong>,
                <br><br>
                Your password has been updated successfully. Please find your new login details below:
              </td>
            </tr>
            <tr>
              <td style="font-size: 16px; color: #333;">
                <strong>Email/Username:</strong> {{ $user->email }} or {{ $user->username }}<br>
                <strong>New Password:</strong> {{ $new_password }}
              </td>
            </tr>
            <tr>
              <td style="font-size: 14px; color: #999;">
                If you did not perform this action, please contact support immediately.
              </td>
            </tr>
            <tr>
              <td style="font-size: 14px; color: #555;">
                Thanks,<br>
                The Support Team
              </td>
            </tr>
            <tr>
              <td align="center" style="font-size: 12px; color: #999; padding-top: 30px;">
                &copy; {{ date('Y') }} InstaWrite. All rights reserved.
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>

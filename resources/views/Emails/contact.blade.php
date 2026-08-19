<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>New Project Enquiry</title>
</head>

<body style="margin:0; padding:0; background:#f5f5f7; font-family:Arial, Helvetica, sans-serif; color:#17121b;">

    <div style="max-width:680px; margin:40px auto; padding:0 20px;">

        <div style="background:#17121b; padding:28px 32px; border-radius:18px 18px 0 0;">

            <h1 style="margin:0; color:#ffffff; font-size:24px;">
                New Project Enquiry
            </h1>

            <p style="margin:8px 0 0; color:#c98bd0; font-size:14px;">
                Techcrossbreed Website
            </p>

        </div>


        <div style="background:#ffffff; padding:32px; border:1px solid #e5e7eb; border-top:0;">

            <p style="margin-top:0; font-size:16px; line-height:1.6;">
                A new project enquiry has been submitted through the
                Techcrossbreed website.
            </p>


            <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:25px; border-collapse:collapse;">

                <tr>
                    <td style="padding:12px 0; border-bottom:1px solid #eeeeee; font-weight:bold; width:35%;">
                        Full Name
                    </td>

                    <td style="padding:12px 0; border-bottom:1px solid #eeeeee;">
                        {{ $enquiry['name'] }}
                    </td>
                </tr>


                <tr>
                    <td style="padding:12px 0; border-bottom:1px solid #eeeeee; font-weight:bold;">
                        Email
                    </td>

                    <td style="padding:12px 0; border-bottom:1px solid #eeeeee;">
                        {{ $enquiry['email'] }}
                    </td>
                </tr>


                <tr>
                    <td style="padding:12px 0; border-bottom:1px solid #eeeeee; font-weight:bold;">
                        Company
                    </td>

                    <td style="padding:12px 0; border-bottom:1px solid #eeeeee;">
                        {{ $enquiry['company'] ?: 'Not provided' }}
                    </td>
                </tr>


                <tr>
                    <td style="padding:12px 0; border-bottom:1px solid #eeeeee; font-weight:bold;">
                        Service
                    </td>

                    <td style="padding:12px 0; border-bottom:1px solid #eeeeee;">
                        {{ $enquiry['service'] }}
                    </td>
                </tr>


                <tr>
                    <td style="padding:12px 0; border-bottom:1px solid #eeeeee; font-weight:bold;">
                        Budget
                    </td>

                    <td style="padding:12px 0; border-bottom:1px solid #eeeeee;">
                        {{ $enquiry['budget'] ?: 'Not provided' }}
                    </td>
                </tr>

            </table>


            <div style="margin-top:30px;">

                <h2 style="margin:0 0 12px; font-size:18px;">
                    Project Details
                </h2>

                <div style="background:#f8f7fa; border-left:4px solid #6d3f78; padding:18px; font-size:15px; line-height:1.7; white-space:pre-line;">
                    {{ $enquiry['message'] }}
                </div>

            </div>


            <div style="margin-top:30px;">

                <a
                    href="mailto:{{ $enquiry['email'] }}"
                    style="display:inline-block; background:#6d3f78; color:#ffffff; text-decoration:none; padding:13px 22px; border-radius:30px; font-weight:bold;"
                >
                    Reply to Enquirer
                </a>

            </div>

        </div>


        <div style="padding:20px; text-align:center; color:#888888; font-size:12px;">

            This enquiry was submitted through
            <strong>techcrossbreed.com.ng</strong>.

        </div>

    </div>

</body>
</html>
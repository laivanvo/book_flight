<!DOCTYPE html>
<html lang = "en" xmlns = "http://www.w3.org/1999/xhtml" xmlns:v = "urn:schemas-microsoft-com:vml" xmlns:o = "urn:schemas-microsoft-com:office:office">
<head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width">
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
    <meta name = "x-apple-disable-message-reformatting">
    <title></title>
    
    <link href = "https://fonts.googleapis.com/css?family = Roboto:400,600" rel = "stylesheet" type = "text/css">
    <!-- Web Font / @font-face : BEGIN -->
    <!--[if mso]>
        <style>
            * {
                font-family: 'Roboto', sans-serif !important;
            }
        </style>
    <![endif]-->

    <!--[if !mso]>
        <link href = "https://fonts.googleapis.com/css?family = Roboto:400,600" rel = "stylesheet" type = "text/css">
    <![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset : BEGIN -->
    
    
    <style>
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: 'Roboto', sans-serif !important;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 24px;
            color:#8094ae;
            font-weight: 400;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        a {
            text-decoration: none;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }
    </style>

</head>

<body width = "100%" style = "margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f5f6fa;">
	<center style = "width: 100%; background-color: #f5f6fa;">
        <table width = "100%" border = "0" cellpadding = "0" cellspacing = "0" bgcolor = "#f5f6fa">
            <tr>
               <td style = "padding: 40px 0;">
                    <table style = "width:100%;max-width:620px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style = "text-align: center; padding-bottom:25px">
                                    <a href = "#"><img style = "height: 40px" src = "https://lh3.google.com/u/0/d/1QT5jjfIfqIbdRzYtNyJ7nNmRuRwIUJVd = w1920-h902-iv1" alt = "logo"></a>
                                    <p style = "font-size: 14px; color: #6576ff; padding-top: 12px;">Cảm ơn quý khách đã đặt vé</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style = "width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;">
                        <tbody>
                            <tr>
                                <td style = "text-align:center;padding: 30px 30px 20px">
                                    <h5 style = "margin-bottom: 24px; color: #526484; font-size: 20px; font-weight: 400; line-height: 28px;">Kính chào anh/chị {{$name}}<br>Cảm ơn quý khách đã sử dụng dịch vụ đặt vé máy bay của chúng tôi</h5>
                                    <p style = "margin-bottom: 15px; color: #526484; font-size: 16px;">Chúng tôi vui mừng xác nhận rằng bạn đã đặt vé thành công {{ \Carbon\Carbon::parse($dateDepature)->format('D/M/Y') }} trong thời gian là {{$hour}}h{{ $minute }}p.</p>
                                    <p style = "margin-bottom: 15px;">Hy vọng bạn sẽ thích trải nghiệm ở chuyến bay của chúng tôi, chúng tôi ở đây nếu bạn có bất kỳ câu hỏi nào, hãy gửi cho chúng tôi theo địa chỉ laixuantruong2000s@gmail.com bất cứ lúc nào.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style = "width:100%;max-width:620px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style = "text-align: center; padding:25px 20px 0;">
                                    <p style = "font-size: 13px;">Copyright © 2020 DashLite. All rights reserved. <br> Template Made By <a style = "color: #6576ff; text-decoration:none;" href = "https://themeforest.net/user/softnio/portfolio">Softnio</a>.</p>
                                    <p style = "padding-top: 15px; font-size: 12px;">This email was sent to you as a registered user of <a style = "color: #6576ff; text-decoration:none;" href = "https://softnio.com">softnio.com</a>. To update your emails preferences <a style = "color: #6576ff; text-decoration:none;" href = "#">click here</a>.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
               </td>
            </tr>
        </table>
    </center>
</body>
</html>
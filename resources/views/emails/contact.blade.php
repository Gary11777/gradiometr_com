<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новое сообщение с сайта</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px;">
            Новое сообщение с сайта Gradiometr.com
        </h2>
        
        <div style="margin: 20px 0;">
            <p><strong>Имя:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> <a href="mailto:{{ $email }}">{{ $email }}</a></p>
            <p><strong>Телефон:</strong> {{ $phone }}</p>
        </div>
        
        <div style="background: #f3f4f6; padding: 15px; border-radius: 5px; margin: 20px 0;">
            <p><strong>Сообщение:</strong></p>
            <p style="white-space: pre-wrap;">{{ $messageContent }}</p>
        </div>
        
        <hr style="border: none; border-top: 1px solid #e5e7eb; margin: 20px 0;">
        
        <p style="font-size: 12px; color: #6b7280;">
            Это сообщение было отправлено через контактную форму на сайте gradiometr.com
        </p>
    </div>
</body>
</html>

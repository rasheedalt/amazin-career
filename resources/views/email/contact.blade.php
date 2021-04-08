<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Message</title>
  </head>
  <body>
    <h4>Hello Admin,</h4>

    <p>There is a new contact message with the following details:</p><br>
    <p>Fullname: {{ $data['fullname'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Information Category: {{ $data['category'] }}</p>
    <p>Message: {{ $data['message'] }}</p>

  </body>
</html>

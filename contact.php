<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Responsive Contact us Form | CodingNepal</title>
    <link rel="stylesheet" href="static/contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <div class="text"> Contact us </div>
    <form action="https://formsubmit.co/kimanistephen729@gmail.com" method="post">
        <div class="form-row">
            <div class="input-data">
                <input type="text" name="firstname" required>
                <div class="underline"></div>
                <label >First Name</label>
            </div>
            <div class="input-data">
                <input type="text" name="lastname" required>
                <div class="underline"></div>
                <label >Last Name</label>
            </div>
        </div>
        <div class="form-row">
            <div class="input-data">
                <input type="text" name="email" required>
                <div class="underline"></div>
                <label >Email Address</label>
            </div>
            <div class="input-data">
                <input type="text" name="phone" required>
                <div class="underline"></div>
                <label >phone no.</label>
            </div>
        </div>
        <div class="form-row">
            <div class="input-data textarea">
                <textarea rows="8" cols="80" name="comment" required></textarea>
                <br />
                <div class="underline"></div>
                <label >Write your message</label>
                <br />
                <input type="hidden" name="_captcha" value="false">
                <div class="form-row submit-btn">
                    <div class="input-data">
                        <div class="inner"></div>
                        <input type="submit" value="submit">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
</body>
</html>
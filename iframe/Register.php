<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link href="https://fonts.googleapis.com/css2?family=Sofia&family=Sofia+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/register.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css">

</head>

<body>
    <div class="wrap-register">
        <div class="wrap-register1">
            <h2 class="title-register">ĐĂNG KÝ THÀNH VIÊN</h2>
            <form method="POST" action="../process.php" id="form-register" onsubmit="return handleSubmit()">
                <div class="input-row">
                    <label class="title" for="code">Mã sinh viên</label>
                    <input autocomplete="off" class="input-register" type="text" id="code" name="code">
                    <small>Error Message</small>
                </div>
                <div class="input-row">
                    <label class="title" for="fullname">Họ và tên</label>
                    <input autocomplete="off" class="input-register" type="text" id="fullname" name="fullname">
                    <small>Error Message</small>
                </div>
                <label class="title" for="email">Email</label>
                <div class="input-row">
                    <input autocomplete="off" class="input-register" type="email" id="email" name="email">
                    <small>Error Message</small>
                </div>
                <div class="input-row">
                    <label class="title" for="gender">Giới tính</label>
                    <div class="wrap-gender" id="gender">
                        <input type="radio" id="gender1" name="gender" value="Nam" onclick="chooseGender()">
                        <label class="title" for="gender1">Nam</label>
                        <input type="radio" id="gender2" name="gender" value="Nữ" onclick="chooseGender()">
                        <label class="title" for="gender2">Nữ</label>
                    </div>
                    <small>Error Message</small>
                </div>
                <div class="input-row">
                    <label class="title" for="hobby">Sở thích</label>
                    <div class="wrap-hobby" id="hobby">
                        <input type="checkbox" id="hobby1" name="hobby[]" value="Đọc sách">
                        <label class="title" for="hobby1">Đọc sách</label>
                        <input type="checkbox" id="hobby2" name="hobby[]" value="Du lịch">
                        <label class="title" for="hobby2">Du lịch</label>
                        <input type="checkbox" id="hobby3" name="hobby[]" value="Âm nhạc">
                        <label class="title" for="hobby3">Âm nhạc</label>
                        <input type="checkbox" id="hobby4" name="hobby[]" value="Ẩm thức">
                        <label class="title" for="hobby4">Ẩm thực</label>
                        <input type="checkbox" id="hobby5" name="hobby[]" value="Khác">
                        <label class="title" for="hobby5">Khác</label>
                    </div>
                    <small>Error Message</small>
                </div>
                <div class="input-row">
                    <label class="title" for="nationality">Quốc Tịch</label>
                    <select name="nationality" id="nationality">
                        <option value="">Chọn quốc tịch</option>
                        <option value="Việt Nam">Việt nam</option>
                        <option value="Other">Quốc gia khác</option>
                    </select>
                    <small>Error Message</small>
                </div>
                <div class="input-row">
                    <label class="title" for="note">Ghi chú</label>
                    <textarea id="note" name="note"></textarea>
                    <small>Error Message</small>
                </div>

                <div class="input-row">
                    <input type="submit" value="Đăng Ký" id="btn-register" />
                </div>
            </form>

            <div id="error-message"></div>
        </div>
    </div>

    <script src="../assets/js/Register.js"></script>

</body>

</html>
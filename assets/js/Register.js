const codeEle = document.getElementById('code');
const usernameEle = document.getElementById('fullname');
const emailEle = document.getElementById('email');
const genderEle = document.querySelector('#gender');
const hobbyEle = document.getElementById('hobby');
const nationalityEle = document.querySelector('#nationality');
const passwordEle = document.getElementById('password');

var checkGT = false;
var checkST = false;

// const btnRegister = document.getElementById("btn-register");
const inputEle = document.querySelectorAll('.input-row');

function handleSubmit() {

    console.log('asdddddddddd');

    Array.from(inputEle).map((ele) =>
        ele.classList.remove('success', 'error')
    );

    let isValid = checkValidate();

    if (!isValid) {
        return false;
    }

    if (isValid) {
        alert("Đăng ký thành công!!!");
        return true;
    }
}



function chooseGender() {
    checkGT = true;
}

function checkValidate() {

    let codeValue = codeEle.value;
    let usernameValue = usernameEle.value;
    let emailValue = emailEle.value;
    let nationalityValue = nationalityEle.value;
    let passwordValue = passwordEle.value;

    let isCheck = true;

    // Custom Form
    if (codeValue == '') {
        setError(codeEle, 'User Name không được để trống!');
        isCheck = false;
    } else {
        setSuccess(codeEle);
    }

    if (passwordValue == '') {
        setError(passwordEle, "Password không được để trống!");
        isCheck = false;
    } else if (!isPassword(passwordValue)) {
        setError(passwordEle, 'Password bao gồm ít nhất 1 ký tự viết hoa, 1 ký tự viết thường và 1 số!');
        isCheck = false;
    } else {
        setSuccess(passwordEle);
    }

    if (usernameValue == '') {
        setError(usernameEle, 'Họ tên Không được để trống!');
        isCheck = false;
    } else {
        setSuccess(usernameEle);
    }

    if (emailValue == '') {
        setError(emailEle, "Email Không được để trống!");
        isCheck = false;
    } else if (!isEmail(emailValue)) {
        setError(emailEle, 'Email Không đúng định dạng!');
        isCheck = false;
    } else {
        setSuccess(emailEle);
    }

    if (!checkGT) {
        setError(genderEle, 'Vui Lòng chọn một mục!');
        isCheck = false;
    } else {
        setSuccess(genderEle);
    }
    chooseST()
    if (!checkST) {
        setError(hobbyEle, 'Vui Lòng chọn ít nhất một mục!');
        isCheck = false;
    }
    else {
        setSuccess(hobbyEle);
    }

    if (nationalityValue === '') {
        setError(nationalityEle, "Vui lòng chọn quốc gia của bạn!");
        isCheck = false;
    } else {
        setSuccess(nationalityEle);
    }

    // if (noteValue.length > 200) {
    //     console.log(noteValue);
    //     setError(noteEle, "Không được nhập quá 200 ký tự!");
    //     isCheck = false;
    // } else {
    //     setSuccess(noteEle);
    // }

    return isCheck;

}

function chooseST() {

    var checkbox = document.getElementById('hobby');
    var input = checkbox.getElementsByTagName("input")

    for (var i = 0; i < input.length; i++) {
        if (input[i].checked) {
            checkST = true;
            break;
        }
        checkST = false;
    }

}

function setSuccess(ele) {
    let parentEle = ele.parentElement;
    // console.log(parentEle);

    parentEle.classList.add('success');
}

function setError(ele, message) {
    let parentEle = ele.parentElement;
    // console.log(parentEle);
    parentEle.classList.add('error');
    parentEle.querySelector('small').innerText = message;
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isPassword(password) {
    return /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/.test(password);
}
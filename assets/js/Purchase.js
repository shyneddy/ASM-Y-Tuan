document.getElementById("cart").style.display = "none";
document.getElementById("footer").style.display = "none";
const totalMoneyEle = document.getElementsByClassName("totalmoney");
const moneyEle = document.getElementsByClassName("money");
const productInputEle = document.getElementsByClassName("product-input");

function them(button) {
    var row = button.parentElement.parentElement.cloneNode(true);
    var btnXoa = row.getElementsByTagName("button")[0];

    btnXoa.innerText = " Xóa";
    btnXoa.setAttribute('onclick', "xoa(this)");
    document.getElementById("cart").appendChild(row);

    document.getElementById("cart").style.display = "";
    document.getElementById("footer").style.display = "";
    tinhtong();
}

// Function Xoa
function xoa(button) {
    var row = button.parentElement.parentElement;
    document.getElementById("cart").removeChild(row);

    tinhtong();
}

// Function Tong Tien
function tinhtong() {
    var cart = document.getElementById("cart");
    var rows = cart.getElementsByTagName("tr");

    var tong = 0;
    for (var i = 0; i < rows.length; i++) {
        var price = rows[i].children[4].innerText;
        // console.log(children[2]);
        price = parseInt(price);
        tong += price;
    }
    document.getElementById("tong").innerText = tong;
}

function handleLoad(element) {
    let totalMoneyTextcontent = totalMoneyEle.textContent;
    let moneyTextcontent;
    let productInputValue;
    moneyTextcontent = element.parentElement.parentElement.getElementsByClassName("money")[0].textContent;
    productInputValue = element.parentElement.parentElement.getElementsByClassName("product-input")[0].value;
    element.parentElement.parentElement.getElementsByClassName("totalmoney")[0].textContent = Number(moneyTextcontent) * Number(productInputValue);
    console.log(moneyTextcontent, ' -- ', productInputValue);



    totalMoneyEle.innerText = totalMoneyTextcontent;
}

function handleClickBuy() {
    document.getElementById("wrap-purchase").classList.remove("hide")
}

function handleCloseBuy() {
    document.getElementById("wrap-purchase").classList.add("hide")

}
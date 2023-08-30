var images = [];
var index = 0;
var sohinh = 3;
var small_img =  document.getElementsByClassName("product-details__small-img");
for (var i = 0; i < sohinh; i++) {
    images[i] = new Image();
    images[i].src = "../assets/img/product/" + i + ".jpg";
}

// console.log(small_img);
//khai bao ham

function clearBoder(){
    for(var i =0;i<small_img.length;i++){
        small_img[i].classList.remove("isChoose")
    }
}

function next() {
    index++;
    if (index >= images.length) index = 0;
    var anh = document.getElementById("anh");
    anh.src = images[index].src;
    clearBoder()
    small_img[index].classList.add("isChoose")

}
function prev() {
    console.log("index");
    index--;
    if (index < 0) index = images.length - 1;
    var anh = document.getElementById("anh");
    anh.src = images[index].src;
    clearBoder()
    small_img[index].classList.add("isChoose")
}
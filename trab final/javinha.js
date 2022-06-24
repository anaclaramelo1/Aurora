function slide1() {
    document.getElementById("imagem").src = "img/logo.png";
    setTimeout("slide2()", 2000);
}

function slide2() {
    document.getElementById("imagem").src = "img/2.png";
    setTimeout("slide3()", 2000);
}

function slide3() {
    document.getElementById("imagem").src = "img/3.png";
    setTimeout("slide2()", 2000);
}

let time = 7000,
    currentImageIndex = 0,
    images = document
                .querySelectorAll("#slider img")
                max = images.length;

function nextImage() {

    images[currentImageIndex]
        .classList.remove("selected")

    currentImageIndex++

    if(currentImageIndex >= max)
        currentImageIndex = 0

    images[currentImageIndex]
        .classList.add("selected")
}

function start() {
    setInterval(() => {
        // troca de image
        nextImage()
    }, time)
}

window.addEventListener("load", start)
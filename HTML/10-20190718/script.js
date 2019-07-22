var imageElement = document.getElementById('image');

console.log(imageElement.src);

function doianh() {
    if (imageElement.src.includes('pic_bulboff')) {

        imageElement.src = 'img/pic_bulbon.gif';
    } else {
        imageElement.src = 'img/pic_bulboff.gif';
    }
}
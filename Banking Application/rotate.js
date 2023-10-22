const img  = document.querySelector('.rotate-image')
// console.log(img);

let rotateDeg = 0;

setInterval(() => {

    rotateDeg++;
    
    img.style.transform = `rotate(${rotateDeg}deg)`;
},50)
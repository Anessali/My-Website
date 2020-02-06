
let num = 1;
let endNum = 14; 

function DetectKey(){
    console.log("Key pressed");
    let key = event.keyCode;
    console.log(key);
    if(key == 39){
        NextImage();
    } 
    if (key == 37){
        PreviousImage();
    }
}

function PreviousImage(){
    num--;
    if(num < 1){
        num = endNum;
    }
    document.getElementById("animeCarousel").src = `../images/slideshow/${num}.jpg`;
    console.log(`Current image: ${num}`);
}

function NextImage(){
    num++;
    if(num > endNum){
        num = 1;
    }
    document.getElementById("animeCarousel").src = `../images/slideshow/${num}.jpg`;
    console.log(`Current image: ${num}`);
}

function ArrangedMarriage(){
    num = Math.floor(Math.random() * endNum) + 1;
    document.getElementById("animeCarousel").src = `../images/slideshow/${num}.jpg`;
}
let loadMoreBtn1 = document.querySelector('#load-more-1');
let currentItem2 = 4;

loadMoreBtn1.onclick = () => {
    let boxes = [...document.querySelectorAll(
        '.box-container-2 .box-2'
    )];
    for(var i = currentItem2; i < currentItem2 + 4; i++) {
        boxes[i].style.display = 'inline-block';
    }
    currentItem2 += 4;
    if(currentItem2 >= boxes.length) {
        loadMoreBtn1.style.display = "none"
    }
}

let loadMoreBtn2 = document.querySelector('#load-more-2');
let currentItem3 = 4;

loadMoreBtn2.onclick = () => {
    let boxes = [...document.querySelectorAll(
        '.box-container-3 .box-3'
    )];
    for(var i = currentItem3; i < currentItem3 + 4; i++) {
        boxes[i].style.display = 'inline-block';
    }
    currentItem3 += 4;
    if(currentItem3 >= boxes.length) {
        loadMoreBtn2.style.display = "none"
    }
}


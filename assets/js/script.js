let header = document.getElementsByTagName('header')[0];

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if(currentScroll > 0){
        scrollDownHeader(header)
    } else if(currentScroll === 0){
        initialScroll(header)
    }
})

function scrollDownHeader(header){
    let items = document.getElementsByClassName('link-item');
    
    for(let i = 0; i < items.length; i++){
        items[i].style.backgroundColor = "white";
        items[i].addEventListener('mouseover', (e) => {
            items[i].style.backgroundColor = "#ff6c40c7"
        })
        items[i].addEventListener('mouseout', (e) => {
            items[i].style.backgroundColor = "white"
        })
        
    }
    header.style.backgroundColor = 'black';
    header.style.color = 'white';
    header.style.transition = '1s';
}

function initialScroll(header){
    header.style.backgroundColor = 'white';
        header.style.transition = '1s';
        header.style.color = 'black';
}



















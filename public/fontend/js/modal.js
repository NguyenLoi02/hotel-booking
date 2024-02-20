// Buy tickets
const buyBtnS = document.querySelectorAll('.js-buy-btn');
const modal = document.querySelector('.js-modal');
const btnClose = document.querySelector('.js-modal-close');
const modalContainer = document.querySelector('.js-modal-container');
for (const buyBtn of buyBtnS){
    buyBtn.addEventListener('click', function() {
        modal.classList.add('open');
});
}

btnClose.addEventListener('click', function() {
    modal.classList.remove('open');
});

modal.addEventListener('click', function() {
    modal.classList.remove('open');
})
modalContainer.addEventListener('click', function(e) {
    e.stopPropagation();
})
//end

//open/close mobile menu
const header = document.getElementById('header');
const mobileMenu = document.getElementById('mobile-menu');
const headerHeight = header.clientHeight;

mobileMenu.addEventListener('click', function() {
    const isClosed = header.clientHeight === headerHeight;
    if (isClosed) {
        header.style.height = 'auto';
    }
    else {
        header.style.height = null;
    }
});

const menuItems = document.querySelectorAll('#nav li a[href*="#"]');
menuItems.forEach(function (item) {
    item.addEventListener('click',(e)=> {
        const isParentMenu = item.nextElementSibling && item.nextElementSibling.classList.contains('subnav');
        if (isParentMenu) {
            e.preventDefault();
        }
        else {
            header.style.height = null;
        }
    });
})
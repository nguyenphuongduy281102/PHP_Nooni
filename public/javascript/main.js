// OPEN AND CLOSE CART
const cartOpen = document.querySelector('.cart-icon');
const cartModal = document.querySelector('.cart-modal');
const closeCart = document.querySelector('.close-cart');
const cart = document.querySelector('.cart-container');

function showCartModal() {
    cartModal.classList.add('open');
}

function closeCartModal() {
    cartModal.classList.remove('open');
}

cartOpen.addEventListener('click', showCartModal);
closeCart.addEventListener('click', closeCartModal);
cartModal.addEventListener('click', closeCartModal);
cart.addEventListener('click', function(event) {
    event.stopPropagation();
});


// OPEN AND CLOSE MENU
const menuOpen = document.querySelector('.menu-icon');
const menuModal = document.querySelector('.menu-modal');
const closeMenu = document.querySelector('.close-menu');
const menu = document.querySelector('.menu-container');

function showMenuModal() {
    menuModal.classList.add('open');
}

function closeMenuModal() {
    menuModal.classList.remove('open');
}

menuOpen.addEventListener('click', showMenuModal);
closeMenu.addEventListener('click', closeMenuModal);
menuModal.addEventListener('click', closeMenuModal);
menu.addEventListener('click', function(event) {
    event.stopPropagation();
});



// OPEN AND CLOSE SEARCH
const searchOpen = document.querySelector('.search-icon');
const searchModal = document.querySelector('.search-modal');
const closeSearch = document.querySelector('.close-search');
const search = document.querySelector('.search-container');

function showSearchModal() {
    searchModal.classList.add('open');
}

function closeSearchModal() {
    searchModal.classList.remove('open');
}

searchOpen.addEventListener('click', showSearchModal);
closeSearch.addEventListener('click', closeSearchModal);
searchModal.addEventListener('click', closeSearchModal);
search.addEventListener('click', function(event) {
    event.stopPropagation();
});


const buyButtons = document.querySelectorAll('.btn-product');
buyButtons.forEach(button => {
  button.addEventListener('click', () => {
    const productId = button.dataset.productId;
    const url = `detail.html?id=${productId}`;
    window.location.href = url;
  });
});


/* button scroll to top design */
let toTop = document.getElementById('toTop');
toTop.style.display = 'none';
window.addEventListener('scroll', () => {
    if(this.scrollY > 200){
        toTop.style.display = 'block';
    }else{
        toTop.style.display = 'none';
    }
})
toTop.onclick = function(){
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
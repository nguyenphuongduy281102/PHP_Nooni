// Search products
let list = document.getElementById('list_Products-search');
let filter = document.querySelector('.filter');

let listProducts = [
    {
        id: 1,
        name : 'Floor Lamp With Polyester Shade',
        price: 399,
        quantiy: 15,
        image: './assets/img/products/lamp/lamp3.jpg',
    },
    {
        id: 2,
        name : 'Teak Garden Chair With Armrests',
        price: 999,
        quantiy: 15,
        image: './assets/img/products/chair/chair-5.jpg',
    },
    {
        id: 3,
        name : 'Wood Outdoor Adirondack Chair',
        price: 1.009,
        quantiy: 15,
        image: './assets/img/products/chair/chair-3.jpg',
    },
    {
        id: 4,
        name : 'Garden Chair With Armrests',
        price: 1.009,
        quantiy: 15,
        image: './assets/img/products/chair/chair-4.jpg',
    },
    {
        id: 5,
        name : 'Solid Wood Bed With Fabric Headboard',
        price: 3.707,
        quantiy: 15,
        image: './assets/img/products/bed/bed-310x310.jpg',
    },
    {
        id: 6,
        name : 'Solid Wood Bar Storage Cabinet',
        price: 1.899,
        quantiy: 15,
        image: './assets/img/products/cabinet/cabinet-1.jpg',
    },
    {
        id: 7,
        name : 'Led Steel Floor Lamp',
        price: 299,
        quantiy: 15,
        image: './assets/img/products/lamp/lamp-2.jpg',
    }
];

let productFilter = listProducts;

showProduct(productFilter);

filter.addEventListener('submit', function(event){
    event.preventDefault();
    let valueFilter = event.target.elements;
    productFilter = listProducts.filter(item => {
        // check name
        if(valueFilter.name.value != ''){
            if(!item.name.includes(valueFilter.name.value)){
                return false;
            }
        }

        return true;
    })
    showProduct(productFilter);
})

function showProduct(productFilter){
    list.innerHTML = '';
    productFilter.forEach(item => {
        let newItem = document.createElement('div');
        newItem.dataset.id = item.id;
        newItem.classList.add('item');
        newItem.innerHTML = `<div class="item">
        <div class="img-product">
            <img src="${item.image}">
            <div class="quick-view"><i class='bx bx-search'></i></div>
            <div class="compare"><i class='bx bx-git-compare'></i></div>
            <div class="wishlist"><i class='bx bx-heart'></i></div>
            <button class="btn-product">SELECT OPTION</button>
        </div>
        <div class="info-product">
            <a class="name" href="#">${item.name}</a>
            <span class="price">$${item.price}</span>
        </div>
    </div>`;

        list.appendChild(newItem);
    });
}


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
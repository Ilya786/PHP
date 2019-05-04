'use strict';

const products = [
    {
        name: 'JS',
        price: 150,
        quantity: 0,
        id: 1,
    },
    {
        name: 'PHP',
        price: 50,
        quantity: 0,
        id: 2,
    },
    {
        name: 'C++',
        price: 200,
        quantity: 0,
        id: 3,
    },
];
const priceProduct = {
    product(event){
        if (event.target.tagName === 'BUTTON') {
            this.price(event.target);
        }
    },
    price(element){
        let idProduct  = +element.dataset.id;
        for (const value of products) {
            if (value.id === idProduct) {
                value.quantity++;
                this.render(value);
            }
        }
    },
    render(product){
        let name = product.name;
        let price = product.price;
        let quantity = product.quantity;
        let totalPrice = price*quantity;
        let trElement = document.createElement('tr');
        let tdElementName = document.createElement('td');
        let tdElementPrice = document.createElement('td');
        let tdElementQuantity = document.createElement('td');
        let tdElementTotalPrice = document.createElement('td');
        let tableElement = document.querySelector('.price-products');
        let elements = tableElement.children;
        for (const value of elements) {
            if (value.classList.contains(product.id)) {
                value.remove();
            }
        }
        tdElementName.innerText = name;
        tdElementPrice.innerText = price;
        tdElementQuantity.innerText = quantity;
        tdElementTotalPrice.innerText = totalPrice;
        trElement.classList.add(product.id);
        trElement.appendChild(tdElementName);
        trElement.appendChild(tdElementPrice);
        trElement.appendChild(tdElementQuantity);
        trElement.appendChild(tdElementTotalPrice);


        tableElement.appendChild(trElement);
    },

};
const cart = {
    init() {
        let buttons = document.querySelectorAll('.product');
        for (const value of buttons) {
            value.addEventListener('click', () => priceProduct.product(event));
        }
    },
};

cart.init();
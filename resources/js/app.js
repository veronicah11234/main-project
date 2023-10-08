import './bootstrap';
// import '../css/app.css'; 

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// resources/js/app.js
document.addEventListener('DOMContentLoaded', function () {
    const list = document.querySelector('.list');
    const cart = document.querySelector('.cart');
    const openShopping = document.querySelector('.shopping');
    const closeShopping = document.querySelector('.closeShopping');

    openShopping.addEventListener('click', () => {
        cart.style.display = 'block';
    });

    closeShopping.addEventListener('click', () => {
        cart.style.display = 'none';
    });

    // Initialize an empty shopping cart
    const cartItem = [];

    // Function to add a tour to the cart
    function addToCart(image, tourName, price) {
        const tour = {
            image: image,
            name: tourName,
            price: price,
            quantity: 1, // Default quantity
        };
        cartItem.push(tour);

        // Update the cart display
        updateCartDisplay();
    }

    // Function to remove an item from the cart
    function removeCartItem(index) {
        cartItem.splice(index, 1); // Remove the item at the specified index
        updateCartDisplay(); // Update the cart display after removal
    }

    // Function to update the cart display
    function updateCartDisplay() {
        const cartList = document.querySelector('.cartlist');
        cartList.innerHTML = ''; // Clear the existing cart list

        let cartCount = 0; // Initialize cart count
        let totalCost = 0; // Initialize total cost

        for (let i = 0; i < cartItem.length; i++) {
            const item = cartItem[i];

            // Create a list item for each cart item
            const listItem = document.createElement('li');
            listItem.classList.add('cart-item');

            // Create an image element and set its attributes
            const tourImage = document.createElement('img');
            tourImage.src = `images/${item.image}`;
            tourImage.alt = item.name;

            // Create a div to display tour details
            const tourDetails = document.createElement('div');
            tourDetails.classList.add('tour-details');
            tourDetails.innerHTML = `
                <div class="tour-name">${item.name}</div>
                <div class="tour-price">$${item.price.toFixed(2)}</div>
            `;

            // Create a div for quantity control
            const quantityDiv = document.createElement('div');
            quantityDiv.classList.add('quantity-control');

            // Create buttons for increasing and decreasing quantity
            const increaseButton = document.createElement('button');
            increaseButton.textContent = '+';
            increaseButton.addEventListener('click', () => {
                increaseQuantity(i);
            });

            const decreaseButton = document.createElement('button');
            decreaseButton.textContent = '-';
            decreaseButton.addEventListener('click', () => {
                decreaseQuantity(i);
            });

            // Create a span to display the quantity
            const quantitySpan = document.createElement('span');
            quantitySpan.textContent = item.quantity;

            // Append the buttons and quantity span to the quantity div
            quantityDiv.appendChild(decreaseButton);
            quantityDiv.appendChild(quantitySpan);
            quantityDiv.appendChild(increaseButton);

            // Create a button to remove the item
            const removeButton = document.createElement('button');
            removeButton.textContent = 'Remove';
            removeButton.addEventListener('click', () => {
                removeCartItem(i);
            });

            // Append all elements to the list item
            listItem.appendChild(tourImage);
            listItem.appendChild(tourDetails);
            listItem.appendChild(quantityDiv);
            listItem.appendChild(removeButton);

            // Append the list item to the cart list
            cartList.appendChild(listItem);

            // Calculate and update the cart count and total cost
            cartCount += item.quantity;
            totalCost += item.price * item.quantity;
        }

        // Display cart count and total cost
        document.querySelector('.cart-count').textContent = cartCount;
        document.querySelector('.total-cost').textContent = `$${totalCost.toFixed(2)}`;
    }

    // Function to increase quantity
    function increaseQuantity(index) {
        cartItem[index].quantity++;
        updateCartDisplay();
    }

    // Function to decrease quantity
    function decreaseQuantity(index) {
        if (cartItem[index].quantity > 1) {
            cartItem[index].quantity--;
        }
        updateCartDisplay();
    }

    // Add click event listeners to "Add to Cart" buttons
    const addToCartButtons = document.querySelectorAll('.add-to-cart-button');
    addToCartButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            const tourImageElement = document.querySelector(`.tour-image-${index}`);
            const tourNameElement = document.querySelector(`.tour-name-${index}`);
            const tourPriceElement = document.querySelector(`.tour-price-${index}`);

            const image = tourImageElement.getAttribute('src').replace('images/', '');
            const name = tourNameElement.textContent;
            const price = parseFloat(tourPriceElement.textContent.replace('$', ''));

            addToCart(image, name, price);
        });
    });

    // Update cart display when the page loads
    updateCartDisplay();
});
// Add click event listeners to "Add to Cart" buttons
const addToCartButtons = document.querySelectorAll('.add-to-cart-button');
addToCartButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        const tourImageElement = document.querySelector(`.tour-image-${index}`);
        const tourNameElement = document.querySelector(`.tour-name-${index}`);
        const tourPriceElement = document.querySelector(`.tour-price-${index}`);
        const tourId = button.getAttribute('data-tour-id'); // Get the tour_id from the data attribute

        const image = tourImageElement.getAttribute('src').replace('images/', '');
        const name = tourNameElement.textContent;
        const price = parseFloat(tourPriceElement.textContent.replace('$', ''));

        addToCart(image, name, price, tourId); // Pass tourId to the addToCart function
    });
});

function addToCart(image, tourName, price, tourId) {
    const tour = {
        image: image,
        name: tourName,
        price: price,
        tour_id: tourId, // Include tour_id
        quantity: 1, // Default quantity
    };

    // Send a POST request to your Laravel route to add the tour to the cart
    axios.post('/cart', tour)
        .then((response) => {
            // Handle the response, e.g., show a success message
            console.log(response.data);
        })
        .catch((error) => {
            // Handle any errors that occur during the request
            console.error(error);
        });

    cartItem.push(tour);

    // Update the cart display
    updateCartDisplay();
}

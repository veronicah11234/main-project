let list = document.querySelector('.list');
let cart = document.querySelector('.cart-card')
let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
openShopping.addEventListener('click', ()=>{
    // body.classList.add('active')
    cart.style.display='block'
})
closeShopping.addEventListener('click', ()=>{
    // body.classList.remove('active')
    cart.style.display='none'
})

function addtour(){
    tours.forEach((value, key)=>{
        let newDiv =document.createElement('div')
        newDiv.classList.add('item');
        newDiv.innerHTML=`
        <img src='images/${value.image}'/>
        <div class="title">${value.name}</div>
        <div class="price">Price: Ksh. ${value.price.toLocaleString()}</div>
        <div class="card-body">
            <button onclick="addToCart('${value.image}','${value.name}', ${value.price})">Add to Cart</button>
        </div>
        `;
        list.appendChild(newDiv);
    })
}
addTour()
// Initialize an empty shopping cart
const cartItem = [];
// Function to add a tour to the cart
function addToCart(image,tourName, price) {
    const tour = {
        
        image:image,
        name: tourName,
        price: price,
    };
    cartItem.push(tour);
    // Update the cart display
    updateCartDisplay();
}

function removeCartItem(index) {
    cartItem.splice(index, 1); // Remove the item at the specified index
    updateCartDisplay(); // Update the cart display after removal
}

function updateCartDisplay() {
    const cartList = document.querySelector('.cartlist');
    cartList.innerHTML = ''; // Clear the existing cart list
    let cartCount = 0; // Initialize cart count
    let totalCost = 0; // Initialize total cost
    for (let i = 0; i < cartItem.length; i++) {
        const item = cartItem[i];
        const listItem = document.createElement('li');
        // Create an image element and set its attributes
        const Image = document.createElement('img');
        Image.src = `images/${item.image}`; // Assuming there is an 'image' property in your 'cartItem' objects
        Image.alt = item.name;

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
        quantitySpan.textContent = item.quantity || 1; // Default to 1 if quantity is not set

        // Append the buttons and quantity span to the quantity div
        quantityDiv.appendChild(decreaseButton);
        quantityDiv.appendChild(quantitySpan);
        quantityDiv.appendChild(increaseButton);

        // Create a div element for the tour details
        const tourDetails = document.createElement('div');
        tourDetails.classList.add('tour-details');
        tourDetails.innerHTML = `
            <div class="tour-name">${item.name}</div>
            <div class="tour-price">$${item.price.toFixed(2)}</div>
        `;
        // Create a button to remove the item
        const removeButton = document.createElement('button');
        removeButton.textContent = 'Remove';
        removeButton.addEventListener('click', () => {
            removeCartItem(i);
        });
        // Append the image, tour details, and remove button to the list item
        listItem.appendChild(tourImage);
        listItem.appendChild(tourDetails);

        // Append the quantity div to the list item
        listItem.appendChild(quantityDiv);

        listItem.appendChild(removeButton);



        // Append the list item to the cart list
        cartList.appendChild(listItem);

        // Calculate and update the cart count and total cost
        cartCount += item.quantity || 1; // Default to 1 if quantity is not set
        totalCost += item.price * (item.quantity || 1); // Default to 1 if quantity is not set


        // Calculate and update the cart count and total cost
        cartCount++;
        totalCost += item.price;
    }
    // Display cart count and total cost
    document.querySelector('.cart-count-1').textContent = cartCount;
    document.querySelector('.cart-count').textContent = cartCount;
    document.querySelector('.total-cost').textContent = `$${totalCost.toFixed(2)}`;
}
// ... (rest of your code, including addToCart and removeCartItem functions)
// Initial call to updateCartDisplay to populate the cart when the page loads
updateCartDisplay();
// m-pesa intergration
const axios = require('axios');
const mpesaEndpoint = 'YOUR_MPESA_API_ENDPOINT';
const apiKey = 'YOUR_API_KEY';
const paymentData = {
    amount: '10', // Amount to be paid
    phoneNumber: 'PHONE_NUMBER', // Customer's phone number
    // Other required parameters
};
axios.post(mpesaEndpoint, paymentData, {
    headers: {
        Authorization: `Bearer ${apiKey}`,
    },
})
    .then((response) => {
        // Handle the response from M-Pesa API, which may include a payment URL or payment details
        console.log(response.data);
    })
    .catch((error) => {
        // Handle any errors that occur during the payment request
        console.error(error);
    });

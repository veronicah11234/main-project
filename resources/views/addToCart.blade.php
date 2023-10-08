<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        body{
    margin-left: 10%;
    margin-right: 10%;
    background-color: #e3e7e8;
}
.list{
    display: flex;
    flex-wrap: wrap;
    /* background-color: whitesmoke; */
    
    justify-content:stretch;
}
.list .item{
    margin: 15px;
    background-color: white;
    box-shadow:  0px 10px 30px #706e6efb;
    padding: 1.95px;
}
.list img{
    width: 199px;
    height: 199px;
}
.card-body{
    /* background-color: rgba(245, 245, 245, 0.722); */
    /* width: 100%; */
    padding-bottom: 5px;
}
header{
    /* text-align: right; */
    /* display: grid; */
    /* grid-template-columns: 1fr 50px; */
}
header .shopping{
    position: relative;
    /* text-align: right; */
    display: flex;
    justify-content: right;
}
.cart-card{
    position: fixed;
    top:0;
    left:calc(75%);
    background-color: black;
    width: calc(25%);
    height: 100vh;
    color: white;
    display: none;
    transition: 0.5s;
}
.card-body button{
    width: 100%;
    padding: 10px;
    font-weight: bolder;
    color: white;
    background-color: black;
}
.checkout{
    background-color: #e3e7e8;
    color: black;
    padding: 10px;
    font-size: larger;
    font-weight: bolder;
}
.shopping img{
    width:60px;
    position: relative;
}
.shopping span{
    position: absolute;
    /* left:99%; */
    color: white;
    background-color: red;
    padding:3px ;
    top: -5px;
    border-radius: 50%;  
}
.cart-buttons{
    width: 100%;
    display: flex;
    justify-content: center;
}
.closeShopping, .pay{
    width:40%;
    height: 30px;
    background-color: red;
    /* padding: auto; */
    color: white;
    font-size: large;
    font-weight: bolder;
    text-align: center;
}
.cartlist li{
    display: flex;
    margin-bottom: 15px;
    /* justify-content:stretch; */
}
.cartlist img{
    width:40px;
    margin-right:5px ;
}
.cartlist button{
    background-color: red;
    margin-left: 70px;
    margin-left: 10%;
}
.quantity-control{
    background-color:white;
    display: flex;
    margin-left: 15px;
    color: black;
    justify-content: space-evenly;
    width: 80px;
    align-items: center;
}
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="shopping" >
            <div class="shopping row" >
                <img src="images/cart-logo-green-removebg-preview.png"  alt="">
                <span class="quantity cart-count-1">0</span>
            </div>

        </header>
        <div class="cart-card">
        <div class="cart-card card">
            <h4>Your cart items</h4>
            <ul class="cartlist"></ul>
            <div class="checkout">
<h4>Your cart items</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <div class="col-sm-11">
                <div class="list">

                </div>
            </div>
        </div>
    </div>

  <script src="app.js"></script>  
    <script src="app.js"></script>
    <!-- <script src="cart.js"></script> -->

</body>
</html>

<script>
    // Function to add a tour to the cart
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

    // ... (other JavaScript code specific to this view)

    // Inlet list = document.querySelector('.list');
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
itialize the addToCart function and other event listeners as needed
</script>
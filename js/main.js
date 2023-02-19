let carts = document.querySelectorAll('.add_to_cart_button');

let products = [
	{
		name: 'Crafting Tape', 
		tag: 'image24',
		price: 30,
		inCart: 0
	},
	{
		name: 'Drawing Pens', 
		tag: 'image36',
		price: 150,
		inCart: 0
	},
	{
		name: 'Paint Set', 
		tag: 'image7',
		price: 500,
		inCart: 0
	},
	{
		name: 'Markers Set', 
		tag: 'image19',
		price: 200,
		inCart: 0
	},
	{
		name: 'Sketch Book', 
		tag: 'image4',
		price: 190,
		inCart: 0
	},
	{
		name: 'Colorful Tape Set', 
		tag: 'image25',
		price: 40,
		inCart: 0
	},
	{
		name: 'Paint Set', 
		tag: 'image3',
		price: 600,
		inCart: 0
	},
	{
		name: 'Marker Set', 
		tag: 'image16',
		price: 200,
		inCart: 0
	},
	{
		name: 'Color Glue', 
		tag: 'image35',
		price: 50,
		inCart: 0
	},
	{
		name: 'Scissors', 
		tag: 'image29',
		price: 40,
		inCart: 0
	}
];

for (let i=0; i<carts.length; i++){
	carts[i].addEventListener('click',() => {
		cartNumbers(products[i]);
		totalCost(products[i])
	})
}

function onLoadCartNumbers(){
	let productNumbers = localStorage.getItem('cartNumbers');
	
	if(productNumbers){
		document.querySelector('.checkout span').textContent = productNumbers;
	}
}

function cartNumbers(product){
	let productNumbers = localStorage.getItem('cartNumbers');
	productNumbers = parseInt(productNumbers);

	if(productNumbers){
		localStorage.setItem('cartNumbers', productNumbers + 1);
		document.querySelector('.checkout span').textContent = productNumbers + 1;
	}
	else{
		localStorage.setItem('cartNumbers', 1);
		document.querySelector('.checkout span').textContent = 1;
	}
	setItems(product);
}

function setItems(product){
	let cartItems = localStorage.getItem('productsInCart');
	cartItems = JSON.parse(cartItems);
	console.log("my cartItems are" ,cartItems);
	
	if(cartItems != null){
		if(cartItems[product.tag] == undefined){
			cartItems = {
				...cartItems,
				[product.tag]: product
			}
		}
		cartItems[product.tag].inCart += 1; 
	}
	else{
		product.inCart = 1;
		cartItems = {
			[product.tag] : product
		}
	}
	
	localStorage.setItem("productsInCart" , JSON.stringify(cartItems));
}
function totalCost(product){

	let cartCost = localStorage.getItem('totalCost');
	
	if(cartCost != null){
		cartCost = parseInt(cartCost);
		localStorage.setItem("totalCost", cartCost + product.price);
	}
	else{
		localStorage.setItem("totalCost", product.price);
	}
	
}

function displayCart(){
	
	let cartItems = localStorage.getItem("productsInCart");
	cartItems = JSON.parse(cartItems);
	let productContainer = document.querySelector(".product");
	let cartCost = localStorage.getItem('totalCost');

	if(cartItems && productContainer){
		productContainer.innerHTML = '';
		Object.values(cartItems).map(item => {
			productContainer.innerHTML += `
			<div class="product">
				<ion-icon name="close-circle"></ion-icon>
				<img src="./image/${item.tag}.jpg">
				<span>${item.name}</span>
			</div>
			<div class="price">$${item.price}.00</div>
			<div class="quantity">
				<ion-icon name="caret-back-circle"></ion-icon>
				<span>${item.inCart}</span>
				<ion-icon name="caret-forward-circle"></ion-icon>
			</div>
			<div class="total">
				$${item.inCart * item.price}.00
			</div>
			`;
		});
		
		productContainer.innerHTML +=`
			<div class="basketTotalContainer">
				<h4 class="basketTotalTitle">
					Total
				</h4>
				<h4 class="basketTotal">
					$${cartCost}.00
				</h4>
			</div>
		`;
	}
}
onLoadCartNumbers();
displayCart();
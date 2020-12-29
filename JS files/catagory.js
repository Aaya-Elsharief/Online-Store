 pro =[{
		"src":  "../media/furnture/furnture2.jpg",
		
		"productsName": "Chest of drawers",
		"product_price": "$130",
		"product_price_off":"$115",
		"off":"25% off"
		
	},
	
	{
		"src":  "../media/furnture/tables.jpg",
		"productsName": "Table",
		"product_price": "$172",
		"product_price_off":"$166",
		"off":"30% off"
		
	},
	
	{
		"src":  "../media/furnture/tables.jpg",
		"productsName": "Table",
		"product_price": "$172",
		"product_price_off":"$166",
		"off":"30% off"
		
	},
	
	{
		"src":  "../media/furnture/tables.jpg",
		"productsName": "Table",
		"product_price": "$172",
		"product_price_off":"$166",
		"off":"30% off"
		
	}
	
	]


const parent = document.querySelector('body');


const products = document.createElement('div');
products.classList.add('products');

const container = document.createElement('div');
container.classList.add('container');


const h1Title = document.createElement('h1');
h1Title.classList.add('lg-title');
h1Title.textContent = "Catagory Name";

const para = document.createElement('p');
para.classList.add('text-light');
para.textContent = "Products that fall under this category";

const con = document.createElement('div');
con.classList.add('con');






for (var i =0 ; i<pro.length ; i++){

		const product = document.createElement('div');
		product.classList.add('product');

		const product_content = document.createElement('div');
		product_content.classList.add('product-content');


		const product_img = document.createElement('div');
		product_img.classList.add('product-img');


		const img = document.createElement('img');
		//img.classList.add('product-img');
		img.src = pro[i].src;


		const product_btns = document.createElement('div');
		product_btns.classList.add('product-btns');



		const btn_cart = document.createElement('button');
		btn_cart.classList.add('btn-cart');
		btn_cart.textContent ="add to cart";

		const cart_span = document.createElement('span');
		//const cart_i = document.createElement('i');
		//cart_i.classList.add("fa fa-plus");

		const btn_buy = document.createElement('button');
		btn_buy.classList.add('btn-buy');
		btn_buy.textContent ="buy now";

		const buy_span = document.createElement('span');
		//const buy_i = document.createElement('i');


		////////
		const product_info = document.createElement('div');
		product_info.classList.add('product-info');

		const product_info_top = document.createElement('div');
		product_info_top.classList.add('product-info-top');

	//	const h2Title = document.createElement('h2');
	//	h2Title.classList.add('sm-title');
	//	h2Title.textContent = pro[i].productsName;
	
	   
		const rating = document.createElement('div');
		rating.classList.add('rating');

		const rating_span = document.createElement('span');

		const product_name = document.createElement('a');
		product_name.classList.add('product-name');
		product_name.textContent = pro[i].productsName;
	
		const product_price = document.createElement('p');
		product_price.classList.add('product-price');
		product_price.textContent = pro[i].product_price;


		const product_price_off = document.createElement('p');
		product_price_off.classList.add('product-price');
		product_price_off.textContent = pro[i].product_price_off;

	    
		const off_info = document.createElement('div');
		off_info.classList.add('off-info');

		const off_title = document.createElement('h2');
		off_title.classList.add('sm-title');
		off_title.textContent = pro[i].off;
        
	
	
	
	////
		product_img.appendChild(img);


		btn_cart.appendChild(cart_span);

		//buy_span.appendChild(buy-i);
		btn_buy.appendChild(buy_span);

		product_btns.appendChild(btn_cart);
		product_btns.appendChild(btn_buy);

		product_content.appendChild(product_img);
		product_content.appendChild(product_btns);




		rating.appendChild(rating_span);

		product_info_top.appendChild(rating);
	//	product_info_top.appendChild(h2Title);

		product_info.appendChild(product_info_top);
		product_info.appendChild(product_name);
		product_info.appendChild(product_price);
		product_info.appendChild(product_price_off);


		product.appendChild(product_content);
		product.appendChild(product_info);


		off_info.appendChild(off_title);
		product.appendChild(off_info);






		con.appendChild(product);

		container.appendChild(h1Title);
		container.appendChild(para);
		container.appendChild(con);

		products.appendChild(container);

		parent.appendChild(products);

}






//Single product






/*
                           <div class = "products">
            <div class = "container">
                <h1 class = "lg-title">Catagory Name</h1>
                <p class = "text-light">Products that fall under this category</p>
			
				<div class="con">
					
				<!-- Single product-->
				  <div class = "product">
                        <div class = "product-content">
                        </div>

                        <div class = "product-info"> 
                        </div>

                        <div class = "off-info">
                            <h2 class = "sm-title">25% off</h2>
                        </div>
                    </div>
				
				<!--End Single product-->
				
				
				
				
				</div>
				*/
////


















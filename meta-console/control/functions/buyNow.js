// -------------------------------------- Razorpay start
const PaymentURI = "https://razorpayment.azurewebsites.net/payment";
const loadScript = (src) => {
  return new Promise((resolve) => {
    const script = document.createElement("script");
    script.src = src;
    script.onload = () => {
      resolve(true);
    };
    script.onerror = () => {
      resolve(false);
    };
    document.body.appendChild(script);
  });
};

const displayRazorpay = async (price, purchasetransction, title) => {
  await loadScript("https://checkout.razorpay.com/v1/checkout.js");
  const itemCost = price;
  const payableAmount = itemCost;
  const data = await fetch(`${PaymentURI}?price=${payableAmount}`, {
    method: "POST",
  })
    .then((t) => t.json())
    .catch((err) => console.error(err));
  const options = {
    currency: data.currency,
    amount: data.amount,
    name: `Buy ${title}`,
    description: `${itemCost} INR`,
    order_id: data.id,
    handler: purchasetransction,
    prefill: {
      name: "Biswanath Das",
      email: "Biswanath@gmail.com",
      contact: "9999999999",
    },
  };
  const paymentObject = new window.Razorpay(options);
  paymentObject.open();
};
// -------------------------------------- Razorpay end

async function buyNow(tableName) {
    
  const buyNowButton = document.getElementById("buyNowButton");
  buyNowButton.innerHTML = `<div class="loader"></div>`;
  const productId = buyNowButton.getAttribute("productId");
  
  let clickedProduct
    var requestOptions = {
      method: 'GET',
      redirect: 'follow'
    };

   await fetch(`https://sosal.in/meta-console/control/api/GetAllProduct.php?table=${tableName}`, requestOptions)
      .then(response => response.json())
      .then(result => {
          console.log(result)
          
         clickedProduct = result.find((data) => data.id == Number(productId))
         
      })
      .catch(error => console.log('error', error));
  camera.setAttribute("look-controls", { enabled: false });

  displayRazorpay(
    clickedProduct?.price,
    async function (response) {
        
      camera.setAttribute("look-controls", { enabled: true });
      buyNowButton.innerHTML = "Buy Now";
      sessionStorage.clear();

        itemDecrease(productId,tableName,response?.razorpay_order_id)
      
    },
    clickedProduct?.title
  );
}

function cartCheckout(tableName) {
  const buyNowButton = document.getElementById("cartCheckoutButton");
  buyNowButton.innerHTML = "Please wait ...";

  const addedProducts = sessionStorage.getItem("x-user-cart");
  const list = JSON.parse(addedProducts);
  let totalAmount = 0;
  list?.map(({ price }) => {
    totalAmount += parseFloat(price);
  });
  
  console.log("---->list",list);
 
  
  camera.setAttribute("look-controls", { enabled: false });
  displayRazorpay(
    totalAmount,
    async function (response) {
      camera.setAttribute("look-controls", { enabled: true });
      buyNowButton.innerHTML = "Checkout";
      let j;
      for(j = 0; j<list.length; j++){
        await itemDecrease(list[j].id,tableName, response?.razorpay_order_id)
      }
    
      
    //   swal("Order Placed!", "Order placed successfully", "success").then(
    //     (value) => {
    //       window.location.reload();
    //     }
    //   );
    },
    "Cart checkout"
  );
}


function itemDecrease(id,tableName,razorpay_order_id) {
    var requestOptions = {
      method: 'GET',
      redirect: 'follow'
    };

fetch(`https://sosal.in/meta-console/control/api/confirmOrder.php?id=${id}&table=${tableName}&order_id=${razorpay_order_id}`, requestOptions)
  .then(response => response.text())
  .then(result =>  {
      swal("Order Placed!", "Order placed successfully", "success").then(
        (value) => {
            sessionStorage.clear();
             window.location.reload()
         
        }
      );
 
      
  })
  .catch(error => console.log('error', error));
    
}



// -------------------------------------- Razorpay start
const PaymentURI = "https://nft-payment.herokuapp.com/payment";
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

function buyNow() {
  const buyNowButton = document.getElementById("buyNowButton");
  buyNowButton.innerHTML = `<div class="loader"></div>`;
  const productId = buyNowButton.getAttribute("productId");
  const clickedProduct = products.find((data) => data.id === Number(productId));
  camera.setAttribute("look-controls", { enabled: false });
  displayRazorpay(
    clickedProduct?.price,
    async function (response) {
      camera.setAttribute("look-controls", { enabled: true });
      buyNowButton.innerHTML = "Buy Now";
      sessionStorage.clear();

        itemDecrease(productId)
      
    },
    clickedProduct?.title
  );
}

function cartCheckout() {
  const buyNowButton = document.getElementById("cartCheckoutButton");
  buyNowButton.innerHTML = "Please wait ...";

  const addedProducts = sessionStorage.getItem("x-user-cart");
  const list = JSON.parse(addedProducts);
  let totalAmount = 0;
  list?.map(({ price }) => {
    totalAmount += price;
  });
  camera.setAttribute("look-controls", { enabled: false });
  displayRazorpay(
    totalAmount,
    async function (response) {
      camera.setAttribute("look-controls", { enabled: true });
      buyNowButton.innerHTML = "Checkout";
      sessionStorage.clear();
      swal("Order Placed!", "Order placed successfully", "success").then(
        (value) => {
          window.location.reload();
        }
      );
    },
    "Cart checkout"
  );
}


function itemDecrease(id) {
    var requestOptions = {
      method: 'GET',
      redirect: 'follow'
    };

fetch(`https://sosal.in/shop/functions/confirmOrder.php?id=${id}`, requestOptions)
  .then(response => response.text())
  .then(result =>  {
      swal("Order Placed!", "Order placed successfully", "success").then(
        (value) => {
             window.location.reload()
         
        }
      );
 
      
  })
  .catch(error => console.log('error', error));
    
}



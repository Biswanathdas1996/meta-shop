function addToCart() {
  const buyNowButton = document.getElementById("buyNowButton");
  const productId = buyNowButton.getAttribute("productId");
  const addToCartButton = document.getElementById("addToCartButton");
  const clickedProduct = products.find((data) => data.id === Number(productId));
  const addedProducts = sessionStorage.getItem("x-user-cart");
  const toJsonCart = JSON.parse(addedProducts);
  let cart = [];
  if (!addedProducts) {
    cart.push(clickedProduct);
  } else {
    cart = [...toJsonCart, clickedProduct];
  }
  sessionStorage.setItem("x-user-cart", JSON.stringify(cart));
  addToCartButton.innerHTML = "Already in Cart";
  addToCartButton.disabled = true;
}

function checkIfInCart(addedProducts, productId) {
  const clickedProduct = addedProducts?.find(
    (data) => data.id === Number(productId)
  );
  console.log("--clickedProduct-->", clickedProduct);

  if (clickedProduct) {
    return true;
  } else {
    return false;
  }
}

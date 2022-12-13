async function addToCart(tableName) {
  const buyNowButton = document.getElementById("buyNowButton");
  const productId = buyNowButton.getAttribute("productId");
  const addToCartButton = document.getElementById("addToCartButton");
  
  
  let clickedProduct
                    var requestOptions = {
                      method: 'GET',
                      redirect: 'follow'
                    };
                    
                   await fetch(`https://sosal.in/meta-console/control/api/GetAllProduct.php?table=${tableName}`, requestOptions)
                      .then(response => response.json())
                      .then(result => {
                          console.log("--result--->",result)
                          
                         clickedProduct = result.find((data) => data.id == Number(productId))
                         
                         console.log("--clickedProduct--->",clickedProduct) 
                         
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
                         
                      })
                      .catch(error => console.log('error', error));
  
  
//   const clickedProduct = products.find((data) => data.id === Number(productId));

}

function checkIfInCart(addedProducts, productId) {
  const clickedProduct =addedProducts && addedProducts?.find((data) => data?.id === Number(productId));
  console.log("--clickedProduct-->", clickedProduct);

  if (clickedProduct) {
    return true;
  } else {
    return false;
  }
}

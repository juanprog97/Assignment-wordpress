// Replace public key

window.addEventListener("DOMContentLoaded", function () {
  var stripe = Stripe(
    "pk_test_51PLuOpERcQeaC8T5IqIXjuFk1g40letkt17a3DshyLrJ9FmsIEUcYzPbPq3iQWvzDJXQlx0CUyjK8xNWtFG2mCGG00aMEFUhiN"
  );
  document.querySelectorAll("button.get-ofert").forEach((button) => {
    button.addEventListener("click", function () {
      var productId = this.getAttribute("data-id-product");

      fetch(
        "/wordpress-ecommerce-website/wp-admin/admin-ajax.php?action=create_session_pay_stripe",
        {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: new URLSearchParams({
            product_id: productId,
          }),
        }
      )
        .then((response) => response.json())
        .then((data) => {
          if (data.success) {
            return stripe.redirectToCheckout({ sessionId: data.data.id });
          } else {
            console.error("Error:", data.data.error);
            alert("Error to create pay session");
          }
        })
        .catch((error) => {
          console.error("Error:", error);
          alert("Error to create pay session");
        });
    });
  });
});

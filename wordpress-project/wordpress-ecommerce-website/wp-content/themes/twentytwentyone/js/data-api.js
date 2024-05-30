document.addEventListener("DOMContentLoaded", function () {
  if (typeof dataApi !== "undefined" && dataApi.data) {
    const element = document.querySelector(".container-suscription");

    if (element) {
      element.innerHTML = "";

      dataApi.data.data.forEach((data) => {
        //Create Card
        const divContainer = document.createElement("div");
        divContainer.className = "card-oferts-details";

        //Create Title
        const titleOfert = document.createElement("h3");
        titleOfert.className = "title-ofert";
        titleOfert.innerHTML = data.title;
        divContainer.appendChild(titleOfert);

        //Create Body
        const bodyOfert = document.createElement("p");
        bodyOfert.className = "ofert-details";
        bodyOfert.innerHTML = data.body;
        divContainer.appendChild(bodyOfert);

        //Create Price section
        const priceSection = document.createElement("div");
        priceSection.className = "price-ofert";
        priceSection.innerHTML = data.price;
        divContainer.appendChild(priceSection);

        //Button
        const buttonElem = document.createElement("button");
        buttonElem.className = "get-ofert";
        buttonElem.setAttribute("data-id-product", data.id);
        buttonElem.innerHTML = "Try It Now";
        divContainer.appendChild(buttonElem);

        element.appendChild(divContainer);
      });
    }
  }
});

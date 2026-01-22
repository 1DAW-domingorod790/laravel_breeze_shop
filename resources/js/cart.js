"use strict"
{
    let quantityModifiers = document.querySelectorAll(".quantityModifier");
    let total = document.querySelector("#total");

    for (let quantityModifier of quantityModifiers) {
        let minusButton = quantityModifier.querySelector(".minus");
        let plusButton = quantityModifier.querySelector(".plus");
        let input = quantityModifier.querySelector(".quantity");

        minusButton.addEventListener("click", () => {
            let price = minusButton.value;
            if (input.value > 1){
                input.value--;
                let subTotal = total.textContent;
                subTotal = subTotal.replace("$", "");
                subTotal = subTotal.replace(",", "");

                price = parseFloat(price);
                const finalPrice = parseFloat(subTotal) - price;
                total.textContent = "$" + finalPrice.toFixed(2); 
            }
        })

        plusButton.addEventListener("click", () => {
            let price = plusButton.value;
            input.value++;
            
            let subTotal = total.textContent;
            subTotal = subTotal.replace("$", "");
            subTotal = subTotal.replace(",", "");
            
            price = parseFloat(price);
            const finalPrice = parseFloat(subTotal) + price;
            total.textContent = "$" + finalPrice.toFixed(2); 
        })
    }
}
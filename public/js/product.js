let products = await axios.get("/api/products");
console.log(products);

const container = document.getElementById("product-container");

products = Array.from(products.data);
console.log(products);
products.forEach(product => {
    container.innerHTML += `
            <div>name: ${product["name"] }</div>
            <div>price: ${product["name"] }</div>
            <img src=" ${product["image"] }">
            <hr>
    `
});
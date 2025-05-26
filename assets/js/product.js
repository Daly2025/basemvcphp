function base_url(path = '') {
    let pathname = window.location.pathname.split('/').filter(segment => segment !== '');
    let basePath = pathname.length > 0 ? pathname[0] : '';
    let url = window.location.origin + '/' + basePath;
    return url.replace(/\/$/, '') + '/' + path.replace(/^\//, '');
}

// Ejemplo de uso:
fetch(base_url('api/categories'))
    .then(data => data.json())
    .then(datos => {
        datos.forEach(element => {
            let option = document.createElement("option");
            option.value = element.category_id;
            option.textContent = element.name;
            document.getElementById("category").appendChild(option);
        });
    })
    .catch(err => {
        console.log(err);
    });

fetch(base_url('api/providers'))
    .then(data => data.json())
    .then(datos => {
        datos.forEach(element => {
            let option = document.createElement("option");
            option.value = element.provider_id;
            option.textContent = element.name;
            document.getElementById("provider").appendChild(option);
        });
    })
    .catch(err => {
        console.log(err);
    });

fetch(base_url('api/products'))
    .then(data => data.json())
    .then(datos => {
        showproducts(datos);
    })
    .catch(err => {
        console.log(err);
    });

document.getElementById("form").onsubmit = function (e) {
    e.preventDefault();
    let product = {
        'name': document.getElementById("name").value,
        'description': document.getElementById("description").value,
        'category_id': document.getElementById("category").value,
        'provider_id': document.getElementById("provider").value,
        'stock': document.getElementById("stock").value,
        'price': document.getElementById("price").value
    };
    // ToDO: Validar los datos
    fetch(base_url('api/newproduct'), {
        method: 'POST',
        body: JSON.stringify(product),
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        }
    })
    .then(data => data.json())
    .then(datos => {
        showproducts(datos);
        document.getElementById("form").reset();
    });
};

function showproducts(datos) {
    let tbody = document.getElementById("products");
    tbody.innerHTML = "";
    datos.forEach(element => {
        let tr = document.createElement("tr");
        let td = document.createElement("td");
        td.textContent = element.product_id;
        tr.appendChild(td);
        td = document.createElement("td");
        td.textContent = element.name;
        tr.appendChild(td);
        td = document.createElement("td");
        td.textContent = element.description;
        tr.appendChild(td);
        td = document.createElement("td");
        td.textContent = element.category.name;
        tr.appendChild(td);
        td = document.createElement("td");
        td.textContent = element.provider.name;
        tr.appendChild(td);
        td = document.createElement("td");
        td.textContent = element.stock;
        tr.appendChild(td);
        td = document.createElement("td");
        td.textContent = element.price;
        tr.appendChild(td);
        td = document.createElement("td");
        td.innerHTML = `<a href="${base_url('api/deleteproduct/' + element.product_id)}"><i class="fa-solid fa-trash"></i></a>`;
        tr.appendChild(td);
        tbody.appendChild(tr);
    });
    asociarEventos();
}

function asociarEventos() {
    let links = document.querySelectorAll("table a");
    links.forEach(element => {
        element.onclick = function (e) {
            e.preventDefault();
            fetch(element.href)
                .then(data => data.json())
                .then(datos => {
                    showproducts(datos);
                })
                .catch(err => {
                    console.log(err);
                });
        };
    });
}


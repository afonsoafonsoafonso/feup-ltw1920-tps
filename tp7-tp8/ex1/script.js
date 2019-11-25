let bytag = document.getElementsByTagName("form");
console.log(bytag.outerHTML);

let byquery = document.querySelector("form label:nth-of-type(2) input");
console.log(byquery.outerHTML);

let byqueryall = document.querySelectorAll("form label input, form input");
for(let query in byqueryall) {
    console.log(byqueryall[query].outerHTML);
}

let form = document.getElementsByTagName('form')[0];
form.addEventListener('submit', function() {
    let table = document.querySelector("#products");
    let description = document.querySelector("form label:nth-of-type(1) input").value;
    let quantity = document.querySelector("form label:nth-of-type(2) input").value;
    console.log(description);
    console.log(quantity);
    console.log(table);
    let element = document.createElement('tr');
    element.innerHTML = '<td>' + description + '</td>' + '<td> <input value = "' + quantity + '"></td><td><input type="button" value="Remove"></td></tr>';
    table.append(element);
    alert('Submitted!');
    event.preventDefault();
});




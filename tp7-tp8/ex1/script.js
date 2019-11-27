let bytag = document.getElementsByTagName("form");
console.log(bytag.outerHTML);

let byquery = document.querySelector("form label:nth-of-type(2) input");
console.log(byquery.outerHTML);

let byqueryall = document.querySelectorAll("form label input, form input");
for(let query in byqueryall) {
    console.log(byqueryall[query].outerHTML);
}



let form = document.getElementsByTagName('form')[0];

form.addEventListener('submit', function(event) {
  let line = document.createElement('tr');

  let description = document.querySelector('form input[name=description]').value;
  let quantity = document.querySelector('form input[name=quantity]').value;

  line.innerHTML = `<tr><td>${description}</td><td><input id="quantity" value="${quantity}"></td><td><input id="remove" type="button" value="Remove"></tr>`;

  let table = document.getElementById('products');
  table.append(line);
  updateTotal(document);

  let remove = line.querySelector('input[type=button]');

  remove.addEventListener('click', function() {
      this.parentNode.parentNode.remove();
      updateTotal(document);
  });

  let change = line.querySelector('#quantity');

  change.addEventListener('change', function() {
      updateTotal(document);
  });

  event.preventDefault();
});

function updateTotal(document) {
    let total = document.querySelector('footer span');
    var new_total = 0;
      
    let quantities = document.querySelectorAll('#quantity');
      
    for(let i=0; i<quantities.length; i++) {
        new_total += parseInt(quantities[i].value);
    }

    total.innerHTML = new_total;
};



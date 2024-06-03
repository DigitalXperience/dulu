/* The design was inspired by https://uidesigndaily.com/posts/sketch-table-list-day-1262 */

const modalHaut = document.getElementById('modalHaut');
const modalAutre = document.getElementById('modalAutre');
var price = document.getElementById('price');
var total = document.getElementById('total');
var product_name = document.getElementById('product_name');
var number = document.getElementById('number');



const modal_1 = document.getElementById('modal');
const form = document.getElementById('form');

modalHaut.addEventListener('click', () => {
    price.value = 15000;
    total.value = 15000;
    number.value = 1;
    product_name.value = "HAUT";
    modal_1.style.display = 'block';
});
modalAutre.addEventListener('click', () => {
    price.value = 20000;
    total.value = 20000;
    number.value = 1;
    product_name.value = "AUTRE";
    modal_1.style.display = 'block';
});
// Open Modal

// Close Modal
window.addEventListener('click', e => {
    if(e.target === modal_1){
        modal_1.style.display = 'none';
    }
})

function updateAmount(that) {
    var total = document.getElementById('total');
    
    var num = parseInt(number.value);
    var total = parseInt(total.value);
    if(that.value == "minus"){
        if(num == 1){
            price.value = total;
        }else{
            num --;
            prix = total * num;
            price.value = prix;
        }
    }else{
        num++;
        prix = total * num;
        price.value = prix;
    }
    number.value = num;
    
}
const counter = document.getElementById('counter')
const button = document.querySelectorAll('.btn')
const harga = document.getElementById('total')
const input = document.getElementById('counter')

let count = 0;
let total = 0;

function increase() {
    var textbox = document.getElementById("counter");
    textbox.value++;
    total += 300000
    harga.value = total;
}
function decrease() {
    var textBox = document.getElementById("counter");
    textBox.value--;
    total -= 300000
    harga.value = total;
}



// function valueChanged(){
//     button.forEach((btn) => {
//         btn.addEventListener('click', (e) => {
//             const styles = e.currentTarget.classList
            
//             if (styles.contains('increase')){
//                 count++;
//                 if(count != 0){
//                     total += 300     
//                 }
//             } else if (styles.contains('decrease')){
//                 count--;
//                 if(count != 0){
//                     total -= 300
//                 }else if(count == 0){
//                     total = 0
//                 }
//             }else {
//                 count = 0;
//             }
//             input.value = count;
//             if(total != 0){
//                 harga.textContent = 'Rp. ' + total + ".000,0";
//             }else{
//                 harga.textContent = 'Rp. ' + total;
//             }
//         })
//     })
// }

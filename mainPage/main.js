const items = ["pongal","poori","uthapam","masaldosa","podidosa","dosa","vada","chickenbriyani","chickenfriedrice","vegbriyani","vegfriedrice","meals","parotta","meals","plaincake","blackforest","cupcake","carrot","jamun","donut","apple","banana","saltlime","orange","pineapple","pome","sweetlime","watermelon","coffee","tea","samosa","masalvada","uvada"];
document.cookie = "items=" + encodeURIComponent(items.join(','));
const quantity = [1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];

const subtotal = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];

function addquantity(id,index,id1,rate,id2)
{
    quantity[index]++;
    document.cookie = "quantity=" + encodeURIComponent(items.join(','));
    subtotal[index]=rate*quantity[index];
    let grandtotal = subtotal.reduce(function(a,b){
        return a+b;
    });
    document.getElementById(id).innerHTML=quantity[index];
    document.getElementById(id1).innerHTML=subtotal[index];
    document.getElementById(id2).innerHTML=grandtotal;
}
function lessquantity(id,index,id1,rate,subid,gtid)
{
    quantity[index]--;
    subtotal[index]=rate*quantity[index];
    let grandtotal = subtotal.reduce(function(a,b){
        return a+b;
    });
    document.getElementById(subid).innerHTML=subtotal[index];
    document.getElementById(gtid).innerHTML=grandtotal;
    document.getElementById(id).innerHTML=quantity[index];
    if(quantity[index] === 0)
    {
        document.getElementById(id1).style.display="none";
    }
}

var cartClickCount = 0;
function viewcart() {   
    document.getElementsByClassName('cart')[0].classList.add("active");
    document.getElementsByClassName("items-container1")[0].classList.add("items-containerMove");
    document.getElementsByClassName("items-container2")[0].classList.add("items-containerMove");
    document.getElementsByClassName("items-container3")[0].classList.add("items-containerMove");
    document.getElementsByClassName("items-container4")[0].classList.add("items-containerMove");
    document.getElementsByClassName("items-container5")[0].classList.add("items-containerMove");
    document.getElementById('orderbtn')[0].classList.add("active");
}

function closecart()
{   
    document.getElementsByClassName('cart')[0].classList.remove("active");
    document.getElementsByClassName("items-container1")[0].classList.remove("items-containerMove");
    document.getElementsByClassName("items-container2")[0].classList.remove("items-containerMove");
    document.getElementsByClassName("items-container3")[0].classList.remove("items-containerMove");
    document.getElementsByClassName("items-container4")[0].classList.remove("items-containerMove");
    document.getElementsByClassName("items-container5")[0].classList.remove("items-containerMove");
    document.getElementById('orderbtn').classList.toggle("orderbtnactive");

}

function cartClick() {
    cartClickCount += 1;
    if (cartClickCount%2 == 1) { viewcart(); } 
    else { closecart(); }
}

function setvisibility(id,property)
{
    document.getElementById(id).style.display=property;
}

function ValidateEmail(event, inputText){
    event.preventDefault();
    //remaining function logic goes here
 }


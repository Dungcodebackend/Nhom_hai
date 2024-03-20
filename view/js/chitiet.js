function sao() {
    var saoW = '<i class="far fa-star"></i>';
    var saoR = '<i style=" color: yellow;" class="fas fa-star"></i>';
    if (document.getElementById('ss').value == 1) {
        document.getElementById('s1').innerHTML = saoR;
        document.getElementById('s2').innerHTML = saoW;
        document.getElementById('s3').innerHTML = saoW;
        document.getElementById('s4').innerHTML = saoW;
        document.getElementById('s5').innerHTML = saoW;
    }
    if (document.getElementById('ss').value == 2) {
        document.getElementById('s1').innerHTML = saoR;
        document.getElementById('s2').innerHTML = saoR;
        document.getElementById('s3').innerHTML = saoW;
        document.getElementById('s4').innerHTML = saoW;
        document.getElementById('s5').innerHTML = saoW;
    }
    if (document.getElementById('ss').value == 3) {
        document.getElementById('s1').innerHTML = saoR;
        document.getElementById('s2').innerHTML = saoR;
        document.getElementById('s3').innerHTML = saoR;
        document.getElementById('s4').innerHTML = saoW;
        document.getElementById('s5').innerHTML = saoW;
    }
    if (document.getElementById('ss').value == 4) {
        document.getElementById('s1').innerHTML = saoR;
        document.getElementById('s2').innerHTML = saoR;
        document.getElementById('s3').innerHTML = saoR;
        document.getElementById('s4').innerHTML = saoR;
        document.getElementById('s5').innerHTML = saoW;
    }
    if (document.getElementById('ss').value == 5) {
        document.getElementById('s1').innerHTML = saoR;
        document.getElementById('s2').innerHTML = saoR;
        document.getElementById('s3').innerHTML = saoR;
        document.getElementById('s4').innerHTML = saoR;
        document.getElementById('s5').innerHTML = saoR;
    }
}
function checkMua() {
    var ip2 = document.getElementsByTagName('input')[2].value;
    if (ip2 <= 0) {
        alert('Số lượng không hợp lệ');
    }
}
function mua(){
    var sp=document.querySelector('.container').cloneNode(true);
}
function incrementValue() {
    var value = parseInt(document.getElementById('quantity').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('quantity').value = value;
}

function decrementValue() {
    var value = parseInt(document.getElementById('quantity').value, 10);
    value = isNaN(value) ? 0 : value;
    value--;
    document.getElementById('quantity').value = value;
}


function checkMua() {
    // Function logic here
}

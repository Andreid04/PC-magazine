let intel = document.getElementById('intel');
let amd = document.getElementById('amd');
let gamer = document.getElementById('gamer');
let creator = document.getElementById('creator');
let nvidia = document.getElementById('nvidia');
let radeon = document.getElementById('radeon');
let submit = document.getElementById('button');
let budgetOpt = document.getElementById('budget');

function show() {

    let price = budgetOpt.value;
    //console.log(price);
    let result = 'show0'; // Default to no PC available message

    if (creator.checked)
        result = findCreatorPc(price);
    else {
        if(intel.checked)
            result=findIntelPc(price,nvidia,radeon);
        else if(amd.checked)
            result=findAmdPc(price,nvidia,radeon);
    }

   // console.log(result);

    //set all show1-9 to no view
    for (let i = 0; i <= 9; i++) {
        let cards = document.getElementById('show'+String(i));
        //console.log(cards);
        if(cards)
            cards.style.display = 'none';
            
        }
    


    let card=document.getElementById(result);//display the correct PC
    if(card)
        card.style.display='block';
    //console.log(card);

}

function findIntelPc(price,n,r) {
    if (price === '500' && r.checked) {
        return 'show1';
    } else if (price === '1500' && n.checked) {
        return 'show2';
    } else if (price === '3000' && n.checked) {
        return 'show3';
    }
    return 'show0';
}

function findAmdPc(price,n,r) {
    if (price === '500' && r.checked) {
        return 'show4';
    } else if (price === '1500' && r.checked) {
        return 'show5';
    } else if (price === '3000' && n.checked) {
        return 'show6';
    }
    return 'show0';
}

function findCreatorPc(price) {
    if (price === '500') {
        return 'show7';
    } else if (price === '1500') {
        return 'show8';
    } else if (price === '3000') {
        return 'show9';
    }
    return 'show0';
}

submit.addEventListener('click', show);
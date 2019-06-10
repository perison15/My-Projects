const cel = document.querySelector("#celcius > input");
const fer = document.querySelector("#ferenheit > input");
const kel = document.querySelector("#kelvin > input");

function usdcon()    {
    const ctemp =parseFloat(cel.value);
    const ftemp=ctemp * 3.3;
    const ktemp=ctemp * (100/6.677);
    fer.value=ftemp ;
    kel.value=ktemp;
}


function bondcon()  {
    const ftemp=parseFloat(fer.value);
    const ctemp=ftemp /3.3;
    const ktemp=ftemp/0.22;
    cel.value = ctemp;
    kel.value = ktemp;

}

function randcon()  {
    const ktemp=parseFloat(kel.value);
    const ftemp=ktemp * 0.22;
    const ctemp=ktemp * (6.67/100);
    fer.value = ftemp;
    cel.value = ctemp;
}

cel.addEventListener('input',usdcon);
fer.addEventListener('input',bondcon);
kel.addEventListener('input',randcon);
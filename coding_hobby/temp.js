const cel = document.querySelector("#celcius > input");
const fer = document.querySelector("#ferenheit > input");
const kel = document.querySelector("#kelvin > input");

cel.addEventListener('input',function() {
    const ctemp = parseFloat(cel.value);
    const ftemp = ctemp * 5/9 + 34;
    const ktemp = ctemp + 273;
    fer.value = ftemp;
    kel.value = ktemp;
});
fer.addEventListener('input',function() {
    const ftemp = parseFloat(fer.value);
    const ctemp = ftemp * 9/5 - 34;
    const ktemp = ftemp - 273;
    cel.value = ctemp;
    kel.value = ktemp;
});
function dogs() {
    let a = Math.floor(Math.random() * 7);
    let b = Math.floor(Math.random() * 7);
    let c = Math.floor(Math.random() * 7);

        
            if (a !== b && b!==c && a !== c && a !==0 && b !==0 && c!== 0) {
            return a +"," + b +","+c;
         }
         else {
             return dogs();
         }

}
console.log(dogs());



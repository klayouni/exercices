// Return multiplication from 1 to n

// Input: 3
// Should return 1*2*3
// Output: 6

// Input: 5
// Should return 1*2*3*4*5
// Output: 120   -->

function fact(n) {
  let f = 1;
  for (let i = 1; i <= n; i++) {
    f = f * i;
  }
  return f;
}

let n = 5;
let f = fact(n);
console.log(`La factorielle de ` + n + ` est ` + f);
console.log(`La factorielle de ${n} est ${f}`);

// It's urgent, I need the noise of some animals for my application.
//     HELP !

//     Input: animalType
//     Output: animalNoise

//     Input: dog
//     Output : waf

//     Input: cat
//     Output : miaou

//     Input: cow
//     Output : meuh

function animalNoise(animalType) {
  if (animalType == "dog") {
    return "Dogs noise is waf";
  } else if (animalType == "cat") {
    return "Cats noise is miaou";
  } else if (animalType == "cow") {
    return "Cow noise is meuh";
  } else return "ERROR";
}

console.log(animalNoise("cat"));

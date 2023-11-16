// It's also urgent, I need the language of some countries for my application.
// HELP !

// Input: countryName
// Output: countryLanguage

// Input: France
// Output : français

// Input: England
// Output : english

// Input: United-States
// Output : english

// Input: España
// Output : español

function countryLanguage(countryName) {
  if (countryName == "France") {
    return "Francais is the language name";
  } else if (countryName == "England") {
    return "English is the language name";
  } else if (countryName == "United-States") {
    return "English is the language name";
  } else if (countryName == "España") {
    return "Español is the language name";
  }
}
console.log(countryLanguage("España"));
console.log(countryLanguage("France"));
console.log(countryLanguage("United-States"));
console.log(countryLanguage("England"));

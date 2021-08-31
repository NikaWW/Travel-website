// array of possible countries in the same order as they appear in the country selection list
var countryLists = new Array(4);
countryLists["empty"] = ["Select a Country"];
countryLists["North America"] = ["Canada", "United States"];
countryLists["South America"] = ["Brazil"];
countryLists["Asia"] = ["Japan", "China"];
countryLists["Europe"] = ["France", "Spain"];

// CountryChange() is called from the onchange event of a select element.
function countryChange(selectObj) {

  var idx = selectObj.selectedIndex;
  var which = selectObj.options[idx].value;
  cList = countryLists[which];

  var cSelect = document.getElementById("country");
  // remove the current options from the country select
  var len = cSelect.options.length;
  while (cSelect.options.length > 0) {
    cSelect.remove(0);
  }
  var newOption;
  // create new options
  for (var i = 0; i < cList.length; i++) {
    newOption = document.createElement("option");
    newOption.value = cList[i];
    newOption.text = cList[i];


    try {
      cSelect.add(newOption); // this will fail in DOM browsers but is needed for IE
    } catch (e) {
      cSelect.appendChild(newOption);
    }
  }
}


function countryShow(selectObj) {

  var idx = selectObj.selectedIndex;
  var which = selectObj.options[idx].value;

  console.log(which);

}
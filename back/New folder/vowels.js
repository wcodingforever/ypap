

function replaceVowels(str){
    var charArr = str.split("");
    console.log(charArr);
    var vowels = ["a", "i", "u", "e", "o", "u"];

    for(var i = 0; i <charArr.length; i++){
        var char = charArr[i];
        for(var k = 0; k<vowels.length; k++){
            var vowel = vowels[k];             
            if(char.toLowerCase() === vowel){
                char = "!";
                break;
            }
        }
        charArr[i] = char;
    }
    return charArr.join("");
}

var str = replaceVowels("iIEOUeou");
console.log(str);



var str=  "Yeni";
var arr = str.split("");

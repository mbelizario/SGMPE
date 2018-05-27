$(document).ready(function(){

    //janeiro
    var inicialValueJan = $("#inicialValueJan").text();
    inicialValueJan = convertStringToNumber(inicialValueJan);
    var monthValueJan = $("#monthValueJan").text();
    monthValueJan = convertStringToNumber(monthValueJan);
    var finalValueJan = inicialValueJan + monthValueJan;
    $("#finalValueJan").text("R$ "+convertToMoney(finalValueJan));

    //fevereiro
    $("#inicialValueFeb").text($("#finalValueJan").text());
    var inicialValueFeb = $("#inicialValueFeb").text();
    inicialValueFeb = convertStringToNumber(inicialValueFeb);
    var monthValueFeb = $("#monthValueFeb").text();
    monthValueFeb = convertStringToNumber(monthValueFeb);
    var finalValueFeb = inicialValueFeb + monthValueFeb;
    $("#finalValueFeb").text("R$ "+convertToMoney(finalValueFeb));

    //março
    $("#inicialValueMar").text($("#finalValueFeb").text());
    var inicialValueMar = $("#inicialValueMar").text();
    inicialValueMar = convertStringToNumber(inicialValueMar);
    var monthValueMar = $("#monthValueMar").text();
    monthValueMar = convertStringToNumber(monthValueMar);
    var finalValueMar = inicialValueMar + monthValueMar;
    $("#finalValueMar").text("R$ "+convertToMoney(finalValueMar));
    
    //abril
    $("#inicialValueApr").text($("#finalValueMar").text());
    var inicialValueApr = $("#inicialValueApr").text();
    inicialValueApr = convertStringToNumber(inicialValueApr);
    var monthValueApr = $("#monthValueApr").text();
    monthValueApr = convertStringToNumber(monthValueApr);
    var finalValueApr = inicialValueApr + monthValueApr;
    $("#finalValueApr").text("R$ "+convertToMoney(finalValueApr));
    //Maio
    $("#inicialValueMay").text($("#finalValueApr").text());
    var inicialValueMay = $("#inicialValueMay").text();
    inicialValueMay = convertStringToNumber(inicialValueMay);
    var monthValueMay = $("#monthValueMay").text();
    monthValueMay = convertStringToNumber(monthValueMay);
    var finalValueMay = inicialValueMay + monthValueMay;
    $("#finalValueMay").text("R$ "+convertToMoney(finalValueMay));
    //junho
    $("#inicialValueJun").text($("#finalValueMay").text());
    var inicialValueJun = $("#inicialValueJun").text();
    inicialValueJun = convertStringToNumber(inicialValueJun);
    var monthValueJun = $("#monthValueJun").text();
    monthValueJun = convertStringToNumber(monthValueJun);
    var finalValueJun = inicialValueJun + monthValueJun;
    $("#finalValueJun").text("R$ "+convertToMoney(finalValueJun));
   //julho 
    $("#inicialValueJul").text($("#finalValueJun").text());
    var inicialValueJul = $("#inicialValueJul").text();
    inicialValueJul = convertStringToNumber(inicialValueJul);
    var monthValueJul = $("#monthValueJul").text();
    monthValueJul = convertStringToNumber(monthValueJul);
    var finalValueJul = inicialValueJul + monthValueJul;
    $("#finalValueJul").text("R$ "+convertToMoney(finalValueJul));

    //agosto
    $("#inicialValueAug").text($("#finalValueJul").text());
    var inicialValueAug = $("#inicialValueAug").text();
    inicialValueAug = convertStringToNumber(inicialValueAug);
    var monthValueAug = $("#monthValueAug").text();
    monthValueAug = convertStringToNumber(monthValueAug);
    var finalValueAug = inicialValueAug + monthValueAug;
    $("#finalValueAug").text("R$ "+convertToMoney(finalValueAug));
    //setembro
    $("#inicialValueSep").text($("#finalValueAug").text());
    var inicialValueSep = $("#inicialValueSep").text();
    inicialValueSep = convertStringToNumber(inicialValueSep);
    var monthValueSep = $("#monthValueSep").text();
    monthValueSep = convertStringToNumber(monthValueSep);
    var finalValueSep = inicialValueSep + monthValueSep;
    $("#finalValueSep").text("R$ "+convertToMoney(finalValueSep));
    //outubro
    $("#inicialValueOct").text($("#finalValueSep").text());
    var inicialValueOct = $("#inicialValueOct").text();
    inicialValueOct = convertStringToNumber(inicialValueOct);
    var monthValueOct = $("#monthValueOct").text();
    monthValueOct = convertStringToNumber(monthValueOct);
    var finalValueOct = inicialValueOct + monthValueOct;
    $("#finalValueOct").text("R$ "+convertToMoney(finalValueOct));
    //novembro
    $("#inicialValueNov").text($("#finalValueOct").text());
    var inicialValueNov = $("#inicialValueNov").text();
    inicialValueNov = convertStringToNumber(inicialValueNov);
    var monthValueNov = $("#monthValueNov").text();
    monthValueNov = convertStringToNumber(monthValueNov);
    var finalValueNov = inicialValueNov + monthValueNov;
    $("#finalValueNov").text("R$ "+convertToMoney(finalValueNov));
    //dezembro
    $("#inicialValueDec").text($("#finalValueNov").text());
    var inicialValueDec = $("#inicialValueDec").text();
    inicialValueDec = convertStringToNumber(inicialValueDec);
    var monthValueDec = $("#monthValueDec").text();
    monthValueDec = convertStringToNumber(monthValueDec);
    var finalValueDec = inicialValueDec + monthValueDec;
    $("#finalValueDec").text("R$ "+convertToMoney(finalValueDec));
    console.log();
});

//converte um valor do banco, exemplo R$ 1.468,00 em float -> 1468.00
function convertStringToNumber(string)
{
    string = string.replace("R$ ", "");
    string = string.replace(".", "");
    // string = string.replace(",", ".");

    string = parseFloat(string);
    // string = string.toFixed(2);
    return string;
}


function convertToMoney(value)
{
    value = value.toFixed(2).replace(/./g, function(c, i, a) {
        return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
    });
    value = value.replace(".", "--");
    value = value.replace(",", ".");
    value = value.replace("--", ",");

    return value;
}
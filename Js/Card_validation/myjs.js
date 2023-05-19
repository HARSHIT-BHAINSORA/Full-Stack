
card_number1 = (input_text) =>{
    var card_no = /^(?:5[1-5][0-9]{14})$/;

    if(input_text.value.match(card_no))
        return true;
    else
    {
        alert("Not a Valid Master card!!!");
        return false;
    }       
}

card_number2 = (input_text) =>{
    var card_no = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;

    if(input_text.value.match(card_no))
        return true;
    else
    {
        alert("Not a Valid Visa card!!!");
        return false;
    }       
}



card_number3 = (input_text) =>{
    var card_no = /^(?:3[47][0-9]{13})$/;

    if(input_text.value.match(card_no))
        return true;
    else
    {
        alert("Not a Valid American Express card!!!");
        return false;
    }       
}
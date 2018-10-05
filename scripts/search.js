//open amazon in new tab + search
document.getElementById("search").onclick = function()
{
    var input = document.getElementById("userInput").value;
    var url = "https://www.amazon.ca/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=" + input;
    window.open(url, '_blank');
    //sample upc: 735858350181
};

//reset (clear fields)
document.getElementById("reset").onclick = function()
{
    document.getElementById("result").innerHTML = "&nbsp";
    document.getElementById("userInput").value = "";
    document.getElementById("userInput").focus();
    input = "";
};
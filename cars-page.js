
function showType(clicked) {
    let types = ['compact', 'midsize', 'suv', 'luxury'];
    //var chosen = document.getElementById(clicked);
    //console.log(clicked)
    types.forEach((type) => {
        if (type != clicked) {
            document.getElementById(type).style.display = "none";
        } else {
            document.getElementById(type).style.display = "flex";
        }
        /*
        if (chosen != document.getElementById(type)){
            document.getElementById(type).style.display = "none";
        } else {
            document.getElementById(element).style.display = "flex";
        }
            //  chosen.style.display = "flex";
        */
     });

}

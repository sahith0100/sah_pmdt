function select(e,item) {
    e = e || window.event; 
    var anchor_name=item.getAttribute('name');
    document.querySelector("#header-content").value=anchor_name;
 }
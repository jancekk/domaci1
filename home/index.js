let citat = document
    .getElementById("citat")
    .addEventListener("click", citatDana);

function citatDana(){
    myWindow = window.open("", "myWindow", "width=200,height=500, top=100,left=500,");
    myWindow.document.write("<p>You can have anything you want in life if you dress for it.</p>");
}

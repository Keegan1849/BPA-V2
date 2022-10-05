function addMyItem(make){
  var myHTML = "<a href=\"onclick=addItem2(1)\">Ranger</a>";
  myHTML += "<a href=\"onclick=addItem2(1)\">F150</a>";
  myHTML += "<a href=\"onclick=addItem2(1)\">Mustang</a>";
  switch(make) {
      case 1:
          myHTML = "<a href=\"onclick=addItem2(1)\">Blazer</a>";
          myHTML += "<a href=\"onclick=addItem2(1)\">Silverado</a>";
          myHTML += "<a href=\"onclick=addItem2(1)\">Colorado</a>";
          break;
      case 2:
          myHTML = "<a href=\"onclick=addItem2(1)\">Ram</a>";
          myHTML += "<a href=\"onclick=addItem2(1)\">Challenger</a>";
          myHTML += "<a href=\"onclick=addItem2(1)\">Charger</a>";
          break;
      case 3:
          myHTML = "<a href=\"onclick=addItem2(1)\">Ranger</a>";
          myHTML += "<a href=\"onclick=addItem2(1)\">F150</a>";
          myHTML += "<a href=\"onclick=addItem2(1)\">Mustang</a>";
          break;
      case 4:
          myHTML = "<a href=\"onclick=addItem2(1)\">Cyclone</a>";
          myHTML += "<a href=\"onclick=addItem2(1)\">Jimmy</a>";
          myHTML += "<a href=\"onclick=addItem2(1)\">Sierra</a>";    
          break;
      default:
          console.log('Error Occured!!!');
  }
  document.getElementById("modelMenu").innerHTML = myHTML;
}
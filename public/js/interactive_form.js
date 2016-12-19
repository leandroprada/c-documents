// function timeNow(i) {
// var d = new Date(),
//     h = (d.getHours()<10?'0':'') + d.getHours(),
//     m = (d.getMinutes()<10?'0':'') + d.getMinutes();
// i.value = h + ':' + m;
// }
//
// function dateNow(j) {
// var dia = new Date();
// var dd =dia.getDate();
// var mm =dia.getMonth()+1;
// var yyyy = dia.getFullYear();
// if (dd<10){dd='0'+dd}
// if (mm<10){mm='0'+mm}
// dia= yyyy+'-'+mm+'-'+dd
//      j.value =dia;
//      }
//
// document.getElementById("rubro").addEventListener("change", elegirSegundoSelect, true);
//
// function elegirSegundoSelect(){
// valorDeSelect1= document.getElementById("rubro").selectedIndex
// tarjeta =document.getElementById("rubro_tarjeta");
// trini =document.getElementById("rubro_trini");
// coghlan = document.getElementById("rubro_coghlan");
// varios = document.getElementById("rubro_varios");
//
//   if (valorDeSelect1==1) {
//     trini.style.display = "block";
//    tarjeta.style.display = "none";
//    coghlan.style.display = "none";
//    varios.style.display = "none";
//    }
// if (valorDeSelect1==2) {
//   tarjeta.style.display = "block";
//   trini.style.display = "none";
//   coghlan.style.display = "none";
//   varios.style.display = "none";
// }
// if (valorDeSelect1==3) {
//   trini.style.display = "none";
//  tarjeta.style.display = "none";
//  coghlan.style.display = "block";
//  varios.style.display = "none";
//  }
// if (valorDeSelect1==4) {
//   tarjeta.style.display = "none";
//   trini.style.display = "none";
//   coghlan.style.display = "none";
//   varios.style.display = "none";
//   }
// if (valorDeSelect1==5) {
//   trini.style.display = "none";
//  tarjeta.style.display = "none";
//  coghlan.style.display = "none";
//  varios.style.display = "none";
//  }
// if (valorDeSelect1==6) {
//   tarjeta.style.display = "none";
//   trini.style.display = "none";
//   coghlan.style.display = "none";
//   varios.style.display = "block";
//   }
//
//
//
// }
//
//
// function completar(){
// //selectores de DOM
//   project = document.getElementById("project_id");
//   division = document.getElementById("division_id");
//   discipline = document.getElementById("discipline_id");
//   area = document.getElementById("area_id");
//   numberValue = document.getElementById("number");
//   numberText = numberValue.value;
// //ifs para llenar los campos con vacio o algo
//
// if (project.selectedIndex !==0) {
//     projectText= project.options[project.selectedIndex].text
//   }
//   else {projectText = ""}
//
//   if (division.selectedIndex !==0) {
//       divisionText= division.options[division.selectedIndex].text
//     }
//     else {divisionText = ""}
// if (discipline.selectedIndex !==0) {
//     disciplineText= discipline.options[discipline.selectedIndex].text
//   }
//   else {disciplineText = ""}
//
//   if (area.selectedIndex !==0) {
//       areaText= area.options[area.selectedIndex].text
//     }
//     else {areaText = ""}
//
// //trims de los campos
//   tp = projectText.trim();
//   td1 = divisionText.trim();
//   td2 = disciplineText.trim();
//   ta = areaText.trim();
//   tn = numberText.trim();
//
// //damos valor a la descripcion;
//   var desc = tp+"-"+td1+"-"+td2+"-"+ta+"-"+tn;
//   var descripcionSinGuiones =desc.replace( "  ", "")
// numberText.value = desc;
// // function valoresDeDesc() {
// // if  ((tr !== "") AND (to !== ""))
// // {return tr+" "+tt+" "+to;}
// // else if   ((tr !== "") AND (tc !== ""))
// // {return tr+" "+tc+" "+to;}
// // else if   ((tr !== "") AND (ti !== ""))
// // {return tr+" "+ti+" "+to;}
// // else if   ((tr !== "") AND (tv !== ""))
// // {return tr+" "+tv+" "+to;}
//
//
//
//
//
// }

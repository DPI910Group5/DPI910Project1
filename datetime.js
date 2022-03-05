var NowDate = new Date();
var Full_Date = NowDate.getFullYear()+'-'+(NowDate.getMonth()+1)+'-'+NowDate.getDate();
var Finaltime = NowDate.getHours() + ":" + NowDate.getMinutes() + ":" + NowDate.getSeconds();
var CurrentTime = Finaltime+' '+ Full_Date;
document.getElementById("date").innerHTML = CurrentTime;

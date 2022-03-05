// var NowDate = new Date();
// var Full_Date = NowDate.getFullYear()+'-'+(NowDate.getMonth()+1)+'-'+NowDate.getDate();
// var Finaltime = NowDate.getHours() % 12 || 12 + ":" + NowDate.getMinutes() < 10 + ":" + NowDate.getSeconds();
// var CurrentTime = Finaltime+' '+ Full_Date;
// document.getElementById("date").innerHTML = CurrentTime;


var NowDate = new Date();
var Full_Data = NowDate.getFullYear()+'-'+(NowDate.getMonth()+1)+'-'+NowDate.getDate();
var Fullhour = NowDate.getHours();
var hr = NowDate.getHours();
var min = NowDate.getMinutes();
var sec = NowDate.getSeconds();
var amOrpm = 'pm';
if (min < 10) {
  min = "0" + min;
}
if (hr > 12) {
  hr = hr - 12;
}    
if(hr==0){ 
  hr=12;
}
if(Fullhour < 12) {
    amOrpm = 'am';
}     
document.getElementById('date').innerHTML =  + hr+':'+min+':'+sec +' '+amOrpm + '<br>' +Full_Data;

var fade_in_form=0;
var fade_out_form=10;
function fadeIn(element){
var target= document.getElementById(element)
target.style.display="block";
var newSetting=fade_in_form/10;
target.style.opacity=newSetting;
fade_in_form++;
if(fade_in_form==10)
{
target.style.opacity=1;
clearTimeout(loopTimer);
fade_in_form=0;
return false;

}
var loopTimer=setTimeout('fadeIn(\''+element+'\')',50);

} 
function fadeout(element)
{
var target=document.getElementById(element);
var newSetting=fade_out_form/10;
target.style.opacity=newSetting;
fade_out_form--;
if(fade_out_form==0)
{
target.style.opacity=0;
target.style.display=""none;
clearTimeout(loopTimer);
fade_out_form=10;
 return false;
}
var loopTimer =setTimeout('fadeOut''+element+'\')',50);

}
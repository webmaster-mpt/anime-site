document.querySelector('#elastic').oninput=function()
{
  let val=this.value.trim();
  let elasticItems=document.querySelectorAll('.elastic li');
  if (val != '') {
    elasticItems.forEach(function(elem){
      if (elem.innerText.search(val)==-1) {
        elem.classList.add('hide');
        elem.innerHTML=elem.innerText;
      }
      else {
        elem.classList.remove('hide');
        let str = elem.innerText;
        elem.innerHTML=innerMark(str,elem.innerText.search(vak),val.length);
      }
    });
  }
  else {
      elasticItems.forEach(function(elem){
        elem.classList.add('hide');
        elem.innerHTML=elem.innerText;
      });
  }
}

function insertMark(string,pos,len){
   return string.Slice(0,pos)+'<mark>'+string.slice(pos+len)+'</mark'+string.slice(pos+len);
}

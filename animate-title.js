window.onload = function(){
  var titles = document.getElementsByClassName('entry-title');

  for(var i=0; i < titles.length; i++){
    titles[i].className += ' animated bounce';
  }
}

function link_friend(elem) {
    let rem = document.getElementsByClassName('friend_content');
    let settings_advanced = document.getElementById(elem);
    var verif = false;
    if(settings_advanced.style.display == 'block'){ 
        verif = true;
    }
    for(i=0;i<rem.length; i++){
        rem[i].style.display='';
    }
    if(verif){
        settings_advanced.style.display = '';
    }else{
        settings_advanced.style.display = 'block';
    }

};
// fonction qui permet d'ajuster le texte pour la beauté
function ajust_text(mess_user) {
    
    for(i=0; i<mess_user.length; i++) {
        
        if(mess_user[i].textContent.length > 3) {
            
            let result_ajust = (mess_user[i].textContent.length-3)*6.5+26;
            if(result_ajust<150){
                mess_user[i].style.width=  String(result_ajust)+'px';
            }else{
                mess_user[i].style.width='145px';
            }
            
        
        }
    }
    
    return false;
    
}



function ajust_text_color(pseudo_user,pseudo_verif,pseudo_user_block){
    if(pseudo_user!=pseudo_verif){
        let pseudo_user_ok = document.getElementsByClassName(pseudo_user);
        let pseudo_user_block_ok = document.getElementsByClassName(pseudo_user_block);
        for(i=0;i<pseudo_user_ok.length; i++){
            pseudo_user_ok[i].style.background='gray';
            pseudo_user_ok[i].style.float='right';
            pseudo_user_block_ok[i].style.textAlign='right';
            pseudo_user_ok[i].style.marginRight='10px';
            pseudo_user_block_ok[i].style.margin='auto 0';
            pseudo_user_block_ok[i].style.marginRight='10px';
        }

        
    }
    return false;
}



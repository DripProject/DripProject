// function appear_div (link_page){
//     document.cookie='DAL='+link_page+'; path=/;';
// }

function check_appear(){
    let url_verif = String(window.location.hash).split('#')[1];
    var div_concerned = document.getElementById(url_verif);
    if(div_concerned!=null){
        div_concerned.style.display='block';
    }
    else{
        let check_ = document.querySelector('div');
        check_.style.display='block';
        

}
}



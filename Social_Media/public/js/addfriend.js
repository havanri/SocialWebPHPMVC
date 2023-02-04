const addFriendbtn = document.querySelector('.js-addfriend-btn');
addFriendbtn.addEventListener('click',changeBtn);
function changeBtn(){
    if(addFriendbtn.textContent==="Thêm bạn bè"){
        window.location.assign('http://localhost/Social_Media/index.php?url=profile/addFriend/'+addFriendbtn.id);
    }
    else if(addFriendbtn.textContent==="Chấp nhận"){
        //=>responding = > successa
       // alert('haha');
        window.location.assign('http://localhost/Social_Media/index.php?url=profile/AcceptFriend/'+addFriendbtn.id);
    }
    else if(addFriendbtn.textContent==="Bạn bè"){
        //=>Remove addfriend
        window.location.assign('http://localhost/Social_Media/index.php?url=profile/RemoveFriend/'+addFriendbtn.id);
    }
    else{
        //=>Remove addfriend
        window.location.assign('http://localhost/Social_Media/index.php?url=profile/RemoveFriend/'+addFriendbtn.id);
    }  
}
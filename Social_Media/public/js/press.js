//Khai báo
var listLike = [];
var listUser = [];
var listPost = [];
var listComment = [];
var listFriend = [];
var id_user;

function getListLike(data){
    const list = [];
    let a = data.map( (item) => item.Likes);
    //a mảng chứa các mảng(User,Likes) chứa các mảng(0,1,2) chứa đối tượng(id,ten,tuoi)
    //console.log(a);
    a.forEach(element => {
        //elemnt mảng chứa mảng chứa đối tượng
        //console.log(element);
        element.forEach(element_child =>{
            //elemnt_child mảng chứa đối tượng
            list.push(element_child);
        })
    });
    return list;
}

function getListUser(data){
    const list = [];
    let a = data.map( (item) => item.Users);
    //a mảng chứa các mảng(User,Likes) chứa các mảng(0,1,2) chứa đối tượng(id,ten,tuoi)
    //console.log(a);
    a.forEach(element => {
        //elemnt mảng chứa mảng chứa đối tượng
        //console.log(element);
        element.forEach(element_child =>{
            //elemnt_child mảng chứa đối tượng
            list.push(element_child);
        })
    });
    return list;
}

function getListPost(data){
    const list = [];
    let a = data.map( (item) => item.Posts);
    //a mảng chứa các mảng(User,Likes) chứa các mảng(0,1,2) chứa đối tượng(id,ten,tuoi)
    //console.log(a);
    a.forEach(element => {
        //elemnt mảng chứa mảng chứa đối tượng
        //console.log(element);
        element.forEach(element_child =>{
            //elemnt_child mảng chứa đối tượng
            list.push(element_child);
        })
    });
    return list;
}
function getListComment(data){
    const list = [];
    let a = data.map( (item) => item.Comments);
    //a mảng chứa các mảng(User,Likes) chứa các mảng(0,1,2) chứa đối tượng(id,ten,tuoi)
    //console.log(a);
    a.forEach(element => {
        //elemnt mảng chứa mảng chứa đối tượng
        //console.log(element);
        element.forEach(element_child =>{
            //elemnt_child mảng chứa đối tượng
            list.push(element_child);
        })
    });
    return list;
}
function getUser(data){
    var user;
    let a = data.map( (item) => item.id_user);
    a.forEach(element => {
        user=element;
    });
    //console.log(user);
    return user;
}
//=================request friend=============//
function acc(idUserSend){
    window.location.assign('http://localhost/Social_Media/index.php?url=home/AcceptFriend/'+idUserSend);
    for(i=0;i<requests.length;i++){
        const request = requests[i];
        if(request.id==idUserSend){
            request.classList.add('hide');
        }
    }
}
function dec(idUserSend){
    window.location.assign('http://localhost/Social_Media/index.php?url=home/DeclineFriend/'+idUserSend);
    for(i=0;i<requests.length;i++){
        const request = requests[i];
        if(request.id==idUserSend){
            request.classList.add('hide');
        }
    }
}
/*const acceptBtns = document.querySelectorAll('.accept-friend-btn');
const declineBtns = document.querySelectorAll('.decline-friend-btn');
const requests = document.querySelectorAll('.js-request');
for(i=0;i<acceptBtns.length;i++){
    const acceptBtn = acceptBtns[i];
    const declineBtn = declineBtns[i];
    const request = requests[i];
    acceptBtn.addEventListener('click',declineFriendFriend(request.id));
    //declineBtn.addEventListener('click',declineFriend(request.id));
}
function acceptFriend(idUserSend){
    alert(idUserSend);
    window.location.assign('http://localhost/Social_Media/index.php?url=home/AcceptFriend/'+idUserSend);
    for(i=0;i<requests.length;i++){
        const request = requests[i];
        if(request.id==idUserSend){
            request.classList.add('hide');
        }
    }
}
function declineFriendFriend(idUserSend){
    alert(idUserSend);
    window.location.assign('http://localhost/Social_Media/index.php?url=home/DeclineFriend/'+idUserSend);
}*/
function removeLike(id_post){
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if(this.readyState==4){
           var data=JSON.parse(this.responseText);
           listLike = getListLike(data);          
           listUser = getListUser(data);          
           listPost = getListPost(data);  
           id_user = getUser(data);
           //
           listUser.forEach(elements=>{
            console.log(elements['full_name']);
            });
            listLike.forEach(elements=>{
                console.log(elements['id_like']);
            });
            listPost.forEach(elements=>{
                    console.log(elements['content']);
            });
            //Tym 
            const TymBtns = document.querySelectorAll('.js-heart-btn');
            const countLikes = document.querySelectorAll('.js-count-like');
            const likebys = document.querySelectorAll('.js-avatar-like');
            const vvcs = document.querySelectorAll('.js-avatar-like-like');
            const jsvvs=document.querySelectorAll('js-vv');
            for(i=0;i<TymBtns.length;i++){
                const TymBtn=TymBtns[i];
                const countLike=countLikes[i];
                const vvc = vvcs[i];
                const likeby=likebys[i];
                const jsvv = jsvvs[i];
                
                //Xac dinh id post dc chon
                if(TymBtn.parentNode.id==id_post){
                    listPost.forEach(post_element=>{
                        //check trung` post
                        if(post_element['id_post']==id_post){
                            var count = 0;
                            listLike.forEach(like_element=>{
                                //duyet like co id_post trung` post
                                if(post_element['id_post']==like_element['id_post']){
                                    count++;
                                    
                                }
                            });
                            if(count ==0){
                                countLike.textContent=0;
                            }
                            else if(count ==1){
                                countLike.textContent=""; 
                            }
                            else{
                                countLike.textContent=" and "+(count-1)+" others";
                            }
                        }
                    });
                    //count Like
                    
                    
                     
                }
            }
            //remove Tym
            for(i=0;i<vvcs.length;i++){
                const vvc = vvcs[i];
                //check post chứa tym 
                if(vvc.parentNode.id == id_post){
                    if(vvc.id==id_user){
                        vvc.remove();
                    }
                }
            }
            //
            
           
       }
    }
    xmlhttp.open("GET", "http://localhost/Social_Media/index.php?url=home/RemoveLike");
    xmlhttp.send();
}
function addLike(id_post){
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if(this.readyState==4){
           var data=JSON.parse(this.responseText);
           listLike = getListLike(data);          
           listUser = getListUser(data);          
           listPost = getListPost(data);  
           id_user = getUser(data);
           //
           listUser.forEach(elements=>{
            console.log(elements['full_name']);
            });
            listLike.forEach(elements=>{
                console.log(elements['id_like']);
            });
            listPost.forEach(elements=>{
                    console.log(elements['content']);
            });
            //Tym 
            const TymBtns = document.querySelectorAll('.js-heart-btn');
            const countLikes = document.querySelectorAll('.js-count-like');
            const likebys = document.querySelectorAll('.js-avatar-like');
            const vvs = document.querySelectorAll('.js-vv');
            //const avatarUserLike = document.querySelectorAll('.js-img-like');
            for(i=0;i<TymBtns.length;i++){
                const TymBtn=TymBtns[i];
                const countLike=countLikes[i];
                const likeby=likebys[i];
                const vv=vvs[i]; 
                //Xac dinh id post dc chon
                if(TymBtn.parentNode.id==id_post){
                    listPost.forEach(post_element=>{
                        //check trung` post
                        if(post_element['id_post']==id_post){
                            var count = 0;
                            var countAvatar=0;
                            listLike.forEach(like_element=>{
                                //duyet like co id_post trung` post
                                if(post_element['id_post']==like_element['id_post']){
                                    count++;
                                    countAvatar++;
                                    if(like_element['id_user']==id_user){
                                        TymBtn.id=like_element['id_like'];
                                        listUser.forEach(user_element=>{
                                            if(user_element['id_user']==id_user){
                                               // const b = document.createElement("b");
                                               // b.innerHTML=user_element['full_name'];
                                               // const child = vv.firstChild;
                                                //alert(child.textContent);
                                                //child.remove();
                                               // vv.insert(b,vv.firstChild);
                                                var url = user_element['avatar_url'];
                                                const p =document.createElement("span");
                                                p.innerHTML = "<img src='"+url+"' alt=''>";                                           
                                                p.setAttribute("class", "js-avatar-like-like");
                                                p.setAttribute("id", id_user);
                                                likeby.setAttribute("id",post_element['id_post']);
                                                //likeby.appendChild(p);
                                                likeby.insertBefore(p,vv);
                                                //.innerHTML =  "<span><img src='"+url+"' alt=''></span>";
                                                
                                                //document.write("<span><img src='"+url+"' alt=''></span>");
                                            }
                                        });
                                    }    
                                }
                            }
                            );
                            if(count ==0){
                                countLike.textContent=0;
                            }
                            else if(count ==1){
                                listUser.forEach(user_element=>{
                                    if(user_element['id_user']==post_element['id_user']){
                                        countLike.textContent=user_element['full_name']; 
                                    }
                                });
                                
                            }
                            else{
                                countLike.textContent=" and "+(count-1)+" others";
                            }
                        }
                    });
                    //count Like
                    for(i=0;i<vvs.length;i++){
                        const vv = vvs[i];
                        const likeby = likebys[i];
                        //check post chứa tym 
                        if(likeby.parentNode.id == id_post){
                            listUser.forEach(user_element=>{
                                if(user_element['id_user']==id_user){
                                    
                                }
                            });
                        }
                    }
                    
                    
                }
                
            }
            //count like
            
           
       }
    }
    xmlhttp.open("GET", "http://localhost/Social_Media/index.php?url=home/AddLike");
    xmlhttp.send();
}

//=====================Tym bài viết===========================
const TymBtns = document.querySelectorAll('.js-heart-btn');
for(i=0;i<TymBtns.length;i++){
    const TymBtn=TymBtns[i];
    TymBtn.onclick=function popupTym(){
        
        //check xem class setColor-pink có tồn tại không
        if(TymBtn.classList.contains('setColor-pink')){
            //xoa likes trong database
            TymBtn.classList.remove('setColor-pink');
            createCookie("postID_like", TymBtn.parentNode.id, "1");
            createCookie("id_like", TymBtn.id, "1");
            const id_post=TymBtn.parentNode.id;
            //createCookie("postID_like", TymBtn.parentNode.id, "1");
            removeLike(id_post);
        }
        else {
            TymBtn.classList.add('setColor-pink');
             //add likes trong database
             //createCookie("id_like", TymBtn.id, "1");
             createCookie("postID_like", TymBtn.parentNode.id, "1");
             //addLike();
             const id_post=TymBtn.parentNode.id;
             addLike(id_post);
             
             //set id_like for id js-heart-btn;
             
        }
    }
}
//Truy cập profile//
const actionImgs= document.querySelectorAll('.js-feed-img');
const actionNames= document.querySelectorAll('.js-feed-name');

for(i=0;i<actionImgs.length;i++){
    const actionImg = actionImgs[i];
    const actionName = actionNames[i];
    actionImg.addEventListener('click',()=>{
        window.location.assign('http://localhost/Social_Media/index.php?url=home/profile/'+actionImg.id);
    });
    actionName.addEventListener('click',()=>{
        window.location.assign('http://localhost/Social_Media/index.php?url=home/profile/'+actionImg.id);
    });
}

/*function addLike() {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if(this.readyState==4){
           const data=JSON.parse(this.responseText);
           render(data);
       }
    }
    xmlhttp.open("GET", "http://localhost/Social_Media/index.php?url=home/AddLike");
    xmlhttp.send();
}
function render(data){  
    

    let a = data.map( (item) => item.Likes);
    //a mảng chứa các mảng(User,Likes) chứa các mảng(0,1,2) chứa đối tượng(id,ten,tuoi)
    console.log(a);
    a.forEach(element => {
        //elemnt mảng chứa mảng chứa đối tượng
        console.log(element);
        element.forEach(element_child =>{
            //elemnt_child mảng chứa đối tượng
            console.log(element_child);
            console.log(element_child['id_like']);
        })
    });
}*/
//======Logo======
const LogoBtn = document.querySelector('.js-logo-btn');
LogoBtn.addEventListener('click',ToHome);
function ToHome(){
    window.location.assign('http://localhost/Social_Media/index.php?url=home');  
}


function createCookie(name, value, days) {
    var expires;
      
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
      
    document.cookie = (name) + "=" + 
        (value) + expires + "; path=/";
} 
var delete_cookie = function(name) {
    document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
};




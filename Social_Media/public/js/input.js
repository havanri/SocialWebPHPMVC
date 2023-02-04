
//=============Khai báo==================
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
//Comment


function insertComment(id_post,content){
   
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if(this.readyState==4){
           var data=JSON.parse(this.responseText);
           listLike = getListLike(data);          
           listUser = getListUser(data);          
           listPost = getListPost(data);  
           id_user = getUser(data);
           //============chèn comment vào list comment
           const commentLists = document.querySelectorAll('.js-comment-list');
           const commentItems = document.querySelector('.js-comment-item');
           
           var avt_user="";
           var full_name="";
           var contentComment=content;
           listUser.forEach(user_element=>{
               if(user_element['id_user']==id_user){
                    avt_user=user_element['avatar_url'];
                    full_name=user_element['full_name'];
               }
           });
           
           for(i=0;i<commentLists.length;i++){
               const commentList = commentLists[i];
               if(commentList.id == id_post){
                const comment = document.createElement("div");
                comment.innerHTML= "<div class='comment-item js-comment-item'><img class='comment-item_avatar profile-photo' src='"+avt_user+"' ><div class='comment-item_content'><p class='comment-item_content-title'>"+full_name+"</p><p class='comment-item_content-desc'>"+contentComment+"</p></div><i style='position:relative;' class='uil uil-ellipsis-h js-menuComment-icon'><div class='menuComment'><p class='edit-comment-btn js-edit__comment-btn'>Chỉnh sửa bình luận</p><p class='remove-comment-btn js-remove__comment-btn'>Xóa bình luận</p></div></i></div>";
                commentList.appendChild(comment);
               }
           }
            const menuCommentIcons = document.querySelectorAll('.js-menuComment-icon');
            const menuCommentPopups = document.querySelectorAll('.menuComment');
            const editCommentBtns = document.querySelectorAll('.js-edit__comment-btn');
            const removeCommentBtns = document.querySelectorAll('.js-remove__comment-btn');
            //const editInputComments = document.querySelectorAll('.comment-write__edit');



            for(i = 0;i<menuCommentIcons.length;i++){
    const menuCommentIcon = menuCommentIcons[i];
    const menuCommentPopup = menuCommentPopups[i];
    const removeCommentBtn = removeCommentBtns[i];
    const editCommentBtn = editCommentBtns[i];
    //const editInputComment = editInputComments[i];
    //nút menu post
    menuCommentIcon.onclick=function popupmenuComment(){
        menuCommentPopup.classList.toggle('open');
    }
            }   
       }
    }
    xmlhttp.open("GET", "http://localhost/Social_Media/index.php?url=home/InsertComment");
    xmlhttp.send();
}

//================Input comment==================
const valueComments= document.querySelectorAll('.comment-write__input');
    for(i=0;i<valueComments.length;i++){
        const valueComment = valueComments[i];
        valueComment.addEventListener('keydown', (e) => {
            if(e.key === 'Enter') {                  
                    createCookie("inputComment", valueComment.value, "1");
                    createCookie("postID_comment", valueComment.id, "1");
                    const content =valueComment.value;
                    const id_post=valueComment.id;
                    insertComment(id_post,content);
                    valueComment.value="";
                    //window.location.assign('http://localhost/Social_Media/index.php?url=home/InsertComment');        
            }
        })
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
  //===================Input===========================/
  //const creatPostBtn =document.querySelector('create-post-btn');
  function createInfoPost(){
    const btn = document.querySelector('.create-post-btn');
    if(btn.textContent==="Post"){
        const contentPost=document.querySelector('.post-content-textarea');
        const namefileImg=document.getElementById('file-upload-input').value;
        const namefileMain= namefileImg.replace('C:\\fakepath\\', ' ');
        createCookie("inputContentPost", contentPost.value, "1");
        createCookie("inputurlHinhtPost", namefileMain, "1");
        window.location.assign('http://localhost/Social_Media/index.php?url=home/InsertPost');
    }
    else {
        const contentPost=document.querySelector('.post-content-textarea');
        const namefileImg=document.getElementById('file-upload-input').value;
        const namefileMain= namefileImg.replace('C:\\fakepath\\', ' ');
        const idPost = document.querySelector('.js-post-modal-container');
        createCookie("inputContentPost", contentPost.value, "1");
        createCookie("inputurlHinhtPost", namefileMain, "1");
        const id_post = idPost.id;
        editPost(id_post);
        hideCreatePost();
    }  
}

  function editPost(id_post){
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if(this.readyState==4){
           var data=JSON.parse(this.responseText);
           listLike = getListLike(data);          
           listUser = getListUser(data);          
           listPost = getListPost(data);  
           id_user = getUser(data);
           //============
           const contentPosts =document.querySelectorAll('.js-content-post');
           const urlHinhPosts =document.querySelectorAll('.js-urlHinh-post');

           for(i=0;i<contentPosts.length;i++){
               const contentPost = contentPosts[i];
               const urlHinhPost =urlHinhPosts[i];
               if(contentPost.id==id_post){
                   //replace du lieu
                    listPost.forEach(post_element=>{
                        if(post_element['id_post']==id_post){
                            contentPost.innerHTML=post_element['content'];
                            urlHinhPost.src = post_element['post_url'];
                            return;
                        }
                    });
               }
           }   
       }
    }
    xmlhttp.open("GET", "http://localhost/Social_Media/index.php?url=home/EditPost");
    xmlhttp.send();
  }
  //=================Search======================
  function inputSearch(){
    const searchInput= document.querySelector('.js-search-input');
    const searchpopup= document.querySelector('.js-search-popup');
    const userSearchs= document.querySelectorAll('.js-user-search');
    const nameSearchs= document.querySelectorAll('.js-search-full_name');
    searchpopup.classList.add('open');
    for(i=0;i<userSearchs.length;i++){
        const userSearch = userSearchs[i];
        userSearch.addEventListener('click',()=>{
            const id_user=userSearch.id;
            window.location.assign("http://localhost/Social_Media/index.php?url=home/profile/"+id_user);
        });
    }
    const filter=searchInput.value.toUpperCase();
    if(filter===""){
        for(i=0;i<userSearchs.length;i++){
            const userSearch = userSearchs[i];
            userSearch.style.display = "none";
        }
        return;
    }
    /*var element =  document.querySelectorAll('.js-user-search');
    for(i=0;i<element.length;i++){
        var element_child = element[i];
        if (typeof(element_child) != 'undefined' && element_child != null){
            element_child.remove();
        }
    
    }*/
    //searchProfile(filter);
    for (i = 0; i < userSearchs.length; i++) {
        const userSearch=userSearchs[i];
        const nameSearch = nameSearchs[i];
        if (nameSearch.textContent.toUpperCase().indexOf(filter) > -1) {
            userSearch.style.display = "";
        } else {
            userSearch.style.display = "none";
        }
      }


    
    //alert('không tồn tại');
    
    
  //const fullnames =document.querySelectorAll('.js-search-full_name');
  //const users=document.querySelectorAll('.js-user-search');
  /*for (i = 0; i < users.length; i++){
    const fullname=fullnames[i];
    const textfullName=fullname.textContent;
    if(textfullName.toUpperCase().indexOf(filter) > -1){
        users[i].style.display="";
    }
    else {
        users[i].style.display="none";
    }
  }*/

  }


  function  searchProfile(filter){
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if(this.readyState==4){
           var data=JSON.parse(this.responseText);
           listLike = getListLike(data);          
           listUser = getListUser(data);          
           listPost = getListPost(data);  
           id_user = getUser(data);
           //
           const searchPopUp= document.querySelector('.js-search-popup');
           listUser.forEach(user_element=>{
                    const u = document.createElement('div');
                    u.setAttribute("class","js-user-search");
                    u.innerHTML="<div class='profile-photo js-photo-search'><img src='"+user_element['avatar_url']+"'></div><div class='notification-body'><b class='js-search-full_name'>"+user_element['full_name']+"</b></div>";
                    searchPopUp.appendChild(u);
           });
       }
    }
    xmlhttp.open("GET", "http://localhost/Social_Media/index.php?url=home/InsertComment");
    xmlhttp.send();
  }
  
  









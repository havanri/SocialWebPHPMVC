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
/*======================== Popup edit post================= */
const editPostIcons = document.querySelectorAll('.js-editPost-icon');
const editPostPopups = document.querySelectorAll('.edit-popup');
const editPostBtns = document.querySelectorAll('.js-edit__post-btn');
const removePostBtns = document.querySelectorAll('.js-remove__post-btn');
const likePosts = document.querySelectorAll('.js-avatar-like');
const idPost = document.querySelector('.js-post-modal-container');


for(i = 0;i<editPostIcons.length;i++){
    const editPostIcon = editPostIcons[i];
    const editPostBtn = editPostBtns[i];
    const removePostBtn = removePostBtns[i];
    const editPostPopup = editPostPopups[i];
    const likePost = likePosts[i];
    //nút menu post
    editPostIcon.onclick=function popupeditPost(){
        editPostPopup.classList.toggle('open');
        idPost.id = likePost.id;
        createCookie("id_post", likePost.id, "1");
    }
    //click chinh sua bai viet
    editPostBtn.onclick=function editPostclick(){
        const btn = document.querySelector('.create-post-btn');
        const title = document.querySelector('.title-post');  
        showCreatePost();
        btn.innerHTML="Save";
        title.innerHTML="Edit Post";
        
    }
    //click xoa bai viet
    removePostBtn.onclick=function removePostclick(){
        
        const xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if(this.readyState==4){
           var data=JSON.parse(this.responseText);
           listLike = getListLike(data);          
           listUser = getListUser(data);          
           listPost = getListPost(data);  
           id_user = getUser(data);
           //============remove Post===========/
        const posts = document.querySelectorAll('.js-feed');
        for(i=0;i<posts.length;i++){
            const post = posts[i];
            if(post.id == likePost.id){
                post.classList.toggle('hide');
                return;
            }
        }
       }
    }
    xmlhttp.open("GET", "http://localhost/Social_Media/index.php?url=home/RemovePost");
    xmlhttp.send();
    }
}
//=================Menu Comment================//
/*======================== Popup edit post================= */
const menuCommentIcons = document.querySelectorAll('.js-menuComment-icon');
const menuCommentPopups = document.querySelectorAll('.menuComment');
const editCommentBtns = document.querySelectorAll('.js-edit__comment-btn');
const removeCommentBtns = document.querySelectorAll('.js-remove__comment-btn');
//const editInputComments = document.querySelectorAll('.js-comment-edit');


for(i = 0;i<menuCommentIcons.length;i++){
    const menuCommentIcon = menuCommentIcons[i];
    const menuCommentPopup = menuCommentPopups[i];
    const removeCommentBtn = removeCommentBtns[i];
    const editCommentBtn = editCommentBtns[i];
   // const editInputComment = editInputComments[i];
    //nút menu post
    menuCommentIcon.onclick=function popupmenuComment(){
        menuCommentPopup.classList.toggle('open');
    }
    //click chinh sua bai viet
    editCommentBtn.onclick=function editCommentclick(){
        //editInputComment.classList.add('open-flex');
       // const btn = document.querySelector('.create-post-btn');
      //  const title = document.querySelector('.title-post');  
      //  showCreatePost();
      //  btn.innerHTML="Save";
       // title.innerHTML="Edit Post";
        
    }
    //click xoa bai viet
    removeCommentBtn .onclick=function removeCommentclick(){
        
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
       if(this.readyState==4){
           var data=JSON.parse(this.responseText);
           listLike = getListLike(data);          
           listUser = getListUser(data);          
           listPost = getListPost(data);  
           id_user = getUser(data);
           //============remove Post===========/
        const posts = document.querySelectorAll('.js-feed');
        for(i=0;i<posts.length;i++){
            const post = posts[i];
            if(post.id == likePost.id){
                post.classList.toggle('hide');
                return;
            }
        }
       }
    }
    xmlhttp.open("GET", "http://localhost/Social_Media/index.php?url=home/RemovePost");
    xmlhttp.send();
    }
}




//======================Popup Create Post===========================
const createPost=document.querySelector('.js-open-modal-create-post');
const modalCreatePost=document.querySelector('.js-modal-post');

const closemodalPost=document.querySelector('.js-modal-close');
const modalPostContainer=document.querySelector('.js-post-modal-container');
createPost.addEventListener('click', showCreatePost);
closemodalPost.addEventListener('click', hideCreatePost);
function showCreatePost() {
    //alert("show");
    const btn = document.querySelector('.create-post-btn');
    const title = document.querySelector('.title-post');
    btn.innerHTML="Post";
    title.innerHTML="Create Post";
    modalCreatePost.classList.add('open-flex');
}
//Ẩn modal Buy Tickets
function hideCreatePost() {
    modalCreatePost.classList.remove('open-flex');
}
function hideSearch() {
    modalCreatePost.classList.add('hide');
}
modalCreatePost.addEventListener('click', hideCreatePost);
        modalPostContainer.addEventListener('click', function (event) {
            event.stopPropagation();
        });
                   



/*===========Popup comment======= */
const CommentBtns= document.querySelectorAll('.js-comment-btn');
const PopupCmts = document.querySelectorAll('.comment-popup');
for(i = 0; CommentBtns.length;i++){
    const CommentBtn=CommentBtns[i];
    const PopupCmt = PopupCmts[i];

    CommentBtn.onclick=function popupComment(){
        PopupCmt.classList.toggle('open');
    }
    

    /*CommentBtn.addEventListener("click", () => function() {
        alert('ádsad');
    });*/
}
/*===========Popup lock out======= */


function popupLockOut(){
    //alert('haha');
    document.querySelector('.sub-create-avatar').classList.toggle('open');
}











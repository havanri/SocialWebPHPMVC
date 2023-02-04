const checkCreatePost = document.querySelector('.js-open-modal-create-post').id;
const CreatePost=document.querySelector('.js-open-modal-create-post');
if(checkCreatePost!=="true"){
    CreatePost.classList.add('hide');
}

/* */ 
const checkAddFriend = document.querySelector('.js-addfriend').id;
const AddFriend=document.querySelector('.js-addfriend-btn');
if(checkAddFriend==="true"){
    AddFriend.classList.add('hide');
}


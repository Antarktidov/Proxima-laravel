const editBlogBtnSelectorAll = document.querySelectorAll('.edit-blog-btn');
const imageInputSelectorAll = document.querySelectorAll('.image-input');
const blogItemEditImageSelectorAll = document.querySelectorAll('.blog-item-edit-image');
const btnEditblogExitSelectorAll = document.querySelectorAll('.btn-editblog-exit');

for (let i = 0; i < editBlogBtnSelectorAll.length; i++) {
    editBlogBtnSelectorAll[i].onclick = function() {
        //console.log('clicked!');
        let blogId = editBlogBtnSelectorAll[i].getAttribute('data-blog-id-edit-blog-btn');
        //console.log(blogId);
        let blogItemIdSelector = document.querySelector('.blog-item-id-'+blogId);
        let editBlogItemIdSelector = document.querySelector('.edit-blog-item-id-'+blogId);
        //console.log(blogItemIdSelector);
        //console.log(editBlogItemIdSelector);
        blogItemIdSelector.classList.add('hidden');
        editBlogItemIdSelector.classList.remove('hidden');
    }
}

for (let i = 0; i < imageInputSelectorAll.length; i++) {
    imageInputSelectorAll[i].onchange = function() {
        var img = new Image();
        img.src = window.URL.createObjectURL(this.files[0]);
        console.log(img.src);
        blogItemEditImageSelectorAll[i].setAttribute('src', img.src);
    }
}
for (let i = 0; i < imageInputSelectorAll.length; i++) {
    btnEditblogExitSelectorAll[i].onclick = function() {
        event.preventDefault();
        let blogId = editBlogBtnSelectorAll[i].getAttribute('data-blog-id-edit-blog-btn');
        let blogItemIdSelector = document.querySelector('.blog-item-id-'+blogId);
        let editBlogItemIdSelector = document.querySelector('.edit-blog-item-id-'+blogId);
        blogItemIdSelector.classList.remove('hidden');
        editBlogItemIdSelector.classList.add('hidden');
    }
}
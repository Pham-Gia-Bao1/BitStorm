 <!-- <script>
    function GetParent(element, selector){
        while(element.parentElement){
            if(element.parentElement.matches(selector)){
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }
    function ShowComment(event, idPost) {
        const parent = GetParent(event.target, ".post");
        const comment_container = parent.querySelector(".container-comment");
        $(comment_container).load('@Url.Action("GetComments", "Comment")?postId=' + idPost);
    }

    function CreateComment(event, idPost) {
        const parent = GetParent(event.target, ".post");
        const input = parent.querySelector(".input-add-comment input");
        if (input.value == "" || input.value == " ") {
            return;
        }
        window.location.href = `Comment/Create?idPost=${idPost}&content=${input.value}`;
        input.value = "";


    }

    function CreatePost(event){
        const parent = GetParent(event.target, "#modalPost");
        const content = parent.querySelector(".content-modal");
        const IsAnonymousTag = parent.querySelector(".switch input[type='checkbox']")
        if (content.value == "" || content.value == " ") {
            return;
        }
        console.log(IsAnonymousTag.checked);
        window.location.href = `Post/Create?content=${content.value}&isAnonymous=${IsAnonymousTag.checked}`;
        content.value = "";
    } 


</script>-->
<script>
    function openModal() {

        document.getElementById("modalPost").style.display = "block";
    }

    function closeModal() {
        document.getElementById("modalPost").style.display = "none";

    }
    function autoResize(textarea) {
        textarea.style.height = 'auto'; // Đặt chiều cao của textarea thành 'auto' để xác định lại kích thước dựa trên nội dung
        textarea.style.height = textarea.scrollHeight + 'px'; // Đặt chiều cao của textarea bằng chiều cao của nội dung đã nhập
    }
</script>
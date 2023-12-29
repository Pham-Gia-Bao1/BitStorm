<script>
        const view_lest = document.getElementById('view_lest');
        view_lest.style.display = "none";
        const view = document.getElementById('view_more');
        const  list_coment =document.getElementById('comment-list');
        view.addEventListener('click', function() {
                list_coment.style.height = "auto";
                view_lest.style.display = "block";
                view.style.display = "none";
        })

        view_lest.addEventListener('click', function(){
            list_coment.style.height = "75vh";
            view_lest.style.display = "none";
                view.style.display = "block";
        })

        var likeButton = document.querySelector('.like');
        var dislikeButton = document.querySelector('.dislike');

        likeButton.addEventListener('click', toggleLike);
        dislikeButton.addEventListener('click', toggleDislike);

        function toggleLike() {
            likeButton.classList.toggle('liked');
        }

        function toggleDislike() {
            dislikeButton.classList.toggle('disliked');
        }
    </script>
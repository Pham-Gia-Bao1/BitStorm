<script>
        document.addEventListener('DOMContentLoaded', function () {
        var list = document.querySelectorAll('.navigation li');

        list.forEach(function (item) {
            item.addEventListener('click', function () {
            // Loại bỏ lớp 'active' từ tất cả các phần tử
            list.forEach(function (navlink) {
                navlink.classList.remove('active');
            });

            // Thêm lớp 'active' cho phần tử được click
            item.classList.add('active');
            });
        });
        });
    </script>
<script>
    // add active class to selected list item
// let list = document.querySelectorAll(".navigation li");

// function activeLink() {
//   list.forEach((item) => {
//     item.classList.remove("active"); 
//   });
//   this.classList.add("active");
// }

// list.forEach((item) => item.addEventListener("click", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};
</script>
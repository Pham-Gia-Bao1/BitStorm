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
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    #main {
        padding-top: 10px;
        position: absolute;
        width: calc(100% - 300px);
        left: 300px;
        min-height: 100vh;
        background: var(--white);
        transition: 0.5s;
    }

    /* CSS cho bảng */
    table {
        border-collapse: collapse;
        width: 100%;
        font-size: 12px !important;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
        cursor: pointer;
    }

    th {
        background-color: #f2f2f2;
    }

    /* CSS cho hover */
    tr:hover {
        background-color: #f5f5f5;
    }

    tr:first-child {
        position: sticky;
        top: 60px;
    }

    tr:nth-child(2) {
        position: sticky;
        top: 90px;
    }

    .img_info_comment {
        width: 60px;
        height: 60px;
        object-fit: cover;
        margin: 10px;
    }

    .input_info_name {
        border: 0 !important;
    }

    .topbar {
        width: 100%;

    }

    .main.active {
        width: calc(100% - 80px);
        left: 100px;
    }

    .navbarUser {
        margin-left: 1px;
        width: 100%;
        background-color: #ddd;
    }

    .userBtn {
        border: none;
        background-color: #057dcd;
        color: white;
        width: 150px;
        height: 35px;
    }

    .expertBtn {
        border: none;
        background-color: #057dcd;
        color: white;
        width: 150px;
        height: 35px;
    }

    .userImg {
        width: 50%;
    }

    .userImgContainer {
        width: 150px;
    }

    .addUserBtn {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
        margin-bottom: 10px;
        height: 40px;
        border-radius: 50px !important;
    }

    .addUserBox {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .closeBtn {
        background-color: #d74a49;
        color: white;
    }

    .closeBtn:hover {
        background-color: #007f4e;
        color: white;
    }
</style>
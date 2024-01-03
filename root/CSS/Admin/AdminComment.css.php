<style>
    #main {
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

        th, td {
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
        tr:first-child{
            position: sticky;
            top: 63px;
        }
        tr:nth-child(2){
            position: sticky;
            top: 90px;
        }
        .img_info_comment{
             width: 60px;
             height: 60px;
             object-fit: cover;
             margin: 10px;
        }
        .input_info_name{
            border: 0 !important;
        }
</style>
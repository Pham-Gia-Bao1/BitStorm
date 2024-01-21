<style>
    #main {
        position: absolute;
        width: calc(100% - 300px);
        left: 300px;
        min-height: 100vh;
        background: var(--white);
        transition: 0.5s;
    }
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
    .main.active {
    width: calc(100% - 80px);
    left: 100px;
  }
  .sub-navbar{
     position: sticky !important;
     top: 60px;
     z-index: 700;
  }
  .sub-navbar ul li{
    border-bottom: 1px solid #f5f5f5;
  }
  .sub-navbar ul li:hover{
    border-bottom: 1px solid blue;
  }
</style>
<style>
    :root{
            --btn-primary : #2a2185;
    }
    .create-post_admin{
            position: relative;
            background: var(--btn-primary);
            margin: 12px;
    }
    .mydict div {
        display: flex;
        flex-wrap: wrap;

    }
    .mydict input[type="radio"] {
        overflow: hidden;
        position: absolute;
    }
    .mydict input[type="radio"]:checked + span {
        box-shadow: 0 0 0 0.0625em #0043ed;
        background-color: #dee7ff;
        z-index: 1;
        color: #0043ed;
    }
    .lable-radio-anonymous span {
        display: block;
        background-color: #fff;
        padding: 5px 10px;
        position: relative;
        box-shadow: 0 0 0 0.0625em #b5bfd9;
        color: #3e4963;
        text-align: center;
    }
    .lable-radio-anonymous:first-child span {
        border-radius: 5px 0 0 5px;
    }
    .lable-radio-anonymous:last-child span {
        border-radius: 0 5px 5px 0;
    }
</style>
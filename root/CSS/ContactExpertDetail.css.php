<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .top_image {
        object-fit: cover;
        width: 100%;
    }

    .doctor_image img {
        margin-left: 40px;
        max-width: 90%;
    }

    #text {
        color: rgb(0, 113, 111);
        font-weight: bold;
        font-size: x-large;
    }

    .text1 {
        color: rgb(0, 113, 111);
        font-weight: bold;
    }

    .rating {
        color: #f8cc1b;
        font-size: larger;
    }

    .detailTime {
        width: 40%;
        height: 40px;
        border-radius: 50px;
        background-color: #d7eaea;
        color: #057dcd;
        font-weight: bold;
        margin-right: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 15px;
    }

    .feeDetail {
        width: 40%;
        height: 40px;
        border-radius: 50px;
        background-color: #d7eaea;
        color: #057dcd;
        font-weight: bold;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 15px;
    }

    .checkout a {
        color: black;
        text-decoration: none;
    }

    .checkout {
        width: 80%;
        height: 50px;
        background-color: #057dcd;
        color: white;
        border-radius: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .checkout:hover {
        background: linear-gradient(to right, rgb(111, 166, 235),
                rgb(85, 188, 210), rgb(188, 203, 201));
    }

    #checkoutBtn {
        color: white;
    }

    .actives {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #76e05e;
    }

    .time {
        border-radius: 50px;
        border: 1px solid #057dcd;
        height: 30px;
        margin-right: 10px;
        justify-content: center;
        align-items: center;
    }

    .aclock {
        color: #057dcd;
    }

    .fee {
        border-radius: 50px;
        border: 1px solid #e12729;
        height: 30px;
    }

    .viewMorebtn {
        width: 100%;
        height: 100%;
        padding: 5px;
        color: white;
        border: none;
        border-radius: 50px !important;
        background-color: #007bff !important;

    }

    .viewMorebtn:hover {
        width: 100%;
        border: none;
        background: linear-gradient(to right, rgb(111, 166, 235),
                rgb(85, 188, 210), rgb(188, 203, 201));
    }

    .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease-in-out;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
        /* Add transition properties */
        /* Optional: Add a smooth transition effect */
    }

    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        /* Change box-shadow on hover */
        transform: translateY(-4px)
    }

    .card_container {
        padding-left: 10px;
    }

    .viewMorebtn a {
        color: white;
        text-decoration: none;
    }
</style>
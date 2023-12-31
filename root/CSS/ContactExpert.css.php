<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .image-container {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .img_card{
        width: 95%;
        height: 255px;
        object-fit: cover;
    } 
    .findDoctor_container {
        background-color: #dee6e9;
        border-radius: 16px;
        padding-bottom: 20px;
    }

    #fdoctor {
        width: 100%;
        height: 40px;
        border-radius: 50px;
        border: none;
    }

    .fdoctor_button {
        background-color: #00aeef !important;
        width: 100%;
        height: 40px;
        border-radius: 50px !important;
        border: none;
        color: white;
    }

    .fdoctor_button:hover {
        background: linear-gradient(to right, #0056b3, #007bff) !important;

    }

    .viewMorebtn a {
        color: white;
        text-decoration: none;
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
        padding-top: 2px;
    }

    .actives {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #76e05e;
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

    .card_container {
        margin-left: 20px;
    }

    .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease-in-out;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        /* Change box-shadow on hover */
        transform: translateY(-4px)
    }


    .image-container img {
        object-fit: cover;
        width: 80%;
        height: 100%;
    }

    .image_doctor {
        width: 240px;
    }

    .top_image {
        max-width: 100%;
    }

    .infor {
        width: 245px;
        background-color: #dee4e9;
        border-radius: 20px;
    }

    .viewAll {
        width: 25%;
        height: 50px;
        border-radius: 20px;
        font-size: large;
        font-weight: bold;
        color: white;
        background: linear-gradient(to right, rgb(111, 166, 235), rgb(85, 188, 210), rgb(188, 203, 201));
        display: flex;
        justify-content: center;
        align-items: center;
        border: none;
    }

    .viewAll:hover {
        cursor: pointer;
        background: linear-gradient(to right, #0056b3, #007bff);
    }

    .testimonial-card {
        border: 1px solid #d1d1d3;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .comment {
        color: #0056b3;
    }

    .btn-view {
        display: block;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .viewNumber {
        height: 120px;
        width: 80%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: rgba(255, 192, 159, 0.3);
        margin-left: auto;
        margin-right: auto;
        border-radius: 6px;
    }

    .text {
        color: #007bff;
    }

    .textTime {
        font-size: 14px;
    }

    .number {
        color: #007bff;
        font-weight: bold;
    }

    .btn {
        background-color: #057dcd;
        border-radius: 8px !important;
        padding: 3px;
        color: white;
    }

    a {
        text-decoration: none !important;
    }

    h5,
    p {
        text-decoration: none;
    }

    /* .boxCard {
        height: 80vh;
        overflow-y: hidden;
    } */
</style>
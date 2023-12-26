
<style>
    #content {
        padding-top: 30px;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }
    .subsribe {
        margin-left: 50px;
        height: 40px;
        margin-top: 10px;
    }
    h4 {
        margin-top: 30px !important;
        margin-bottom: 30px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .tỉme {
        margin-left: 10px;
    }
    .star {
        color: gold;
    }
    .like,
    .didlike {
        color: black;
        transition: color 0.3s;
    }
    .like:hover,
    .didlike:hover {
        color: blue;
        cursor: pointer;
    }
    .like {
        color: blue;
    }
    .didlike {
        color: red;
    }
    .avatar_comment {
        width: 50px;
        object-fit: cover;
    }
    .card {
        border: 1px solid rgba(174, 174, 174, 0.099) !important;
    }
    .name h2 {
        width: 90vw;
        height: auto;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-left: 30px;
    }
    .view {
        font-weight: bold;
    }
    #option_of_video {
        padding: 10px;
        padding-right: 30px;
        padding-left: 30px;
    }
    .play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        font-size: 40px;
        color: white;
        cursor: pointer;
        background-color: rgb(112, 112, 255);
        padding: 10px;
        border-radius: 50%;
        outline: 20px solid rgba(144, 144, 231, 0.482);
    }
    .video-container {
        display: inline-block;
        width: 90vw;
        left: -30px;
        margin: 0 auto;
        border-radius: 8px;
        margin-bottom: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .play-button {
        outline: 2px solid rgba(255, 255, 255, 0.5) !important;
    }
    .play-button,
    .pause-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 3rem;
        color: white;
        cursor: pointer;
        transition: outline .3s ease-in-out;
        margin-top: 150px;
    }
    .play-button:hover {
        outline: 30px solid rgba(255, 255, 255, 0.5) !important;
        background-color: rgb(0, 0, 253);
    }
    .pause-icon {
        display: none;
    }
    .sub_title h6{
        width: 100%;
          -webkit-line-clamb : 5;
         -webkit-box-orient: vertical;
         overflow: hidden;
    }
    .sub_title span {
        color: #000;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: 19px;
        width: 75px;
    }
    .sub_title span:last-child {
        color: #000;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: 19px;
        display: block !important;
        width: 75px;
    }
    #content_video {
        width: 20vw !important;
        padding: 20px !important;
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
        box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;
    }

    #content_video:hover {
        transform: scale(1.05);
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    h6 {
        font-size: 15px;
    }
    .container-fluid .card {
        border: 0 solid !important;
        cursor: pointer;
        transition: box-shadow 0.3s, transform 0.3s;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    }
    .container-fluid .card:hover {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        transform: scale(1.04);
    }
    input {
        width: 87vw !important;
    }
    #comment-list {
        padding: 10px;
        border-radius: 8px;
    }
    .list_product {
        margin-top: 50px;
        width: 100vw !important;
        padding-bottom: 50px;
    }
    .offical {
        padding-left: 30px;
    }
    #video {
        width: 100vw;
        height: 800px;
        margin-bottom: 30px;
        border-radius: 8px !important;
    }

</style>
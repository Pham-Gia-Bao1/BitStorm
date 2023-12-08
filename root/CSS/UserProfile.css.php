<style>
  .ig_top {
    height: 70vh;
    background-image: url(http://localhost/WEB_PHP/root/Image/Room%20-%20Relaxing%20-%20Copy@3-1920x869.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    object-fit: cover;
  }

  .avata {
    text-align: center;
  }

  .avata img {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    margin-top: 0px;
    transition: all 0.2s ease;
    cursor: pointer;
  }

  .avata img:hover {
    transform: scale(1.05);
  }

  .avata_user {
    width: 250px;
    height: 250px;
    object-fit: cover;
  }

  .card {
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    cursor: pointer;
    gap: 10px;
    transition: all 0.2s ease;
    border: none;
  }

  .card:hover {
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    transform: scale(1.05);
  }

  .card img {
    width: 80px;
    height: 80px;
  }

  .card p {
    text-align: center;
  }

  #content {

    margin: 0 auto;
    margin-top: 0px;
    margin-bottom: 100px;
  }

  #uploaded-image {
    object-fit: cover;
    margin-top: 50px;
  }

  #upload-input,
  #submit_avatar {
    display: none;
  }
  .heading {
      color: rgb(0, 0, 0);
      text-align: center;
      padding-top: 10px;
      font-size: 35px;
    }

    .info-text {
      text-align: center;
      color: rgb(4, 4, 4);
      font-size: 18px;
    }

    .app {
      display: grid;
      grid-template-columns: repeat(auto-fill, 300px);
      gap: 40px;
      justify-content: center;
      padding: 50px;
      padding-bottom: 100px;
      background-image: url(http://localhost/WEB_PHP/root/Image/Hands%203D%20UI%20-%20Copy@1-1920x869.jpg);
      background-repeat: no-repeat;


    }

    .note {
      padding: 17px;
      border-radius: 15px;
      resize: none;
      box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
      font-size: 18px;
      height: 200px;
      color: rgb(0, 0, 0);
      border: none;
      outline: none;
      background: rgba(114, 47, 47, 0.1);
      box-sizing: border-box;
      cursor: pointer;
    }

    .note::placeholder {
      color: gray;
      opacity: 30%;
    }

    .note:hover,
    .note:focus {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      transition: all 300ms ease;
    }

    .btn1 {
      height: 200px;
      border-color: rgba(255, 255, 255, 0.37);
      background: rgba(136, 56, 56, 0.27);
      border-radius: 15px;
      font-size: 70px;
      font-weight: 700;
      color: rgba(0, 0, 0, 0.3);
      cursor: pointer;
    }

    .btn1:hover {
      background: rgba(189, 74, 74, 0.55);
      color: rgba(0, 0, 0, 0.6);
      transition: all 300ms ease;
    }
    .input-group-text{
        cursor: pointer;
    }
    .moddedl_ifomation{
         display: flex;
         flex-direction: column;
         align-items: center;
    }
    .main_title_model_info{
        text-align: center !important;
    }
    #img_moddel_setting{
         margin-bottom:  -60px;
    }
    /* #img_moddel_info{
        width:  200px;
        height: 200px;
        object-fit: contain;
        outline: 2px solid blue;
    } */
</style>
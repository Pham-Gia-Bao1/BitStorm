<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.content h5{
    color: #267BFC;
    font-family: 'Courier New', Courier, monospace;
    font-weight: bold;
    text-align: center;
}
.content h3{
    color:#1F2B6C;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-weight: bold;
    text-align: center;
}

.heading {
    padding:20px;
    width:100%;
    height:500px;
    background-position: center center;
    background-size:cover;
    background-image: url(https://img.freepik.com/free-photo/medical-staff-doctors-concept-young-smiling-female-doctor-healthcare-worker-white-coat-st_1258-121749.jpg?w=1380&t=st=1703518963~exp=1703519563~hmac=085285af120488119787f579e01eb78eaaad2ded52d4ad25b90a734f3b22f3b2)
}
.text{
    padding-top: 20px;
    margin-top:10%;
}
.text hr {
    color: #fff;
    margin-top:10px;
}
.animate-charcter {
    font-weight: bold;
    /* text-transform: uppercase; */
    background-image: linear-gradient( -225deg, #002661 0%, #130CB7 29%, #736EFE 67%, #52E5E7 100% );
    background-size: auto auto;
    background-clip: border-box;
    background-size: 200% auto;
    color: #fff;
    background-clip: text;
    text-fill-color: transparent;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: textclip 2s linear infinite;
    display: inline-block;
    font-size: 60px;
}
.contact h5 {
    color:#267BFC;
    padding-bottom: 10px;
    font-size: 20px;
    font-weight: bold;
}
.contact h6 {
    color: #002661;
    padding-bottom: 10px;
    font-size: 15px;
    font-weight: bold;
}
.contact {
    padding:10px;
    margin:10px;
    /* font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; */
}
/* form {
    margin: 100px;
} */

.input-field {
    position: relative;
    width: 250px;
    height: 44px;
    line-height: 44px;
}

label {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    color: #d3d3d3;
    transition: 0.2s all;
    cursor: text;
}

input {
    width: 100%;
    border: 0;
    outline: 0;
    padding: 0.5rem 0;
    border-bottom: 2px solid #d3d3d3;
    box-shadow: none;
    color: #111;
}

    input:invalid {
        outline: 0;
    }

    input:focus,
    input:valid {
        border-color: #267BFC;
    }

        input:focus ~ label,
        input:valid ~ label {
            font-size: 14px;
            top: -24px;
            color: #267BFC;
        }
.sendMail {
    padding: 5%;
    box-shadow: 7px 4px 7px 0px #888888;
}
.sendMail h6 {
    color:#267BFC;
    font-size: 18px;
    font-weight: bold;
}

button {
    display: block;
    width: 200px;
    height: 40px;
    line-height: 40px;
    font-size: 18px;
    font-family: sans-serif;
    text-decoration: none;
    color: black;
    border: none;
    letter-spacing: 2px;
    text-align: center;
    position: relative;
    transition: all .35s;
}

    button span {
        position: relative;
        z-index: 2;
    }

    button:after {
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: #267BFC;
        transition: all .35s;
    }

    button:hover {
        color: #fff;
    }

        button:hover:after {
            width: 100%;
        }
.contactExpert {
    text-align:center;
}
    .contactExpert h5 {
        color: #1F2B6C;
    }

/*----  Main Style  ----*/
#cards_landscape_wrap-2{
  text-align: center;
  /* background: #F7F7F7; */
}
#cards_landscape_wrap-2 a{
  text-decoration: none;
  outline: none;
}
#cards_landscape_wrap-2 .card-flyer {
  border-radius: 5px;
}
#cards_landscape_wrap-2 .card-flyer .image-box{
  background: #ffffff;
  overflow: hidden;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
  border-radius: 5px;
}
#cards_landscape_wrap-2 .card-flyer .image-box img{
  -webkit-transition:all .9s ease; 
  -moz-transition:all .9s ease; 
  -o-transition:all .9s ease;
  -ms-transition:all .9s ease; 
  width: 100%;
  height: 200px;
}
#cards_landscape_wrap-2 .card-flyer:hover .image-box img{
  opacity: 0.7;
  -webkit-transform:scale(1.15);
  -moz-transform:scale(1.15);
  -ms-transform:scale(1.15);
  -o-transform:scale(1.15);
  transform:scale(1.15);
}
#cards_landscape_wrap-2 .card-flyer .text-box{
  text-align: center;
}
#cards_landscape_wrap-2 .card-flyer .text-box .text-container{
  padding: 30px 18px;
}
#cards_landscape_wrap-2 .card-flyer{
  background: #FFFFFF;
  margin-top: 50px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
}
#cards_landscape_wrap-2 .card-flyer:hover{
  background: #fff;
  box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  margin-top: 50px;
}
#cards_landscape_wrap-2 .card-flyer .text-box p{
  margin-top: 10px;
  margin-bottom: 0px;
  padding-bottom: 0px; 
  font-size: 14px;
  letter-spacing: 1px;
  color: #000000;
}
#cards_landscape_wrap-2 .card-flyer .text-box h6{
  margin-top: 0px;
  margin-bottom: 4px; 
  font-size: 15px;
  font-weight: bold;
  /* text-transform: uppercase; */
  font-family: 'Roboto Black', sans-serif;
  letter-spacing: 1px;
  color: #00acc1;
}



</style>
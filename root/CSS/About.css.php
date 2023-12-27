<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.hr {
    color: #fff;
    margin-top: 10px;
    height: 10px;
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
    color: #002661;
    padding-bottom: 10px;
}
.contact h6 {
    color: #002661;
    padding-bottom: 10px;
}
.contact {
    padding:10px;
    margin:10px;
}
form {
    margin: 100px;
}

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
</style>
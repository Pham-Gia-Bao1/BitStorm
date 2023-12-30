<style>
  /* .navbar {
    padding: 10px;
    position: sticky;
    top: 0;
    z-index: 999;

  }

  .model_nav {
    z-index: 9999 !important;
  }

  .navbar-brand {
    font-size: 24px;
    font-weight: bold;
  }

  .navbar-nav {
    margin-left: auto;
  } */

  /* .nav-link {
    color: #333;
  }

  .nav-link:hover {
    color: #007bff;
  } */

  .btn-primary{
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    font-size: 14px;
    font-weight: bold;
  }

  .btn-primary:hover {
    background-color: #0056b3;
  }

  .avata1 {
    width: 30px;
    border-radius: 50%;
    margin-right: 8px;
    cursor: pointer;
  }

  /* .dropdown-toggle::after {
    display: none;
  }

  .avatarDropdown {
    border: none !important;
    cursor: pointer;
  }

  a {
    text-decoration: none;
    color: #000;
  }

  .menu_list_profile {
    width: 200px;
  }
  /* style cho loadinng */
  /* #loading-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 9999;
  display: flex;
  justify-content: center;
  align-items: center;
}

.loader {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: row;
}

.slider {
  overflow: hidden;
  background-color: white;
  margin: 0 15px;
  height: 80px;
  width: 20px;
  border-radius: 30px;
  box-shadow: 15px 15px 20px rgba(0, 0, 0, 0.1), -15px -15px 30px #fff,
    inset -5px -5px 10px rgba(0, 0, 255, 0.1),
    inset 5px 5px 10px rgba(0, 0, 0, 0.1);
  position: relative;
}

.slider::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 70px;
  border-radius: 100%;
  box-shadow: inset 0px 0px 0px rgba(0, 0, 0, 0.3), 0px 420px 0 400px #2697f3,
    inset 0px 0px 0px rgba(0, 0, 0, 0.1);
  animation: animate_2 2.5s ease-in-out infinite;
  animation-delay: calc(-0.09s * var(--i));
}

@keyframes animate_2 {
  0% {
    transform: translateY(250px) rotate(-80deg);
    filter: hue-rotate(0deg);
  }

  50% {
    transform: translateY(0) rotate(0deg);
  }

  100% {
    transform: translateY(250px) rotate(80deg);
    filter: hue-rotate(180deg);
  } */
/* }  */
/* * {
      font-family: 'Poppins', sans-serif;
    } */
.navbar {
  position: fixed !important;
  top: 0 ;
  left: 0;
  width: 100%;
  z-index: 999;
  background-color:ivory !important;
  height: 70px !important;
}
.navbar-brand {
  color:cadetblue;
  font-weight: bold;
  font-size: 15px;
}

.navbar-nav .nav-item .nav-link  {
  color:black;
  position: relative; 
  transition: 0.3s;
  font-weight: 400;
  color:black;
}

.navbar-nav .nav-item .nav-link::before {
  content: '';
  position: absolute;
  width: 0%;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color:#007bff;
  transition: 0.3s;
  color:#007bff;
}

.navbar-nav .nav-item .nav-link:hover::before {
  width: 100%; 
  color:#007bff;
}


</style>
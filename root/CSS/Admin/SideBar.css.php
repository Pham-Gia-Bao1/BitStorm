<style>
  * {
        font-family: "Inter", sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
  }
  :root {
        --blue: #2a2185;
        --white: #fff;
        --gray: #f5f5f5;
        --black1: #222;
        --black2: #999;
  }
  body {
        min-height: 100vh;
        overflow-x: hidden;
  }
  .navigation {
        position: fixed;
        width: 300px;
        height: 95%;
        bottom: 0;
        background: var(--blue);
        border-left: 10px solid var(--blue);
        transition: 0.5s;
        overflow: hidden;
  }
  .navigation ul {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
  }
  .navigation ul li {
        position: relative;
        width: 100%;
        list-style: none;
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
  }
  .navigation ul li:hover,
  .navigation ul li.active {
        background-color: var(--white);
  }
  .navigation ul li:nth-child(1) {
        margin: 20px 0;
        pointer-events: none;
  }
  .navigation ul li a {
        position: relative;
        display: block;
        width: 100%;
        display: flex;
        text-decoration: none;
        color: var(--white);
  }
  .navigation ul li:hover a,
  .navigation ul li.active a {
        color: var(--blue);
  }
  .navigation ul li a .icon {
        position: relative;
        display: block;
        min-width: 60px;
        line-height: 75px;
        text-align: center;
        margin-top: 12px;
  }
  .navigation ul li a .icon ion-icon {
        font-size: 30px;
  }
  .group-name-admin {
        font-size: 40px;
        font-weight: 600;
        text-align: center;
        margin-left: 12px;
        margin-top: 10px;
  }
  .navigation ul li a .title {
        position: relative;
        display: block;
        padding: 0 10px;
        height: 60px;
        line-height: 60px;
        text-align: start;
        white-space: nowrap;
  }
  .navigation ul li:hover a::before,
  .navigation ul li.active a::before {
        content: "";
        position: absolute;
        right: 0;
        top: -50px;
        width: 50px;
        height: 50px;
        background-color: transparent;
        border-radius: 50%;
        box-shadow: 35px 35px 0 10px var(--white);
        pointer-events: none;
  }
  .navigation ul li:hover a::after,
  .navigation ul li.active a::after {
        content: "";
        position: absolute;
        right: 0;
        bottom: -50px;
        width: 50px;
        height: 50px;
        background-color: transparent;
        border-radius: 50%;
        box-shadow: 35px -35px 0 10px var(--white);
        pointer-events: none;
  }
  .topbar {
        width: 100vw;
  }
  .main.active {
        width: calc(100% - 80px);
        left: 100px;
  }
  .topbar {
        height: 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 10px;
        position: fixed;
        top: 0px;
        background-color: #2a2185;
        z-index: 10;
        margin-bottom: 100px;
  }
  .icon_bar {
        color: white;
  }
  #bar {
        margin-left: 30px;
  }
  .toggle {
        position: relative;
        width: 60px;
        height: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2.5rem;
        cursor: pointer;
  }
  .search {
        position: relative;
        width: 400px;
        margin: 0 10px;
  }
  .search label {
        position: relative;
        width: 100%;
  }
  .search label input {
        width: 100%;
        height: 40px;
        border-radius: 40px;
        padding: 5px 20px;
        padding-left: 35px;
        font-size: 18px;
        outline: none;
        border: 1px solid var(--black2);
  }
  .search label ion-icon {
        position: absolute;
        top: 0;
        left: 10px;
        font-size: 1.2rem;
  }
  .user{
        margin-right: 30px;
  }
  .user img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
  }
  .topbar-item{
        margin-top: 40px;
  }
  .topbar-item img{
          width: 40px;
          height: 40px;
          border-radius: 50%;
          margin-left: 10px;
  }
</style>
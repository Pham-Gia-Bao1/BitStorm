<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
  td {
    max-width: 100px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    }
    .fa-eraser:hover {
	animation: eraser 1s cubic-bezier(.36,.07,.57,.99) infinite;
}
.fa-wrench:hover {
	transform-origin: 79% 26%;
	animation: wrench 1s cubic-bezier(.36,.07,.57,.99) infinite;
}
@keyframes wrench {
	0% {
		transform: scale(1.5) rotate(0);
	}
	20% {
		transform: scale(1.5) rotate(30deg);
	}
	30% {
		transform: scale(1.5) rotate(-20deg);
	}
	50% {
		transform: scale(1.5) rotate(30deg);
	}
	60% {
		transform: scale(1.5) rotate(-20deg);
	}
	100% {
		transform: scale(1.5) rotate(0);
	}
}
@keyframes eraser {
	0% {
		transform: scale(1.5) translate(0, 0);
	}
	15% {
		transform: scale(1.5) translate(-10px, -5px);
	}
	30% {
		transform: scale(1.5) translate(-10px, 5px);
	}
	45% {
		transform: scale(1.5) translate(-5px, -5px);
	}
	60% {
		transform: scale(1.5) translate(-5px, 5px);
	}
	75% {
		transform: scale(1.5) translate(0, 0);
	}
	100% {
		transform: scale(1.5) translate(10px, 0);
	}
}
.main {
  position: absolute;
  width: calc(100% - 300px);
  left: 300px;
  min-height: 100vh;
  background: var(--white);
  transition: 0.5s;
}
.main.active {
  width: calc(100% - 80px);
  left: 80px;
}
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
div.container {
    font-family: Raleway;
    margin: 0 auto;
    /* padding: 10em 3em; */
    text-align: center;
  }

  div.container a {
    color:dodgerblue;
    text-decoration: none;
    font: 20px Raleway;
    margin: 0px 10px;
    padding: 10px 10px;
    position: relative;
    z-index: 0;
    cursor: pointer;
  }

  div.topBotomBordersOut a:before,
  div.topBotomBordersOut a:after {
    position: absolute;
    left: 0px;
    width: 100%;
    height: 2px;
    background:cornflowerblue;
    content: "";
    opacity: 0;
    transition: all 0.3s;
  }

  div.topBotomBordersOut a:before {
    top: 0px;
    transform: translateY(10px);
  }
  div.topBotomBordersOut a:after
{
    bottom: 0px;
    transform: translateY(-10px);
}

div.topBotomBordersOut a:hover:before, div.topBotomBordersOut a:hover:after
{
    opacity: 1;
    transform: translateY(0px);
}
.title-word {
  animation: color-animation 4s linear infinite;
}

.title-word-1 {
  --color-1: #DF8453;
  --color-2: #3D8DAE;
  --color-3: #E4A9A8;
}

.title-word-2 {
  --color-1: #DBAD4A;
  --color-2: #ACCFCB;
  --color-3: #17494D;
}

.title-word-3 {
  --color-1: #ACCFCB;
  --color-2: #E4A9A8;
  --color-3: #ACCFCB;
}

.title-word-4 {
  --color-1: #3D8DAE;
  --color-2: #DF8453;
  --color-3: #E4A9A8;
}

@keyframes color-animation {
  0%    {color: var(--color-1)}
  32%   {color: var(--color-1)}
  33%   {color: var(--color-2)}
  65%   {color: var(--color-2)}
  66%   {color: var(--color-3)}
  99%   {color: var(--color-3)}
  100%  {color: var(--color-1)}
}
</style>
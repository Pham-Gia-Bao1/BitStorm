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

.modal-open .modal{
   overflow: scroll;
}
</style>
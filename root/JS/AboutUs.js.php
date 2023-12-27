<script>
const element1 = document.querySelector(".pseudo1");
const element2 = document.querySelector(".pseudo2");
const element3 = document.querySelector(".pseudo3");

const cardText = document.querySelector(".card-text");
const cardTitle = document.querySelector(".card-title");
const cardBtn = document.querySelector(".btn-warning");

const card = document.querySelector(".card");
card.addEventListener("mouseover", (event) => {
  //element.style.setProperty('left', '0px');
  element1.classList.add("animate__animated", "animate__fadeInLeft");
  element1.style.setProperty("--animate-duration", "2.0s");
  element2.classList.add("animate__animated", "animate__fadeInLeft");
  element2.style.setProperty("--animate-duration", "1.5s");
  element3.classList.add("animate__animated", "animate__fadeInLeft");
  element3.style.setProperty("--animate-duration", "0.6s");
  cardTitle.classList.add("animate__animated", "animate__fadeInUp");
  cardTitle.style.setProperty("--animate-duration", "1.0s");
  cardText.classList.add("animate__animated", "animate__fadeInUp");
  cardText.style.setProperty("--animate-duration", "1.4s");
  cardBtn.classList.add("animate__animated", "animate__fadeInUp");
  cardBtn.style.setProperty("--animate-duration", "2s");
});

card.addEventListener("mouseout", (event) => {
  element1.classList.remove("animate__animated", "animate__fadeInLeft");
  element2.classList.remove("animate__animated", "animate__fadeInLeft");
  element3.classList.remove("animate__animated", "animate__fadeInLeft");
  cardText.classList.remove("animate__animated", "animate__fadeInUp");
  cardTitle.classList.remove("animate__animated", "animate__fadeInUp");
  cardBtn.classList.remove("animate__animated", "animate__fadeInUp");
  // element.style.setProperty('left', '-99px');
});

</script>
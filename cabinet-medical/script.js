const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.smallMenu');
    burger.addEventListener('click',() =>{
      nav.classList.toggle('active');
    });
}
navSlide();
const button = document.querySelector(".asDoctor");
button.addEventListener('click', () => {
  overlay.classList.add('active');
  model2.classList.add('active');
  })
const overlay = document.getElementById('overlay');
const model2 = document.querySelector('.model2');
overlay.addEventListener('click', () => {
      model2.classList.remove('active');
      overlay.classList.remove('active');  
      })
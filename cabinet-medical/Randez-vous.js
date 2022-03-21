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
document.querySelectorAll('.doctor  > button').forEach(button => {
button.addEventListener('click', () => {
  const identification = button.id;
  const identification2 = parseInt(identification);
  const inputWeNeed = document.querySelector('.model-body > .input');
  inputWeNeed.value = identification2;
 overlay.classList.add('active');  
model.classList.add('active');
 })
  })
const overlay = document.getElementById('overlay');
const model = document.querySelector('.model');
const model2 = document.querySelector('.model2');
overlay.addEventListener('click', () => {
    
    model2.classList.remove('active');
    overlay.classList.remove('active');  
    model.classList.remove('active');
    })

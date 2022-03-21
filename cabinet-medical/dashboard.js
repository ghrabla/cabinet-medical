const model = document.querySelector('.model');
const overlay = document.getElementById('overlay');
const ajouterP = document.querySelector('button');
ajouterP.addEventListener('click' , () => {
    overlay.classList.add('active');  
    model.classList.add('active');
})
overlay.addEventListener('click', () => {
    model.classList.remove('active');
    overlay.classList.remove('active');  
    editForm.classList.remove('active');

    })
const editForm = document.getElementById("editForm");
const exicetanceTest = document.getElementById("existing");

document.querySelectorAll('#edit').forEach(button => {
button.addEventListener('click', (e) => {
    const url = new URL(window.location.href);
    const id = button.getAttribute("data_id")
    if(url.searchParams.get("userid") === id){
    e.preventDefault();
    editForm.classList.add('active');
    overlay.classList.add('active'); 
}

    

    //  overlay.classList.add('active');  
            //  editForm.classList.add('active');
          })
           })

//  if(exicetanceTest.value == "active"){
//      editForm.classList.add('active');
//      overlay.classList.add('active');  
//      exicetanceTest.value == "desactive"
// //     exicetanceTest.value == "desactiver"

//  }
 if(exicetanceTest.value == "active"){
 
    // exicetanceTest.remove();
//     exicetanceTest.value == "desactiver"

}

// const modificationButton = document.getElementById("modificationButton");
// modificationButton.addEventListener('click', () => {
//     window.location.href = 'dashboard.php';    

//     })
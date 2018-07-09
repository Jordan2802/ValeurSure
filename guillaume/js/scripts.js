

function openCalc(evt, tabName) {

  let tabcontent = document.querySelectorAll('.tabcontent');

  tabcontent.forEach((tabcontent) => {
    tabcontent.classList.add('hidden');
  });


  let tablinks = document.querySelectorAll('.tablinks');

    tablinks.forEach((tablinks) => {
    tablinks.classList.remove('active');
  });


  evt.currentTarget.classList.add('active');
  document.querySelector(tabName).classList.remove('hidden');


}

(function () {
  // start with retrieving the elements from the page, and then adding event handling. then write the logic. refer to the seasons example / homework
  var images = document.querySelectorAll('.data-ref');
  var header = document.querySelector('.modelName');
  var price = document.querySelector('.priceInfo');
  var text = document.querySelector('.modelDetails');
  var appliedClass;

  function changeContent() {
    let model = document.querySelector('.modelInfo');
    let objIndex = carData[this.id];

    for(let i=0; i < images.length; i++){
      images[i].classList.add('nonActive');
    }
    this.classList.remove('nonActive');

    //add data
    header.textContent = objIndex.name;
    price.textContent = objIndex.price;
    text.textContent = objIndex.description;
  }

  images.forEach(function(img, index){
    img.addEventListener('click', changeContent, false);
  });

  changeContent.call(document.querySelector('#F55'));
})();

export default class Sliders {
  constructor(auto = true) {
    this.sliders = document.querySelectorAll('.slider');
    this.auto = auto;
    this.init();
  }

  init() {
    this.sliders.forEach(slider => {
      this.createSlider(slider);
    });
  }

  createSlider(slider) {
    if(!slider) return;
    const sliderItems = slider.querySelectorAll('.carousel-item');
    const btnIndicators = slider.querySelectorAll('.btnIndicator');
    var currentSlide = slider.querySelector('.carousel-item.active');
    var currentBtn = slider.querySelector('.btnIndicator.active');
    var currentIndex = Array.from(sliderItems).indexOf(currentSlide);
    let autoSlideInterval;

    const changeSlide = (index) => {
      sliderItems[currentIndex].classList.remove('active');
      currentBtn.classList.remove('active');
      sliderItems[index].classList.add('active');
      btnIndicators[index].classList.add('active');
      currentIndex = index;
      currentBtn = btnIndicators[index];
    };

    const startAutoSlide = () => {
      if (this.auto) {
        autoSlideInterval = setInterval(() => {
          let nextIndex = (currentIndex + 1) % sliderItems.length;
          changeSlide(nextIndex);
        }, 3000); // Change slide every 3 seconds
      }
    };

    const stopAutoSlide = () => {
      clearInterval(autoSlideInterval);
    };

    btnIndicators.forEach((btn, index) => {
      btn.addEventListener('click', () => {
        stopAutoSlide();
        changeSlide(index);
      });
    });

    slider.addEventListener('mouseover', stopAutoSlide);
    slider.addEventListener('mouseout', startAutoSlide);

    startAutoSlide();
  }
}
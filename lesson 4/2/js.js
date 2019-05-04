"use strict";

/**
 * @property {Object} settings Объект с настройками галереи.
 * @property {string} settings.previewSelector Селектор обертки для миниатюр галереи.
 * @property {string} settings.openedImageWrapperClass Класс для обертки открытой картинки.
 * @property {string} settings.openedImageClass Класс открытой картинки.
 * @property {string} settings.openedImageScreenClass Класс для ширмы открытой картинки.
 * @property {string} settings.openedImageCloseBtnClass Класс для картинки кнопки закрыть.
 * @property {string} settings.openedImageCloseBtnSrc Путь до картинки кнопки открыть.
 */
const bigGallery = {
  settings: {
    previewSelector: '.mySuperGallery',
    openedImageWrapperClass: 'galleryWrapper',
    openedImageClass: 'galleryWrapper__image',
    openedImageScreenClass: 'galleryWrapper__screen',
    openedImageCloseBtnClass: 'galleryWrapper__close',
    openedImageCloseBtnSrc: 'images/gallery/close.png',
    openedImageLeft: 'images/gallery/left.svg',
    openedImageRight: 'images/gallery/right.svg',
    openedImageLeftBtnClass: 'galleryWrapper__left',
    openedImageRightBtnClass: 'galleryWrapper__right',
    errorSrc: 'images/max/errorImg.jpeg',
  },

  /**
   * Инициализирует галерею, ставит обработчик события.
   * @param {Object} userSettings Объект настроек для галереи.
   */
  init(userSettings = {}) {
    // Записываем настройки, которые передал пользователь в наши настройки.
    Object.assign(this.settings, userSettings);

    // Находим элемент, где будут превью картинок и ставим обработчик на этот элемент,
    // при клике на этот элемент вызовем функцию containerClickHandler в нашем объекте
    // gallery и передадим туда событие MouseEvent, которое случилось.
    document
      .querySelector(this.settings.previewSelector)
      .addEventListener('click', event => this.containerClickHandler(event));
  },

  /**
   * Обработчик события клика для открытия картинки.
   * @param {MouseEvent} event Событие клики мышью.
   * @param {HTMLElement} event.target Целевой объект, куда был произведен клик.
   */
  containerClickHandler(event) {
    // Если целевой тег не был картинкой, то ничего не делаем, просто завершаем функцию.
    if (event.target.tagName !== 'IMG') {
      return;
    }
    // Открываем картинку с полученным из целевого тега (data-full_image_url аттрибут).
    this.openImage(event);
  },
  /**
   * Открывает картинку.
   * @param {string} event Ссылка на картинку, которую надо открыть.
   */
  openImage(event) {
    // Получаем контейнер для открытой картинки, в нем находим тег img и ставим ему нужный src.
    const src = event.target.dataset.full_image_url;
      console.log(src);
      this.getScreenContainer().querySelector(`.${this.settings.openedImageClass}`).src = src;
    this.player(event);
  },

  /**
   * Возвращает контейнер для открытой картинки, либо создает такой контейнер, если его еще нет.
   * @returns {Element}
   */
  getScreenContainer() {
    // Получаем контейнер для открытой картинки.
    const galleryWrapperElement = document.querySelector(`.${this.settings.openedImageWrapperClass}`);
    // Если контейнер для открытой картинки существует - возвращаем его.
    if (galleryWrapperElement) {
      return galleryWrapperElement;
    }

    // Возвращаем полученный из метода createScreenContainer контейнер.
    return this.createScreenContainer();
  },

  /**
   * Создает контейнер для открытой картинки.
   * @returns {HTMLElement}
   */
  createScreenContainer() {
    // Создаем сам контейнер-обертку и ставим ему класс.
    const galleryWrapperElement = document.createElement('div');
    galleryWrapperElement.classList.add(this.settings.openedImageWrapperClass);

    // Создаем контейнер занавеса, ставим ему класс и добавляем в контейнер-обертку.
    const galleryScreenElement = document.createElement('div');
    galleryScreenElement.classList.add(this.settings.openedImageScreenClass);
    galleryWrapperElement.appendChild(galleryScreenElement);

    // Создаем картинку для кнопки закрыть, ставим класс, src и добавляем ее в контейнер-обертку.
    const closeImageElement = new Image();
    closeImageElement.classList.add(this.settings.openedImageCloseBtnClass);
    closeImageElement.src = this.settings.openedImageCloseBtnSrc;
    closeImageElement.addEventListener('click', () => this.close());
    galleryWrapperElement.appendChild(closeImageElement);


    const leftImageElement = new Image();
    leftImageElement.classList.add(this.settings.openedImageLeftBtnClass);
    leftImageElement.src = this.settings.openedImageLeft;
    galleryWrapperElement.appendChild(leftImageElement);

    const PightImageElement = new Image();
    PightImageElement.classList.add(this.settings.openedImageRightBtnClass);
    PightImageElement.src = this.settings.openedImageRight;
    galleryWrapperElement.appendChild(PightImageElement);

    // Создаем картинку, которую хотим открыть, ставим класс и добавляем ее в контейнер-обертку.
    const image = new Image();
    image.onerror = () => this.errorURL(image);
    image.classList.add(this.settings.openedImageClass);
    galleryWrapperElement.appendChild(image);

    // Добавляем контейнер-обертку в тег body.
    document.body.appendChild(galleryWrapperElement);

    // Возвращаем добавленный в body элемент, наш контейнер-обертку.
    return galleryWrapperElement;
  },
  errorURL(el){
    el.src = this.settings.errorSrc;
  },
  player(event){
    const left = document.querySelector(`.${this.settings.openedImageLeftBtnClass}`);
    const right = document.querySelector(`.${this.settings.openedImageRightBtnClass}`);

    left.addEventListener('click',() => this.getPrevElement(this.settings.previewSelector, event));
    right.addEventListener('click', () => this.getNextElement(this.settings.previewSelector, event));
  },
  getPrevElement(previewSelector, event){
    const element = document.querySelector(previewSelector);
    for (let i = 0; i<element.children.length; i++) {
      if (element.children[i] === event.target) {
        this.close();
        if ((i - 1) < 0) {
          element.children[element.children.length-1].click();
        } else element.children[i-1].click();
      }
    }
  },
  getNextElement(previewSelector, event){
    const element = document.querySelector(previewSelector);
    for (let i = 0; i < element.children.length; i++) {
      if (element.children[i] === event.target) {
        this.close();
        if ((i + 1) >= element.children.length) {
          element.children[0].click();
        } else element.children[i+1].click();
      }
    }
  },

  /**
   * Закрывает (удаляет) контейнер для открытой картинки.
   */
  close() {
    document.querySelector(`.${this.settings.openedImageWrapperClass}`).remove();
  }
};
const gallery = {
    settings: {
        previewSelector: '.mySuperGallery',
        jsonFile: 'img.json',
        openedImageWrapperClass: 'galleryWrapper',
        openedImageClass: 'galleryWrapper__image',
        openedImageScreenClass: 'galleryWrapper__screen',
        openedImageCloseBtnClass: 'galleryWrapper__close',
        openedImageCloseBtnSrc: 'images/gallery/close.png',
        openedImageLeft: 'images/gallery/left.svg',
        openedImageRight: 'images/gallery/right.svg',
        openedImageLeftBtnClass: 'galleryWrapper__left',
        openedImageRightBtnClass: 'galleryWrapper__right',
        errorSrc: 'images/gallery/errorImg.jpeg',
    },

    /**
     * Инициализирует галерею, ставит обработчик события.
     * @param {Object} userSettings Объект настроек для галереи.
     */
    init(userSettings = {}) {
        // Записываем настройки, которые передал пользователь в наши настройки.
        Object.assign(this.settings, userSettings);
        this.render(this.settings.previewSelector,this.settings.jsonFile);
        bigGallery.init(this.settings);
    },
    render(className, json) {
        const parentEl = document.querySelector(`${className}`);
        fetch(json)
            .then(result => {
                return result.json();
            })
            .then(data => {
                for (const value of data) {
                    let img = new Image();
                    img.src = 'images/min/'+value.imageSrc;
                    img.dataset.full_image_url = 'images/max/' + value.bigImageSrc;
                    img.alt = value.alt;
                    parentEl.appendChild(img);
                }
            });
    }
};
// Инициализируем нашу галерею при загрузке страницы.
window.onload = () => gallery.init({previewSelector: '.galleryPreviewsContainer',jsonFile: 'image.json',});
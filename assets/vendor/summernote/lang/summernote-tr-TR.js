/*!
 * 
 * Super simple wysiwyg editor v0.8.18
 * https://summernote.org
 * 
 * 
 * Copyright 2013- Alan Hong. and other contributors
 * summernote may be freely distributed under the MIT license.
 * 
 * Date: 2020-05-20T18:09Z
 * 
 */
(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define([], factory);
	else {
		var a = factory();
		for(var i in a) (typeof exports === 'object' ? exports : root)[i] = a[i];
	}
})(window, function() {
return /******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 45);
/******/ })
/************************************************************************/
/******/ ({

/***/ 45:
/***/ (function(module, exports) {

(function ($) {
  $.extend($.summernote.lang, {
    'tr-TR': {
      font: {
        bold: 'Kal??n',
        italic: '??talik',
        underline: 'Alt?? ??izili',
        clear: 'Temizle',
        height: 'Sat??r y??ksekli??i',
        name: 'Yaz?? Tipi',
        strikethrough: '??st?? ??izili',
        subscript: 'Alt Simge',
        superscript: '??st Simge',
        size: 'Yaz?? tipi boyutu'
      },
      image: {
        image: 'Resim',
        insert: 'Resim ekle',
        resizeFull: 'Orjinal boyut',
        resizeHalf: '1/2 boyut',
        resizeQuarter: '1/4 boyut',
        floatLeft: 'Sola hizala',
        floatRight: 'Sa??a hizala',
        floatNone: 'Hizalamay?? kald??r',
        shapeRounded: '??ekil: Yuvarlat??lm???? K????e',
        shapeCircle: '??ekil: Daire',
        shapeThumbnail: '??ekil: K.Resim',
        shapeNone: '??ekil: Yok',
        dragImageHere: 'Buraya s??r??kleyin',
        dropImage: 'Resim veya metni b??rak??n',
        selectFromFiles: 'Dosya se??in',
        maximumFileSize: 'Maksimum dosya boyutu',
        maximumFileSizeError: 'Maksimum dosya boyutu a????ld??.',
        url: 'Resim ba??lant??s??',
        remove: 'Resimi Kald??r',
        original: 'Original'
      },
      video: {
        video: 'Video',
        videoLink: 'Video ba??lant??s??',
        insert: 'Video ekle',
        url: 'Video ba??lant??s???',
        providers: '(YouTube, Vimeo, Vine, Instagram, DailyMotion veya Youku)'
      },
      link: {
        link: 'Ba??lant??',
        insert: 'Ba??lant?? ekle',
        unlink: 'Ba??lant??y?? kald??r',
        edit: 'Ba??lant??y?? d??zenle',
        textToDisplay: 'G??r??nt??lemek i??in',
        url: 'Ba??lant?? adresi?',
        openInNewWindow: 'Yeni pencerede a??'
      },
      table: {
        table: 'Tablo',
        addRowAbove: 'Yukar?? sat??r ekle',
        addRowBelow: 'A??a???? sat??r ekle',
        addColLeft: 'Sola s??tun ekle',
        addColRight: 'Sa??a s??tun ekle',
        delRow: 'Sat??r?? sil',
        delCol: 'S??tunu sil',
        delTable: 'Tabloyu sil'
      },
      hr: {
        insert: 'Yatay ??izgi ekle'
      },
      style: {
        style: 'Bi??im',
        p: 'p',
        blockquote: 'Al??nt??',
        pre: '??nbi??imli',
        h1: 'Ba??l??k 1',
        h2: 'Ba??l??k 2',
        h3: 'Ba??l??k 3',
        h4: 'Ba??l??k 4',
        h5: 'Ba??l??k 5',
        h6: 'Ba??l??k 6'
      },
      lists: {
        unordered: 'Madde i??aretli liste',
        ordered: 'Numaral?? liste'
      },
      options: {
        help: 'Yard??m',
        fullscreen: 'Tam ekran',
        codeview: 'HTML Kodu'
      },
      paragraph: {
        paragraph: 'Paragraf',
        outdent: 'Girintiyi art??r',
        indent: 'Girintiyi azalt',
        left: 'Sola hizala',
        center: 'Ortaya hizala',
        right: 'Sa??a hizala',
        justify: 'Yasla'
      },
      color: {
        recent: 'Son renk',
        more: 'Daha fazla renk',
        background: 'Arka plan rengi',
        foreground: 'Yaz?? rengi',
        transparent: 'Seffafl??k',
        setTransparent: '??effafl?????? ayarla',
        reset: 'S??f??rla',
        resetToDefault: 'Varsay??lanlara s??f??rla'
      },
      shortcut: {
        shortcuts: 'K??sayollar',
        close: 'Kapat',
        textFormatting: 'Yaz?? bi??imlendirme',
        action: 'Eylem',
        paragraphFormatting: 'Paragraf bi??imlendirme',
        documentStyle: 'Bi??im',
        extraKeys: '??lave anahtarlar'
      },
      help: {
        'insertParagraph': 'Paragraf ekler',
        'undo': 'Son komudu geri al??r',
        'redo': 'Son komudu yineler',
        'tab': 'Girintiyi art??r??r',
        'untab': 'Girintiyi azalt??r',
        'bold': 'Kal??n yazma stilini ayarlar',
        'italic': '??talik yazma stilini ayarlar',
        'underline': 'Alt?? ??izgili yazma stilini ayarlar',
        'strikethrough': '??st?? ??izgili yazma stilini ayarlar',
        'removeFormat': 'Bi??imlendirmeyi temizler',
        'justifyLeft': 'Yaz??y?? sola hizalar',
        'justifyCenter': 'Yaz??y?? ortalar',
        'justifyRight': 'Yaz??y?? sa??a hizalar',
        'justifyFull': 'Yaz??y?? her iki tarafa yazlar',
        'insertUnorderedList': 'Madde i??aretli liste ekler',
        'insertOrderedList': 'Numaral?? liste ekler',
        'outdent': 'Aktif paragraf??n girintisini azalt??r',
        'indent': 'Aktif paragraf??n girintisini art??r??r',
        'formatPara': 'Aktif blo??un bi??imini paragraf (p) olarak de??i??tirir',
        'formatH1': 'Aktif blo??un bi??imini ba??l??k 1 (h1) olarak de??i??tirir',
        'formatH2': 'Aktif blo??un bi??imini ba??l??k 2 (h2) olarak de??i??tirir',
        'formatH3': 'Aktif blo??un bi??imini ba??l??k 3 (h3) olarak de??i??tirir',
        'formatH4': 'Aktif blo??un bi??imini ba??l??k 4 (h4) olarak de??i??tirir',
        'formatH5': 'Aktif blo??un bi??imini ba??l??k 5 (h5) olarak de??i??tirir',
        'formatH6': 'Aktif blo??un bi??imini ba??l??k 6 (h6) olarak de??i??tirir',
        'insertHorizontalRule': 'Yatay ??izgi ekler',
        'linkDialog.show': 'Ba??lant?? ayar kutusunu g??sterir'
      },
      history: {
        undo: 'Geri al',
        redo: 'Yinele'
      },
      specialChar: {
        specialChar: '??ZEL KARAKTERLER',
        select: '??zel Karakterleri se??in'
      }
    }
  });
})(jQuery);

/***/ })

/******/ });
});;
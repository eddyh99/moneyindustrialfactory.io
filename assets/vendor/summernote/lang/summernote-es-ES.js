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
/******/ 	return __webpack_require__(__webpack_require__.s = 15);
/******/ })
/************************************************************************/
/******/ ({

/***/ 15:
/***/ (function(module, exports) {

(function ($) {
  $.extend($.summernote.lang, {
    'es-ES': {
      font: {
        bold: 'Negrita',
        italic: 'Cursiva',
        underline: 'Subrayado',
        clear: 'Eliminar estilo de letra',
        height: 'Altura de l??nea',
        name: 'Tipo de letra',
        strikethrough: 'Tachado',
        subscript: 'Sub??ndice',
        superscript: 'Super??ndice',
        size: 'Tama??o de la fuente',
        sizeunit: 'Unidad del tama??o de letra'
      },
      image: {
        image: 'Imagen',
        insert: 'Insertar imagen',
        resizeFull: 'Redimensionar a tama??o completo',
        resizeHalf: 'Redimensionar a la mitad',
        resizeQuarter: 'Redimensionar a un cuarto',
        resizeNone: 'Tama??o original',
        floatLeft: 'Flotar a la izquierda',
        floatRight: 'Flotar a la derecha',
        floatNone: 'No flotar',
        shapeRounded: 'Forma: Redondeado',
        shapeCircle: 'Forma: C??rculo',
        shapeThumbnail: 'Forma: Miniatura',
        shapeNone: 'Forma: Ninguna',
        dragImageHere: 'Arrastre una imagen o texto aqu??',
        dropImage: 'Suelte una imagen o texto',
        selectFromFiles: 'Seleccione un fichero',
        maximumFileSize: 'Tama??o m??ximo del fichero',
        maximumFileSizeError: 'Superado el tama??o m??ximo de fichero.',
        url: 'URL de la imagen',
        remove: 'Eliminar la imagen',
        original: 'Original'
      },
      video: {
        video: 'V??deo',
        videoLink: 'Enlace del v??deo',
        insert: 'Insertar un v??deo',
        url: 'URL del v??deo',
        providers: '(YouTube, Vimeo, Vine, Instagram, DailyMotion o Youku)'
      },
      link: {
        link: 'Enlace',
        insert: 'Insertar un enlace',
        unlink: 'Quitar el enlace',
        edit: 'Editar',
        textToDisplay: 'Texto a mostrar',
        url: '??A qu?? URL lleva este enlace?',
        openInNewWindow: 'Abrir en una nueva ventana',
        useProtocol: 'Usar el protocolo predefinido'
      },
      table: {
        table: 'Tabla',
        addRowAbove: 'A??adir una fila encima',
        addRowBelow: 'A??adir una fila debajo',
        addColLeft: 'A??adir una columna a la izquierda',
        addColRight: 'A??adir una columna a la derecha',
        delRow: 'Borrar la fila',
        delCol: 'Borrar la columna',
        delTable: 'Borrar la tabla'
      },
      hr: {
        insert: 'Insertar una l??nea horizontal'
      },
      style: {
        style: 'Estilo',
        p: 'Normal',
        blockquote: 'Cita',
        pre: 'C??digo',
        h1: 'T??tulo 1',
        h2: 'T??tulo 2',
        h3: 'T??tulo 3',
        h4: 'T??tulo 4',
        h5: 'T??tulo 5',
        h6: 'T??tulo 6'
      },
      lists: {
        unordered: 'Lista',
        ordered: 'Lista numerada'
      },
      options: {
        help: 'Ayuda',
        fullscreen: 'Pantalla completa',
        codeview: 'Ver el c??digo fuente'
      },
      paragraph: {
        paragraph: 'P??rrafo',
        outdent: 'Reducir la sangr??a',
        indent: 'Aumentar la sangr??a',
        left: 'Alinear a la izquierda',
        center: 'Centrar',
        right: 'Alinear a la derecha',
        justify: 'Justificar'
      },
      color: {
        recent: '??ltimo color',
        more: 'M??s colores',
        background: 'Color de fondo',
        foreground: 'Color del texto',
        transparent: 'Transparente',
        setTransparent: 'Establecer transparente',
        reset: 'Restablecer',
        resetToDefault: 'Restablecer a los valores predefinidos',
        cpSelect: 'Seleccionar'
      },
      shortcut: {
        shortcuts: 'Atajos de teclado',
        close: 'Cerrar',
        textFormatting: 'Formato de texto',
        action: 'Acci??n',
        paragraphFormatting: 'Formato de p??rrafo',
        documentStyle: 'Estilo de documento',
        extraKeys: 'Teclas adicionales'
      },
      help: {
        insertParagraph: 'Insertar un p??rrafo',
        undo: 'Deshacer la ??ltima acci??n',
        redo: 'Rehacer la ??ltima acci??n',
        tab: 'Tabular',
        untab: 'Eliminar tabulaci??n',
        bold: 'Establecer estilo negrita',
        italic: 'Establecer estilo cursiva',
        underline: 'Establecer estilo subrayado',
        strikethrough: 'Establecer estilo tachado',
        removeFormat: 'Limpiar estilo',
        justifyLeft: 'Alinear a la izquierda',
        justifyCenter: 'Alinear al centro',
        justifyRight: 'Alinear a la derecha',
        justifyFull: 'Justificar',
        insertUnorderedList: 'Insertar lista',
        insertOrderedList: 'Insertar lista numerada',
        outdent: 'Reducir sangr??a del p??rrafo',
        indent: 'Aumentar sangr??a del p??rrafo',
        formatPara: 'Cambiar el formato del bloque actual a p??rrafo (etiqueta P)',
        formatH1: 'Cambiar el formato del bloque actual a H1',
        formatH2: 'Cambiar el formato del bloque actual a H2',
        formatH3: 'Cambiar el formato del bloque actual a H3',
        formatH4: 'Cambiar el formato del bloque actual a H4',
        formatH5: 'Cambiar el formato del bloque actual a H5',
        formatH6: 'Cambiar el formato del bloque actual a H6',
        insertHorizontalRule: 'Insertar una l??nea horizontal',
        'linkDialog.show': 'Mostrar el panel de enlaces'
      },
      history: {
        undo: 'Deshacer',
        redo: 'Rehacer'
      },
      specialChar: {
        specialChar: 'CARACTERES ESPECIALES',
        select: 'Seleccionar caracteres especiales'
      },
      output: {
        noSelection: '??No ha seleccionado nada!'
      }
    }
  });
})(jQuery);

/***/ })

/******/ });
});;